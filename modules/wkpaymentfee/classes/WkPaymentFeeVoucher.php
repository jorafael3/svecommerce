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

class WkPaymentFeeVoucher extends ObjectModel
{
    public $id;
    public $id_cart_rule;
    public $id_cart;
    public $id_customer;
    public $is_used;
    public $date_add;
    public $date_upd;

    public static $definition = array(
        'table' => 'wk_paymentfee_voucher',
        'primary' => 'id',
        'fields' => array(
            'id_cart_rule' => array('type' => self::TYPE_INT, 'validate' => 'isInt', 'required' => true),
            'id_cart' => array('type' => self::TYPE_INT, 'validate' => 'isInt', 'required' => true),
            'id_customer' => array('type' => self::TYPE_INT, 'validate' => 'isInt', 'required' => true),
            'is_used' => array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
            'date_add' => array('type' => self::TYPE_DATE,'validate' => 'isDateFormat'),
            'date_upd' => array('type' => self::TYPE_DATE,'validate' => 'isDateFormat'),
        ),
    );

    public function getIdCartRuleByIdCart($idCart, $idCustomer)
    {
        return Db::getInstance()->getRow(
            'SELECT * FROM `'._DB_PREFIX_.'wk_paymentfee_voucher`
            WHERE `id_cart` = '. (int)$idCart.'
            AND `id_customer` = ' .(int)$idCustomer
        );
    }

    public function getUsedVoucherByIdCustomer($idCustomer)
    {
        return Db::getInstance()->getRow(
            'SELECT * FROM `'._DB_PREFIX_.'wk_paymentfee_voucher`
            WHERE `id_customer` = '. (int)$idCustomer.'
            AND `is_used` = 1'
        );
    }
}
