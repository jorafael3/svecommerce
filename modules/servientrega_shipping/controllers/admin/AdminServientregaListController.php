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

require_once dirname(__FILE__) . '/../../classes/Functions.php';

class AdminServientregaListController extends ModuleAdminController
{
    public function __construct()
    {
        $this->context = Context::getContext();
        $this->bootstrap = true;
        $this->list_no_link = true;
        $this->table = 'order_servientrega';
        // $this->className = 'Order';
        $this->identifier = 'id_order';
        $this->lang = false;
        parent::__construct();
    }

    public function initContent()
    {
        parent::initContent();
        // $this->initToolbar();
        $this->display = '';
        $this->content = $this->renderList();

        $this->context->smarty->assign([
            'content' => $this->content,
        ]);
    }

    public function renderList()
    {
        $this->_select = 'id_order_servientrega, id_order, rastreoEnvio, total, pedido, fecha, city, razon';
        // $this->_join = '
        // ' . Shop::addSqlAssociation('product', 'a') . '
        // LEFT JOIN ' . _DB_PREFIX_ . 'ws_seller_product sp ON (sp.id_product = a.id_product)
        // LEFT JOIN ' . _DB_PREFIX_ . 'ws_seller s ON (s.id_ws_seller = sp.id_ws_seller)';
        // $this->_where = 'AND sp.id_ws_seller != "" AND b.id_shop = ' . (int) $this->context->shop->id;

        $this->addRowAction('view');
        // $this->addRowAction('edit');
        // $this->addRowAction('delete');

        $this->fields_list = [
            'id_order_servientrega' => [
                'title' => $this->l('ID'),
                'align' => 'text-center',
                'remove_onclick' => true,
                'class' => 'fixed-width-xs',
            ],
            'id_order' => [
                'title' => $this->l('ID Order'),
                'align' => 'text-center',
                'remove_onclick' => false,
                'class' => 'fixed-width-xs',
            ],
            
            'fecha' => [
                'title' => $this->l('Fecha'),
                'remove_onclick' => true,
                'havingFilter' => true,
            ],
            'city' => [
                'title' => $this->l('Ciudad'),
                'remove_onclick' => true,
                'callback' => 'setCityData',
                'havingFilter' => true,
            ],
            'total' => [
                'title' => $this->l('Total'),
                'remove_onclick' => true,
                'type' => 'price',
                'havingFilter' => true,
            ],
            'rastreoEnvio' => [
                'title' => $this->l('Guia'),
                'remove_onclick' => true,
                'callback' => 'printUpdateIcons',
                'havingFilter' => true,
            ],
            'pedido' => [
                'title' => $this->l('Traking'),
                'remove_onclick' => true,
                'callback' => 'getTrakingData',
                'havingFilter' => true,
            ],
            'razon' => [
                'title' => $this->l('Mensaje'),
                'remove_onclick' => true,
                'havingFilter' => true,
            ],
        ];

        // $this->bulk_actions = array(
        //     'sync' => array(
        //         'text' => $this->l('Sincronizar Seleccion'),
        //         'confirm' => $this->l('Sincronizar los elementos seleccionados?'),
        //         'icon' => 'icon-refresh'
        //     )
        // );

        return parent::renderList();
    }

    public function setCityData($id_cart, $tr)
    {
        $citys = Functions::getDataCitysEc(Configuration::get("SERVI_USER"), Configuration::get("SERVI_PASS"));
        if (count($citys) > 1) {
            // $this->context->smarty->assign([
            //     'citys' => $citys,
            //     'city' => $tr['city'],
            // ]);

            foreach($citys as $city){
                if($city['id'] == $tr['city']){
                    return $city['nombre'];
                }
            }
    
        }
    }


    public function getTrakingData($id_cart, $tr)
    {
        $data = ["guia" => $tr['id_order_servientrega']];
        return "<a href='http://www.servientrega.com.ec/rastreo/guia/". $tr['id_order_servientrega']."' target='_blank' >ver trasabilidad.<a>";
        
        $this->context->smarty->assign([
            'ref' => $tr['rastreoEnvio'],
            'estado' => $tr['estado'],
        ]);

    }

    public function printUpdateIcons($id_cart, $tr)
    {
        $this->context->smarty->assign([
            'ref' => $tr['rastreoEnvio'],
            'estado' => $tr['estado'],
        ]);

        return $this->context->smarty->fetch(
            'module:servientrega_shipping/views/templates/admin/btn_url.tpl'
        );
    }

    public function postProcess()
    {
       

        if (Tools::isSubmit('vieworder_servientrega')) {
            $id = Tools::getValue('id_order');
            Tools::redirectAdmin($this->context->link->getAdminLink('AdminOrders').'&id_order='.$id.'&vieworder');
        }
        parent::postProcess();
    }
}