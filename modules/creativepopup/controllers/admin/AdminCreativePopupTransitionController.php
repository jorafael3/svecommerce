<?php
/**
 * Creative Popup - https://creativepopup.webshopworks.com
 *
 * @author    WebshopWorks <info@webshopworks.com>
 * @copyright 2018-2020 WebshopWorks
 * @license   One Domain Licence
 *
 * Not allowed to resell or redistribute this software
 */

defined('_PS_VERSION_') or exit;

class AdminCreativePopupTransitionController extends ModuleAdminController
{
    public function postProcess()
    {
        parent::postProcess();
        if (isset($this->context->cookie->cp_error)) {
            $this->errors[] = $this->context->cookie->cp_error;
            unset($this->context->cookie->cp_error);
        }
    }

    public function initPageHeaderToolbar()
    {
        // hide header toolbar
    }

    public function setMedia($isNewTheme = false)
    {
        parent::setMedia($isNewTheme);

        define('CP_URL_TOKEN', $this->token);
        $GLOBALS['cp_screen'] = (object) array(
          'id' => 'cp_page_transition-builder',
          'base' => 'cp_page_transition-builder'
        );
        // simulate page
        ${'_GET'}['page'] = 'transition-builder';

        if (version_compare(_PS_VERSION_, '1.6', '<')) {
            // CreativePopup admin requires at least jQuery v1.10.2
            foreach ($this->context->controller->js_files as &$js) {
                if (preg_match('/jquery-\d\.\d\.\d(\.min)?\.js$/i', $js)) {
                    $js = __PS_BASE_URI__."modules/{$this->module->name}/views/js/jquery.min.js";
                    break;
                }
            }
        }

        require_once _PS_MODULE_DIR_.$this->module->name.'/helper.php';
        require_once _PS_MODULE_DIR_.$this->module->name.'/views/default.php';
    }

    public function display()
    {
        $this->context->smarty->assign(array('content' => $this->content));
        $this->display_footer = false;

        parent::display();
    }
}
