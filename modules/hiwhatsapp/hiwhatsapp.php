<?php
/**
* 2011 - 2021 HiPresta
*
* MODULE WhatsApp Live chat with customers
*
* @author    HiPresta <support@hipresta.com>
* @copyright HiPresta 2021
* @license   Addons PrestaShop license limitation
* @version   1.0.1
* @link      https://hipresta.com
*
* NOTICE OF LICENSE
*
* Don't use this module on several shops. The license provided by PrestaShop Addons
* for all its modules is valid only once for a single shop.
*/

if (!defined('_PS_VERSION_')) {
    exit;
}

include_once(dirname(__FILE__).'/classes/HiPrestaModule.php');
include_once(dirname(__FILE__).'/classes/adminForms.php');
include_once(dirname(__FILE__).'/classes/whatsappaccount.php');

class HiWhatsApp extends Module
{
    /*General settings*/
    public $errors = array();
    public $success = array();

    public $chatbox_position;
    public $display_offline_chatbox;
    public $display_offline_widgets;
    public $clean_db;
    public $psv;

    public function __construct()
    {
        $this->name = 'hiwhatsapp';
        $this->tab = 'front_office_features';
        $this->version = '1.0.1';
        $this->author = 'hipresta';
        $this->need_instance = 0;
        $this->secure_key = Tools::encrypt($this->name);
        $this->bootstrap = true;
        $this->module_key = 'b3fc8d3bfda4da3ebd35538cb5d9a404';
        parent::__construct();
        $this->globalVars();
        $this->displayName = $this->l('WhatsApp Live chat with customers');
        $this->description = $this->l('Allow your customers to contact you through WhatsApp.');
        $this->confirmUninstall = $this->l('Are you sure you want to uninstall?');
        $this->hiPrestaClass = new HiPrestaWhatsAppModule($this);
        $this->adminForms = new HiWhatsAppAdminForms($this);
    }

    public function install()
    {

        if (Shop::isFeatureActive()) {
            Shop::setContext(Shop::CONTEXT_ALL);
        }

        if (!parent::install()
            || !$this->registerHook('displayHeader')
            || !$this->registerHook('displayFooter')
            || !$this->registerHook('displayProductAdditionalInfo')
            || !$this->registerHook('displayRightColumnProduct')
            || !$this->installDB()
            || !$this->proceedDb()
            || !$this->registerHook('actionCreativeElementsInit')
            || !$this->hiPrestaClass->createTabs('AdminHiWhatsApp', 'AdminHiWhatsApp', 'CONTROLLER_TABS_HIWHATSAPP', 0)
        ) {
            return false;
        }
        return true;
    }

    private function installDB()
    {
        $res = (bool)Db::getInstance()->execute('
            CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'hiwhatsapp` (
                `id_hiwhatsapp` int(10) unsigned NOT NULL AUTO_INCREMENT,
                `active` TINYINT NOT NULL,
                `avatar` varchar (255) NOT NULL,
                `account_number` varchar (255) NOT NULL,
                `always_available` TINYINT NOT NULL,
                `availability` text NOT NULL,
                `position` int(10) unsigned NOT NULL,
                PRIMARY KEY (`id_hiwhatsapp`)
            ) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=UTF8;
        ');
        $res &= (bool)Db::getInstance()->execute('
            CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'hiwhatsapp_lang` (
                `id_hiwhatsapp` int(10) unsigned NOT NULL,
                `id_lang` int(10) unsigned NOT NULL,
                `name` varchar(255) NOT NULL,
                `title` varchar(255) NOT NULL,
                `button_label` varchar(255) NOT NULL,
                `offline_text` varchar(255) NOT NULL,
              PRIMARY KEY (`id_hiwhatsapp`,`id_lang`)
            ) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=UTF8;
        ');
        $res &= (bool)Db::getInstance()->execute('
            CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'hiwhatsapp_shop` (
                `id_hiwhatsapp` int(10) unsigned NOT NULL,
                `id_shop` int(10) unsigned NOT NULL,
              PRIMARY KEY (`id_hiwhatsapp`,`id_shop`)
            ) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=UTF8;
        ');
        $res &= (bool)Db::getInstance()->execute('
            CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'hiwhatsappposition` (
                `id_hiwhatsapp` int(10) unsigned NOT NULL,
                `position` varchar (255) NOT NULL,
                PRIMARY KEY (`id_hiwhatsapp`, `position`)
            ) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=UTF8;
        ');
        $res &= (bool)Db::getInstance()->execute('
            CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'hiwhatsapprelatedproduct` (
                `id_hiwhatsapp` int(10) unsigned NOT NULL,
                `id_product` int(10) unsigned NOT NULL,
                PRIMARY KEY (`id_hiwhatsapp`, `id_product`)
            ) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=UTF8;
        ');
        $res &= (bool)Db::getInstance()->execute('
            CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'hiwhatsapprelatedcategory` (
                `id_hiwhatsapp` int(10) unsigned NOT NULL,
                `id_category` int(10) unsigned NOT NULL,
                PRIMARY KEY (`id_hiwhatsapp`, `id_category`)
            ) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=UTF8;
        ');

        return $res;
    }

    public function uninstall()
    {
        if (!parent::uninstall()) {
            return false;
        }
        $this->hiPrestaClass->deleteTabs('CONTROLLER_TABS_HIWHATSAPP');
        if (Configuration::get('HIWHATSAPP_CLEAN_DB')) {
             $this->proceedDb(true);
        }
        return true;
    }

    private function proceedDb($drop = false)
    {
        $configure = array(
            'HIWHATSAPP_CLEAN_DB' => false,
            'HIWHATSAPP_CHATBOX_POSITION' => 'right',
            'HIWHATSAPP_OFFLINE_CHATBOX' => true,
            'HIWHATSAPP_OFFLINE_WIDGETS' => false
        );
        foreach ($configure as $key => $value) {
            if (!$drop) {
                Configuration::updateValue($key, $value);
            } else {
                Configuration::deleteByName($key);
            }
        }
        if ($drop) {
            $db_drop = array(
                'hiwhatsapp',
                'hiwhatsapp_lang',
                'hiwhatsapp_shop',
                'hiwhatsappposition',
                'hiwhatsapprelatedproduct',
                'hiwhatsapprelatedcategory'
            );
            foreach ($db_drop as $value) {
                DB::getInstance()->Execute('DROP TABLE IF EXISTS '._DB_PREFIX_.$value);
            }

            $avatars = glob(_PS_MODULE_DIR_.$this->name.'/views/img/avatars/*');
            foreach ($avatars as $avatar) {
                if (is_file($avatar) && $avatar != _PS_MODULE_DIR_.$this->name.'/views/img/avatars/index.php') {
                    unlink($avatar);
                }
            }
        }
        return true;
    }

    private function globalVars()
    {
        $this->chatbox_position = Configuration::get('HIWHATSAPP_CHATBOX_POSITION');
        $this->display_offline_chatbox = (bool)Configuration::get('HIWHATSAPP_OFFLINE_CHATBOX');
        $this->display_offline_widgets = (bool)Configuration::get('HIWHATSAPP_OFFLINE_WIDGETS');
        $this->clean_db = (bool)Configuration::get('HIWHATSAPP_CLEAN_DB');
        $this->psv = (float)Tools::substr(_PS_VERSION_, 0, 3);
    }

    public function renderMenuTabs()
    {
        $tabs = array(
            'whatsapp_accounts' => array(
                'title' => $this->l('WhatsApp Accounts'),
                'icon' => 'icon-book'
            ),
            'generel_settings' => array(
                'title' => $this->l('General settings'),
                'icon' => 'icon-cog'
            ),
            'version' => array(
                'title' => $this->l('Version'),
                'icon' => 'icon-info'
            )
        );

        $more_module = $this->hiPrestaClass->getModuleContent('A_WAP');
        if ($more_module) {
            $tabs['more_module'] = array(
                'title' => $this->l('More Modules'),
                'icon' => 'icon-plus-square'
            );
        }

        $this->context->smarty->assign(
            array(
                'psv' => $this->psv,
                'tabs' => $tabs,
                'module_version' => $this->version,
                'module_url' => $this->hiPrestaClass->getModuleUrl(),
                'module_tab_key' => $this->name,
                'active_tab' => Tools::getValue($this->name),
            )
        );
        return $this->display(__FILE__, 'views/templates/admin/menu.tpl');
    }

    public function renderShopGroupError()
    {
        $this->context->smarty->assign(
            array(
                'psv' => $this->psv,
            )
        );
        return $this->display(__FILE__, 'views/templates/admin/shop-group-error.tpl');
    }

    public function renderModuleAdminVariables()
    {
        $this->context->smarty->assign(
            array(
                'psv' => $this->psv,
                'id_lang' => $this->context->language->id,
                'wap_secure_key' => $this->secure_key,
                'wap_admin_controller' => $this->context->link->getAdminLink('AdminHiWhatsApp'),
                'ajax_error_message' => $this->l('Something went wrong, please refresh the page and try again')
            )
        );
        return $this->display(__FILE__, 'views/templates/admin/variables.tpl');
    }

    public function renderDisplayForm($content, $content_block)
    {
        $this->context->smarty->assign(
            array(
                'psv' => $this->psv,
                'errors' => $this->errors,
                'success' => $this->success,
                'content' => $content,
                'content_block' => $content_block
            )
        );
        return $this->display(__FILE__, 'views/templates/admin/display-form.tpl');
    }

    public function renderModuleAdvertisingForm()
    {
        $this->hiPrestaClass->getModuleContent('A_WAP', false, '', false);
        return $this->display(__FILE__, 'views/templates/admin/more-modules.tpl');
    }

    public function renderVersionForm()
    {
        $changelog = '';
        if (file_exists(dirname(__FILE__) . '/changelog.txt')) {
            $changelog = Tools::file_get_contents(dirname(__FILE__) . '/changelog.txt');
        }
        $this->context->smarty->assign('changelog', $changelog);

        return $this->display(__FILE__, 'views/templates/admin/version.tpl');
    }

    public function displayAjaxError($message)
    {
        die(Tools::jsonEncode(array(
            'error' => $message
        )));
    }

    public function isContentSizeValid($content, $size)
    {
        if (iconv_strlen($content) > $size) {
            return false;
        }

        return true;
    }

    public function uploadAvatar($name, $id_account)
    {
        if (!$_FILES[$name]['name'] && $id_account) {
            $account = new HiWhatsAppAccount($id_account);

            return $account->avatar;
        }

        if (!isset($_FILES[$name])) {
            return '';
        }

        if (!isset($_FILES[$name]['tmp_name']) || !$_FILES[$name]['tmp_name']) {
            return '';
        }

        $type = Tools::strtolower(Tools::substr(strrchr($_FILES[$name]['name'], '.'), 1));
        $file_name = $_FILES[$name]['name'];

        if (!in_array($type, array('jpg', 'jpeg', 'png', 'gif'))) {
            $this->displayAjaxError($this->l('Invalid image format'));
        }

        // get available file name
        if (file_exists(_PS_MODULE_DIR_.$this->name.'/views/img/avatars/' . $file_name)) {
            $i = 0;
            list($f_name, $ext) = explode('.', $file_name);
            while (file_exists(_PS_MODULE_DIR_.$this->name.'/views/img/avatars/' . $file_name)) {
                $i++;
                $file_name = $f_name . $i . '.' . $type;
            }
        }

        if (!move_uploaded_file($_FILES[$name]['tmp_name'], _PS_MODULE_DIR_.$this->name.'/views/img/avatars/' . $file_name)) {
            $this->displayAjaxError($this->l('There was an error uploading the image'));
        }

        $account = new HiWhatsAppAccount($id_account);
        if ($account->avatar) {
            if (file_exists(_PS_MODULE_DIR_.$this->name.'/views/img/avatars/' . $account->avatar)) {
                unlink(_PS_MODULE_DIR_.$this->name.'/views/img/avatars/' . $account->avatar);
            }
        }

        return $file_name;
    }

    public function saveAccount()
    {
        $languages = Language::getLanguages(false);
        $id_account = (int)Tools::getValue('id_account');
        $account = new HiWhatsAppAccount($id_account);

        $account->active = (int)Tools::getValue('active');
        $number = Tools::getValue('account_number');
        if (!$this->isContentSizeValid($number, 255)) {
            $this->displayAjaxError($this->l('Account number size is not valid, you can use max 255 characters'));
        }
        $account->account_number = $number;
        $account->avatar = $this->uploadAvatar('avatar', $id_account);

        if (!$id_account) {
            $account->position = HiWhatsAppAccount::getPosition();
        }

        $account->always_available = (int)Tools::getValue('always_available');

        $weekdays = $this->getWeekdays();
        $availability = array();
        foreach ($weekdays as $weekday_key => $weekday) {
            $availability[$weekday_key]['active'] = (int)Tools::getValue($weekday_key);

            $from = Tools::getValue('availability_from_' . $weekday_key);
            $to = Tools::getValue('availability_to_' . $weekday_key);

            if ($from > $to) {
                $this->displayAjaxError($this->l('Please select valid availability hours') . ': ' . $weekday);
            }
            $availability[$weekday_key]['from'] = $from;
            $availability[$weekday_key]['to'] = $to;
        }

        $account->availability = json_encode($availability);

        $id_default_lang = Configuration::get('PS_LANG_DEFAULT');
        foreach ($languages as $lang) {
            $name = Tools::getValue('account_name_'.$lang['id_lang']);
            if (!$name) {
                $name = Tools::getValue('account_name_'.$id_default_lang);
            }
            if (!$name) {
                $this->displayAjaxError($this->l('Account name is required'));
            } elseif (!$this->isContentSizeValid($name, 255)) {
                $this->displayAjaxError($this->l('Account name size is not valid, you can use max 255 characters'));
            }

            $title = Tools::getValue('title_' . $lang['id_lang']);
            if (!$title) {
                $title = Tools::getValue('title_' . $id_default_lang);
            }
            if (!$title) {
                $this->displayAjaxError($this->l('Title is required'));
            } elseif (!$this->isContentSizeValid($title, 255)) {
                $this->displayAjaxError($this->l('Title size is not valid, you can use max 255 characters'));
            }

            $button_label = Tools::getValue('button_label_' . $lang['id_lang']);
            if (!$button_label) {
                $button_label = Tools::getValue('button_label_' . $id_default_lang);
            }
            if (!$button_label) {
                $this->displayAjaxError($this->l('Button label is required'));
            } elseif (!$this->isContentSizeValid($button_label, 255)) {
                $this->displayAjaxError($this->l('Button label size is not valid, you can use max 255 characters'));
            }

            $offline_text = Tools::getValue('offline_text_' . $lang['id_lang']);
            if (!$offline_text) {
                $offline_text = Tools::getValue('offline_text_' . $id_default_lang);
            }
            if (!$this->isContentSizeValid($offline_text, 255)) {
                $this->displayAjaxError($this->l('Offline text size is not valid, you can use max 255 characters'));
            }

            $account->name[$lang['id_lang']] = $name;
            $account->title[$lang['id_lang']] = $title;
            $account->button_label[$lang['id_lang']] = $button_label;
            $account->offline_text[$lang['id_lang']] = $offline_text;
        }

        $positions = Tools::getValue('positions');
        if (!Tools::getValue('positions')) {
            $this->displayAjaxError($this->l('Please choose at least one position'));
        }

        if (!$account->save()) {
            $this->displayAjaxError($this->l('We couldn\'t save the account, please refresh the page and try again'));
        }

        if (!$id_account) {
            $id_account = $account->id;
        }

        $this->assignAccountToShops($id_account);

        Db::getInstance()->delete('hiwhatsappposition', '`id_hiwhatsapp` = ' . (int)$id_account);
        $positions = explode(',', $positions);
        foreach ($positions as $position) {
            Db::getInstance()->insert('hiwhatsappposition', array(
                'id_hiwhatsapp' => (int)$id_account,
                'position' => pSQL($position)
            ));
        }

        return $id_account;
    }

    // To-Do: check multishop checkbox
    public function assignAccountToShops($id_account)
    {
        $shop_ids = array();

        if (Shop::isFeatureActive()) {
            $shop_group = Tools::getValue('checkBoxShopGroupAsso_hiwhatsapp');
            if (is_array($shop_group) && $shop_group) {
                foreach ($shop_group as $shops) {
                    foreach (ShopGroup::getShopsFromGroup($shops) as $shop) {
                        $shop_ids[] = $shop['id_shop'];
                    }
                }
            }
            $shops = Tools::getValue('checkBoxShopAsso_hiwhatsapp');
            if (is_array($shops) && $shops) {
                foreach ($shops as $id) {
                    if (!in_array($id, $shop_ids)) {
                        $shop_ids[] = $id;
                    }
                }
            }

            // The account should be assigned at least to 1 shop.
            if (!$shop_ids) {
                $shop_ids[] = $this->context->shop->id;
            }
        } else {
            $shop_ids[] = $this->context->shop->id;
        }

        Db::getInstance()->execute('DELETE FROM `'._DB_PREFIX_.'hiwhatsapp_shop` WHERE id_hiwhatsapp = '.(int)$id_account);
        if (is_array($shop_ids) && $shop_ids) {
            foreach ($shop_ids as $id) {
                 Db::getInstance()->execute('
                    INSERT INTO `'._DB_PREFIX_.'hiwhatsapp_shop` (`id_hiwhatsapp`, `id_shop`)
                    VALUES('.(int)$id_account.', '.(int)$id.')');
            }
        }
    }

    public function renderLink($link, $title, $target = '_self', $class = false)
    {
        $this->context->smarty->assign(array(
            'link' => $link,
            'title' => $title,
            'target' => $target,
            'class' => $class
        ));

        return $this->display(__FILE__, 'views/templates/admin/link.tpl');
    }

    public function renderImage($name, $class = false)
    {
        $this->context->smarty->assign(array(
            'link' => __PS_BASE_URI__ . 'modules/' . $this->name . '/views/img/avatars/' . $name,
            'class' => $class
        ));

        return $this->display(__FILE__, 'views/templates/admin/image.tpl');
    }

    public function renderModal($class = null)
    {
        $this->context->smarty->assign(
            array(
                'psv' => $this->psv,
                'modal_class' => $class
            )
        );
        return $this->display(__FILE__, 'views/templates/admin/modal.tpl');
    }

    public function renderTreeJS()
    {
        if ($this->psv > 1.6) {
            return;
        }

        $admin_webpath = str_ireplace(_PS_CORE_DIR_, '', _PS_ADMIN_DIR_);
        $admin_webpath = preg_replace('/^'.preg_quote(DIRECTORY_SEPARATOR, '/').'/', '', $admin_webpath);
        $bo_theme = ((Validate::isLoadedObject($this->context->employee)
            && $this->context->employee->bo_theme) ? $this->context->employee->bo_theme : 'default');

        if (!file_exists(_PS_BO_ALL_THEMES_DIR_.$bo_theme.DIRECTORY_SEPARATOR.'template')) {
            $bo_theme = 'default';
        }

        $js_path = __PS_BASE_URI__.$admin_webpath.'/themes/'.$bo_theme.'/js/tree.js?v=' ._PS_VERSION_;

        $this->context->controller->addJs($js_path);
    }

    public function getWeekdays()
    {
        return array(
            'monday' => $this->l('Monday'),
            'tuesday' => $this->l('Tuesday'),
            'wednesday' => $this->l('Wednesday'),
            'thursday' => $this->l('Thursday'),
            'friday' => $this->l('Friday'),
            'saturday' => $this->l('Saturday'),
            'sunday' => $this->l('Sunday')
        );
    }

    public function getWeekdayById($id_day)
    {
        switch ($id_day) {
            case 1:
                return 'monday';
            case 2:
                return 'tuesday';
            case 3:
                return 'wednesday';
            case 4:
                return 'thursday';
            case 5:
                return 'friday';
            case 6:
                return 'saturday';
            case 7:
                return 'sunday';
            default:
                return 'monday';
        }
    }

    public function getAvailabilityHours()
    {
        return array(
            '00:00', '00:30', '01:00', '01:30', '02:00', '02:30', '03:00', '03:30', '04:00', '04:30', '05:00', '05:30', '06:00', '06:30', '07:00', '07:30', '08:00', '08:30', '09:00', '09:30', '10:00', '10:30', '11:00', '11:30', '12:00', '12:30', '13:00', '13:30', '14:00', '14:30', '15:00', '15:30', '16:00', '16:30', '17:00', '17:30', '18:00', '18:30', '19:00', '19:30', '20:00', '20:30', '21:00', '21:30', '22:00', '22:30', '23:00', '23:30', '00:00'
        );
    }

    public function getDefaultAvailability()
    {
        return array(
            'monday' => array(
                'active' => 1,
                'from' => '09:00',
                'to' => '18:00'
            ),
            'tuesday' => array(
                'active' => 1,
                'from' => '09:00',
                'to' => '18:00'
            ),
            'wednesday' => array(
                'active' => 1,
                'from' => '09:00',
                'to' => '18:00'
            ),
            'thursday' => array(
                'active' => 1,
                'from' => '09:00',
                'to' => '18:00'
            ),
            'friday' => array(
                'active' => 1,
                'from' => '09:00',
                'to' => '18:00'
            ),
            'saturday' => array(
                'active' => 1,
                'from' => '09:00',
                'to' => '18:00'
            ),
            'sunday' => array(
                'active' => 0,
                'from' => '09:00',
                'to' => '18:00'
            )
        );
    }

    public function displayForm()
    {
        $html = '';
        $content = '';
        if (!$this->hiPrestaClass->isSelectedShopGroup()) {
            $html .= $this->renderMenuTabs();
            switch (Tools::getValue($this->name)) {
                case 'whatsapp_accounts':
                    $this->renderTreeJS();
                    $content .= $this->renderModal();
                    $content .= $this->adminForms->reanderWapAccountsList();
                    break;
                case 'generel_settings':
                    $content .= $this->adminForms->renderSettingsForm();
                    break;
                case 'version':
                    $content .= $this->renderVersionForm();
                    break;
                case 'more_module':
                    $content .= $this->renderModuleAdvertisingForm();
                    break;
                default:
                    $this->renderTreeJS();
                    $content .= $this->renderModal();
                    $content .= $this->adminForms->reanderWapAccountsList();
                    break;
            }
            $html .= $this->renderDisplayForm($content, Tools::getValue($this->name));
        } else {
            $html .= $this->renderShopGroupError();
        }

        $html .= $this->renderModuleAdminVariables();
        $this->context->controller->addCSS(($this->_path).'views/css/admin.css', 'all');
        $this->context->controller->addJS($this->_path.'views/js/admin.js');
        
        $this->context->controller->addJS(_PS_JS_DIR_.'tiny_mce/tiny_mce.js');
        $this->context->controller->addJS(_PS_JS_DIR_.'admin/tinymce.inc.js');
        $this->context->controller->addJqueryUI('ui.sortable');

        return $html;
    }

    public function postProcess()
    {
        /*General settings*/
        if (Tools::isSubmit('submit_wap_settings')) {
            Configuration::updateValue('HIWHATSAPP_CHATBOX_POSITION', Tools::getValue('chatbox_position'));
            Configuration::updateValue('HIWHATSAPP_OFFLINE_CHATBOX', Tools::getValue('display_offline_chatbox'));
            Configuration::updateValue('HIWHATSAPP_OFFLINE_WIDGETS', Tools::getValue('display_offline_widgets'));
            Configuration::updateValue('HIWHATSAPP_CLEAN_DB', (bool)Tools::getValue('clean_db'));

            $this->success[] = $this->l('Settings updated successfully');
        }
    }

    public function getContent()
    {
        if (Tools::isSubmit('submit_wap_settings')) {
            $this->postProcess();
        }
        $this->globalVars();
        return $this->displayForm();
    }

    public function getAvailablePositions()
    {
        if ($this->psv >= 1.7) {
            return array(
                'chatbox' => $this->l('Chatbox'),
                'productAdditionalInfo' => $this->l('Product Page'),
            );
        } else {
            return array(
                'chatbox' => $this->l('Chatbox'),
                'rightColumnProduct' => $this->l('Product Page')
            );
        }
    }

    public function getPositionDisplayName($position)
    {
        switch ($position) {
            case 'chatbox':
                return $this->l('Chatbox');
            case 'productAdditionalInfo':
                return $this->l('Product Page');
            case 'rightColumnProduct':
                return $this->l('Product Page');
            default:
                return '';
        }
    }

    public function getAccountPositions($id_account)
    {
        return Db::getInstance()->executeS('
            SELECT * FROM `'._DB_PREFIX_.'hiwhatsappposition`
            WHERE `id_hiwhatsapp` = '.(int)$id_account);
    }

    public function addShopNames($shops)
    {
        if (is_array($shops) && $shops) {
            foreach ($shops as $key => $shop) {
                $shop_obj = new Shop($shop['id_shop']);
                $shops[$key]['name'] = $shop_obj->name;
            }

            return $shops;
        } else {
            return array();
        }
    }

    public function addPositionsDisplayName($positions)
    {
        if (is_array($positions) && $positions) {
            foreach ($positions as $key => $position) {
                $positions[$key]['name'] = $this->getPositionDisplayName($position['position']);
            }

            return $positions;
        } else {
            return array();
        }
    }

    public function prepareAccountsForAdmin($accounts)
    {
        if (is_array($accounts) && $accounts) {
            foreach ($accounts as $key => $account) {
                $shops = Db::getInstance()->executeS('
                    SELECT * FROM `'._DB_PREFIX_.'hiwhatsapp_shop`
                    WHERE `id_hiwhatsapp` = '.(int)$account['id_hiwhatsapp']);
                $accounts[$key]['shops'] = $this->addShopNames($shops);

                $positions = Db::getInstance()->executeS('
                    SELECT * FROM `'._DB_PREFIX_.'hiwhatsappposition`
                    WHERE `id_hiwhatsapp` = '.(int)$account['id_hiwhatsapp']);
                $accounts[$key]['positions'] = $this->addPositionsDisplayName($positions);
            }
        }

        return $accounts;
    }

    public function getAdminProductDetails($products)
    {
        if (!$products || !is_array($products)) {
            return array();
        }

        $link = new Link();
        $product_details = array();
        $i = 0;
        $id_language = $this->context->language->id;
        foreach ($products as $res) {
            $product = new Product($res['id_product'], true, $id_language, Shop::getContextShopID());
            if (Validate::isLoadedObject($product)) {
                $product_details[$i]['name'] = $product->name;
                $product_details[$i]['reference'] = $product->reference;
                $product_details[$i]['id_product'] = $res['id_product'];
                $cover_image = $product->getCover($res['id_product']);

                $avalibale_image = Image::getImages($id_language, $res['id_product']);

                if ($avalibale_image) {
                    $product_details[$i]['img_link'] = Tools::getProtocol(Tools::usingSecureMode()).$link->getImageLink(
                        $product->link_rewrite,
                        $cover_image['id_image'],
                        $this->hiPrestaClass->getImageType('home')
                    );
                } else {
                    $product_details[$i]['img_link'] = Tools::getProtocol(Tools::usingSecureMode()).$link->getImageLink(
                        $product->link_rewrite,
                        $product->defineProductImage(
                            $product->getImages(
                                $id_language
                            ),
                            $id_language
                        ),
                        $this->hiPrestaClass->getImageType('home')
                    );
                }
                $i++;
            }
        }

        return $product_details;
    }

    public function getRelatedProducts($id_account)
    {
        return Db::getInstance()->ExecuteS('
            SELECT `id_product`
            FROM `'._DB_PREFIX_.'hiwhatsapprelatedproduct`
            WHERE `id_hiwhatsapp` = '.(int)$id_account);
    }

    public function relatedProductExists($id_account, $id_product)
    {
        return Db::getInstance()->getValue('
            SELECT id_hiwhatsapp
            FROM `'._DB_PREFIX_.'hiwhatsapprelatedproduct`
            WHERE `id_hiwhatsapp` = '.(int)$id_account.'
            AND id_product = '.(int)$id_product.'
        ');
    }

    public function addRelatedProduct($id_account, $id_product)
    {
        return Db::getInstance()->insert('hiwhatsapprelatedproduct', array(
            'id_hiwhatsapp' => (int)$id_account,
            'id_product' => (int)$id_product
        ));
    }

    public function deleteRelatedProduct($id_account, $id_product)
    {
        return Db::getInstance()->delete('hiwhatsapprelatedproduct', '`id_hiwhatsapp` = ' . (int)$id_account.' AND `id_product` = '.(int)$id_product);
    }

    public function renderRelatedProducts($id_account)
    {
        $this->context->smarty->assign(
            array(
                'relatedProducts' => $this->getAdminProductDetails($this->getRelatedProducts($id_account)),
                'id_account' => $id_account
            )
        );
        return $this->display(__FILE__, 'views/templates/admin/related-products.tpl');
    }

    public function renderAddRelatedProductForm($id_account)
    {
        $this->context->smarty->assign(
            array(
                'id_account' => $id_account
            )
        );
        return $this->display(__FILE__, 'views/templates/admin/add-related-product-form.tpl');
    }

    public function getRelatedCategories($id_account)
    {
        return Db::getInstance()->ExecuteS('
            SELECT `id_category`
            FROM `'._DB_PREFIX_.'hiwhatsapprelatedcategory`
            WHERE `id_hiwhatsapp` = '.(int)$id_account);
    }

    public function deleteRelatedCategories($id_account)
    {
        return Db::getInstance()->delete('hiwhatsapprelatedcategory', '`id_hiwhatsapp` = ' . (int)$id_account);
    }

    public function addRelatedCategory($id_account, $id_category)
    {
        return Db::getInstance()->insert('hiwhatsapprelatedcategory', array(
            'id_hiwhatsapp' => (int)$id_account,
            'id_category' => (int)$id_category
        ));
    }

    public function searchProducts($query)
    {
        $result = '';
        if ($query && !is_array($query)) {
            $products = Search::find((int)$this->context->language->id, $query, 1, 10, 'position', 'desc', true, false);
            if ($products) {
                foreach ($products as $product) {
                    $result .= $product['id_product'].'|'.$product['pname'].'|'.$product['cname']."\n";
                }
            }
        }

        return $result;
    }

    public function hookDisplayHeader($params)
    {
        $this->context->controller->addCSS(($this->_path).'views/css/front.css', 'all');
        $this->context->controller->addJS($this->_path.'views/js/front.js');
    }

    public function hookDisplayFooter($params)
    {
        $products = array();
        $id_product = (int)Tools::getValue('id_product');
        if ($id_product) {
            array_push($products, $id_product);
        }
        $categories = Product::getProductCategories(Tools::getValue('id_product'));
        if (Tools::getValue('id_category')) {
            array_push($categories, (int)Tools::getValue('id_category'));
        }

        $accounts = HiWhatsAppAccount::getAccountsForCurrentPage($products, $categories, 'chatbox');

        if (is_array($accounts) && $accounts) {
            foreach ($accounts as $key => $account) {
                $availability = json_decode($account['availability'], true);
                $accounts[$key]['availability'] = $availability;

                if ($account['always_available']) {
                    $accounts[$key]['availability_status'] = 1;
                    continue;
                }

                $weekday = $this->getWeekdayById(date('w'));
                if (!$availability[$weekday]['active']) {
                    $accounts[$key]['availability_status'] = 0;
                } else {
                    $now = date('H:i');
                    if ($now >= date('H:i', strtotime($availability[$weekday]['from'])) && $now < date('H:i', strtotime($availability[$weekday]['to']))) {
                        $accounts[$key]['availability_status'] = 1;
                    } else {
                        $accounts[$key]['availability_status'] = 0;
                    }
                }

                if (!$accounts[$key]['availability_status'] && !$this->display_offline_chatbox) {
                    unset($accounts[$key]);
                }
            }
        }

        $this->context->smarty->assign(array(
            'module_dir' => __PS_BASE_URI__ . 'modules/' . $this->name,
            'wap_accounts' => $accounts,
            'chatbox_position' => $this->chatbox_position
        ));

        return $this->display(__FILE__, 'chatbox.tpl');
    }

    public function hookDisplayProductAdditionalInfo($params)
    {
        $id_product = (int)Tools::getValue('id_product');
        if (!$id_product) {
            return;
        }

        $accounts = HiWhatsAppAccount::getAccountsForCurrentPage(array($id_product));

        if (is_array($accounts) && $accounts) {
            foreach ($accounts as $key => $account) {
                $availability = json_decode($account['availability'], true);
                $accounts[$key]['availability'] = $availability;

                if ($account['always_available']) {
                    $accounts[$key]['availability_status'] = 1;
                    continue;
                }

                $weekday = $this->getWeekdayById(date('w'));
                if (!$availability[$weekday]['active']) {
                    $accounts[$key]['availability_status'] = 0;
                } else {
                    $now = date('H:i');
                    if ($now >= date('H:i', strtotime($availability[$weekday]['from'])) && $now < date('H:i', strtotime($availability[$weekday]['to']))) {
                        $accounts[$key]['availability_status'] = 1;
                    } else {
                        $accounts[$key]['availability_status'] = 0;
                    }
                }

                if (!$accounts[$key]['availability_status'] && !$this->display_offline_widgets) {
                    unset($accounts[$key]);
                }
            }
        }

        $this->context->smarty->assign(array(
            'module_dir' => __PS_BASE_URI__ . 'modules/' . $this->name,
            'wap_accounts' => $accounts
        ));

        return $this->display(__FILE__, 'widgets.tpl');
    }

    public function hookDisplayRightColumnProduct($params)
    {
        $id_product = (int)Tools::getValue('id_product');
        if (!$id_product) {
            return;
        }

        $accounts = HiWhatsAppAccount::getAccountsForCurrentPage(array($id_product), array(), 'rightColumnProduct');

        if (is_array($accounts) && $accounts) {
            foreach ($accounts as $key => $account) {
                $availability = json_decode($account['availability'], true);
                $accounts[$key]['availability'] = $availability;

                if ($account['always_available']) {
                    $accounts[$key]['availability_status'] = 1;
                    continue;
                }

                $weekday = $this->getWeekdayById(date('w'));
                if (!$availability[$weekday]['active']) {
                    $accounts[$key]['availability_status'] = 0;
                } else {
                    $now = date('H:i');
                    if ($now >= date('H:i', strtotime($availability[$weekday]['from'])) && $now < date('H:i', strtotime($availability[$weekday]['to']))) {
                        $accounts[$key]['availability_status'] = 1;
                    } else {
                        $accounts[$key]['availability_status'] = 0;
                    }
                }

                if (!$accounts[$key]['availability_status'] && !$this->display_offline_widgets) {
                    unset($accounts[$key]);
                }
            }
        }

        $this->context->smarty->assign(array(
            'module_dir' => __PS_BASE_URI__ . 'modules/' . $this->name,
            'wap_accounts' => $accounts
        ));

        return $this->display(__FILE__, 'widgets.tpl');
    }

    public function displayWidget($id_account)
    {
        $accounts = HiWhatsAppAccount::getAccountById($id_account);

        if (is_array($accounts) && $accounts) {
            foreach ($accounts as $key => $account) {
                $availability = json_decode($account['availability'], true);
                $accounts[$key]['availability'] = $availability;

                if ($account['always_available']) {
                    $accounts[$key]['availability_status'] = 1;
                    continue;
                }

                $weekday = $this->getWeekdayById(date('w'));
                if (!$availability[$weekday]['active']) {
                    $accounts[$key]['availability_status'] = 0;
                } else {
                    $now = date('H:i');
                    if ($now >= date('H:i', strtotime($availability[$weekday]['from'])) && $now < date('H:i', strtotime($availability[$weekday]['to']))) {
                        $accounts[$key]['availability_status'] = 1;
                    } else {
                        $accounts[$key]['availability_status'] = 0;
                    }
                }
            }
        }

        $this->context->smarty->assign(array(
            'module_dir' => __PS_BASE_URI__ . 'modules/' . $this->name,
            'wap_accounts' => $accounts
        ));

        return $this->display(__FILE__, 'widgets.tpl');
    }

    public function hookActionCreativeElementsInit()
    {
        CE\add_action('elementor/widgets/widgets_registered', [$this, 'registerWAPWidget']);
    }

    public function registerWAPWidget()
    {
        include _PS_MODULE_DIR_ . $this->name . '/classes/ce/wapWidgets.php';

        CE\Plugin::instance()->widgets_manager->registerWidgetType(new CE\HiWapWidgets());
    }
}
