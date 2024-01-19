<?php
/*
* 2007-2014 PrestaShop
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
*  @copyright  2007-2014 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

if (!defined('_PS_VERSION_'))
	exit;
 
require(dirname(__FILE__).'/classes/StOutOfStockToNowhereProClass.php');
class StOutOfStockToNowherePro extends Module
{
    private $_html = '';
    public $fields_form;
    public $fields_value;
    private $_prefix_st = 'ST_NOWHERE_PRO_';
    public $validation_errors = array();
    private $_st_is_16;
    protected static $isrun = array();
	function __construct()
    {
		$this->name           = 'stoutofstocktonowherepro';
		$this->tab            = 'front_office_features';
		$this->version        = '1.0.3';
		$this->author         = 'SUNNYTOO.COM';
		$this->need_instance  = 0;
		$this->bootstrap 	  = true;
		parent::__construct();

		$this->displayName = $this->l('Hiding out of stock products pro');
		$this->description = $this->l('Set the visibility of out of stock products to nowhere to force them not showing on the front office.');
        $this->ps_versions_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_);

        $this->_st_is_16      = Tools::version_compare(_PS_VERSION_, '1.7');
	}
     
	function install()
	{
		if (!parent::install() 
            || !$this->registerHook('actionUpdateQuantity')
            || !Configuration::updateValue($this->_prefix_st.'CLEAR_CACHE_ORDER', 0)
            || !Configuration::updateValue($this->_prefix_st.'AUTO', 1)
            || !Configuration::updateValue($this->_prefix_st.'EMAIL_OUT_OF_STOCK', 1)
            || !Configuration::updateValue($this->_prefix_st.'EMAIL_RESTOCK', 0)
            || !Configuration::updateValue($this->_prefix_st.'SHOP_EMAIL', '')
            || !Configuration::updateValue($this->_prefix_st.'THRESHOLD', 0)
            || !Configuration::updateValue($this->_prefix_st.'VISIBILITY', 'none')
            || !$this->installDB()
        )
			return false;
		return true;
	}

    public function uninstall()
    {
        if (!parent::uninstall()
            || !$this->uninstallDB()
        ) {
            return false;
        }
        return true;
    }

    public function installDb()
    {
        $return = true;
        $return &= Db::getInstance()->execute('
            CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'st_stock_visibility_pro` (
            `id_product` int(10) unsigned NOT NULL,
            `quantity` int(10) unsigned NOT NULL,
            `id_shop` int(10) unsigned NOT NULL,
            `status` int(10) unsigned NOT NULL DEFAULT 0,
            PRIMARY KEY  (`id_product`,`id_shop`)
            ) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8 ;');
        
        $return &= Db::getInstance()->execute('INSERT INTO '._DB_PREFIX_.'st_stock_visibility_pro (`id_product`, `quantity`, `id_shop`, `status`)
            SELECT `id_product`, IF(`quantity` > 0, 1, 0), `id_shop`, 0 FROM '._DB_PREFIX_.'stock_available WHERE `id_product_attribute`=0;');

        return $return;
    }
    private function uninstallDb()
    {
        return Db::getInstance()->execute('
            DROP TABLE IF EXISTS
            `'._DB_PREFIX_.'st_stock_visibility_pro`');
    }
    public function getContent()
    {
        $this->context->controller->addCSS(($this->_path).'views/css/admin.css');
        $this->context->controller->addJS(($this->_path).'views/js/admin.js');
        if(Tools::getValue('act')=='to_nowhere')
        {
            $res = $this->setVisibilityToNone($this->getOutOfStockIds());
            Tools::redirectAdmin(AdminController::$currentIndex.'&configure='.$this->name.'&token='.Tools::getAdminTokenLite('AdminModules'));
            if($res)
                $this->_html .= $this->displayConfirmation($this->l('Success.'));
        }
        if(Tools::getValue('act')=='to_everywhere')
        {
            $res = $this->setVisibilityToVisible($this->getNowhereInstockIds());
            Tools::redirectAdmin(AdminController::$currentIndex.'&configure='.$this->name.'&token='.Tools::getAdminTokenLite('AdminModules'));
            if($res)
                $this->_html .= $this->displayConfirmation($this->l('Success.'));
        }
        if($id_product = (int)Tools::getValue('one_to_none'))
        {
            $res = $this->setVisibilityToNone([$id_product]);
            Tools::redirectAdmin(AdminController::$currentIndex.'&configure='.$this->name.(Tools::isSubmit('outofstock') ? '&outofstock=1' : (Tools::isSubmit('nowhere')?'&nowhere=1': '')).(Tools::getValue('submitFilteroutofstock') ? '&submitFilteroutofstock='.(int)Tools::getValue('submitFilteroutofstock') : '').'&token='.Tools::getAdminTokenLite('AdminModules'));
            if($res)
                $this->_html .= $this->displayConfirmation($this->l('Success.'));
        }
        if($id_product = (int)Tools::getValue('one_to_both'))
        {
            $res = $this->setVisibilityToVisible([$id_product]);
            Tools::redirectAdmin(AdminController::$currentIndex.'&configure='.$this->name.(Tools::isSubmit('outofstock') ? '&outofstock=1' : (Tools::isSubmit('nowhere')?'&nowhere=1': '')).(Tools::getValue('submitFilteroutofstock') ? '&submitFilteroutofstock='.(int)Tools::getValue('submitFilteroutofstock') : '').'&token='.Tools::getAdminTokenLite('AdminModules'));
            if($res)
                $this->_html .= $this->displayConfirmation($this->l('Success.'));
        }
        if(Tools::isSubmit('submitResetoutofstock')){
            unset($_POST['outofstockFilter_id_product'],$_POST['outofstockFilter_name'],$_POST['outofstockFilter_visibility']);
            Tools::redirectAdmin(AdminController::$currentIndex.'&configure='.$this->name.'&outofstock=1&token='.Tools::getAdminTokenLite('AdminModules'));
        }
        if(Tools::isSubmit('submitResetnowhere')){
            unset($_POST['outofstockFilter_id_product'],$_POST['outofstockFilter_name'],$_POST['outofstockFilter_visibility']);
            Tools::redirectAdmin(AdminController::$currentIndex.'&configure='.$this->name.'&nowhere=1&token='.Tools::getAdminTokenLite('AdminModules'));
        }

        if (Tools::isSubmit('outofstock')) {
            if (Tools::isSubmit('submitBulkto_nowhereoutofstock') && ($id_array = Tools::getValue('outofstockBox'))) {
                $res = $this->setVisibilityToNone($id_array);
                Tools::clearSmartyCache();
                Tools::redirectAdmin(AdminController::$currentIndex.'&configure='.$this->name.'&outofstock=1&token='.Tools::getAdminTokenLite('AdminModules'));
            }

            if (Tools::isSubmit('submitBulkto_everywhereoutofstock') && ($id_array = Tools::getValue('outofstockBox'))) {
                $res = $this->setVisibilityToVisible($id_array);
                Tools::clearSmartyCache();
                Tools::redirectAdmin(AdminController::$currentIndex.'&configure='.$this->name.'&outofstock=1&token='.Tools::getAdminTokenLite('AdminModules'));
            }

            return $this->_html.$this->renderOutOfStockList();
        }elseif (Tools::isSubmit('nowhere')) {
            if (Tools::isSubmit('submitBulkto_nowherenowhere') && ($id_array = Tools::getValue('nowhereBox'))) {
                $res = $this->setVisibilityToNone($id_array);
                Tools::clearSmartyCache();
                Tools::redirectAdmin(AdminController::$currentIndex.'&configure='.$this->name.'&nowhere=1&token='.Tools::getAdminTokenLite('AdminModules'));
            }

            if (Tools::isSubmit('submitBulkto_everywherenowhere') && ($id_array = Tools::getValue('nowhereBox'))) {
                $res = $this->setVisibilityToVisible($id_array);
                Tools::clearSmartyCache();
                Tools::redirectAdmin(AdminController::$currentIndex.'&configure='.$this->name.'&nowhere=1&token='.Tools::getAdminTokenLite('AdminModules'));
            }
            return $this->_html.$this->renderNoWhereList();
        }else{
            $this->initFieldsForm();
            if (isset($_POST['savestoutofstocktonowherepro']))
            {
                foreach($this->fields_form as $form)
                    foreach($form['form']['input'] as $field)
                        if(isset($field['validation']))
                        {
                            $ishtml = ($field['validation']=='isAnything') ? true : false;
                            $errors = array();       
                            $value = Tools::getValue($field['name']);
                            if (isset($field['required']) && $field['required'] && $value==false && (string)$value != '0')
                                    $errors[] = sprintf($this->l('Field "%s" is required.'), $field['label']);
                            elseif($value)
                            {
                                $field_validation = $field['validation'];
                                if (!Validate::$field_validation($value))
                                    $errors[] = sprintf($this->l('Field "%s" is invalid.'), $field['label']);
                            }
                            // Set default value
                            if ($value === false && isset($field['default_value']))
                                $value = $field['default_value'];
                            
                            if(count($errors))
                            {
                                $this->validation_errors = array_merge($this->validation_errors, $errors);
                            }
                            elseif($value==false)
                            {
                                switch($field['validation'])
                                {
                                    case 'isUnsignedId':
                                    case 'isUnsignedInt':
                                    case 'isInt':
                                    case 'isBool':
                                        $value = 0;
                                    break;
                                    default:
                                        $value = '';
                                    break;
                                }
                                Configuration::updateValue($this->_prefix_st.strtoupper($field['name']), $value);
                            }
                            else
                                Configuration::updateValue($this->_prefix_st.strtoupper($field['name']), $value, $ishtml);
                        }

                if(count($this->validation_errors))
                    $this->_html .= $this->displayError(implode('<br/>',$this->validation_errors));
                else 
                    $this->_html .= $this->displayConfirmation($this->l('Settings updated'));

                $this->_clearCache('*');
            }

            $helper = $this->initForm();
            return $this->_html.$helper->generateForm($this->fields_form);
        }
    }

    protected function initFieldsForm()
    {
        $this->fields_form[0]['form'] = array(
            'legend' => array(
                'title' => $this->l('Products:'),
                'icon' => 'icon-cogs'
            ),
            'input' => array(
                'out_of_stock_info' => array(
                    'type' => 'html',
                    'id' => '',
                    'label' => $this->l('Out of stock products'),
                    'name' => '',
                ),
                'back_to_everywhere' => array(
                    'type' => 'html',
                    'id' => '',
                    'label' => $this->l('Nowhere products'),
                    'name' => '',
                ),
            ),
            'submit' => array(
                'title' => $this->l('Save')
            )
        );
        $this->fields_form[3]['form'] = array(
            'legend' => array(
                'title' => $this->l('General:'),
                'icon' => 'icon-cogs'
            ),
            'input' => array(
                array(
                    'type' => 'switch',
                    'label' => $this->l('Manage the Visibility field automatically'),
                    'name' => 'auto',
                    'default_value' => 1,
                    'values' => array(
                        array(
                            'id' => 'auto_1',
                            'value' => 1,
                            'label' => $this->l('YES')),
                        array(
                            'id' => 'auto_0',
                            'value' => 0,
                            'label' => $this->l('NO')),
                    ),
                    'desc' => array(
                        $this->l('When this option is enabled, your changes to the Visibility field will be ingored, this module will manage the Visibility field accordion to stock information.'),
                        $this->l('If you don\'t use this feature, you can use cron job to manage the Visibility field.'),
                    ),
                    'validation' => 'isUnsignedInt',
                ),
                array(
                    'type' => 'switch',
                    'label' => $this->l('Clear the Smarty cache when products are restocked and sold out'),
                    'name' => 'clear_cache_order',
                    'default_value' => 0,
                    'values' => array(
                        array(
                            'id' => 'clear_cache_order_1',
                            'value' => 1,
                            'label' => $this->l('YES')),
                        array(
                            'id' => 'clear_cache_order_0',
                            'value' => 0,
                            'label' => $this->l('NO')),
                    ),
                    'desc' => $this->l('If you do changes on the back office product page, the Smarty cache will be cleared automatically.'),
                    'validation' => 'isUnsignedInt',
                ),
                array(
                    'type' => 'text',
                    'label' => $this->l('Threshold'),
                    'default_value'=> 0,
                    'name' => 'threshold',
                    'validation' => 'isUnsignedInt',
                    'class' => 'fixed-width-lg',
                    'desc' => array(
                            $this->l('Generally, leave it as the default value 0 to hide products when they are out of stock.'),
                            $this->l('If you want to hide products when the stock is lower than 2, then set this to 2.'),
                        ),
                ),
                array(
                    'type' => 'radio',
                    'label' => $this->l('Set the Visibility field of out of stock products to'),
                    'name' => 'visibility',
                    'default_value' => 'none',
                    'values' => array(
                        array(
                            'id' => 'visibility_0',
                            'value' => 'none',
                            'label' => $this->l('No where')),
                        array(
                            'id' => 'visibility_1',
                            'value' => 'search',
                            'label' => $this->l('Search only')),
                        array(
                            'id' => 'visibility_2',
                            'value' => 'catalog',
                            'label' => $this->l('Catalog only')),
                    ),
                    'validation' => 'isGenericName',
                ),
            ),
            'submit' => array(
                'title' => $this->l('Save')
            )
        );
        $this->fields_form[1]['form'] = array(
            'legend' => array(
                'title' => $this->l('Cron:'),
                'icon' => 'icon-cogs'
            ),
            'input' => array(
                array(
                    'type' => 'html',
                    'id' => '',
                    'label' => $this->l('Url for set out of stock products\'s visibility field to "Nowhere"'),
                    'name' => $this->context->link->getModuleLink('stoutofstocktonowherepro', 'cron', array('action'=>'to_nowhere', 'token'=>Tools::substr(Tools::encrypt('stoutofstocktonowherepro/cron'), 0, 10)), null, null, null, false),
                ),
                array(
                    'type' => 'html',
                    'id' => '',
                    'label' => $this->l('Url for set restocked products\'s visibility field back to "Everywhere"'),
                    'name' => $this->context->link->getModuleLink('stoutofstocktonowherepro', 'cron', array('action'=>'to_everywhere', 'token'=>Tools::substr(Tools::encrypt('stoutofstocktonowherepro/cron'), 0, 10)), null, null, null, false),
                ),
            ),
            'submit' => array(
                'title' => $this->l('Save')
            )
        );
        $this->fields_form[2]['form'] = array(
            'legend' => array(
                'title' => $this->l('Email notification:'),
                'icon' => 'icon-cogs'
            ),
            'input' => array(
                array(
                    'type' => 'switch',
                    'label' => $this->l('Out of stock notification'),
                    'name' => 'email_out_of_stock',
                    'default_value' => 1,
                    'values' => array(
                        array(
                            'id' => 'email_out_of_stock_1',
                            'value' => 1,
                            'label' => $this->l('YES')),
                        array(
                            'id' => 'email_out_of_stock_0',
                            'value' => 0,
                            'label' => $this->l('NO')),
                    ),
                    'validation' => 'isUnsignedInt',
                ),
                array(
                    'type' => 'switch',
                    'label' => $this->l('Restock notification'),
                    'name' => 'email_restock',
                    'default_value' => 1,
                    'values' => array(
                        array(
                            'id' => 'email_restock_1',
                            'value' => 1,
                            'label' => $this->l('YES')),
                        array(
                            'id' => 'email_restock_0',
                            'value' => 0,
                            'label' => $this->l('NO')),
                    ),
                    'validation' => 'isUnsignedInt',
                ),
                array(
                    'type' => 'text',
                    'label' => $this->l('Send email notifications to'),
                    'default_value'=> '',
                    'name' => 'shop_email',
                    'validation' => 'isEmail',
                    'desc' => sprintf($this->l('Email notifications will be sent to %s by default.'), Configuration::get('PS_SHOP_EMAIL')),
                ),
            ),
            'submit' => array(
                'title' => $this->l('Save')
            )
        );

        $ids = $this->getOutOfStockIds();
        if(is_array($ids) && count($ids)){
            $this->fields_form[0]['form']['input']['out_of_stock_info']['name'] .= sprintf($this->l('There are %s products out of stock.'), count($ids));
            $visible_number = Db::getInstance()->getValue('
                SELECT count(*)
                FROM `'._DB_PREFIX_.'product` p
                '.Shop::addSqlAssociation('product', 'p').'
                WHERE p.`id_product` IN ('.implode($ids, ',').')
                AND product_shop.`visibility` IN ("both", "catalog", "search")');
            if($visible_number){
                $this->fields_form[0]['form']['input']['out_of_stock_info']['name'] .= sprintf($this->l('%s of them are still visible on the front office.'), $visible_number);
            }
            else
                $this->fields_form[0]['form']['input']['out_of_stock_info']['name'] .= $this->l('All of them have been set to be invisible on the front office.');
            $this->fields_form[0]['form']['input']['out_of_stock_info']['name'] .= '<br/><a href="'.AdminController::$currentIndex.'&configure='.$this->name.'&outofstock=1&token='.Tools::getAdminTokenLite('AdminModules').'" class="btn btn-default">'.$this->l('View and manage all out of stock products').'</a>';
        }
        else
            $this->fields_form[0]['form']['input']['out_of_stock_info']['name'] .= $this->l('All products are in stock.');

        $nowhere_instock_ids = $this->getNowhereInstockIds();
        if(is_array($nowhere_instock_ids) && count($nowhere_instock_ids)){
            $this->fields_form[0]['form']['input']['back_to_everywhere']['name'] .= sprintf($this->l('There are %s products are restocked, but they are still in Nowhere.'), count($nowhere_instock_ids));
            $this->fields_form[0]['form']['input']['back_to_everywhere']['name'] .= '<br/><a href="'.AdminController::$currentIndex.'&configure='.$this->name.'&nowhere=1&token='.Tools::getAdminTokenLite('AdminModules').'" class="btn btn-default">'.$this->l('View and manage all Nowhere products').'</a>';
        }
        else
            $this->fields_form[0]['form']['input']['back_to_everywhere']['name'] .= $this->l('There is no product which is restocked but still in Nowhere');
    }
    protected function initForm()
    {
        $helper = new HelperForm();
        $helper->show_toolbar = false;
        $helper->table =  $this->table;
        $helper->module = $this;
        $lang = new Language((int)Configuration::get('PS_LANG_DEFAULT'));
        $helper->default_form_language = $lang->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') ? Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') : 0;

        $helper->identifier = $this->identifier;
        $helper->submit_action = 'savestoutofstocktonowherepro';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false).'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->tpl_vars = array(
            'fields_value' => $this->getConfigFieldsValues(),
            'languages' => $this->context->controller->getLanguages(),
            'id_language' => $this->context->language->id
        );
        return $helper;
    }
    
    private function getConfigFieldsValues()
    {
        $fields_values = array(
            'clear_cache_order'               => Configuration::get($this->_prefix_st.'CLEAR_CACHE_ORDER'),
            'auto'               => Configuration::get($this->_prefix_st.'AUTO'),
            'email_out_of_stock'               => Configuration::get($this->_prefix_st.'EMAIL_OUT_OF_STOCK'),
            'email_restock'               => Configuration::get($this->_prefix_st.'EMAIL_RESTOCK'),
            'shop_email'               => Configuration::get($this->_prefix_st.'SHOP_EMAIL'),
            'threshold'               => Configuration::get($this->_prefix_st.'THRESHOLD'),
            'visibility'               => Configuration::get($this->_prefix_st.'VISIBILITY'),
        );
        return $fields_values;
    }
    public function setOutOfStockVisibility($value, $row)
    {
        return $this->setVisibility($value, $row, 'outofstock');
    }
    public function setNoWhereVisibility($value, $row)
    {
        return $this->setVisibility($value, $row, 'nowhere');
    }
    public function setVisibility($value, $row, $key)
    {
        return '<a href="'.$this->context->link->getAdminLink('AdminModules').'&configure='.$this->name.'&module_name='.$this->name.'&one_to_'.($value=='none' ? 'both' : 'none').'='.$row['id_product'].'&'.$key.'=1'.(Tools::getValue('submitFilter'.$key) ? '&submitFilter'.$key.'='.(int)Tools::getValue('submitFilter'.$key) : '').'" title="'.$this->l('Click to switch between Everywhere and Nowhere.').'" class="btn btn-default">'.($value=='both' ? $this->l('Everywhere') :($value=='none' ? $this->l('Nowhere') : $value)).'</a>';
    }

    public function getOutOfStockProducts(
        $get_total = false,
        $p = null,
        $n = null
    ) {
        $query = new DbQuery();
        if ($get_total)
            $query->select('count(0)');
        else
            $query->select('sa.`id_product`, pl.`name`, ps.`visibility`');
        $query->from('stock_available', 'sa');
        $query->leftJoin('product_shop', 'ps', 'ps.`id_product` = sa.`id_product` and ps.`id_shop` = '.Context::getContext()->shop->id);
        $query->leftJoin('product_lang', 'pl', 'pl.`id_product` = sa.`id_product` and pl.`id_lang` = '.Context::getContext()->language->id);
        $query->where('sa.`id_product_attribute` = 0');
        $query->where('sa.`quantity` <= '.(int)Configuration::get($this->_prefix_st.'THRESHOLD'));
        $query->where('(sa.`out_of_stock` = 0 '.(Configuration::get('PS_ORDER_OUT_OF_STOCK') ? '' : ' || sa.`out_of_stock`=2').' )');
        if($id_product = (int)Tools::getValue('outofstockFilter_id_product'))
            $query->where('sa.`id_product` = '.pSQL($id_product));
        if($name = Tools::getValue('outofstockFilter_name'))
            $query->where('pl.`name` like "%'.pSQL($name).'%"');
        if($visibility = Tools::getValue('outofstockFilter_visibility'))
            $query->where('ps.`visibility` = "'.pSQL($visibility).'"');
        $query = StockAvailable::addSqlShopRestriction($query, Context::getContext()->shop->id, 'sa');
        if ($get_total)
            return Db::getInstance()->getValue($query);

        $query->orderBy('ps.`visibility`, sa.`id_product`');
        if ((int)$p && (int)$n) {
            $p = (int)$p;
            $n = (int)$n;
            $query->limit($n,($p-1)*$n);
        }
        return Db::getInstance()->executeS($query);
    }
    protected function renderOutOfStockList()
    {
        $nbr_products = $this->getOutOfStockProducts(true);
        $fields_list = array(
            'id_product' => array(
                'title' => $this->l('ID'),
                'type' => 'text',
                'class'=>'fixed-width-xl',
                ),
            'name' => array(
                'title' => $this->l('Product'),
                'type' => 'text',
                ),
            'visibility' => array(
                'title' => $this->l('Visibility'),
                'type' => 'select',
                'callback' => 'setOutOfStockVisibility',
                'callback_object' => $this,
                'filter_key' => 'visibility',
                'list' => array(
                    'both'=>'both',
                    'none'=>'none',
                    'catalog'=>'catalog',
                    'search'=>'search',
                    ),
                ),
        );
        
        $helper = new HelperList();
        $helper->shopLinkType = '';
        $helper->simple_header = false;
        $helper->show_filters = false;
        $helper->actions = array('edit');
        $helper->show_toolbar = true;
        $helper->module = $this;
        $helper->listTotal = $nbr_products;
        $helper->identifier = 'id_product';
        $helper->title = $this->l('Out of stock products');
        $helper->table = 'outofstock';
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->currentIndex = AdminController::$currentIndex.'&configure='.$this->name.'&outofstock=1';

        $helper->_pagination = array(20);
        $helper->_default_pagination = 20;
        
        $helper->toolbar_btn['back'] =  array(
            'href' => AdminController::$currentIndex.'&configure='.$this->name.'&token='.Tools::getAdminTokenLite('AdminModules'),
            'desc' => $this->l('Back to the settings page')
        );
        $helper->bulk_actions['to_nowhere'] = array(
            'text'=>$this->l('Set to Nowhere'),
        );
        $helper->bulk_actions['to_everywhere'] = array(
            'text'=>$this->l('Set to Everywhere'),
        );

        /* Paginate the result */
        $page = (int)Tools::getValue('submitFilter'.$helper->table);
        $pagination = ($pagination = Tools::getValue($helper->table.'_pagination')) ? $pagination : 20;
        $products = $this->getOutOfStockProducts(false, $page, $pagination);
        return '<p><a href="'.AdminController::$currentIndex.'&configure='.$this->name.'&act=to_nowhere&token='.Tools::getAdminTokenLite('AdminModules').'" class="btn btn-primary">'.$this->l('Set to Nowhere for all.').'</a></p>'.$helper->generateList($products, $fields_list);
    }
    public function displayEditLink($token, $id, $name)
    {
        return '<a href="'.$this->context->link->getAdminLink('AdminProducts', true, ['id_product' => $id, 'updateproduct' => '1']).'" target="_blank" title="'.$this->l('Edit product info on the back office product page.').'" class="btn btn-default"><i class="icon-pencil"></i>'.$this->l(' Edit ').'</a>';
    }
    public function getNowhereProducts(
        $get_total = false,
        $p = null,
        $n = null
    ) {
        $query = new DbQuery();
        if ($get_total)
            $query->select('count(0)');
        else
            $query->select('sa.`id_product`, pl.`name`, ps.`visibility`, sa.`quantity`');
        $query->from('stock_available', 'sa');
        $query->leftJoin('product_shop', 'ps', 'ps.`id_product` = sa.`id_product` and ps.`id_shop` = '.Context::getContext()->shop->id);
        $query->leftJoin('product_lang', 'pl', 'pl.`id_product` = sa.`id_product` and pl.`id_lang` = '.Context::getContext()->language->id);
        $query->where('ps.`visibility` IN ("none")');
        $query->where('sa.`id_product_attribute` = 0');
        $query->where('sa.`quantity` > '.(int)Configuration::get($this->_prefix_st.'THRESHOLD'));
        $query->where('(sa.`out_of_stock` = 0 '.(Configuration::get('PS_ORDER_OUT_OF_STOCK') ? '' : ' || sa.`out_of_stock`=2').' )');
        if($id_product = (int)Tools::getValue('outofstockFilter_id_product'))
            $query->where('sa.`id_product` = '.pSQL($id_product));
        if($name = Tools::getValue('outofstockFilter_name'))
            $query->where('pl.`name` like "%'.pSQL($name).'%"');
        $query = StockAvailable::addSqlShopRestriction($query, Context::getContext()->shop->id, 'sa');
        if ($get_total)
            return Db::getInstance()->getValue($query);

        $query->orderBy('sa.`quantity` DESC');
        if ((int)$p && (int)$n) {
            $p = (int)$p;
            $n = (int)$n;
            $query->limit($n,($p-1)*$n);
        }
        return Db::getInstance()->executeS($query);
    }
    protected function renderNoWhereList()
    {
        $nbr_products = $this->getNowhereProducts(true);
        $fields_list = array(
            'id_product' => array(
                'title' => $this->l('ID'),
                'type' => 'text',
                'class'=>'fixed-width-xl',
                ),
            'name' => array(
                'title' => $this->l('Product'),
                'type' => 'text',
                ),
            'visibility' => array(
                'title' => $this->l('Visibility'),
                'type' => 'text',
                'callback' => 'setNoWhereVisibility',
                'callback_object' => $this,
                'search' => false,
                ),
            'quantity' => array(
                'title' => $this->l('Quantity'),
                'type' => 'text',
                'search' => false,
                ),
        );
        
        $helper = new HelperList();
        $helper->shopLinkType = '';
        $helper->simple_header = false;
        $helper->show_filters = false;
        $helper->actions = array('edit');
        $helper->show_toolbar = true;
        $helper->module = $this;
        $helper->listTotal = $nbr_products;
        $helper->identifier = 'id_product';
        $helper->title = $this->l('Nowhere products');
        $helper->table = 'nowhere';
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->currentIndex = AdminController::$currentIndex.'&configure='.$this->name.'&nowhere=1';

        $helper->_pagination = array(20);
        $helper->_default_pagination = 20;
        
        $helper->toolbar_btn['back'] =  array(
            'href' => AdminController::$currentIndex.'&configure='.$this->name.'&token='.Tools::getAdminTokenLite('AdminModules'),
            'desc' => $this->l('Back to the settings page')
        );
        $helper->bulk_actions['to_nowhere'] = array(
            'text'=>$this->l('Set to Nowhere'),
        );
        $helper->bulk_actions['to_everywhere'] = array(
            'text'=>$this->l('Set to Everywhere'),
        );

        /* Paginate the result */
        $page = (int)Tools::getValue('submitFilter'.$helper->table);
        $pagination = ($pagination = Tools::getValue($helper->table.'_pagination')) ? $pagination : 20;
        $products = $this->getNowhereProducts(false, $page, $pagination);

        return '<p><a href="'.AdminController::$currentIndex.'&configure='.$this->name.'&act=to_everywhere&token='.Tools::getAdminTokenLite('AdminModules').'" class="btn btn-primary">'.$this->l('Set to Everywhere for all.').'</a></p>'.$helper->generateList($products, $fields_list);
    }
    public function hookActionUpdateQuantity($params){
        if(!Configuration::get('PS_STOCK_MANAGEMENT') || !Configuration::get($this->_prefix_st.'AUTO'))
            return;
        // Configuration::updateValue('ST_TEMP_2', Configuration::get('ST_TEMP_2').'-1');

        $id_product = (int) $params['id_product'];
        if(!$id_product)
            return;
        /*if (isset(self::$isrun[$id_product]))
            return;
        self::$isrun[$id_product] = true;*/

        $out_of_stock_ids = $this->getOutOfStockIds([$id_product]);
        // Configuration::updateValue('ST_TEMP_1_ID', Configuration::get('ST_TEMP_1_ID').'-'.$id_product);
        // Configuration::updateValue('ST_TEMP_1_COUNT', Configuration::get('ST_TEMP_1_COUNT').'-'.count($out_of_stock_ids));
        // if table li mian mei bu chun zai, na jiu shi xin jian chan ping, hui zhi dong qing chu smarty 
        $is_stock_change = false;
        $clear_cache_order = Configuration::get($this->_prefix_st.'CLEAR_CACHE_ORDER');
        // bu chun zai, ye shi false;
        $old_stock_info =  StOutOfStockToNowhereProClass::getQantityByIdProduct($id_product, $this->context->shop->id);

        if(count($out_of_stock_ids)){
            if($old_stock_info!==false && $old_stock_info){
                $this->setVisibilityToNone([$id_product]);
                $is_stock_change = true;
            }
        }else{
            if($old_stock_info!==false && !$old_stock_info){
                $this->setVisibilityToVisible([$id_product]);
                $is_stock_change = true;
            }
        }
        StOutOfStockToNowhereProClass::save($old_stock_info, $id_product, count($out_of_stock_ids) ? 0 : 1, $this->context->shop->id);

        if($clear_cache_order && $is_stock_change)
            Tools::clearSmartyCache();

        $id_lang = (int) $this->context->language->id;
        $iso = Language::getIsoById($id_lang);
        if (( Configuration::get($this->_prefix_st.'EMAIL_OUT_OF_STOCK') && count($out_of_stock_ids) && $is_stock_change &&
            file_exists(dirname(__FILE__).'/mails/'.$iso.'/out_of_stock.txt') &&
            file_exists(dirname(__FILE__).'/mails/'.$iso.'/out_of_stock.html') )
            ||
            ( Configuration::get($this->_prefix_st.'EMAIL_RESTOCK') && !count($out_of_stock_ids) && $is_stock_change &&
            file_exists(dirname(__FILE__).'/mails/'.$iso.'/restocked.txt') &&
            file_exists(dirname(__FILE__).'/mails/'.$iso.'/restocked.html') )) {
                $shop_email = Configuration::get($this->_prefix_st.'SHOP_EMAIL');
                Mail::Send(
                    $id_lang,
                    count($out_of_stock_ids) ? 'out_of_stock' : 'restocked',
                    count($out_of_stock_ids) ? Mail::l('A product is out of stock', $id_lang) : Mail::l('A product is restocked', $id_lang),
                    array(
                        '{product_name}' => Product::getProductName($id_product, null, $id_lang),
                    ),
                    $shop_email ?: Configuration::get('PS_SHOP_EMAIL'),
                    null,
                    (string) Configuration::get('PS_SHOP_EMAIL'),
                    (string) Configuration::get('PS_SHOP_NAME'),
                    null,
                    null,
                    dirname(__FILE__).'/mails/',
                    false,
                    $this->context->shop->id
                );
        }
        // Configuration::updateValue('ST_TEMP_1', Configuration::get('ST_TEMP_1').'-1');
    }
    
    public function getOutOfStockIds($ids=array()){
        $query = new DbQuery();
        $query->select('`id_product`');
        $query->from('stock_available');
        if(is_array($ids) && count($ids))
            $query->where('id_product IN ('.implode($ids, ',').')');
        $query->where('id_product_attribute = 0');
        $query->where('quantity <= '.(int)Configuration::get($this->_prefix_st.'THRESHOLD'));
        $query->where('(out_of_stock = 0 '.(Configuration::get('PS_ORDER_OUT_OF_STOCK') ? '' : ' || out_of_stock=2').' )');
        $query = StockAvailable::addSqlShopRestriction($query, Context::getContext()->shop->id);
        $result = Db::getInstance()->executeS($query);

        $out_of_stock_ids = array();
        if($result)
            foreach ($result as $product) {
                $out_of_stock_ids[] = $product['id_product'];
            }
        return $out_of_stock_ids;
    }
    public function getNowhereInstockIds($ids=array()){
        $query = new DbQuery();
        $query->select('sa.`id_product`');
        $query->from('stock_available', 'sa');
        $query->leftJoin('product_shop', 'ps', 'ps.`id_product` = sa.`id_product` and ps.`id_shop` = '.Context::getContext()->shop->id);
        if(is_array($ids) && count($ids))
            $query->where('sa.`id_product` IN ('.implode($ids, ',').')');
        $query->where('ps.`visibility` IN ("none")');
        $query->where('sa.`id_product_attribute` = 0');
        $query->where('sa.`quantity` > '.(int)Configuration::get($this->_prefix_st.'THRESHOLD'));
        $query->where('(sa.`out_of_stock` = 0 '.(Configuration::get('PS_ORDER_OUT_OF_STOCK') ? '' : ' || sa.`out_of_stock`=2').' )');
        $query = StockAvailable::addSqlShopRestriction($query, Context::getContext()->shop->id, 'sa');
        $result = Db::getInstance()->executeS($query);

        $nowhere_instock_ids = array();
        if($result)
            foreach ($result as $product) {
                $nowhere_instock_ids[] = $product['id_product'];
            }
        return $nowhere_instock_ids;
    }
    public function setVisibilityToNone($ids){
        if(!is_array($ids) || !count($ids))
            return false;
        $visibility = Configuration::get($this->_prefix_st.'VISIBILITY');
        return Db::getInstance()->execute(
                    'UPDATE `'._DB_PREFIX_.'product` p'.Shop::addSqlAssociation('product', 'p').'
                    SET p.`visibility` = "'.($visibility?:'none').'", product_shop.`visibility` = "'.($visibility?:'none').'"
                    WHERE p.`id_product` IN ('.implode($ids, ',').')'
                );
    }
    public function setVisibilityToVisible($ids){
        if(!is_array($ids) || !count($ids))
            return false;
        return Db::getInstance()->execute(
                    'UPDATE `'._DB_PREFIX_.'product` p'.Shop::addSqlAssociation('product', 'p').'
                    SET p.`visibility` = "both", product_shop.`visibility` = "both"
                    WHERE p.`id_product` IN ('.implode($ids, ',').')'
                );
    }

}