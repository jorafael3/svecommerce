<?php
/**
 *  This module was created by Anastasia Bu and is protected by the laws of Copyright.
 *  This source file is subject to a commercial license from Anastasia Bu
 *  Use, copy, modification or distribution of this source file without written
 *  license agreement from Anastasia Bu <site@web-esse.ru> is strictly forbidden.
 *
 *
 *  @author    Snegurka <site@web-esse.ru>
 *  @copyright 2007-2021 Anastasia Bu
 *  @license Commercial license
 */

if (!defined('_PS_VERSION_')) {
    exit;
}

include_once(_PS_MODULE_DIR_ . 'pricecsvupdate/pricecsvupdate.php');

class WsUpdater extends ObjectModel
{

    public static $definition = array(
        'table' => 'product',
        'primary' => 'id_product',
    );

    public function __construct($id = null, $id_lang = null, $id_shop = null, $full = true)
    {
        parent::__construct($id, $id_lang, $id_shop);

        $this->initContext();

        $this->dir_mails = _PS_MODULE_DIR_ . 'pricecsvupdate/mails/';
        $this->path_csv = _PS_MODULE_DIR_ . 'pricecsvupdate/tmp_files/';
    }

    private function initContext()
    {
        $this->context = Context::getContext();
        $this->is_cron = Tools::getValue('PRICECSVUPDATE_AUT');
        $this->type_src = Tools::getValue('PRICECSVUPDATE_SRC');
        $this->type_obj = Tools::getValue('PRICECSVUPDATE_OBJ');
    }

    // private function getFiles()
    // {
    //     $cdir = scandir($this->path_csv);

    // }

    public function productUpdater()
    {
        $n_edit = Tools::getValue('PRICECSVUPDATE_COL_EDIT');
        $n_price = Tools::getValue('PRICECSVUPDATE_COL_PRICE');
        $n_whprice = Tools::getValue('PRICECSVUPDATE_COL_WHPRICE');
        $n_qty = Tools::getValue('PRICECSVUPDATE_COL_QUANTITY');
        $n_ean = Tools::getValue('PRICECSVUPDATE_COL_EAN');
        $n_param1 = Tools::getValue('PRICECSVUPDATE_COL_PARAM1');
        $n_param2 = Tools::getValue('PRICECSVUPDATE_COL_PARAM2');

        $type_key = Tools::getValue('PRICECSVUPDATE_KEY');

        // $cron = Tools::getValue('PRICECSVUPDATE_AUT');
        // $type_src = Tools::getValue('PRICECSVUPDATE_SRC');
        // $type_obj = Tools::getValue('PRICECSVUPDATE_OBJ');

        // $src_prod = Tools::getValue('PRICECSVUPDATE_PROD_URL');
        // $src_attr = Tools::getValue('PRICECSVUPDATE_ATTR_URL');

        $text = '';
        $cdir = scandir($this->path_csv);

        $file_read = 'csv';
        foreach ($cdir as $key => $value) {
            $type = explode('.', $value);
            $type = array_reverse($type);
            if ($type[0] !== $file_read) {
                continue;
            }
            $text .= $this->openCsvFile($this->path_csv . $value, $n_edit, $n_price, $n_whprice, $n_qty, $n_ean, $n_param1, $n_param2, $type_key);
        }
        echo $text;
    }

    protected function openCsvFile($file, $n_edit, $n_price, $n_whprice, $n_qty, $n_ean, $n_param1, $n_param2, $type_key)
    {
        $separat = Configuration::get('PRICECSVUPDATE_SEPARAT');
        $comb_qty = Configuration::get('PRICECSVUPDATE_COMB_QUANTITY');
        $sp_price = Configuration::get('PRICECSVUPDATE_COL_SP_PRICE');
        $on_sale = Configuration::get('PRICECSVUPDATE_COL_ON_SALE');
        $is_zeroing = Configuration::get('PRICECSVUPDATE_ZEROING');

        $sp_price_array = array();

        $start = microtime(true);
        $count_line = 0;
        $handle = false;
        $incorrect_name = '';
        $data_notification = '';

        if (is_file($file) && is_readable($file)) {
            $handle = fopen($file, 'r');
        }

        if (!$handle) {
            $this->errors[] = Tools::displayError('Cannot read the .CSV file');
            return 'Cannot update products';
        }

        //$this->rewindBomAware($handle);

        $context = Context::getContext();
        $id_shop = Configuration::get('PRICECSVUPDATE_M_SHOP');
        if (!$id_shop) {
            $id_shop = (int)$context->shop->id;
        }

        if ($is_zeroing) {
            $sqi_z = 'UPDATE `' . _DB_PREFIX_ . 'stock_available` SET `quantity`= 0 WHERE 1';
            Db::getInstance()->execute($sqi_z);
        }


        if (Tools::version_compare(_PS_VERSION_, '1.5.6.0', '>=') == true && $id_shop != false) {
            $sql_start = 'UPDATE `' . _DB_PREFIX_ . 'product_shop` ps
                    LEFT JOIN `' . _DB_PREFIX_ . 'product` p ON (ps.`id_product` = p.`id_product`)';
        } else {
            $sql_start = 'UPDATE `' . _DB_PREFIX_ . 'product` ps';
        }

        if ($type_key == 'name' or Tools::strlen($n_param2) > 0) {
            $sql_start .= 'LEFT JOIN `' . _DB_PREFIX_ . 'product_lang` pl ON (ps.`id_product` = pl.`id_product`)';
        }

        if ($type_key == 'product_supplier_reference') {
            $sql_start .= 'LEFT JOIN `' . _DB_PREFIX_ . 'product_supplier` psup ON (ps.`id_product` = psup.`id_product` AND psup.`id_product_attribute` = 0)';
        }

        if (Tools::strlen($n_price) > 0) {
            $sql_price = 'ps.`price` = CASE ';
            $sql_price17 = 'p.`price` = CASE ';
            $sql_fix_price = 'spr.`price` = CASE ';
        }

        if (Tools::strlen($n_whprice) > 0) {
            $sql_whprice = 'ps.`wholesale_price` = CASE ';
        }

        if (Tools::strlen($sp_price) > 0) {
            $sql_sp_price = 'spr.`reduction` = CASE ';
        }

        if (Tools::strlen($on_sale) > 0) {
            $sql_on_sale = 'ps.`on_sale` = CASE ';
        }

        if (Tools::strlen($n_ean) > 0) {
            $sql_ean = 'p.`ean13` = CASE ';
        }

        if (Tools::strlen($n_param1) > 0) {
            $sql_param1 = 'p.`weight` = CASE ';
        }

        if (Tools::strlen($n_param2) > 0) {
            $sql_param2 = 'pl.`available_later` = CASE ';
        }

        if (Tools::strlen($n_qty) > 0) {
            if ($comb_qty) {
                $sql_start .= 'LEFT JOIN `' . _DB_PREFIX_ . 'stock_available` qty ON (ps.`id_product` = qty.`id_product`)';
            } else {
                $sql_start .= 'LEFT JOIN `' . _DB_PREFIX_ . 'stock_available` qty ON (ps.`id_product` = qty.`id_product` AND qty.`id_product_attribute` = 0)';
            }
            $sql_qty = 'qty.`quantity` = CASE ';
        }

        if ($type_key == 'id_product') {
            $type_key = 'ps.`id_product`';
        }

        $reff_arr1 = array();

        while (($data = fgetcsv($handle, 1000, $separat)) !== false) {
            if (!empty($data[$n_edit])) {
                $count_line++;
                if (($type_key == 'name') && (strripos($data[$n_edit], '"'))) {
                    $incorrect_name .= $data[$n_edit] . '; ';
                } else if (($type_key == 'reference') && (strripos($data[$n_edit], '\''))) {
                    $incorrect_name .= $data[$n_edit] . '; ';
                } else {
                    if (Tools::strlen($n_price) > 0) {
                        $t_price = str_replace(' ', '', $data[$n_price]);
                        $t_price = ((float)str_replace(',', '.', $t_price));
                        //$t_price = str_replace('.', '', $data[$n_price]);
                        $sql_price .= 'WHEN upper(' . (string)$type_key . ') = "' . pSQL(Tools::strtoupper($data[$n_edit])) . '" THEN "' . (float)$t_price . '" ';
                        $sql_price17 .= 'WHEN upper(' . (string)$type_key . ') = "' . pSQL(Tools::strtoupper($data[$n_edit])) . '" THEN "' . (float)$t_price . '" ';
                        $sql_fix_price .= 'WHEN upper(' . (string)$type_key . ') = "' . pSQL(Tools::strtoupper($data[$n_edit])) . '" THEN "' . (float)$t_price . '" ';
                    }
                    if (Tools::strlen($n_whprice) > 0) {
                        $t_whprice = str_replace(' ', '', $data[$n_whprice]);
                        $t_whprice = ((float)str_replace(',', '.', $t_whprice));
                        $sql_whprice .= 'WHEN upper(' . (string)$type_key . ') = "' . (string)Tools::strtoupper($data[$n_edit]) . '" THEN "' . (float)$t_whprice . '" ';
                    }
                    if (Tools::strlen($sp_price) > 0) {
                        $sql_sp_price .= 'WHEN upper(' . (string)$type_key . ') = "' . pSQL(Tools::strtoupper($data[$n_edit])) . '" THEN "' . (float)$data[$sp_price] . '" ';
                    }
                    if (Tools::strlen($on_sale) > 0) {
                        $sql_on_sale .= 'WHEN upper(' . (string)$type_key . ') = "' . (string)Tools::strtoupper($data[$n_edit]) . '" THEN "' . (string)$data[$on_sale] . '" ';
                    }
                    if (Tools::strlen($n_qty) > 0) {
                        //$t_qty = $prod_arr[$data[$n_edit]]+$data[$n_qty];
                        $t_qty = $data[$n_qty];
                        $sql_qty .= 'WHEN upper(' . (string)$type_key . ') = "' . (string)Tools::strtoupper($data[$n_edit]) . '" THEN "' . (float)$t_qty . '" ';
                    }

                    if (Tools::strlen($n_ean) > 0) {
                        $sql_ean .= 'WHEN upper(' . (string)$type_key . ') = "' . (string)Tools::strtoupper($data[$n_edit]) . '" THEN "' . (string)$data[$n_ean] . '" ';
                    }

                    if (Tools::strlen($n_param1) > 0) {
                        $sql_param1 .= 'WHEN upper(' . (string)$type_key . ') = "' . (string)Tools::strtoupper($data[$n_edit]) . '" THEN "' . (string)$data[$n_param1] . '" ';
                    }

                    if (Tools::strlen($n_param2) > 0) {
                        $sql_param2 .= 'WHEN upper(' . (string)$type_key . ') = "' . (string)Tools::strtoupper($data[$n_edit]) . '" THEN "' . (string)$data[$n_param2] . '" ';
                    }

                    $reff_arr1[] = Tools::strtoupper($data[$n_edit]);
                }
            }
        }

        fclose($handle);

        $sql = $sql_start . ' SET ';

        if (Tools::strlen($n_price) > 0) {
            $sql .= $sql_price . ' END ';
            if (Tools::version_compare(_PS_VERSION_, '1.7.0', '>=') == true) {
                $sql .= ' , ' . $sql_price17 . ' END ';
            }
        }
        if (((Tools::strlen($n_price) > 0) && (Tools::strlen($n_qty) > 0)) || ((Tools::strlen($n_price) > 0) && (Tools::strlen($n_ean) > 0)) || ((Tools::strlen($n_price) > 0) && (Tools::strlen($n_whprice) > 0)) || ((Tools::strlen($n_price) > 0) && (Tools::strlen($on_sale) > 0)) || ((Tools::strlen($n_price) > 0) && (Tools::strlen($n_param1) > 0)) || ((Tools::strlen($n_price) > 0) && (Tools::strlen($n_param2) > 0))) {
            $sql .= ' , ';
        }

        if (Tools::strlen($n_whprice) > 0) {
            $sql .= $sql_whprice . ' END ';
        }
        if (((Tools::strlen($n_whprice) > 0) && (Tools::strlen($n_qty) > 0)) || ((Tools::strlen($n_whprice) > 0) && (Tools::strlen($on_sale) > 0)) || ((Tools::strlen($n_whprice) > 0) && (Tools::strlen($n_ean) > 0)) || ((Tools::strlen($n_whprice) > 0) && ($n_param1 > 0)) || ((Tools::strlen($n_whprice) > 0) && ($n_param2 > 0))) {
            $sql .= ' , ';
        }

        if (Tools::strlen($on_sale) > 0) {
            $sql .= $sql_on_sale . ' END ';
        }
        if (((Tools::strlen($on_sale) > 0) && (Tools::strlen($n_qty) > 0)) || ((Tools::strlen($on_sale) > 0) && (Tools::strlen($n_ean) > 0)) || ((Tools::strlen($on_sale) > 0) && ($n_param1 > 0)) || ((Tools::strlen($on_sale) > 0) && ($n_param2 > 0))) {
            $sql .= ' , ';
        }

        if (Tools::strlen($n_qty) > 0) {
            $sql .= $sql_qty . ' END ';
        }
        if ((($n_qty > 0) && ($n_ean > 0)) || (($n_qty > 0) && ($n_param1 > 0)) || (($n_qty > 0) && ($n_param2 > 0))) {
            $sql .= ' , ';
        }

        if (Tools::strlen($n_ean) > 0) {
            $sql .= $sql_ean . ' END ';
        }
        if (($n_ean > 0) && ($n_param1 > 0) || (($n_ean > 0) && ($n_param2 > 0))) {
            $sql .= ' , ';
        }

        if (Tools::strlen($n_param1) > 0) {
            $sql .= $sql_param1 . ' END ';
        }

        if (($n_param1 > 0) && ($n_param2 > 0)) {
            $sql .= ' , ';
        }

        if (Tools::strlen($n_param2) > 0) {
            $sql .= $sql_param2 . ' END ';
        }

        $where_shop = '';
        if (Tools::version_compare(_PS_VERSION_, '1.5.6.0', '>=') == true && $id_shop != false && $id_shop != 'all') {
            $where_shop = ' AND ps.`id_shop` = ' . (int)$id_shop;

            if (Tools::strlen($n_qty) > 0) {
                $where_shop .= ' AND qty.`id_shop` = ' . (int)$id_shop;
            }
        }

        $sql .= 'WHERE upper(' . pSQL($type_key) . ') IN (\'' . implode("','", $reff_arr1) . '\')' . $where_shop;

        echo $sql;
        if (!Db::getInstance()->execute($sql)) {
            //echo $sql;
            $data_notification = 'Cannot update products: ' . Db::getInstance()->getMsgError();
            //$this->sendNotification($data_notification);
            die($data_notification);
        }

        $not_csv_txt = '';
        $not_bd_txt = '';

        if (Tools::strlen($incorrect_name) > 1) {
            $incorrect_name = '<br/>This product can not be updated: ' . $incorrect_name;
        }
        $data_notification = 'Update products: ' . $count_line . '. Time: ' . (microtime(true) - $start) . ' s.' . $incorrect_name . ' <br >' . $not_csv_txt . '<br >' . $not_bd_txt;
        //$this->sendNotification($data_notification);

        return  $data_notification;
    }
}
