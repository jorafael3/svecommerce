<?php
/*
 * 2007-2016 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/afl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 *  @author PrestaShop SA <contact@prestashop.com>
 *  @copyright  2007-2016 PrestaShop SA
 *  @version  Release: $Revision: 7060 $
 *  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 *  International Registered Trademark & Property of PrestaShop SA
 */


if (!defined('_PS_VERSION_')) {
    exit;
}

use PrestaShop\PrestaShop\Adapter\Category\CategoryProductSearchProvider;
use PrestaShop\PrestaShop\Core\Product\Search\ProductSearchContext;
use PrestaShop\PrestaShop\Core\Product\Search\ProductSearchQuery;
use PrestaShop\PrestaShop\Core\Product\Search\SortOrder;

use PrestaShop\PrestaShop\Adapter\Image\ImageRetriever;
use PrestaShop\PrestaShop\Adapter\Product\PriceFormatter;
use PrestaShop\PrestaShop\Core\Product\ProductListingPresenter;
use PrestaShop\PrestaShop\Adapter\Product\ProductColorsRetriever;
use PrestaShop\PrestaShop\Core\Module\WidgetInterface;

class NrtProductsLinkNav extends Module implements WidgetInterface
{
    public function __construct()
    {
        $this->name = 'nrtproductslinknav';
		$this->version = '2.0.6';
		$this->tab = 'front_office_features';
        $this->author = 'AxonVip';
		$this->bootstrap = true;
		$this->need_instance = 0;

        parent::__construct();

        $this->displayName = $this->l('Axon - Next and previouse product link');
        $this->description = $this->l('Show butttons to previouse or next product on product page');
        $this->ps_versions_compliancy = array('min' => '1.7.1.0', 'max' => _PS_VERSION_);
		
    }

    public function install()
    {
        return (parent::install() && 
				$this->registerHook('displayProductsLinkNav') && 
				$this->registerHook('displayHeader')	
		);
    }

    public function uninstall()
    {
        return (parent::uninstall());
    }
	
    public function hookDisplayHeader($params)
    {
        if ($this->context->controller->php_self != 'product'){
            return;
        }
	}

    public function renderWidget($hookName = null, array $configuration = [])
    {
        if ($hookName == null && isset($configuration['hook'])) {
            $hookName = $configuration['hook'];
        }

        if ($this->context->controller->php_self != 'product'){
            return;
        }
		
        if (!isset($configuration['smarty']->tpl_vars['product']->value['id_product']) || 
            !isset($configuration['smarty']->tpl_vars['product']->value['id_category_default'])) {
            return;
        }

        $id_product = (int) $configuration['smarty']->tpl_vars['product']->value['id_product'];

        $id_category = (int) $configuration['smarty']->tpl_vars['product']->value['id_category_default'];

        $category = new Category($id_category);

        if (empty($category) || !Validate::isLoadedObject($category) || !$category->active) {
            return;
        }
		
		$cacheId = $this->name . '|' . $id_product . '|' . $id_category;

        $this->context->smarty->tpl_vars['product_same_id'] = $id_product;
        $this->context->smarty->tpl_vars['category_same_id'] = $id_category; 
		
		$templateFile = 'module:nrtproductslinknav/views/templates/hook/nav.tpl';
		
		if (!$this->isCached($templateFile, $this->getCacheId($cacheId))) {
			$this->smarty->assign($this->getWidgetVariables($hookName, $configuration));	
		}

		return $this->fetch($templateFile, $this->getCacheId($cacheId));
    }

    public function getWidgetVariables($hookName = null, array $configuration = [])
    {
        if ($hookName == null && isset($configuration['hook'])) {
            $hookName = $configuration['hook'];
        }

        if(!isset($this->context->smarty->tpl_vars['product_same_id']) || !isset($this->context->smarty->tpl_vars['category_same_id'])){
            return;
        }

        $id_product = $this->context->smarty->tpl_vars['product_same_id'];
        $id_category = $this->context->smarty->tpl_vars['category_same_id'];
		
        $links = $this->getLinksInCategory($id_product, $id_category);
		
        return $links;
    }

    public function getLinksInCategory($id_product, $id_category)
    {    
        $links = [];

        $category = new Category($id_category);

        $searchProvider = new CategoryProductSearchProvider($this->context->getTranslator(), $category);

        $context = new ProductSearchContext($this->context);
        $query = new ProductSearchQuery();
        $query->setResultsPerPage(999999999)->setPage(1);
        $query->setIdCategory($category->id)->setSortOrder(
            new SortOrder('product', 'position', 'ASC')
        );
        $result = $searchProvider->runQuery($context, $query);
        $products = $result->getProducts();

		if(is_array($products)){
			foreach ($products as $key => $rawProduct) {
				if ($rawProduct['id_product'] == $id_product) {
                    $position = $key;
                    break;
				}
			}

            if(isset($position)){
                if(isset($products[$position - 1])){
                    $links['prev'] = $this->getInfoProduct($products[$position - 1]);
                }
                if(isset($products[$position + 1])){
                    $links['next'] = $this->getInfoProduct($products[$position + 1]);
                }
            }
		}

        return $links;
    }
	
	public function getInfoProduct($rawProduct)	{
		$assembler = new ProductAssembler($this->context);
		$presenterFactory = new ProductPresenterFactory($this->context);
		$presentationSettings = $presenterFactory->getPresentationSettings();
		$presenter = new ProductListingPresenter(
			new ImageRetriever(
				$this->context->link
			),
			$this->context->link,
			new PriceFormatter(),
			new ProductColorsRetriever(),
			$this->context->getTranslator()
		);

        return $presenter->present(
            $presentationSettings,
            $assembler->assembleProduct($rawProduct),
            $this->context->language
        );
	}	
}
