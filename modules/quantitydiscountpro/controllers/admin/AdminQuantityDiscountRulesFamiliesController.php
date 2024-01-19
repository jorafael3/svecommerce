<?php
/**
* Quantity Discount Pro
*
* NOTICE OF LICENSE
*
* This product is licensed for one customer to use on one installation (test stores and multishop included).
* Site developer has the right to modify this module to suit their needs, but can not redistribute the module in
* whole or in part. Any other use of this module constitues a violation of the user agreement.
*
* DISCLAIMER
*
* NO WARRANTIES OF DATA SAFETY OR MODULE SECURITY
* ARE EXPRESSED OR IMPLIED. USE THIS MODULE IN ACCORDANCE
* WITH YOUR MERCHANT AGREEMENT, KNOWING THAT VIOLATIONS OF
* PCI COMPLIANCY OR A DATA BREACH CAN COST THOUSANDS OF DOLLARS
* IN FINES AND DAMAGE A STORES REPUTATION. USE AT YOUR OWN RISK.
*
*  @author    idnovate.com <info@idnovate.com>
*  @copyright 2020 idnovate.com
*  @license   See above
*/

class AdminQuantityDiscountRulesFamiliesController extends ModuleAdminController
{
    protected $isShopSelected = true;

    public function __construct()
    {
        $this->bootstrap = true;
        $this->table = 'quantity_discount_rule_family';
        $this->className = 'QuantityDiscountRuleFamily';
        $this->tabClassName = 'AdminQuantityDiscountRulesFamilies';
        $this->addRowAction('edit');
        $this->addRowAction('delete');
        $this->_orderWay = 'DESC';

        parent::__construct();

        $this->bulk_actions = array('delete' => array('text' => $this->l('Delete selected'),'icon' => 'icon-trash', 'confirm' => $this->l('Delete selected items?')));

        $this->fields_list = array(
            'id_quantity_discount_rule_family' => array('title' => $this->l('ID'), 'align' => 'center', 'class' => 'fixed-width-xs'),
            'name' => array('title' => $this->l('Name')),
            'description' => array('title' => $this->l('Description'), 'align' => 'center'),
            'priority' => array('title' => $this->l('Priority'), 'class' => 'fixed-width-sm'),
            'execute_other_families' => array('title' => $this->l('Execute other families'), 'active' => 'execute_other_families', 'type' => 'bool', 'orderby' => false, 'align' => 'center'),
            'active' => array('title' => $this->l('Active'), 'active' => 'status', 'type' => 'bool', 'orderby' => false, 'align' => 'center'),
        );

        if (Shop::isFeatureActive() && (Shop::getContext() == Shop::CONTEXT_ALL || Shop::getContext() == Shop::CONTEXT_GROUP)) {
            $this->isShopSelected = false;
        }

        if (!Shop::isFeatureActive()) {
            $this->shopLinkType = '';
        } else {
            $this->shopLinkType = 'shop';
        }
    }

    public function setMedia($isNewTheme = false)
    {
        parent::setMedia($isNewTheme);

        if (version_compare(_PS_VERSION_, '1.6', '>=')) {
            $this->addCSS(_MODULE_DIR_.'quantitydiscountpro/views/css/admin.css');
        } else {
            $this->addCSS(_MODULE_DIR_.'quantitydiscountpro/views/css/admin-15.css');
        }
    }

    public function initPageHeaderToolbar()
    {
        if (empty($this->display)) {
            $this->page_header_toolbar_btn['new_quantity_discount_rule_family'] = array(
                'href' => self::$currentIndex.'&addquantity_discount_rule_family&token='.$this->token,
                'desc' => $this->l('Add new family', null, null, false),
                'icon' => 'process-icon-new'
            );

            $this->page_header_toolbar_btn['edit_quantity_discount_rule_family'] = array(
                'href' => $this->context->link->getAdminLink('AdminQuantityDiscountRules'),
                'desc' => $this->l('Back to rules', null, null, false),
                'icon' => 'process-icon-back'
            );
        }

        parent::initPageHeaderToolbar();

        $this->context->smarty->clearAssign('help_link', '');
    }

    public function initToolbar()
    {
        parent::initToolbar();

        if (empty($this->display)) {
            $this->toolbar_btn['new'] = array(
                'href' => self::$currentIndex.'&addquantity_discount_rule_family&token='.$this->token,
                'desc' => $this->l('Add new family', null, null, false),
            );

            $this->toolbar_btn['back'] = array(
                'href' => $this->context->link->getAdminLink('AdminQuantityDiscountRules'),
                'desc' => $this->l('Back to rules', null, null, false),
            );
        }
    }

    public function initProcess()
    {
        parent::initProcess();

        if (Tools::isSubmit('execute_other_families'.$this->table)) {
            $object = $this->loadObject();

            if (!Validate::isLoadedObject($object)) {
                $this->errors[] = Tools::displayError('An error occurred while updating information.');
            }

            $object->execute_other_families = !$object->execute_other_families;
            if (!$object->update()) {
                $this->errors[] = Tools::displayError('An error occurred while updating information.');
            }

            Tools::redirectAdmin(self::$currentIndex.'&token='.$this->token);
        }
    }

    public function renderList()
    {
        if (Tools::getValue('magic')) {
            return $this->module->getContent();
        }

        if ($this->isShopSelected &&
            ((version_compare(_PS_VERSION_, '1.5.0.13', '<') && !Module::isInstalled($this->module->name))
             || (version_compare(_PS_VERSION_, '1.5.0.13', '>=') && !Module::isEnabled($this->module->name)))) {
            $this->warnings[] = $this->l('Module is not enabled in this shop.');
        }

        //Redirect if no family created
        if ($this->isShopSelected && !QuantityDiscountRuleFamily::getNbObjects()) {
            $this->redirect_after = 'index.php?controller='.$this->tabClassName.'&add'.$this->table.'&token='.Tools::getAdminTokenLite($this->tabClassName);
            $this->redirect();
        }

        if (!$this->isShopSelected && !QuantityDiscountRuleFamily::getNbObjects()) {
            $this->errors[] = $this->l('Please select a shop.');
            return;
        }

        return parent::renderList();
    }

    public function renderForm()
    {
        if (Tools::getValue('magic')) {
            return $this->module->getContent();
        }

        if (!$this->isShopSelected && $this->display == 'add') {
            $this->errors[] = $this->l('Please select a shop.');
            return;
        }

        $this->toolbar_btn['save-and-stay'] = array(
            'href' => '#',
            'desc' => $this->l('Save and Stay')
        );

        if (!$this->loadObject(true)) {
            return;
        }

        $this->fields_form = array(
            'legend' => array(
                'title' => $this->l('Family'),
                'icon' => 'icon-edit'
            ),
            'input' => array(
                array(
                    'type' => version_compare(_PS_VERSION_, '1.6', '>=') ? 'switch' : 'radio',
                    'label' => $this->l('Enabled?'),
                    'name' => 'active',
                    'required' => false,
                    'is_bool' => true,
                    'class' => 't',
                    'values' => array(
                        array(
                            'id' => 'active_on',
                            'value' => 1,
                            'label' => $this->l('Yes')
                        ),
                        array(
                            'id' => 'active_off',
                            'value' => 0,
                            'label' => $this->l('No')
                        )
                    )
                ),
                array(
                    'type' => 'text',
                    'label' => $this->l('Name'),
                    'name' => 'name',
                    'required' => true,
                ),
                array(
                    'type' => 'textarea',
                    'label' => $this->l('Description'),
                    'name' => 'description',
                ),
                array(
                    'col' => 1,
                    'type' => 'text',
                    'label' => $this->l('Priority'),
                    'name' => 'priority',
                ),
                array(
                    'type' => version_compare(_PS_VERSION_, '1.6', '>=') ? 'switch' : 'radio',
                    'label' => $this->l('Execute rules from other families?'),
                    'name' => 'execute_other_families',
                    'required' => false,
                    'is_bool' => true,
                    'class' => 't',
                    'values' => array(
                        array(
                            'id' => 'execute_other_families_on',
                            'value' => 1,
                            'label' => $this->l('Yes')
                        ),
                        array(
                            'id' => 'execute_other_families_off',
                            'value' => 0,
                            'label' => $this->l('No')
                        )
                    )
                ),
            )

        );

        $this->fields_form['submit'] = array(
            'title' => $this->l('Save')
        );

        return parent::renderForm();
    }

    public function initContent()
    {
        if ($warnings = $this->module->getWarnings(false)) {
            $this->errors[] = Tools::displayError($warnings);
            return;
        }

        parent::initContent();

        if (version_compare(_PS_VERSION_, '1.6', '>=')) {
            $module = $this->module;

            $default_iso_code = 'en';
            $local_path = $module->getLocalPath();

            $readme = null;
            if (file_exists($local_path.'/readme_'.$this->context->language->iso_code.'.pdf')) {
                $readme = 'readme_'.$this->context->language->iso_code.'.pdf';
            } else if (file_exists($local_path.'/readme_'.$default_iso_code.'.pdf')) {
                $readme = 'readme_'.$default_iso_code.'.pdf';
            }

            $this->context->smarty->assign(array(
                'support_id' => $module->addons_id_product,
                'readme' => $readme,
                'this_path' => $module->getPathUri()
            ));


            if (file_exists($local_path.'/views/templates/admin/company/information_'.$this->context->language->iso_code.'.tpl')) {
                $this->content .= $this->context->smarty->fetch($local_path.'/views/templates/admin/company/information_'.$this->context->language->iso_code.'.tpl');
            } elseif (file_exists($local_path.'/views/templates/admin/company/information_'.$default_iso_code.'.tpl')) {
                $this->content .= $this->context->smarty->fetch($local_path.'/views/templates/admin/company/information_'.$default_iso_code.'.tpl');
            }
        }

        $this->context->smarty->assign(array(
            'content' => $this->content,
        ));
    }

    public function processDelete()
    {
        $object = $this->loadObject();

        if (count(QuantityDiscountRule::getQuantityDiscountRulesByFamily($object->id_quantity_discount_rule_family)) > 0) {
            $this->errors[] = Tools::displayError('You cannot remove this family because there are rules associated to it.');
        } else {
            return parent::processDelete();
        }
    }
}
