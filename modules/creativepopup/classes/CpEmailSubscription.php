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

class_exists('Ps_EmailSubscription') or require_once _PS_MODULE_DIR_.'ps_emailsubscription/ps_emailsubscription.php';

class CpEmailSubscription extends Ps_EmailSubscription
{
    public function __construct()
    {
        Module::__construct();
    }

    public function submitNewsletter()
    {
        ${'_POST'}['blockHookName'] = 'displayCreativePopup';
        $this->newsletterRegistration('displayCreativePopup');
        return array(
            'success' => empty($this->valid) ? '' : $this->valid,
            'errors' => empty($this->error) ? array() : array($this->error)
        );
    }
}
