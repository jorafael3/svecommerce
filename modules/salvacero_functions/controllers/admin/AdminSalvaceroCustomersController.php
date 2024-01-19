<?php

/**
 * 2010-2020 Webkul.
 *
 * NOTICE OF LICENSE
 *
 * All right is reserved,
 * Please go through this link for complete license : https://store.webkul.com/license.html
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this module to newer
 * versions in the future. If you wish to customize this module for your
 * needs please refer to https://store.webkul.com/customisation-guidelines/ for more information.
 *
 *  @author    Webkul IN <support@webkul.com>
 *  @copyright 2010-2020 Webkul IN
 *  @license   https://store.webkul.com/license.html
 */

class AdminSalvaceroCustomersController extends ModuleAdminController
{
    public function __construct()
    {
        $this->context = Context::getContext();
        $this->bootstrap = true;
        $this->className = 'SalvaceroCustomer';
        $this->table = 'salvacero_customers';
        $this->identifier = 'id';
        parent::__construct();
        $this->toolbar_title = $this->l('Clientes');
    }

    public function renderList()
    {
        $this->_select = "a.active as status_customer,CONCAT(b.firstname, ' ', b.lastname) as nombre, b.email correo";
        $this->_join = " JOIN `" . _DB_PREFIX_ . "customer` b ON b.id_customer = a.id_customer_ps ";
        $this->fields_list = array(
            'id' => array(
                'title' => $this->l('ID'),
                'align' => 'text-center',
                'remove_onclick' => true,
                'class' => 'fixed-width-xs',
            ),
            'nombre' => array(
                'title' => $this->l('Nombre'),
                'remove_onclick' => true,
                'havingFilter' => true,
            ),
            'correo' => array(
                'title' => $this->l('Email'),
                'remove_onclick' => true,
                'havingFilter' => true,
            ),
            'amount' => array(
                'title' => $this->l('Monto'),
                'remove_onclick' => true,
                'havingFilter' => true,
                'callback' => 'getAmountDisplay'

            ),
            'date_add' => array(
                'title' => $this->l('Fecha'),
                'remove_onclick' => true,
                'type' => 'date',
                'havingFilter' => true,
            ),
            'status_customer' => array(
                'title' => $this->l('Estatus'),
                'align' => 'center',
                'remove_onclick' => true,
                'hint' => $this->l(''),
                'callback' => 'actionBottonStatus'
            ),
        );

        $this->addRowAction('view');
        return parent::renderList();
    }

    public function renderView()
    {
        parent::renderView();
        $id = Tools::getValue("id");
        Tools::redirectAdmin($this->context->link->getAdminLink('AdminCustomers', true, [], ['id_customer' => $this->object->id_customer_ps, "viewcustomer" => 1]));
        exit;
    }

    public function getAmountDisplay($val, $array)
    {
        return Tools::displayPrice($val);
    }



    public function actionBottonStatus($val, $array)
    {
        $this->context->smarty->assign([
            "customer" => $array['id'],
            "active" => $array['active']
        ]);

        return $this->context->smarty->fetch(
            'module:' .  $this->module->name . '/views/templates/admin/statusBotton.tpl'
        );
    }

    public function ajaxProcessSetStatusCustomer()
    {
        if (
            Tools::isSubmit('action')
            && (Tools::getAdminTokenLite('AdminSalvaceroCustomers') == Tools::getValue('token'))
        ) {

            $id = Tools::getValue('id');
            $salvaceroCustomer = new SalvaceroCustomer($id);
            $salvaceroCustomer->active =  Tools::getValue('value');
            $salvaceroCustomer->update();

            die(Tools::jsonEncode(array(
                'success' => true
            )));
        }
        die('0');
    }



    public function ajaxProcessSetAmountCustomer()
    {
        if (
            Tools::isSubmit('action')
            && (Tools::getAdminTokenLite('AdminSalvaceroCustomers') == Tools::getValue('token'))
        ) {

            $id_customer = Tools::getValue('id_customer');
            $isSuccess = false;
            $date = date("Y-m-d H:i:s");

            if ($oldCustomer = SalvaceroCustomer::getCustomerForIdPs($id_customer)) {
                $salvaceroCustomer = new SalvaceroCustomer($oldCustomer['id']);
                $salvaceroCustomer->amount = number_format((float)Tools::getValue("val"), 2, ".", "");
                $salvaceroCustomer->date_upd = $date;
                if ($salvaceroCustomer->update()) {
                    $isSuccess = true;
                }
            } else {
                $salvaceroCustomer = new SalvaceroCustomer();
                $salvaceroCustomer->id_customer_ps = $id_customer;
                $salvaceroCustomer->active = 1;
                $salvaceroCustomer->amount = number_format((float)Tools::getValue("val"), 2, ".", "");
                $salvaceroCustomer->date_upd = $date;
                $salvaceroCustomer->date_add = $date;
                if ($salvaceroCustomer->add()) {
                    $isSuccess = true;
                }
            }

            die(Tools::jsonEncode(array(
                'success' => $isSuccess
            )));
        }
        die('0');
    }
}
