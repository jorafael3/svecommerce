<?php
/**
 * 2017 Manfredi Petruso
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to manfredi.petruso@fabvla.com so we can send you a copy immediately.
 *
 *
 *  @author    Manfredi Petruso <manfredi.petruso@fabvla.com>
 *  @copyright  2017 Manfredi Petruso
 *  @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

$class_folder = dirname(__FILE__).'/../classes/';
require_once($class_folder.'FabProgressiveFile.php');
require_once('FFPUtils.php');

class CatalogManager {

    public $context;
    public $langId = 1;
    public $exportEmptyDesc = false;
    public $descriptionFieldId;
    public $currencyIso = 'EUR';
    public $categoryId = null;
    public $countryId = 1;
    public $shopId = 1;
    public $shopGroupId = 1;
    public $catalogInfo = 0;

    private $moduleStoreDir;
    private $_DESCRIPTION = 1;
    private $_SHORT_DESCRIPTION = 2;
    private $_NAME = 3;

    private $memoryStream = null;
    private $fileStream = null;

    private $progressiveFile = null;

    private $conf = array();


    public function __construct (
        $shopId,
        $shopGroupId,
        $langId,
        $countryId,
        $currencyIso,
        $categoryId,
        $exportEmptyDesc = false,
        $descriptionFieldId = 1,
        $catalogInfo = 0
    ) {
        $this->shopGroupId = $shopGroupId;
        $this->shopId = $shopId;
        $this->langId = $langId;
        $this->countryId = $countryId;
        $this->currencyIso = $currencyIso;
        $this->categoryId = $categoryId;
        $this->currencyIso = $currencyIso;
        $this->exportEmptyDesc = $exportEmptyDesc;
        $this->descriptionFieldId = $descriptionFieldId;
        $this->catalogInfo = $catalogInfo;

        $this->conf['module_store_dir'] = _PS_MODULE_DIR_.'fabfacebookpixel/catalog/';
        $this->conf['tax_included'] = (bool)Configuration::get('FAB_PIXEL_TAX_INCLUDED', null, $this->shopGroupId, $this->shopId);
        $this->conf['is_export_combinations'] = (bool)Configuration::get('FAB_PIXEL_COMBINATIONS', null, $this->shopGroupId, $this->shopId);
        $this->conf['color_mapping'] = (int)Configuration::get('FAB_PIXEL_COLOR_MAPPING', null, $this->shopGroupId, $this->shopId);
        $this->conf['size_mapping'] = (int)Configuration::get('FAB_PIXEL_SIZE_MAPPING', null, $this->shopGroupId, $this->shopId);
        $this->conf['gender_mapping'] = (int)Configuration::get('FAB_PIXEL_GENDER_MAPPING', null, $this->shopGroupId, $this->shopId);
        $this->conf['material_mapping'] = (int)Configuration::get('FAB_PIXEL_MATERIAL_MAPPING', null, $this->shopGroupId, $this->shopId);
        $this->conf['pattern_mapping'] = (int)Configuration::get('FAB_PIXEL_PATTERN_MAPPING', null, $this->shopGroupId, $this->shopId);
        $this->conf['image_type_id'] = Configuration::get('FAB_FACEBOOK_PIXEL_IMAGE_TYPE', null, $this->shopGroupId, $this->shopId);
    }

    public function getCsvPath() {
        $langIso = Language::getIsoById($this->langId);
        $countryIso = Country::getIsoById($this->countryId);
        $categoryIdString = '';
        if (!empty($this->categoryId)) {
            $categoryIdString .= implode('_', $this->categoryId);
        }

        return $this->conf['module_store_dir'].'catalogexport'
            .($this->shopId?'_'.(int)$this->shopId:'')
            .($langIso?'_'.$langIso:'')
            .($this->currencyIso?'_'.$this->currencyIso:'')
            .($countryIso?'_'.$countryIso:'')
            .($this->categoryId?'_'.$categoryIdString:'')
            .($this->catalogInfo!=0?'_'.$this->catalogInfo:'')
            .'.csv';
    }


    public function generateProductCSV($text_delimiter = '"', $store = false, $id_category = false)
    {

        $currentFileCount = 0;
        $productLimiter = 200;
        $currentProduct = null;

        $byStep = Configuration::get('FAB_FACEBOOK_CHUNK_ACTIVE', null, $this->shopGroupId, $this->shopId) && $store;
        $byStepQty = Configuration::get('FAB_FACEBOOK_CHUNK_QTY', null, $this->shopGroupId, $this->shopId);

        $specific_price_output = null;


        if (FFPUtils::isPs6()) {
            $imageTypeString = ImageType::getFormatedName('home');
        } else {
            $imageTypeString = ImageType::getFormattedName('home');
        }

        if ($this->conf['image_type_id'] == 0) {
            $imageTypeString = null;
        } else {
            $imageTypeObject = new ImageType($this->conf['image_type_id']);
            $imageTypeString = $imageTypeObject->name;
        }
        if (ob_get_level() && ob_get_length() > 0) {
            ob_clean();
        }

        $currencyId = Currency::getIdByIsoCode($this->currencyIso);

        ob_start();

        if ($store) {
            $this->progressiveFile = new FabProgressiveFile($this->getCsvPath());
            if ($this->progressiveFile->isLocked()) {
                die('Another process is writing the file.');
            }
            $this->fileStream = &$this->progressiveFile->getFileStream();
            $this->progressiveFile->lock();
            $currentFileCount = (int)$this->progressiveFile->countLines();
            // Check if the file is empty
            if ($currentFileCount != 0) {
                $currentProduct = $this->progressiveFile->getLatestProduct();
            }
        } else {
            $this->memoryStream = fopen('php://output', 'wb');
            header('Content-type: text/csv');
            header('Content-Type: application/force-download; charset=UTF-8');
            header('Cache-Control: no-store, no-cache');
            header('Content-disposition: attachment; filename="fb_product_catalog_'.date('Y-m-d_His').'.csv"');
        }


        $nextStart = null;

        $productCount = (int)self::getProductsCount(1, $this->shopId, $this->categoryId);
        $productLast = self::getLatestProductInCatalog(1, $this->shopId, $this->categoryId);

        if ($productLast == $currentProduct) {
            $stat = fstat($this->fileStream);
            ftruncate($this->fileStream, $stat['size']-1);
            $this->progressiveFile->close();
            $this->progressiveFile->unlock();
            die("Storage completed.");
        }

        if ($byStepQty >= $productCount) {
            $byStep = false;
        }

        $nextStart = $currentProduct;

        $headers = $this->getFBCsvHeaders();

        if ($store) {
            if ($currentFileCount == 0) {
                fputcsv($this->fileStream, $headers, ',', $text_delimiter);
            }
        } else {
            fputcsv($this->memoryStream, $headers, ',', $text_delimiter);
        }

        if ($byStep) {
            $productLimiter = $byStepQty;
        }

        $exceedingProducts = $productCount%$productLimiter;
        $multipliers = intval($productCount/$productLimiter);

        $cycles = $multipliers;
        
        if ($exceedingProducts > 0) {
            $cycles = $multipliers + 1;
        }

        if ($byStep) {
            $cycles = 1;
        }

        $content = array();
        $i = 1;

        while ($i <= $cycles) {

            if ($i > $multipliers) {
                $currentOffset = $exceedingProducts;
            } else {
                $currentOffset = $productLimiter;
            }

            $productList = $this->getProductList($nextStart, $currentOffset);

            foreach ($productList as $product) {
                // Reset Security Content for Google Category Recursion
                FFPUtils::initUtils();
                $productStatus = FFPUtils::getProductStatus($product["id_product"], $this->shopId);
                if ($productStatus) {
                    continue;
                }
                //Setting up useful variable for csv generation
                $image = Image::getCover($product["id_product"]);
                // Get Default Attribute
                $idProduct = $product["id_product"];
                $otherImages = Image::getImages($this->langId, $idProduct);
                $availability ="In Stock";
                $inventory = StockAvailable::getQuantityAvailableByProduct($idProduct, null, $this->shopId);
                $protocol = Tools::usingSecureMode() ? 'https://' : 'http://';
                $link = new Link(null, $protocol);
                $product_type = $this->getProductCategoryPath($idProduct, $this->langId);
                $productCategoryRewrite = Category::getLinkRewrite($product['id_category_default'], $this->langId);

                $productDescription = '';

                if (!empty($this->descriptionFieldId)) {
                    if ($this->descriptionFieldId == $this->_DESCRIPTION) {
                        $productDescription = $product['description'];
                        if (empty($productDescription)) {
                            $productDescription = $product['description_short'];
                            if (empty($productDescription)) {
                                $productDescription = $product['name'];
                            }
                        }
                    }
                    else if ($this->descriptionFieldId == $this->_SHORT_DESCRIPTION) {
                        $productDescription = $product['description_short'];
                        if (empty($productDescription)) {
                            $productDescription = $product['name'];
                        }
                    }
                    else if ($this->descriptionFieldId == $this->_NAME) {
                        $productDescription = $product['name'];
                    }
                } else {
                    $productDescription = $product['description'];
                }

                $productObj = new Product($idProduct);

                if (is_array($productObj->link_rewrite)) {
                    $alias = $productObj->link_rewrite[$this->langId];
                } else {
                    $alias = $productObj->link_rewrite;
                }

                $manufacturer = $product["manufacturer_name"];
                if (empty($manufacturer)) {
                    $manufacturer = Configuration::get('FAB_PIXEL_BRAND_OVERRIDE', null, $this->shopGroupId, $this->shopId);
                }

                $mpn = '';
                $gtin = (empty($productObj->ean13))?$productObj->upc:$productObj->ean13;

                if (!FFPUtils::isPsLowerThan('1.7.7.0')) {
                    $mpn = $productObj->mpn;
                }

                $imagePath = $link->getImageLink(
                        $product["link_rewrite"],
                        $image['id_product'].'-'.$image['id_image'],
                        $imageTypeString
                    );

                $otherImagesPathString = '';
                foreach ($otherImages as $otherImage) {
                    $otherImagesPathString .=  $link->getImageLink(
                            $product["link_rewrite"],
                            $otherImage['id_product'].'-'.$otherImage['id_image'],
                            $imageTypeString
                        );
                    $otherImagesPathString .= ",";
                }

                $google_definition = FFPUtils::getExternalCategoryDefinition($product["id_category_default"], $this->langId, "go");
                $facebook_definition = FFPUtils::getExternalCategoryDefinition($product["id_category_default"], $this->langId, "fb");

                // Get features to build custom column
                $feature_array_string_len = 0;
                $features_array = array();
                $features = $productObj->getFrontFeatures($this->langId);
                foreach ($features as $feature) {
                    $feature_item = $feature['name'].":".$feature['value'];
                    $feature_item_len = strlen($feature_item);
                    $feature_array_string_len += $feature_item_len;
                    if ($feature_array_string_len < 100) {
                        $features_array[] = $feature['name'] . ":" . $feature['value'];
                    } else {
                        break;
                    }
                }
                $features_array_string = implode(",", $features_array);

                if ((!empty($productDescription) || $this->exportEmptyDesc)) {
                    $productRichDescription = $productDescription;
                    $productDescription = strip_tags(html_entity_decode($productDescription));

                    $is_available_out_of_stock = false;
                    if ($productObj->isAvailableWhenOutOfStock(StockAvailable::outOfStock($idProduct))) {
                        $is_available_out_of_stock = true;
                    }

                    if ($inventory > 0 || ($inventory <= 0 && $is_available_out_of_stock)) {
                        $availability = "In Stock";
                        if ($inventory <=0) {
                            $inventory = 1;
                        }
                    } else {
                        $availability = "Out of Stock";
                    }

                    $productCombinations = $productObj->getAttributeCombinations($this->langId, true);

                    if ($this->conf['is_export_combinations'] && !empty($productCombinations) && count($productCombinations)>0) {
                        $combinations = array();
                        foreach ($productCombinations as $productCombination) {
                            $combinations[$productCombination['id_product_attribute']][$productCombination['id_attribute_group']]['value'] = $productCombination['attribute_name'];
                            $combinations[$productCombination['id_product_attribute']][$productCombination['id_attribute_group']]['label'] = $productCombination['group_name'];
                            $combinations[$productCombination['id_product_attribute']]['id_product_attribute'] = $productCombination['id_product_attribute'];
                            $combinations[$productCombination['id_product_attribute']]['gtin']= (!empty($productCombination['ean13']))?$productCombination['ean13']:$productCombination['upc'];

                            if (empty($combinations[$productCombination['id_product_attribute']]['gtin'])) {
                                $combinations[$productCombination['id_product_attribute']]['gtin'] = $gtin;
                            }
                            if (!FFPUtils::isPsLowerThan('1.7.7.0')) {
                                $combinations[$productCombination['id_product_attribute']]['mpn'] =  (!empty($productCombination['mpn']))?$productCombination['mpn']:$mpn;
                            } else {
                                $combinations[$productCombination['id_product_attribute']]['mpn'] = '';
                            }
                        }

                        foreach ($combinations as $combination) {
                            // Rewrite images
                            $idProductAttribute = $combination['id_product_attribute'];
                            $gtin =  $combination['gtin'];
                            $mpn =  $combination['mpn'];
                            $otherImages = Image::getImages($this->langId, $idProduct, $idProductAttribute);
                            if (count($otherImages) == 0) {
                                $otherImages = Image::getImages($this->langId, $idProduct);
                            }
                            $sales_effective_date = $this->generateSalesEffectiveDate();
                            $inventory = StockAvailable::getQuantityAvailableByProduct($idProduct, $idProductAttribute, $this->shopId);

                            if ($inventory > 0 || ($inventory <= 0 && $is_available_out_of_stock)) {
                                $availability = "In Stock";
                                if ($inventory <=0) {
                                    $inventory = 1;
                                }
                            } else {
                                $availability = "Out of Stock";
                            }

                            $otherImagesPathString = '';
                            foreach ($otherImages as $otherImage) {
                                $otherImagesPathString .=  $link->getImageLink(
                                        $product["link_rewrite"],
                                        $otherImage['id_product'].'-'.$otherImage['id_image'],
                                        $imageTypeString
                                    );
                                $otherImagesPathString .= ",";
                            }

                            $url = $link->getProductLink($productObj, $alias, $productCategoryRewrite, null, $this->langId, $this->shopId, $idProductAttribute);

                            $product_price = number_format((float)Product::priceCalculation(
                                $this->shopId,
                                $idProduct,
                                $idProductAttribute,
                                $this->countryId,
                                null,
                                null,
                                $currencyId,
                                null,
                                1,
                                $this->conf['tax_included'],
                                6,
                                false,
                                false,
                                true,
                                $specific_price_output,
                                false,
                                0,
                                true,
                                null,
                                1,
                                null
                            ), 2, '.', '');

                            $product_sales_price = number_format((float)Product::priceCalculation(
                                $this->shopId,
                                $idProduct,
                                $idProductAttribute,
                                $this->countryId,
                                null,
                                null,
                                $currencyId,
                                1,
                                1,
                                $this->conf['tax_included'],
                                6,
                                false,
                                true,
                                true,
                                $specific_price_output,
                                true,
                                0,
                                true,
                                null,
                                1,
                                null
                            ), 2, '.', '');

                            if ($product_price == $product_sales_price) {
                                $product_sales_price = '';
                                $sales_effective_date = '';
                            }

                            if ($this->catalogInfo == 2) {
                                $content = array();
                                $content[] = $idProduct.'-'.$idProductAttribute;
                                $content[] = $product["name"];
                                $content[] = $productDescription;
                                $content[] = $productRichDescription;
                                $content[] = $google_definition;
                                $content[] = $facebook_definition;
                                $content[] = $product_type;
                                $content[] = $url;
                                $content[] = $this->langIsoMapping[Language::getIsoById($this->langId)];
                            } elseif ($this->catalogInfo == 1) {
                                $content = array();
                                $content[] = $idProduct.'-'.$idProductAttribute;
                                $content[] = $product_price?$product_price.' '.$this->currencyIso:'';
                                $content[] = $product_sales_price?$product_sales_price.' '.$this->currencyIso:'';
                                $content[] = Country::getIsoById($this->countryId);
                                $content[] = $url;
                            }
                            else {
                                $content = array();
                                $content[] = $idProduct.'-'.$idProductAttribute;
                                $content[] = $product["name"];
                                array_push($content, '', '', '', '', '', '', '', '', '');
                                $content[] = $productDescription;
                                $content[] = $productRichDescription;
                                $content[] = $google_definition;
                                $content[] = $facebook_definition;
                                $content[] = $product_type;
                                $content[] = $url;
                                $content[] = $imagePath;
                                $content[] = $otherImagesPathString;
                                $content[] = $product["condition"];
                                $content[] = $availability;
                                $content[] = $product_price;
                                $content[] = $product_sales_price;
                                $content[] = $sales_effective_date;
                                $content[] = $gtin;
                                $content[] = $manufacturer;
                                $content[] = $inventory;
                                $content[] = $mpn;
                                array_push($content,  '', '');
                                $content[] = $features_array_string;
                                $content[] = $idProduct;
                                $content[] = FFPUtils::getMappedAttribute($combination, $idProduct, FFPUtils::FAB_PIXEL_COLOR_MAPPING, $this->shopId);
                                $content[] = FFPUtils::getMappedAttribute($combination, $idProduct, FFPUtils::FAB_PIXEL_SIZE_MAPPING, $this->shopId);
                                $content[] = FFPUtils::getMappedAttribute($combination, $idProduct, FFPUtils::FAB_PIXEL_GENDER_MAPPING, $this->shopId);
                                $content[] = FFPUtils::getMappedAttribute($combination, $idProduct, FFPUtils::FAB_PIXEL_MATERIAL_MAPPING, $this->shopId);
                                $content[] = FFPUtils::getMappedAttribute($combination, $idProduct, FFPUtils::FAB_PIXEL_PATTERN_MAPPING, $this->shopId);
                                $content[] = $this->renderVariants($combination);
                            }
                            if (isset($content)) {
                                if (sizeof($content)) {
                                    if ($store) {
                                        fputcsv($this->fileStream, $content, ',', $text_delimiter);
                                    } else {
                                        fputcsv($this->memoryStream, $content, ',', $text_delimiter);
                                    }

                                }
                            }
                        }
                    } else {
                        $url = $link->getProductLink($productObj, $alias, $productCategoryRewrite, null, $this->langId, $this->shopId);
                        $sales_effective_date = $this->generateSalesEffectiveDate();
                        $product_price = number_format((float)Product::priceCalculation(
                            $this->shopId,
                            $idProduct,
                            null,
                            $this->countryId,
                            null,
                            null,
                            $currencyId,
                            null,
                            1,
                            $this->conf['tax_included'],
                            6,
                            false,
                            false,
                            true,
                            $specific_price_output,
                            false,
                            0,
                            true,
                            null,
                            1,
                            null
                        ), 2, '.', '');

                        $product_sales_price = number_format((float)Product::priceCalculation(
                            $this->shopId,
                            $idProduct,
                            null,
                            $this->countryId,
                            null,
                            null,
                            $currencyId,
                            1,
                            1,
                            $this->conf['tax_included'],
                            6,
                            false,
                            true,
                            true,
                            $specific_price_output,
                            true,
                            0,
                            true,
                            null,
                            1,
                            null
                        ), 2, '.', '');

                        if ($product_price == $product_sales_price) {
                            $product_sales_price = '';
                            $sales_effective_date = '';
                        }

                        if ($this->catalogInfo == 2) {
                            $content = array();
                            $content[] = $idProduct;
                            $content[] = $product["name"];
                            $content[] = $productDescription;
                            $content[] = $productRichDescription;
                            $content[] = $google_definition;
                            $content[] = $facebook_definition;
                            $content[] = $product_type;
                            $content[] = $url;
                            $content[] = $this->langIsoMapping[Language::getIsoById($this->langId)];
                        } elseif ($this->catalogInfo == 1) {
                            $content = array();
                            $content[] = $idProduct;
                            $content[] = $product_price?$product_price.' '.$this->currencyIso:'';
                            $content[] = $product_sales_price?$product_sales_price.' '.$this->currencyIso:'';
                            $content[] = Country::getIsoById($this->countryId);
                            $content[] = $url;
                        }
                        else {
                            $content = array();
                            $content[] = $idProduct;
                            $content[] = $product["name"];
                            array_push($content, '', '', '', '', '', '', '', '', '');
                            $content[] = $productDescription;
                            $content[] = $productRichDescription;
                            $content[] = $google_definition;
                            $content[] = $facebook_definition;
                            $content[] = $product_type;
                            $content[] = $url;
                            $content[] = $imagePath;
                            $content[] = $otherImagesPathString;
                            $content[] = $product["condition"];
                            $content[] = $availability;
                            $content[] = $product_price;
                            $content[] = $product_sales_price;
                            $content[] = $sales_effective_date;
                            $content[] = $gtin;
                            $content[] = $manufacturer;
                            $content[] = $inventory;
                            $content[] = $mpn;
                            array_push($content,  '', '');
                            $content[] = $features_array_string;
                            array_push($content,'', '', '', '', '', '','');
                        }
                        if (isset($content)) {
                            if (sizeof($content)) {
                                if ($store) {
                                    fputcsv($this->fileStream, $content, ',', $text_delimiter);
                                } else {
                                    fputcsv($this->memoryStream, $content, ',', $text_delimiter);
                                }

                            }
                        }
                    }
                }
            }
            $nextStart = $idProduct;
            $i++;
        }

        if ($store) {
            if (!$byStep) {
                $stat = fstat($this->fileStream);
                ftruncate($this->fileStream, $stat['size']-1);
                $this->progressiveFile->close();
                $this->progressiveFile->unlock();
                die("Storage completed.");
            } else {
                $this->progressiveFile->unlock();
                die("Chunk stored.");
            }

        } else {
            @fclose($this->memoryStream);
        }

        die();
        ob_end_clean();
    }


    protected function renderVariants($combination) {

        $renderedVariants = '';

        if (empty($combination)) {
            return '';
        }

        $combinationReduced = FFPUtils::getCombinationReduced($combination, $this->shopId);

        $i = 0;
        $len = count($combinationReduced);

        foreach ($combinationReduced as $key => $item) {
            if (!empty($item['label'])) {
                $allAttributesFlat = '';

                $valueNormalized  = str_replace(",", ".", $item['value']);

                $renderedVariants .= $item['label'].':'.$allAttributesFlat.$valueNormalized;
                if ($i < $len - 1) {
                    $renderedVariants .= ',';
                }
                $i++;
            }
        }
        return $renderedVariants;
    }

    protected static function getProductsCount(
        $only_active,
        $id_shop,
        $id_category
    ) {

        $count = 0;
        $id_category_string = '';
        if (!empty($id_category)) {
            $id_category_string = implode(',', $id_category);
        }
        $sql = 'SELECT count(*) AS count FROM (SELECT p.* FROM '._DB_PREFIX_.'product p LEFT JOIN '._DB_PREFIX_.'product_shop AS ps ON ps.id_product = p.id_product '.($id_category?'LEFT JOIN `'._DB_PREFIX_.'category_product` cp ON (cp.id_product = p.id_product)':'').' WHERE ps.active = '.$only_active.($id_category?' AND cp.id_category IN ('.pSQL($id_category_string).')':'').'  AND id_shop = '.$id_shop.'  AND ps.`visibility` IN ("both", "catalog") GROUP BY p.id_product) AS count';
        $count = Db::getInstance()->getRow($sql);

        return $count['count'];
    }

    protected static function getLatestProductInCatalog(
        $only_active,
        $id_shop,
        $id_category
    ) {
        $id_category_string = '';
        if (!empty($id_category)) {
            $id_category_string = implode(',', $id_category);
        }
        $sql = 'SELECT p.id_product FROM '._DB_PREFIX_.'product p LEFT JOIN '._DB_PREFIX_.'product_shop AS ps ON ps.id_product = p.id_product '.($id_category?'LEFT JOIN `'._DB_PREFIX_.'category_product` cp ON (cp.id_product = p.id_product)':'').' WHERE ps.active = '.$only_active.($id_category?' AND cp.id_category IN ('.pSQL($id_category_string).')':'').'  AND id_shop = '.$id_shop.'  AND ps.`visibility` IN ("both", "catalog") GROUP BY p.id_product ORDER BY p.id_product DESC';
        $rows = Db::getInstance()->executeS($sql);
        return $rows[0]['id_product'];
    }

    /**
     * Get all available products
     *
     * @param int $id_lang Language id
     * @param int $start Start number
     * @param int $limit Number of products to return
     * @param string $order_by Field for ordering
     * @param string $order_way Way for ordering (ASC or DESC)
     * @return array Products details
     */
    protected static function getProducts(
        $id_lang,
        $id_shop,
        $startId,
        $limit,
        $order_by,
        $order_way,
        $id_category = false,
        $only_active = false,
        Context $context = null
    ) {
        if (!$context) {
            $context = Context::getContext();
        }

        $front = true;

        if (!$id_shop) {
            $id_shop = (int)$context->shop->id;
        }

        $id_category_string = '';

        if (!empty($id_category)) {
            $id_category_string = implode(',', $id_category);
        }

        if (!Validate::isOrderBy($order_by) || !Validate::isOrderWay($order_way)) {
            die(Tools::displayError());
        }
        if ($order_by == 'id_product' || $order_by == 'price' || $order_by == 'date_add' || $order_by == 'date_upd') {
            $order_by_prefix = 'p';
        } elseif ($order_by == 'name') {
            $order_by_prefix = 'pl';
        } elseif ($order_by == 'position') {
            $order_by_prefix = 'c';
        }

        if (strpos($order_by, '.') > 0) {
            $order_by = explode('.', $order_by);
            $order_by_prefix = $order_by[0];
            $order_by = $order_by[1];
        }


        $sql = 'SELECT p.*, pl.*, m.`name` AS manufacturer_name FROM '._DB_PREFIX_.'product p LEFT JOIN '._DB_PREFIX_.'product_shop AS ps ON ps.id_product = p.id_product LEFT JOIN `'._DB_PREFIX_.'manufacturer` m ON (m.`id_manufacturer` = p.`id_manufacturer`) '.($id_category?'LEFT JOIN `'._DB_PREFIX_.'category_product` cp ON (cp.id_product = p.id_product)':'').' LEFT JOIN `'._DB_PREFIX_.'product_lang` pl ON (p.`id_product` = pl.`id_product`) WHERE ps.active = '.$only_active.($id_category?' AND cp.id_category IN ('.pSQL($id_category_string).')':'').' AND ps.id_shop = '.$id_shop.' AND pl.id_shop = '.$id_shop.' AND pl.id_lang = '.$id_lang.' AND ps.`visibility` IN ("both", "catalog")'.($startId > 0 ? ' AND p.id_product > '.$startId : '').' GROUP BY p.id_product ORDER BY p.id_product ASC'.($limit > 0 ? ' LIMIT '.(int)$limit : '');

        $rq = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
        if ($order_by == 'price') {
            Tools::orderbyPrice($rq, $order_way);
        }

        foreach ($rq as &$row) {
            $row = Product::getTaxesInformations($row);
        }
        return ($rq);
    }



    protected function getProductList($startId, $offset)
    {
        $productList = null;
        $productList = self::getProducts(
            $this->langId,
            $this->shopId,
            $startId,
            $offset,
            'id_product',
            'DESC',
            $this->categoryId,
            true
        );
        return $productList;
    }

    protected function generateSalesEffectiveDate()
    {
        $nowDate = date("Y-m-d").'T00:00-00:00';
        $endDate = date("Y-m-d", strtotime('+1 year')).'T00:00-00:00';
        return $nowDate."/".$endDate;
    }

    protected function getAllParents($category, $id_lang)
    {
        if (version_compare(_PS_VERSION_, '1.6.0.11', '<')) {
            return $category->getParentsCategories($id_lang);
        } else {
            return $category->getAllParents($id_lang);
        }
    }


    protected function getProductCategoryPath($id_product, $id_lang = null)
    {
        $product_category_path = "";

        $product_obj = new Product($id_product);
        $id_default_category = $product_obj->getDefaultCategory();
        $default_category = new Category($id_default_category);
        $all_parents = $this->getAllParents($default_category, $id_lang);

        foreach ($all_parents as $item) {
            $product_category_path .= $item->name;
            $product_category_path .= ' > ';
        }

        $product_category_path.= $default_category->name[$id_lang];

        return $product_category_path;
    }


    protected function getFBCsvHeaders()
    {
        $catalogInfo = $this->catalogInfo;
        $headers = array();

        if ($catalogInfo == 2) {
            $headers = array(
                'id',
                'title',
                'description',
                'rich_text_description',
                'google_product_category',
                'fb_product_category',
                'product_type',
                'link',
                'override'
            );
        } elseif ($catalogInfo == 1) {
            $headers = array(
                'id',
                'price',
                'sale_price',
                'override',
                'link'
            );
        } else {
            $headers = array(
                'id',
                'title',
                'ios_url',
                'ios_app_store_id',
                'ios_app_name',
                'android_url',
                'android_package',
                'android_app_name',
                'windows_phone_url',
                'windows_phone_app_id',
                'windows_phone_app_name',
                'description',
                'rich_text_description',
                'google_product_category',
                'fb_product_category',
                'product_type',
                'link',
                'image_link',
                'additional_image_link',
                'condition',
                'availability',
                'price',
                'sale_price',
                'sale_price_effective_date',
                'gtin',
                'brand',
                'inventory',
                'mpn',
                'age_group',
                'shipping',
                'custom_label_0',
                'item_group_id',
                'color',
                'size',
                'gender',
                'material',
                'pattern',
                'additional_variant_attribute'
            );
        }
        return $headers;
    }

    protected $langIsoMapping = array(
        'af'=>'af_ZA',
        'ak'=>'ak_GH',
        'am'=>'am_ET',
        'ar'=>'ar_AR',
        'as'=>'as_IN',
        'ay'=>'ay_BO',
        'az'=>'az_AZ',
        'be'=>'be_BY',
        'bg'=>'bg_BG',
        'bn'=>'bn_IN',
        'bo'=>'bo_CN',
        'br'=>'br_FR',
        'bs'=>'bs_BA',
        'ca'=>'ca_ES',
        'cb'=>'cb_IQ',
        'ck'=>'ck_US',
        'cs'=>'cs_CZ',
        'cx'=>'cx_PH',
        'cy'=>'cy_GB',
        'da'=>'da_DK',
        'de'=>'de_DE',
        'dv'=>'dv_MV',
        'el'=>'el_GR',
        'en'=>'en_XX',
        'eo'=>'eo_EO',
        'es'=>'es_XX',
        'et'=>'et_EE',
        'eu'=>'eu_ES',
        'fa'=>'fa_IR',
        'ff'=>'ff_NG',
        'fi'=>'fi_FI',
        'fo'=>'fo_FO',
        'fr'=>'fr_XX',
        'fy'=>'fy_NL',
        'ga'=>'ga_IE',
        'gd'=>'gd_GB',
        'gl'=>'gl_ES',
        'gn'=>'gn_PY',
        'gu'=>'gu_IN',
        'ha'=>'ha_NG',
        'he'=>'he_IL',
        'hi'=>'hi_IN',
        'hr'=>'hr_HR',
        'ht'=>'ht_HT',
        'hu'=>'hu_HU',
        'hy'=>'hy_AM',
        'id'=>'id_ID',
        'ig'=>'ig_NG',
        'is'=>'is_IS',
        'it'=>'it_IT',
        'ja'=>'ja_XX',
        'jv'=>'jv_ID',
        'ka'=>'ka_GE',
        'kk'=>'kk_KZ',
        'km'=>'km_KH',
        'kn'=>'kn_IN',
        'ko'=>'ko_KR',
        'ku'=>'ku_TR',
        'ky'=>'ky_KG',
        'la'=>'la_VA',
        'lg'=>'lg_UG',
        'li'=>'li_NL',
        'ln'=>'ln_CD',
        'lo'=>'lo_LA',
        'lt'=>'lt_LT',
        'lv'=>'lv_LV',
        'mg'=>'mg_MG',
        'mi'=>'mi_NZ',
        'mk'=>'mk_MK',
        'ml'=>'ml_IN',
        'mn'=>'mn_MN',
        'mr'=>'mr_IN',
        'ms'=>'ms_MY',
        'mt'=>'mt_MT',
        'my'=>'my_MM',
        'ne'=>'ne_NP',
        'nl'=>'nl_XX',
        'no'=>'no_XX',
        'ns'=>'ns_ZA',
        'ny'=>'ny_MW',
        'om'=>'om_KE',
        'or'=>'or_IN',
        'pa'=>'pa_IN',
        'pl'=>'pl_PL',
        'ps'=>'ps_AF',
        'pt'=>'pt_XX',
        'qu'=>'qu_PE',
        'rm'=>'rm_CH',
        'ro'=>'ro_RO',
        'ru'=>'ru_RU',
        'rw'=>'rw_RW',
        'sa'=>'sa_IN',
        'sc'=>'sc_IT',
        'sd'=>'sd_PK',
        'se'=>'se_NO',
        'si'=>'si_LK',
        'sk'=>'sk_SK',
        'sl'=>'sl_SI',
        'sn'=>'sn_ZW',
        'so'=>'so_SO',
        'sq'=>'sq_AL',
        'sr'=>'sr_RS',
        'ss'=>'ss_SZ',
        'st'=>'st_ZA',
        'su'=>'su_ID',
        'sv'=>'sv_SE',
        'sw'=>'sw_KE',
        'sy'=>'sy_SY',
        'sz'=>'sz_PL',
        'ta'=>'ta_IN',
        'te'=>'te_IN',
        'tg'=>'tg_TJ',
        'th'=>'th_TH',
        'ti'=>'ti_ET',
        'tl'=>'tl_XX',
        'tn'=>'tn_BW',
        'tr'=>'tr_TR',
        'ts'=>'ts_ZA',
        'tt'=>'tt_RU',
        'tz'=>'tz_MA',
        'ug'=>'ug_CN',
        'uk'=>'uk_UA',
        'ur'=>'ur_PK',
        'uz'=>'uz_UZ',
        've'=>'ve_ZA',
        'vi'=>'vi_VN',
        'wo'=>'wo_SN',
        'xh'=>'xh_ZA',
        'yi'=>'yi_DE',
        'yo'=>'yo_NG',
        'zh'=>'zh_CN',
        'zu'=>'zu_ZA',
        'zz'=>'zz_TR'
    );
}