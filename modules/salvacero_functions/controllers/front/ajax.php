
<?php
/**
 * 2007-2019 PrestaShop
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
 *  @author    PrestaShop SA <contact@prestashop.com>
 *  @copyright 2007-2019 PrestaShop SA
 *  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 *  International Registered Trademark & Property of PrestaShop SA
 */

class Salvacero_FunctionsAjaxModuleFrontController extends ModuleFrontController
{
    public function __construct()
    {
        parent::__construct();
        $this->ajax = true;
    }

    public function postProcess()
    {
        parent::postProcess();
        if (Tools::getValue('action') == 'getDataCustomer') {
            $id_customer = $this->context->customer->id;
            $amount = SalvaceroCustomer::getAmountForIdPs($id_customer);
            $amount_inicial = SalvaceroCustomer::getAmountCompletoForIdPs($id_customer);
            $isActive = false;
            if ($amount) {
                if ($amount > Tools::getValue('total')) {
                    $isActive = true;
                }
            }
            die(Tools::jsonEncode(array(
                'success' => $isActive,
                'Monto_Credito' => $amount,
                "amount_inicial" => $amount_inicial
            )));
        }
        if (Tools::getValue('action') == 'SetCustomerCreditData') {

            $id_customer = $this->context->customer->id;
            $total =  Tools::getValue('valor_total');
            $meses = Tools::getValue('meses');
            $orden = "";

            $oldCustomer = SalvaceroCustomer::setCustomerCreditDataForIdPs($id_customer, $total, $meses, $orden);

            die(Tools::jsonEncode(array(
                'success' => $oldCustomer,
                'id_customer' => $id_customer,
                'orden' => ""
            )));
        }
        if (Tools::getValue('action') == 'getDatosCreditoOrden') {
            $id_customer = $this->context->customer->id;
            $orderReference =  Tools::getValue('orderReference');
            $oldCustomer = SalvaceroCustomer::getDatosCreditoOrden($id_customer, $orderReference);
            die(Tools::jsonEncode(array(
                'datos' => $oldCustomer,
            )));
        }
        if (Tools::getValue('action') == 'SetActualizarOrdenCredito') {
            $id_customer = $this->context->customer->id;
            $orderReference =  Tools::getValue('orderReference');
            $oldCustomer = SalvaceroCustomer::DatosOrden($id_customer, trim($orderReference));
            $additionalData = array(
                'order_id' => $oldCustomer["id_order"],
                'customer_id' => $id_customer,
                'reference' => $orderReference,
                'total' => $oldCustomer["total_paid"],
            );
            $orden = SalvaceroCustomer::setActualizarDatosOrden($additionalData);
            $oldCustomer = SalvaceroCustomer::getDatosCreditoOrden($id_customer, $orderReference);
            die(Tools::jsonEncode(array(
                'datos' => $oldCustomer,
            )));
        }

        die(0);
    }



    public function getOrderNumberForCustomer($id_customer)
    {
        // Obtener el número de orden para un cliente específico (por ejemplo, el último pedido realizado por ese cliente)
        $orderId = SalvaceroCustomer::getOrderByCustomer($id_customer); // Esto te dará el ID del último pedido del cliente
        if ($orderId) {
            $order = new Order($orderId);
            return $order->reference; // Devuelve el número de referencia del pedido
        } else {
            return null; // Devuelve null si el cliente no tiene pedidos
        }
    }
}
