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
class Product extends ProductCore
{
    /*
    * module: wkpaymentfee
    * date: 2023-12-06 09:05:54
    * version: 6.0.0
    */
    public static function getPriceStatic(
        $id_product,
        $usetax = true,
        $id_product_attribute = null,
        $decimals = 6,
        $divisor = null,
        $only_reduc = false,
        $usereduc = true,
        $quantity = 1,
        $force_associated_tax = false,
        $id_customer = null,
        $id_cart = null,
        $id_address = null,
        &$specific_price_output = null,
        $with_ecotax = true,
        $use_group_reduction = true,
        Context $context = null,
        $use_customer_price = true,
        $id_customization = null
    ) {
        if (Module::isInstalled('wkpaymentfee') && Module::isEnabled('wkpaymentfee')) {
            if ($id_product == Configuration::get('Wk_PF_PRODUCT_ID')) {
                $context = Context::getContext();
                $controller = $context->controller;
                if (isset($controller->module)) {
                    $moduleName = $controller->module->name;
                    $moduleDetail = Module::getInstanceByName($moduleName);
                    if (($moduleDetail->tab == 'payments_gateways'
                        || $moduleName == 'ps_cashondelivery'
                        || $moduleName == 'psadyenpayment'
                        || $moduleName == 'psbraintreepayment')
                    ) {
                        $wkPaymentfee = Module::getInstanceByName('wkpaymentfee');
                        $feeType = $wkPaymentfee->getFeesByCart($moduleName);
                        if (isset($feeType) && !$feeType['discount']) {
                            unset($_POST['PaymentFee']);
                            return Tools::ps_round($feeType['fee'], $decimals);
                        }
                    }
                }
            }
        }
        return parent::getPriceStatic(
            $id_product,
            $usetax,
            $id_product_attribute,
            $decimals,
            $divisor,
            $only_reduc,
            $usereduc,
            $quantity,
            $force_associated_tax,
            $id_customer,
            $id_cart,
            $id_address,
            $specific_price_output,
            $with_ecotax,
            $use_group_reduction,
            $context,
            $use_customer_price,
            $id_customization
        );
    }
    /*
    * module: wkpaymentfee
    * date: 2023-12-06 09:05:54
    * version: 6.0.0
    */
    public static function priceCalculation(
        $id_shop,
        $id_product,
        $id_product_attribute,
        $id_country,
        $id_state,
        $zipcode,
        $id_currency,
        $id_group,
        $quantity,
        $use_tax,
        $decimals,
        $only_reduc,
        $use_reduc,
        $with_ecotax,
        &$specific_price,
        $use_group_reduction,
        $id_customer = 0,
        $use_customer_price = true,
        $id_cart = 0,
        $real_quantity = 0,
        $id_customization = 0
    ) {
        if (Module::isInstalled('wkpaymentfee') && Module::isEnabled('wkpaymentfee')) {
            if ($id_product == Configuration::get('Wk_PF_PRODUCT_ID')) {
                $context = Context::getContext();
                $controller = $context->controller;
                if (isset($controller->module)) {
                    $moduleName = $controller->module->name;
                    $moduleDetail = Module::getInstanceByName($moduleName);
                    if (($moduleDetail->tab == 'payments_gateways'
                        || $moduleName == 'ps_cashondelivery'
                        || $moduleName == 'psadyenpayment'
                        || $moduleName == 'psbraintreepayment')
                    ) {
                        $wkPaymentfee = Module::getInstanceByName('wkpaymentfee');
                        $feeType = $wkPaymentfee->getFeesByCart($moduleName);
                        if (isset($feeType) && !$feeType['discount']) {
                            unset($_POST['PaymentFee']);
                            return Tools::ps_round($feeType['fee'], $decimals);
                        }
                    }
                }
            }
        }
        return parent::priceCalculation(
            $id_shop,
            $id_product,
            $id_product_attribute,
            $id_country,
            $id_state,
            $zipcode,
            $id_currency,
            $id_group,
            $quantity,
            $use_tax,
            $decimals,
            $only_reduc,
            $use_reduc,
            $with_ecotax,
            $specific_price,
            $use_group_reduction,
            $id_customer,
            $use_customer_price,
            $id_cart,
            $real_quantity,
            $id_customization
        );
    }
}
