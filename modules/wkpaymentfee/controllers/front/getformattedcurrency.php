<?php
/**
* 2010-2022 Webkul.
*
* NOTICE OF LICENSE
*
* All right is reserved,
* Please go through LICENSE.txt file inside our module
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade this module to newer
* versions in the future. If you wish to customize this module for your
* needs please refer to CustomizationPolicy.txt file inside our module for more information.
*
* @author Webkul IN
* @copyright 2010-2022 Webkul IN
* @license LICENSE.txt
*/

class WkPaymentFeeGetFormattedCurrencyModuleFrontController extends ModuleFrontController
{
    public function init()
    {
        parent::init();
        $this->display_header = false;
        $this->display_footer = false;
    }

    public function displayAjaxGetFormattedPrice()
    {
        if (!$this->isTokenValid()) {
            die($this->module->l('Something went wrong!', 'getformattedcurrency'));
        }

        $feeType = Tools::getValue('feeType');
        $feeAmount = Tools::getValue('feeAmount');

        if ($feeAmount) {
            $totalOrderAmount = $this->context->cart->getOrderTotal(
                Configuration::get('Wk_TAXCALTYPE'),
                Configuration::get('Wk_FEECALBASE')
            );
            
            if ($feeType === '1') {
                $totalOAWS = $this->context->cart->getOrderTotal(
                    Configuration::get('Wk_TAXCALTYPE'),
                    Cart::ONLY_PRODUCTS_WITHOUT_SHIPPING
                );
                $totalOAOD = $this->context->cart->getOrderTotal(
                    Configuration::get('Wk_TAXCALTYPE'),
                    Cart::ONLY_DISCOUNTS
                );
                $totalOAOS = $this->context->cart->getOrderTotal(
                    Configuration::get('Wk_TAXCALTYPE'),
                    Cart::ONLY_SHIPPING
                );
                if ($totalOAWS > $totalOAOD) {
                    $afterPDisc = $totalOAWS - $totalOAOD;
                    $afterPDisc = ($afterPDisc >= $feeAmount) ? $afterPDisc - $feeAmount + $totalOAOS : $totalOAOS;
                    $totalCartAmount = Tools::displayPrice($afterPDisc);
                }

                if (($totalOAOS + $feeAmount) > $afterPDisc) {
                    $feeAmount = $totalOAWS - $totalOAOD;
                }
                
                $discountText = $this->module->l('Discount', 'getformattedcurrency');
            } else {
                $totalOrderAmount = $this->context->cart->getOrderTotal(
                    Configuration::get('Wk_TAXCALTYPE'),
                    Cart::BOTH
                );
                
                $totalCartAmount = Tools::displayPrice($totalOrderAmount + $feeAmount);
                $discountText = $this->module->l('Extra fee', 'getformattedcurrency');
            }
            die(Tools::jsonEncode(array(
                'amount' => $totalCartAmount,
                'discountText' => $discountText,
                'feeAmount' => Tools::displayPrice($feeAmount)
            )));
        }
    }

    public function displayAjaxAddPaymentFee()
    {
        if (!$this->isTokenValid()) {
            die($this->module->l('Something went wrong!', 'getformattedcurrency'));
        }

        $feeType = Tools::getValue('feeType');
        $feeAmount = Tools::getValue('feeAmount');
        if ($feeType === '1') {
            $objPaymentFeeVoucher = new WkPaymentFeeVoucher();
            $isExistCartRule = $objPaymentFeeVoucher->getIdCartRuleByIdCart(
                $this->context->cart->id,
                $this->context->customer->id
            );
            $isExist = false;
            if ($isExistCartRule) {
                $objCartRule = new CartRule($isExistCartRule['id_cart_rule']);
                if (Validate::isLoadedObject($objCartRule)) {
                    $objPaymentFeeVoucher = new WkPaymentFeeVoucher($isExistCartRule['id']);
                    $objCartRule->quantity_per_user = (int)$objCartRule->quantity_per_user + 1;
                    $isExist = (int)true;
                }
            } else {
                $isExistUsedCartRule = $objPaymentFeeVoucher->getUsedVoucherByIdCustomer($this->context->customer->id);
                if ($isExistUsedCartRule) {
                    $objCartRule = new CartRule($isExistUsedCartRule['id_cart_rule']);
                    if (Validate::isLoadedObject($objCartRule)) {
                        $objPaymentFeeVoucher = new WkPaymentFeeVoucher($isExistUsedCartRule['id']);
                        $objCartRule->quantity_per_user = (int)$objCartRule->quantity_per_user + 1;
                        $isExist = true;
                    }
                }
            }

            if (!$isExist) {
                $objCartRule = new CartRule();
                $objCartRule->code = pSQL(Tools::passwdGen());
                $objCartRule->name = array();
                $objCartRule->quantity_per_user = (int)1;
                foreach (Language::getLanguages(true) as $lang) {
                    $objCartRule->name[$lang['id_lang']] =
                    pSQL($this->module->l('Payment discount', 'getformattedcurrency'));
                }
            }

            $objCartRule->id_customer = (int)$this->context->customer->id;
            $objCartRule->reduction_amount = (float)$feeAmount;
            $objCartRule->date_from = pSQL(date('Y-m-d H:00:00'));
            $objCartRule->date_to = pSQL(date('Y-m-d H:00:00', strtotime('+ 60 minute')));
            $objCartRule->quantity = (int)1;
            $objCartRule->partial_use = (int)0;
            $objCartRule->reduction_tax = (int)1;
            $objCartRule->reduction_currency = (int)$this->context->currency->id;
            $objCartRule->active = (int)1;
            $objCartRule->save();
            $this->context->cart->addCartRule($objCartRule->id);
            $objPaymentFeeVoucher->id_cart_rule = (int)$objCartRule->id;
            $objPaymentFeeVoucher->id_customer = (int)$this->context->customer->id;
            $objPaymentFeeVoucher->id_cart = (int)$this->context->cart->id;
            $objPaymentFeeVoucher->is_used = (int)0;
            $objPaymentFeeVoucher->save();

            die(true);
        } else {
            $this->context->cart->deleteProduct(Configuration::get('Wk_PF_PRODUCT_ID'), 0);
            $this->context->cart->updateQty(
                (int)1,
                (int)Configuration::get('Wk_PF_PRODUCT_ID'),
                null,
                false,
                'up',
                '0',
                null,
                true,
                true
            );

            die(1);
        }
    }
}
