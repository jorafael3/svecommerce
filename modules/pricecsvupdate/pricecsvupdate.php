<?php
/**
 *  This module was created by Anastasia Bu and is protected by the laws of Copyright.
 *  This source file is subject to a commercial license from Anastasia Bu
 *  Use, copy, modification or distribution of this source file without written
 *  license agreement from Anastasia Bu <site@web-esse.ru> is strictly forbidden.
 *
 *
 *  @author Snegurka <site@web-esse.ru>
 *  @copyright 2007-2021 Snegurka WS
 *  @license Commercial license
 */

if (!defined('_PS_VERSION_')) {
    exit;
}


/** correct Mac error on eof */
@ini_set('auto_detect_line_endings', '1');

class Pricecsvupdate extends Module
{
    protected $config_form = false;

    public function __construct()
    {
        $this->name = 'pricecsvupdate';
        $this->tab = 'administration';
        $this->version = '1.6.1';
        $this->author = 'Snegurka';
        $this->need_instance = 0;
        $this->module_key = 'd87b9f62bbb16c6434a3b292691ad287';

        /**
         * Set $this->bootstrap to true if your module is compliant with bootstrap (PrestaShop 1.6)
         */
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('Stock and prices CSV updater');
        $this->description = $this->l('Update the prices and stock using a CSV file');

        $this->ps_versions_compliancy = array('min' => '1.5', 'max' => _PS_VERSION_);

        $this->path_csv = _PS_MODULE_DIR_ . 'pricecsvupdate/tmp_files/';
        $this->dir_mails = _PS_MODULE_DIR_ . 'pricecsvupdate/mails/';
    }

    /**
     * Don't forget to create update methods if needed:
     * http://doc.prestashop.com/display/PS16/Enabling+the+Auto-Update
     */
    public function install()
    {
        Configuration::updateValue('PRICECSVUPDATE_EMAIL', Configuration::get('PS_SHOP_EMAIL'));
        Configuration::updateValue('PRICECSVUPDATE_COL_PRICE', 1);
        Configuration::updateValue('PRICECSVUPDATE_COL_EDIT', 2);
        Configuration::updateValue('PRICECSVUPDATE_COL_PARAM1', '');
        Configuration::updateValue('PRICECSVUPDATE_AUT', 2);
        Configuration::updateValue('PRICECSVUPDATE_SEPARAT', ';');
        Configuration::updateValue('PRICECSVUPDATE_COMB_QUANTITY', false);

        $this->installModuleTab();

        return parent::install() &&
            $this->registerHook('backOfficeHeader');
    }

    public function uninstall()
    {
        Configuration::deleteByName('PRICECSVUPDATE_COL_PRICE');
        Configuration::deleteByName('PRICECSVUPDATE_COL_EDIT');
        $this->uninstallTab();

        return parent::uninstall();
    }

    private function installModuleTab()
    {
        $sql = '
        SELECT `id_tab` FROM `' . _DB_PREFIX_ . 'tab` WHERE `class_name` = "AdminCatalog"';

        $tabParent = (int)(Db::getInstance()->getValue($sql));
        $langs = Language::getLanguages();

        $tab0 = new Tab();
        $tab0->class_name = "AdminPricecsvupdate";
        $tab0->module = $this->name;
        $tab0->id_parent = $tabParent;
        foreach ($langs as $l) {
            $tab0->name[$l['id_lang']] = $this->l('CSV updater');
        }
        $tab0->save();

        unset($tab0);
    }

    public function uninstallTab()
    {
        $tab_id = Tab::getIdFromClassName("AdminPricecsvupdate");
        if ($tab_id) {
            $tab = new Tab($tab_id);
            $tab->delete();
        }
        $tab_id = Tab::getIdFromClassName("AdminPricecsvupdate");
        if ($tab_id) {
            $tab = new Tab($tab_id);
            $tab->delete();
        }
    }

    // private function uninstallModuleTab()
    // {
    //     $sql = '
    //     SELECT `id_tab` FROM `' . _DB_PREFIX_ . 'tab` WHERE `module` = "' . pSQL($this->name) . '"';

    //     $result = Db::getInstance()->ExecuteS($sql);

    //     if ($result && count($result)) {
    //         foreach ($result as $tabData) {
    //             $tab = new Tab($tabData['id_tab']);

    //             if (Validate::isLoadedObject($tab)) {
    //                 $tab->delete();
    //             }
    //         }
    //     }
    // }

    /**
     * Load the configuration form
     */
    public function getContent()
    {
        $this->context->smarty->assign(array(
            'module_dir' => Tools::getShopDomain(true, true) . $this->_path,
            'product_updater_url' => 'productupdater.php' . '?token=' . Tools::substr(Tools::encrypt('pricecsvupdate/index'), 0, 10)
        ));


        $output = $this->context->smarty->fetch($this->local_path . 'views/templates/admin/configure.tpl');

        if (method_exists($this->context->controller, 'addJquery')) {
            $this->context->controller->addJS($this->_path . 'views/js/back.js');
        }

        return $this->postProcess() . $output . $this->renderForm();
    }

    /**
     * Create the form that will be displayed in the configuration of your module.
     */
    protected function renderForm()
    {
        $helper = new HelperForm();

        $helper->show_toolbar = false;
        $helper->table = $this->table;
        $helper->module = $this;
        $helper->default_form_language = $this->context->language->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG', 0);

        $helper->identifier = $this->identifier;
        $helper->submit_action = 'submitPricecsvupdateModule';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false)
            . '&configure=' . $this->name . '&tab_module=' . $this->tab . '&module_name=' . $this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');

        $helper->tpl_vars = array(
            'fields_value' => $this->getConfigFormValues(), /* Add values for your inputs */
            'languages' => $this->context->controller->getLanguages(),
            'id_language' => $this->context->language->id,
        );

        return $helper->generateForm($this->getConfigForm());
    }

    /**
     * Create the structure of your form.
     */
    protected function getConfigForm()
    {
        $fields_form = array();

        $fields_form[0] = array(
            'form' => array(
                'legend' => array(
                    'title' => $this->l('Settings'),
                    'icon' => 'icon-cogs',
                ),
                'input' => array(
                    array(
                        'type' => 'select',
                        'label' => $this->l('Automatic import settings'),
                        'name' => 'PRICECSVUPDATE_AUT',
                        'desc' => 'the option "Manual" - if you want to upgrade the products and combinations immediately <br> the option "Cron Task" - if you want to save settings for the cron task',
                        'required' => true,
                        'options' => array(
                            'query' => array(
                                array(
                                    'id' => 'manual',
                                    'name' => $this->l('Manual (now)')
                                ),
                                array(
                                    'id' => 'cron',
                                    'name' => $this->l('Cron Task (later)')
                                ),
                            ),
                            'id' => 'id',
                            'name' => 'name'
                        )
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->l('What kind of entity would you like to import?'),
                        'name' => 'PRICECSVUPDATE_OBJ',
                        'required' => true,
                        'options' => array(
                            'query' => array(
                                array(
                                    'id' => 'product',
                                    'name' => $this->l('Products')
                                ),
                                array(
                                    'id' => 'comb',
                                    'name' => $this->l('Combinations')
                                ),
                                array(
                                    'id' => 'both',
                                    'name' => $this->l('Products and Combinations')
                                ),
                            ),
                            'id' => 'id',
                            'name' => 'name'
                        )
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->l('Data source options'),
                        'name' => 'PRICECSVUPDATE_SRC',
                        'id' => 'data_src',
                        'required' => true,
                        'options' => array(
                            'query' => array(
                                array(
                                    'id' => 'src_url',
                                    'name' => $this->l('Feed URL')
                                ),
                                array(
                                    'id' => 'src_loc',
                                    'name' => $this->l('Local file')
                                ),
                                array(
                                    'id' => 'src_loc_folder',
                                    'name' => $this->l('Local folder')
                                ),
                            ),
                            'id' => 'id',
                            'name' => 'name'
                        )
                    ),
                    array(
                        'col' => 3,
                        'type' => 'text',
                        'desc' => $this->l('Enter URL from which the product CSV file will be collected'),
                        //'hint' => $this->l('Set to "0" to disable this feature'),
                        'name' => 'PRICECSVUPDATE_PROD_URL',
                        'label' => $this->l('File URL (product)'),
                    ),
                    array(
                        'col' => 3,
                        'type' => 'text',
                        'desc' => $this->l('Enter URL from which the combinations CSV file will be collected'),
                        //'hint' => $this->l('Set to "0" to disable this feature'),
                        'name' => 'PRICECSVUPDATE_ATTR_URL',
                        'label' => $this->l('File URL (combinations)'),
                    ),
                    array(
                        'type' => 'file',
                        'name' => 'PRICECSVUPDATE_FILE',
                        'label' => $this->l('File (product)'),
                    ),
                    array(
                        'type' => 'file',
                        'name' => 'PRICECSVUPDATE_FILE_ATTR',
                        'label' => $this->l('File (combinations)'),
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->l('Key (ID) column'),
                        'name' => 'PRICECSVUPDATE_KEY',
                        'desc' => '"Name" only supported by products',
                        'required' => true,
                        'options' => array(
                            'query' => array(
                                array(
                                    'id' => 'name',
                                    'name' => $this->l('Name')
                                ),
                                array(
                                    'id' => 'reference',
                                    'name' => $this->l('Reference')
                                ),
                                array(
                                    'id' => 'id_product',
                                    'name' => $this->l('PrestaShop product ID')
                                ),

                                array(
                                    'id' => 'product_supplier_reference',
                                    'name' => $this->l('Supplier reference')
                                ),
                                array(
                                    'id' => 'ean13',
                                    'name' => $this->l('EAN')
                                ),
                            ),
                            'id' => 'id',
                            'name' => 'name'
                        )

                    ),
                    array(
                        'col' => 3,
                        'type' => 'text',
                        'required' => true,
                        'desc' => $this->l('column number with Name/Reference/Supplier reference/EAN in CSV (from 0)'),
                        'name' => 'PRICECSVUPDATE_COL_EDIT',
                        'label' => $this->l('Column number for key'),
                    ),
                    array(
                        'col' => 3,
                        'type' => 'text',
                        'desc' => $this->l('column number with the "Pre-tax retail price" in CSV (from 0)'),
                        'hint' => $this->l('for combinations В«Impact on priceВ»'),
                        'name' => 'PRICECSVUPDATE_COL_PRICE',
                        'label' => $this->l('Price'),
                    ),
                    array(
                        'col' => 3,
                        'type' => 'text',
                        'desc' => $this->l('column number with the quantity in CSV (from 0)'),
                        //'hint' => $this->l('Set to "0" to disable this feature'),
                        'name' => 'PRICECSVUPDATE_COL_QUANTITY',
                        'label' => $this->l('Quantity'),
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Use the same values for the combination'),
                        'name' => 'PRICECSVUPDATE_COMB_QUANTITY',
                        'class' => 'presta_compab',
                        'is_bool' => true,
                        'values' => array(
                            array(
                                'id' => 'comb_on',
                                'value' => true,
                                'label' => $this->l('Enabled')
                            ),
                            array(
                                'id' => 'comb_off',
                                'value' => false,
                                'label' => $this->l('Disabled')
                            )
                        ),
                    ),
                ),
                'submit' => array(
                    'icon' => 'icon icon-cloud-upload csv_icon',
                    'name' => 'generateCSV',
                    'title' => $this->l('Save'),
                ),
            ),
        );

        $fields_form[1] = array(
            'form' => array(
                'legend' => array(
                    'title' => $this->l('Additional fields'),
                    'icon' => 'icon-cogs',
                ),
                'input' => array(
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Show full statistic'),
                        'name' => 'PRICECSVUPDATE_STAT',
                        'desc' => 'only for products',
                        'is_bool' => true,
                        'values' => array(
                            array(
                                'id' => 'stat_on',
                                'value' => true,
                                'label' => $this->l('Enabled')
                            ),
                            array(
                                'id' => 'stat_off',
                                'value' => false,
                                'label' => $this->l('Disabled')
                            )
                        ),
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Send Email notification'),
                        'name' => 'PRICECSVUPDATE_EMAIL_ON',
                        'is_bool' => true,
                        'values' => array(
                            array(
                                'id' => 'email_on',
                                'value' => true,
                                'label' => $this->l('Enabled')
                            ),
                            array(
                                'id' => 'email_off',
                                'value' => false,
                                'label' => $this->l('Disabled')
                            )
                        ),
                    ),
                    array(
                        'col' => 3,
                        'type' => 'text',
                        'name' => 'PRICECSVUPDATE_EMAIL',
                        'label' => $this->l('Alert email'),
                    ),
                    array(
                        'col' => 1,
                        'type' => 'text',
                        'desc' => $this->l('e.g. 1; Blouse; 129.90; 5'),
                        'name' => 'PRICECSVUPDATE_SEPARAT',
                        'label' => $this->l('Field separator'),
                    ),
                    array(
                        'col' => 3,
                        'type' => 'text',
                        'desc' => $this->l('column number with the wholesale price in CSV (from 0)'),
                        'hint' => $this->l('for combinations "Impact on price"»"'),
                        'name' => 'PRICECSVUPDATE_COL_WHPRICE',
                        'label' => $this->l('Wholesale price'),
                    ),
                    array(
                        'col' => 3,
                        'type' => 'text',
                        'desc' => $this->l('You can set Impact prices (%) with base options'),
                        'name' => 'PRICECSVUPDATE_COL_SP_PRICE',
                        'label' => $this->l('Specific prices'),
                    ),
                    array(
                        'col' => 3,
                        'type' => 'text',
                        'desc' => $this->l('Display the "On sale!" flag on the product page, and on product listings.'),
                        'name' => 'PRICECSVUPDATE_COL_ON_SALE',
                        'label' => $this->l('Option "on sale"'),
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Reset quantity'),
                        'name' => 'PRICECSVUPDATE_ZEROING',
                        'desc' => $this->l('Reset all items quantity missing in the file'),
                        'class' => 'presta_compab',
                        'is_bool' => true,
                        'values' => array(
                            array(
                                'id' => 'comb_on',
                                'value' => true,
                                'label' => $this->l('Enabled')
                            ),
                            array(
                                'id' => 'comb_off',
                                'value' => false,
                                'label' => $this->l('Disabled')
                            )
                        ),
                    ),
                    array(
                        'col' => 3,
                        'type' => 'text',
                        'desc' => $this->l('column number with the EAN in CSV (from 0)'),
                        'name' => 'PRICECSVUPDATE_COL_EAN',
                        'label' => $this->l('EAN'),
                    ),
                    array(
                        'col' => 3,
                        'type' => 'text',
                        'desc' => $this->l('column number with the weight in CSV (from 0)'),
                        'name' => 'PRICECSVUPDATE_COL_PARAM1',
                        'label' => $this->l('Weight'),
                    ),
                    array(
                        'col' => 3,
                        'type' => 'text',
                        'desc' => $this->l('column number with the weight in CSV (from 0)'),
                        'name' => 'PRICECSVUPDATE_COL_PARAM2',
                        'label' => $this->l('Available later'),
                    ),
                ),
                'submit' => array(
                    'icon' => 'icon icon-cloud-upload csv_icon',
                    'name' => 'generateCSV',
                    'title' => $this->l('Save'),
                ),
            ),
        );


        if (Configuration::get('PS_MULTISHOP_FEATURE_ACTIVE')) {
            $shops = array();
            $shops[0] = array('id_shop' => 0, 'name' => '---');
            $shops[1] = array('id_shop' => 'all', 'name' => 'all');
            $shops = array_merge($shops, Shop::getShops());
            $fields_form[2] = array(
                'form' => array(
                    'input' => array(
                        array(
                            'type' => 'select',
                            'label' => $this->l('Shop ID'),
                            'name' => 'PRICECSVUPDATE_M_SHOP',
                            'desc' => 'Select a value - if you use CRON',
                            'required' => true,
                            'options' => array(
                                'query' => $shops,
                                'id' => 'id_shop',
                                'name' => 'name'
                            )
                        ),
                    ),
                ),
            );
        }

        return $fields_form;
    }

    public function getCSVFilesOptions()
    {
        $files = array();
        $h = opendir($this->path_csv);
        while ($file = readdir($h)) {
            if ($file != '.' && $file != '..' && $file != 'index.php') {
                $files[] = array('file' => $file);
            }
        }
        return $files;
    }

    /**
     * Set values for the inputs.
     */
    protected function getConfigFormValues()
    {
        return array(
            'PRICECSVUPDATE_EMAIL' => Configuration::get('PRICECSVUPDATE_EMAIL'),
            'PRICECSVUPDATE_EMAIL_ON' => Configuration::get('PRICECSVUPDATE_EMAIL_ON'),
            'PRICECSVUPDATE_AUT' => Configuration::get('PRICECSVUPDATE_AUT'),
            'PRICECSVUPDATE_FILE' => Configuration::get('PRICECSVUPDATE_FILE', null),
            'PRICECSVUPDATE_FILE_ATTR' => Configuration::get('PRICECSVUPDATE_FILE_ATTR', null),
            'PRICECSVUPDATE_SRC' => Configuration::get('PRICECSVUPDATE_SRC'),
            'PRICECSVUPDATE_PROD_URL' => Configuration::get('PRICECSVUPDATE_PROD_URL'),
            'PRICECSVUPDATE_ATTR_URL' => Configuration::get('PRICECSVUPDATE_ATTR_URL'),
            'PRICECSVUPDATE_SEPARAT' => Configuration::get('PRICECSVUPDATE_SEPARAT'),

            'PRICECSVUPDATE_OBJ' => Configuration::get('PRICECSVUPDATE_OBJ'),
            'PRICECSVUPDATE_FILE_NAME' =>  Configuration::get('PRICECSVUPDATE_FILE_NAME'),
            'PRICECSVUPDATE_COL_PRICE' => Configuration::get('PRICECSVUPDATE_COL_PRICE'),
            'PRICECSVUPDATE_COL_WHPRICE' => Configuration::get('PRICECSVUPDATE_COL_WHPRICE'),
            'PRICECSVUPDATE_COL_SP_PRICE' => Configuration::get('PRICECSVUPDATE_COL_SP_PRICE'),
            'PRICECSVUPDATE_COL_ON_SALE' => Configuration::get('PRICECSVUPDATE_COL_ON_SALE'),
            'PRICECSVUPDATE_COL_EDIT' => Configuration::get('PRICECSVUPDATE_COL_EDIT'),
            'PRICECSVUPDATE_COL_QUANTITY' => Configuration::get('PRICECSVUPDATE_COL_QUANTITY'),
            'PRICECSVUPDATE_ZEROING' => Configuration::get('PRICECSVUPDATE_ZEROING'),
            'PRICECSVUPDATE_COMB_QUANTITY' => Configuration::get('PRICECSVUPDATE_COMB_QUANTITY'),
            'PRICECSVUPDATE_COL_EAN' => Configuration::get('PRICECSVUPDATE_COL_EAN'),
            'PRICECSVUPDATE_KEY' => Configuration::get('PRICECSVUPDATE_KEY'),
            'PRICECSVUPDATE_COL_PARAM1'     => Configuration::get('PRICECSVUPDATE_COL_PARAM1'),
            'PRICECSVUPDATE_COL_PARAM2'     => Configuration::get('PRICECSVUPDATE_COL_PARAM2'),

            'PRICECSVUPDATE_M_SHOP' => Configuration::get('PRICECSVUPDATE_M_SHOP'),
            'PRICECSVUPDATE_STAT'  => Configuration::get('PRICECSVUPDATE_STAT'),
        );
    }

    /**
     * Save form data.
     */
    public function postProcess()
    {
        if (Tools::isSubmit('generateCSV')) {
            $n_edit = Tools::getValue('PRICECSVUPDATE_COL_EDIT');
            $n_price = Tools::getValue('PRICECSVUPDATE_COL_PRICE');
            $n_whprice = Tools::getValue('PRICECSVUPDATE_COL_WHPRICE');
            $n_qty = Tools::getValue('PRICECSVUPDATE_COL_QUANTITY');
            $n_ean = Tools::getValue('PRICECSVUPDATE_COL_EAN');
            $n_param1 = Tools::getValue('PRICECSVUPDATE_COL_PARAM1');
            $n_param2 = Tools::getValue('PRICECSVUPDATE_COL_PARAM2');

            $type_key = Tools::getValue('PRICECSVUPDATE_KEY');

            $cron = Tools::getValue('PRICECSVUPDATE_AUT');
            $type_src = Tools::getValue('PRICECSVUPDATE_SRC');
            $type_obj = Tools::getValue('PRICECSVUPDATE_OBJ');

            $src_prod = Tools::getValue('PRICECSVUPDATE_PROD_URL');
            $src_attr = Tools::getValue('PRICECSVUPDATE_ATTR_URL');

            if ($type_src == 'src_loc') {
                if ($_FILES['PRICECSVUPDATE_FILE']['tmp_name']) {
                    copy($_FILES['PRICECSVUPDATE_FILE']['tmp_name'], $this->path_csv . 'product_import.csv');
                }

                if ($_FILES['PRICECSVUPDATE_FILE_ATTR']['tmp_name']) {
                    copy($_FILES['PRICECSVUPDATE_FILE_ATTR']['tmp_name'], $this->path_csv . 'attr_import.csv');
                }
            }

            $form_values = $this->getConfigFormValues();

            foreach (array_keys($form_values) as $key) {
                Configuration::updateValue($key, Tools::getValue($key));
            }

            $text = '';

            if ($cron === 'cron') {
                $text .= 'Succsesful';
            } else {
                if ($type_src === 'src_loc') {
                    if ($type_obj === 'product') {
                        $text .= $this->openCsvFile($this->path_csv . 'product_import.csv', $n_edit, $n_price, $n_whprice, $n_qty, $n_ean, $n_param1, $n_param2, $type_key);
                    }

                    if ($type_obj === 'comb') {
                        $text .= $this->openCsvAttrFile($this->path_csv . 'attr_import.csv', $n_edit, $n_price, $n_whprice, $n_qty, $n_ean, $n_param1, $n_param2, $type_key);
                        if ($n_qty > 0) {
                            $text .= $this->rebildStockAvailable();
                        }
                    }

                    if ($type_obj === 'both') {
                        $text .= $this->openCsvFile($this->path_csv . 'product_import.csv', $n_edit, $n_price, $n_whprice, $n_qty, $n_ean, $n_param1, $n_param2, $type_key);

                        $text .= $this->openCsvAttrFile($this->path_csv . 'attr_import.csv', $n_edit, $n_price, $n_whprice, $n_qty, $n_ean, $n_param1, $n_param2, $type_key);
                        if ($n_qty > 0) {
                            $text .= $this->rebildStockAvailable();
                        }
                    }
                } elseif ($type_src === 'src_loc_folder') {
                    if ($type_obj === 'product') {
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
                    }
                } else {
                    $t_stamp = '_remote';
                    if ($src_prod) {
                        $new_path_p = $this->path_csv . '/product_import' . $t_stamp . '.csv';

                        if (copy($src_prod, $new_path_p)) {
                            $text .= $this->openCsvFile($new_path_p, $n_edit, $n_price, $n_whprice, $n_qty, $n_ean, $n_param1, $n_param2, $type_key);
                        }
                    }
                    if ($src_attr) {
                        $new_path_attr = $this->path_csv . '/attr_product_import' . $t_stamp . '.csv';

                        if (copy($src_attr, $new_path_attr)) {
                            $text .= $this->openCsvAttrFile($new_path_attr, $n_edit, $n_price, $n_whprice, $n_qty, $n_ean, $n_param1, $n_param2, $type_key);
                        }

                        if ($n_qty > 0) {
                            $text .= $this->rebildStockAvailable();
                        }
                    }
                }
            }

            return $this->displayConfirmation($text);
        }
        return '';
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

        $this->rewindBomAware($handle);

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

        if (Tools::strlen($n_price) > 0) {
            // Update specific_price amount
            $sql_fix_price_start = 'UPDATE `' . _DB_PREFIX_ . 'specific_price` spr ';
            $sql_fix_price_start .= 'LEFT JOIN `' . _DB_PREFIX_ . 'product` ps ON (spr.`id_product` = ps.`id_product`) ';

            if ($type_key == 'name') {
                $sql_fix_price_start .= 'LEFT JOIN `' . _DB_PREFIX_ . 'product_lang` pl ON (ps.`id_product` = pl.`id_product`) ';
            }

            if ($type_key == 'product_supplier_reference') {
                $sql_fix_price_start .= 'LEFT JOIN `' . _DB_PREFIX_ . 'product_supplier` psup ON (ps.`id_product` = psup.`id_product` AND psup.`id_product_attribute` = 0) ';
            }

            $sql_fix_price_itog = $sql_fix_price_start . ' SET ';
            $sql_fix_price_itog .= $sql_fix_price . ' END ';
            $sql_fix_price_itog .= 'WHERE upper(' . pSQL($type_key) . ') IN (\'' . implode("','", $reff_arr1) . '\')';
            $sql_fix_price_itog .= ' AND `reduction_type` = "amount" AND spr.`id_product_attribute` = 0';

            if (Tools::version_compare(_PS_VERSION_, '1.5.6.0', '>=') == true && $id_shop != false && $id_shop != 'all') {
                $where_shop = ' AND spr.`id_shop` = ' . (int)$id_shop;
            }

            Db::getInstance()->execute($sql_fix_price_itog);
        }

        if (!Db::getInstance()->execute($sql)) {
            $data_notification = 'Cannot update products: ' . Db::getInstance()->getMsgError();
            $this->sendNotification($data_notification);
            die($data_notification);
        }

        $not_csv_txt = '';
        $not_bd_txt = '';

        if (Configuration::get('PRICECSVUPDATE_STAT')) {
            // Info about products: not present on the CSV file
            if ($type_key == 'ean13') {
                $type_key = 'p.`ean13`';
            }

            if ($type_key == 'reference') {
                $type_key = 'p.`reference`';
            }

            $sql_info = 'SELECT ps.`id_product`, p.`reference`, pl.`name`
        FROM `' . _DB_PREFIX_ . 'product` ps
           LEFT JOIN `' . _DB_PREFIX_ . 'product` p ON (ps.`id_product` = p.`id_product`)
        LEFT JOIN `' . _DB_PREFIX_ . 'product_lang` pl ON ps.`id_product` = pl.`id_product` AND pl.`id_lang` = ' . (int)Context::getContext()->language->id . '
        WHERE upper(' . pSQL($type_key) . ') NOT IN (\'' . implode("','", $reff_arr1) . '\')';


            if ($not_csv = Db::getInstance()->executeS($sql_info)) {
                $not_csv_txt = 'This products not present on the CSV file <ul>';
                foreach ($not_csv as $t_csv) {
                    $not_csv_txt .= '<li>' . $t_csv["id_product"] . '.' . $t_csv["name"] . '[' . $t_csv["reference"] . ']</li>';
                }
                $not_csv_txt .= '</ul>';
            }


            // Info about products: not present in BD
            $sql_info2 = 'SELECT upper(' . pSQL($type_key) . ') as key_val FROM `' . _DB_PREFIX_ . 'product` as ps 
                    LEFT JOIN `' . _DB_PREFIX_ . 'product` p ON (ps.`id_product` = p.`id_product`)';
            if ($type_key == 'name') {
                $sql_info2 .= 'LEFT JOIN `' . _DB_PREFIX_ . 'product_lang` pl ON (ps.`id_product` = pl.`id_product`) ';
            }

            if ($type_key == 'product_supplier_reference') {
                $sql_info2 .= 'LEFT JOIN `' . _DB_PREFIX_ . 'product_supplier` psup ON (ps.`id_product` = psup.`id_product` AND psup.`id_product_attribute` = 0) ';
            }
            $sql_info2 .=    'WHERE 1';
            $t_reff_all_sql = Db::getInstance()->executeS($sql_info2);
            $reff_all_sql = array();
            foreach ($t_reff_all_sql as $tt_reff) {
                $reff_all_sql[] = $tt_reff["key_val"];
            }

            if ($not_bd = array_diff($reff_arr1, $reff_all_sql)) {
                $not_bd_txt = 'This products not present in BD (Shop): <ul>';
                foreach ($not_bd as $t_csv) {
                    $not_bd_txt .= '<li>' . $type_key . ':' . $t_csv . '</li>';
                }
                $not_bd_txt .= '</ul>';
            }
        }

        if (Tools::strlen($incorrect_name) > 1) {
            $incorrect_name = '<br/>This product can not be updated: ' . $incorrect_name;
        }
        $data_notification = 'Update products: ' . $count_line . '. Time: ' . (microtime(true) - $start) . ' s.' . $incorrect_name . ' <br >' . $not_csv_txt . '<br >' . $not_bd_txt;
        $this->sendNotification($data_notification);

        return  $data_notification;
    }

    protected function openCsvAttrFile($file_attr, $n_edit, $n_price, $n_whprice, $n_qty, $n_ean, $n_param1, $n_param2, $type_key = 'reference')
    {
        $separat = Configuration::get('PRICECSVUPDATE_SEPARAT');
        $start = microtime(true);
        $count_line = 0;
        $handle_attr = false;
        $data_notification = '';

        if (is_file($file_attr) && is_readable($file_attr)) {
            $handle_attr = fopen($file_attr, 'r');
        }

        if (!$handle_attr) {
            $this->errors[] = Tools::displayError('Cannot read the .CSV file');

            $data_notification = 'Cannot update combinations';
            $this->sendNotification($data_notification);

            return 'Cannot update combinations';
        }

        $context = Context::getContext();
        $id_shop = Configuration::get('PRICECSVUPDATE_M_SHOP');
        if (!$id_shop) {
            $id_shop = (int)$context->shop->id;
        }

        if (Tools::version_compare(_PS_VERSION_, '1.5.6.0', '>=') == true && $id_shop != false) {
            $sql_start = 'UPDATE `' . _DB_PREFIX_ . 'product_attribute` pa 
                    LEFT JOIN `' . _DB_PREFIX_ . 'product_attribute_shop` pas ON (pa.`id_product_attribute` = pas.`id_product_attribute`) ';
        } else {
            $sql_start = 'UPDATE `' . _DB_PREFIX_ . 'product_attribute` pas ';
        }

        if ($type_key == 'product_supplier_reference') {
            $sql_start .= 'LEFT JOIN `' . _DB_PREFIX_ . 'product_supplier` psup ON (pas.`id_product_attribute` = psup.`id_product_attribute`)';
        }


        if (Tools::strlen($n_price) > 0) {
            $sql_price = 'pas.`price` = CASE ';
            $sql_fix_price = 'spr.`price` = CASE ';
        }

        if ($n_whprice > 0) {
            $sql_whprice = 'pas.`wholesale_price` = CASE ';
        }

        if ($n_ean > 0) {
            $sql_ean = 'pa.`ean13` = CASE ';
        }

        if ($n_param1 > 0) {
            $sql_param1 = 'pas.`weight` = CASE ';
        }

        if ($n_qty > 0) {
            $sql_start .= ' LEFT JOIN `' . _DB_PREFIX_ . 'stock_available` qty ON (pa.`id_product_attribute` = qty.`id_product_attribute`)';
            $sql_qty = 'qty.`quantity` = CASE ';
        }

        if ($type_key == 'id_product') {
            $type_key = 'pas`.`id_product_attribute';
        }

        $reff_arr1 = array();

        while (($data = fgetcsv($handle_attr, 1000, $separat)) !== false) {
            if (!empty($data[$n_edit])) {
                $count_line++;
                if (Tools::strlen($n_price) > 0) {
                    $t_price = str_replace(' ', '', $data[$n_price]);
                    $t_price = ((float)str_replace(',', '.', $t_price));
                    //$t_price = str_replace('.', '', $data[$n_price]);
                    $sql_price .= 'WHEN `' . (string)$type_key . '` = "' . (string)$data[$n_edit] . '" THEN "' . (float)$t_price . '" ';
                    $sql_fix_price .= 'WHEN `' . (string)$type_key . '` = "' . (string)$data[$n_edit] . '" THEN "' . (float)$t_price . '" ';
                }
                if ($n_whprice > 0) {
                    $t_whprice = str_replace(' ', '', $data[$n_whprice]);
                    $sql_whprice .= 'WHEN `' . (string)$type_key . '` = "' . (string)$data[$n_edit] . '" THEN "' . (float)$t_whprice . '" ';
                }
                if ($n_qty > 0) {
                    $sql_qty .= 'WHEN `' . (string)$type_key . '` = "' . (string)$data[$n_edit] . '" THEN "' . (float)$data[$n_qty] . '" ';
                }

                if ($n_ean > 0) {
                    $sql_ean .= 'WHEN `' . (string)$type_key . '` = "' . (string)$data[$n_edit] . '" THEN "' . (string)$data[$n_ean] . '" ';
                }

                if ($n_param1 > 0) {
                    $sql_param1 .= 'WHEN `' . (string)$type_key . '` = "' . (string)$data[$n_edit] . '" THEN "' . (string)$data[$n_param1] . '" ';
                    $sql_additional_param1 = 'WHEN `' . (string)$type_key . '` = "' . (string)$data[$n_edit] . '" THEN "' . (string)$data[$n_param1] . '" ';
                }

                $reff_arr1[] = $data[$n_edit];
            }
        }

        fclose($handle_attr);

        $sql = $sql_start . ' SET ';
        if (Tools::strlen($n_price) > 0) {
            $sql .= $sql_price . ' END ';
        }

        if ((($n_price > 0) && ($n_qty > 0)) || (($n_price > 0) && ($n_ean > 0)) || (($n_price > 0) && ($n_whprice > 0)) || (($n_price > 0) && ($n_param1 > 0))) {
            $sql .= ' , ';
        }
        if ($n_whprice > 0) {
            $sql .= $sql_whprice . ' END ';
        }
        if ((($n_whprice > 0) && ($n_qty > 0)) || (($n_whprice > 0) && ($n_ean > 0)) || (($n_whprice > 0) && ($n_param1 > 0))) {
            $sql .= ' , ';
        }
        if ($n_qty > 0) {
            $sql .= $sql_qty . ' END ';
        }

        if (($n_qty > 0) && ($n_ean > 0) || (($n_qty > 0) && ($n_param1 > 0))) {
            $sql .= ' , ';
        }

        if ($n_ean > 0) {
            $sql .= $sql_ean . ' END ';
        }

        if (($n_ean > 0) && ($n_param1 > 0)) {
            $sql .= ' , ';
        }

        if ($n_param1 > 0) {
            $sql .= $sql_param1 . ' END ';
        }

        $where_shop = '';
        if (Tools::version_compare(_PS_VERSION_, '1.5.6.0', '>=') == true && $id_shop != false && $id_shop != 'all') {
            $where_shop = ' AND pas.`id_shop` = ' . (int)$id_shop;
        }

        $sql .= 'WHERE `' . pSQL($type_key) . '` IN ("' . implode('","', $reff_arr1) . '")' . $where_shop;

        if (Tools::strlen($n_price) > 0) {
            // Update specific_price
            $sql_fix_price_start = 'UPDATE `' . _DB_PREFIX_ . 'specific_price` spr ';
            $sql_fix_price_start .= 'LEFT JOIN `' . _DB_PREFIX_ . 'product_attribute` pa ON (spr.`id_product_attribute` = pa.`id_product_attribute`) ';
            $sql_fix_price_start .= 'LEFT JOIN `' . _DB_PREFIX_ . 'product_attribute_shop` pas ON (pa.`id_product_attribute` = pas.`id_product_attribute`) ';
            $sql_fix_price_itog = $sql_fix_price_start . ' SET ';
            $sql_fix_price_itog .= $sql_fix_price . ' END ';
            $sql_fix_price_itog .= 'WHERE `' . pSQL($type_key) . '` IN (\'' . implode("','", $reff_arr1) . '\')';
            $sql_fix_price_itog .= ' AND `reduction_type` = "amount"';

            Db::getInstance()->execute($sql_fix_price_itog);
        }

        if ($n_param1 > 0) {
            //$sql_additional_param = $sql_start.' SET pa.`weight` = CASE '.$sql_additional_param1.' END '.' WHERE `'.pSQL($type_key).'` IN (\''.implode("','", $reff_arr1).'\')';
            //Db::getInstance()->execute($sql_additional_param);
        }

        if (!Db::getInstance()->execute($sql)) {
            $data_notification = 'Cannot update attribute: ' . Db::getInstance()->getMsgError();
            $this->sendNotification($data_notification);

            die($data_notification);
        }

        $data_notification = 'Update products attribute: ' . $count_line . '. Time: ' . (microtime(true) - $start) . ' s.';
        $this->sendNotification($data_notification);

        return $data_notification;
    }

    public function sendNotification($alert_content)
    {
        if (Configuration::get('PRICECSVUPDATE_EMAIL_ON')) {
            $iso_lng = Language::getIsoById((int)($this->context->language->id));
            if (is_dir($this->dir_mails . $iso_lng . '/')) {
                $id_lang_current = $this->context->language->id;
            } else {
                $id_lang_current = Language::getIdByIso('en');
            }
            $template_vars = array();
            $alert_email = Configuration::get('PRICECSVUPDATE_EMAIL');

            $template_vars['{alert_content}'] = $alert_content;

            Mail::Send(
                $id_lang_current,
                'alert-csv',
                'CSV Update',
                $template_vars,
                $alert_email,
                null,
                null,
                null,
                null,
                null,
                $this->dir_mails
            );
        }
    }

    protected function rewindBomAware($handle)
    {
        // A rewind wrapper that skips BOM signature wrongly
        if (!is_resource($handle)) {
            return false;
        }
        rewind($handle);
        if ((fread($handle, 3)) != "\xEF\xBB\xBF") {
            rewind($handle);
        }
    }

    public function rebildStockAvailable()
    {
        $context = Context::getContext();
        $id_shop = Configuration::get('PRICECSVUPDATE_M_SHOP');
        if (!$id_shop) {
            $id_shop = (int)$context->shop->id;
        }

        $where_shop = '';
        if (Tools::version_compare(_PS_VERSION_, '1.5.6.0', '>=') == true && $id_shop != false && $id_shop != 'all') {
            $where_shop = ' AND sa.`id_shop` = ' . (int)$id_shop;
        }

        $sql = 'SELECT `id_product`, SUM(`quantity`) as qty  FROM ' . _DB_PREFIX_ . 'stock_available sa WHERE `id_product_attribute` > 0 ' . $where_shop . ' GROUP BY `id_product` ';
        if ($results = Db::getInstance()->ExecuteS($sql)) {
            $sql_upd = 'UPDATE `' . _DB_PREFIX_ . 'stock_available` sa SET `quantity` = CASE ';
            $ids = array();
            foreach ($results as $row) {
                $sql_upd .= 'WHEN `id_product` = "' . (int)$row["id_product"] . '" THEN "' . (int)$row["qty"] . '" ';
                $ids[] = (int)$row["id_product"];
            }
            //$ids = implode('","', $ids);
            $sql_upd .= ' END ';
            $sql_upd .= ' WHERE `id_product` IN ("' . implode('","', $ids) . '")';
            $sql_upd .= ' AND `id_product_attribute` = 0 ' . $where_shop;

            if (!Db::getInstance()->execute($sql_upd)) {
                die('Erreur etc. StockAvailable' . Db::getInstance()->getMsgError());
            }

            return 'Stock Available - ok';
        }

        return 'Stock Available - Empty';
    }

    public function productUpdater()
    {
        if (Configuration::get('PS_MULTISHOP_FEATURE_ACTIVE')) {
            /*
            if ($shops = Shop::getShops()) {
                foreach ($shops as $shop) {
                  //TODO fix
                }
            }
            */
        }

        $type_file = Configuration::get('PRICECSVUPDATE_OBJ');
        $n_price = Configuration::get('PRICECSVUPDATE_COL_PRICE');
        $n_whprice = Configuration::get('PRICECSVUPDATE_COL_WHPRICE');
        $n_edit = Configuration::get('PRICECSVUPDATE_COL_EDIT');
        $n_qty = Configuration::get('PRICECSVUPDATE_COL_QUANTITY');
        $n_ean = Configuration::get('PRICECSVUPDATE_COL_EAN');
        $type_key = Configuration::get('PRICECSVUPDATE_KEY');
        $n_param1 = Configuration::get('PRICECSVUPDATE_COL_PARAM1');
        $n_param2 = Configuration::get('PRICECSVUPDATE_COL_PARAM2');

        $type_src = Configuration::get('PRICECSVUPDATE_SRC');
        $src_prod = Configuration::get('PRICECSVUPDATE_PROD_URL');
        $src_attr = Configuration::get('PRICECSVUPDATE_ATTR_URL');

        $text = '';

        if ($type_file == 'product') {
            if ($type_src == 'src_loc') {
                $file = $this->path_csv . '/product_import.csv';
            } else {
                $t_stamp = '_remote';
                $new_path_p = $this->path_csv . '/product_import' . $t_stamp . '.csv';

                if (copy($src_prod, $new_path_p)) {
                    // TODO mail if error
                    $file = $new_path_p;
                } else {
                    $errors = error_get_last();
                    $text .=  "COPY ERROR: " . $errors['type'];
                    $text .=  "<br />\n" . $errors['message'];
                }
            }
            $text .= $this->openCsvFile($file, $n_edit, $n_price, $n_whprice, $n_qty, $n_ean, $n_param1, $n_param2, $type_key);
        }

        if ($type_file == 'comb') {
            if ($type_src == 'src_loc') {
                $file = $this->path_csv . '/attr_import.csv';
            } else {
                $t_stamp = '_remote';
                $new_path_attr = $this->path_csv . '/attr_product_import' . $t_stamp . '.csv';

                if (copy($src_attr, $new_path_attr)) {
                    // TODO mail if error
                    $file = $new_path_attr;
                } else {
                    $errors = error_get_last();
                    $text .=  "COPY ERROR: " . $errors['type'];
                    $text .=  " | " . $errors['message'];
                }
            }

            $text .= $this->openCsvAttrFile($file, $n_edit, $n_price, $n_whprice, $n_qty, $n_ean, $n_param1, $n_param2, $type_key);

            if ($n_qty > 0) {
                $text .= $this->rebildStockAvailable();
            }
        }

        if ($type_file == 'both') {
            if ($type_src == 'src_loc') {
                $file = $this->path_csv . '/product_import.csv';
            } else {
                $t_stamp = '_remote';
                $new_path_p = $this->path_csv . '/product_import' . $t_stamp . '.csv';

                if (copy($src_prod, $new_path_p)) {
                    // TODO mail if error
                    $file = $new_path_p;
                }
            }
            $text .= $this->openCsvFile($file, $n_edit, $n_price, $n_whprice, $n_qty, $n_ean, $n_param1, $n_param2, $type_key);

            if ($type_src == 'src_loc') {
                $file = $this->path_csv . '/attr_import.csv';
            } else {
                $t_stamp = '_remote';
                $new_path_attr = $this->path_csv . '/attr_product_import' . $t_stamp . '.csv';

                if (copy($src_attr, $new_path_attr)) {
                    // TODO mail if error
                    $file = $new_path_attr;
                }
            }

            $text .= $this->openCsvAttrFile($file, $n_edit, $n_price, $n_whprice, $n_qty, $n_ean, $n_param1, $n_param2, $type_key);

            if ($n_qty > 0) {
                $text .= $this->rebildStockAvailable();
            }
        }
        return  $text;
    }

    /**
     * Add the CSS & JavaScript files you want to be loaded in the BO.
     */
    public function hookBackOfficeHeader()
    {
        if (Tools::getValue('configure') == $this->name) {
            // New PS method "registerStylesheet" dont work in BO
            $this->context->controller->addCSS($this->_path . 'views/css/back.css');
        }
    }
}
