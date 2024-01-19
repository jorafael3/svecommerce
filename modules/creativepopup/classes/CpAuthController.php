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

class_exists('AuthControllerCore') or require_once _PS_FRONT_CONTROLLER_DIR_.'AuthController.php';

class CpAuthController extends AuthControllerCore
{
    public function __construct()
    {
        $this->ajax = true;
        $this->context = Context::getContext();
    }

    public function ajaxLogin()
    {
        ${'_POST'}['passwd'] = Tools::getValue('password');
        register_shutdown_function(array($this, 'ajaxDieAfter'));
        $this->processSubmitLogin();
    }

    public function ajaxDieAfter()
    {
        ob_clean();
        die(json_encode(array(
            'redirect' => empty($this->errors) ? Tools::getValue('back', $_SERVER['REQUEST_URI']) : '',
            'errors' => $this->errors,
        )));
    }
}
