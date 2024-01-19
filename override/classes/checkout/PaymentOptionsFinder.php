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
class PaymentOptionsFinder extends PaymentOptionsFinderCore
{
    /*
    * module: wkpaymentfee
    * date: 2023-12-06 09:05:55
    * version: 6.0.0
    */
    public function find()
    {
        $paymentOptions = parent::find();
        if (Module::isInstalled('wkpaymentfee') && Module::isEnabled('wkpaymentfee')) {
            $wkPaymentfee = Module::getInstanceByName('wkpaymentfee');
            $objPaymentFee = new PaymentFeeDetail();
            $this->context = Context::getContext();
            foreach ($paymentOptions as $key => $methoad) {
                foreach ($methoad as $option) {
                    $paymentFeeDetail = $objPaymentFee->getFeeByPaymentModule($key, true);
                    if ($paymentFeeDetail) {
                        foreach ($paymentFeeDetail as $feeDetail) {
                            $condition = $wkPaymentfee->checkCondition($feeDetail);
                            if ($condition['feeExist'] && $feeDetail['active']) {
                                $feeType = $wkPaymentfee->calculateFee($feeDetail, $condition['checkMSC']);
                                if ($feeType['fee'] > 0) {
                                    $extraFee = Tools::ps_round($feeType['fee'], 2);
                                    $this->context->smarty->assign(
                                        array(
                                            'font' => Configuration::get('Wk_FONT_SIZE'),
                                            'color' => Configuration::get('Wk_COLOR'),
                                            'wk_display_fee' => Tools::displayPrice($extraFee),
                                            'wk_fee' => $extraFee,
                                            'wk_fee_type' => $feeType['discount'],
                                            'wk_description' => PaymentFeeDetail::getDescription(
                                                $feeDetail['id'],
                                                $this->context->language->id
                                            )
                                        )
                                    );
                                    $tplFile = $this->context->smarty->fetch(
                                        _PS_MODULE_DIR_.'wkpaymentfee/views/templates/hook/paymentfee.tpl'
                                    );
                                    $option->setAdditionalInformation($option->getAdditionalInformation().$tplFile);
                                    break;
                                }
                            }
                        }
                    }
                }
            }
        }
        return $paymentOptions;
    }
}
