
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
        die(0);
    }
}
