<?php
/**
* 2011 - 2021 HiPresta
*
* MODULE WhatsApp Live chat with customers
*
* @author    HiPresta <support@hipresta.com>
* @copyright HiPresta 2021
* @license   Addons PrestaShop license limitation
* @link      https://hipresta.com
*
* NOTICE OF LICENSE
*
* Don't use this module on several shops. The license provided by PrestaShop Addons
* for all its modules is valid only once for a single shop.
*/

include_once(dirname(__FILE__).'/../../classes/adminForms.php');

class AdminHiWhatsAppController extends ModuleAdminController
{
    public function __construct()
    {
        $this->secure_key = Tools::getValue('secure_key');
        parent::__construct();

        $this->adminForms = new HiWhatsAppAdminForms($this->module);
    }

    public function init()
    {
        parent::init();
        if ($this->ajax) {
            if ($this->secure_key == $this->module->secure_key) {
                switch (Tools::getValue('action')) {
                    case 'updateAccountStatus':
                        $account = new HiWhatsAppAccount((int)Tools::getValue('id_account'));
                        $account->active = $account->active ? 0 : 1;
                        $account->update();

                        die(Tools::jsonEncode(array(
                            'content' => $this->adminForms->reanderWapAccountsList(),
                            'message' => $this->module->l('Status successfully changed'),
                            'error' => false
                        )));
                    case 'displayAccountForm':
                        die(Tools::jsonEncode(array(
                            'content' => $this->adminForms->reanderWapAccountForm(Tools::getValue('id_account'))
                        )));
                    case 'displayAccountsList':
                        die(Tools::jsonEncode(array(
                            'content' => $this->adminForms->reanderWapAccountsList()
                        )));
                    case 'saveAccount':
                        $this->module->saveAccount();

                        die(Tools::jsonEncode(array(
                            'content' => $this->adminForms->reanderWapAccountsList(),
                            'message' => $this->module->l('Successfully saved'),
                            'error' => false
                        )));
                    case 'deleteAccount':
                        $id_account = (int)Tools::getValue('id_account');
                        $account = new HiWhatsAppAccount($id_account);

                        if ($account->delete()) {
                            die(Tools::jsonEncode(array(
                                'content' => $this->adminForms->reanderWapAccountsList(),
                                'message' => $this->module->l('Account successfully deleted'),
                                'error' => false
                            )));
                        }

                        die(Tools::jsonEncode(array(
                            'error' => $this->module->l('Something went wrong, please refresh the page and try again')
                        )));
                    case 'sortAccounts':
                        $sorted_accounts = Tools::getValue('sortedAccounts');
                        if (is_array($sorted_accounts) && $sorted_accounts) {
                            $i = count($sorted_accounts);
                            foreach ($sorted_accounts as $id_account) {
                                Db::getInstance()->Execute('
                                    UPDATE '._DB_PREFIX_.'hiwhatsapp 
                                    SET position='.(int)$i.'
                                    WHERE id_hiwhatsapp ='.(int)$id_account.'
                                ');
                                $i--;
                            }

                            die(Tools::jsonEncode(array(
                                'error' => false,
                                'message' => $this->module->l('Successfully updated')
                            )));
                        }

                        die(Tools::jsonEncode(array(
                            'error' => $this->module->l('Something went wrong, please refresh the page and try again.')
                        )));
                    case 'searchProducts':
                        die($this->module->searchProducts(urldecode(Tools::getValue('q'))));
                    case 'renderRelatedProducts':
                        die(Tools::jsonEncode(array(
                            'content' => $this->module->renderRelatedProducts(Tools::getValue('id_account')).$this->module->renderAddRelatedProductForm(Tools::getValue('id_account'))
                        )));
                    case 'addRelatedProduct':
                        $id_account = (int)Tools::getValue('id_account');
                        $id_product = (int)Tools::getValue('id_product');
                        $product = new Product($id_product);
                        if (!$id_product || !Validate::isLoadedObject($product)) {
                            die(Tools::jsonEncode(array(
                                'error' => $this->module->l('Product doesn\'t exists.')
                            )));
                        }

                        if ($this->module->relatedProductExists($id_account, $id_product)) {
                            die(Tools::jsonEncode(array(
                                'error' => $this->module->l('This product already added')
                            )));
                        }

                        if ($this->module->addRelatedProduct($id_account, $id_product)) {
                            die(Tools::jsonEncode(array(
                                'error' => '',
                                'content' => $this->module->renderRelatedProducts($id_account),
                                'message' => $this->module->l('Product successfully added')
                            )));
                        } else {
                            die(Tools::jsonEncode(array(
                                'error' => $this->module->l('Something went wrong, refresh the page and try again')
                            )));
                        }
                    case 'deleteRelatedProduct':
                        $id_account = (int)Tools::getValue('id_account');
                        $id_product = (int)Tools::getValue('id_product');

                        if (!$this->module->deleteRelatedProduct($id_account, $id_product)) {
                            die(Tools::jsonEncode(array(
                                'error' => $this->module->l('Something went wrong, refresh the page and try again')
                            )));
                        } else {
                            die(Tools::jsonEncode(array(
                                'error' => '',
                                'content' => $this->module->renderRelatedProducts($id_account),
                                'message' => $this->module->l('Product successfully deleted')
                            )));
                        }
                    case 'renderRelatedCategories':
                        die(Tools::jsonEncode(array(
                            'content' => $this->adminForms->renderRelatedCategories(Tools::getValue('id_account'))
                        )));
                    case 'addRelatedCategories':
                        $id_account = (int)Tools::getValue('id_account');
                        $categories = Tools::getValue('categories');

                        $this->module->deleteRelatedCategories($id_account);

                        if (is_array($categories) && $categories) {
                            foreach ($categories as $id_category) {
                                $this->module->addRelatedCategory($id_account, $id_category);
                            }
                        }

                        die(Tools::jsonEncode(array(
                            'error' => false,
                            'message' => $this->module->l('Categories successfully added')
                        )));
                }
            } else {
                die();
            }
        } else {
            Tools::redirectAdmin($this->module->hiPrestaClass->getModuleUrl());
        }
    }
}
