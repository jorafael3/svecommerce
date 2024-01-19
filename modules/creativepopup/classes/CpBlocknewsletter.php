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

class_exists('BlockNewsletter') or require_once _PS_MODULE_DIR_.'blocknewsletter/blocknewsletter.php';

class CpBlocknewsletter extends BlockNewsletter
{
    public function submitNewsletter()
    {
        $this->newsletterRegistration();
        return array(
            'success' => empty($this->valid) ? '' : $this->valid,
            'errors' => empty($this->error) ? array() : array($this->error)
        );
    }
}
