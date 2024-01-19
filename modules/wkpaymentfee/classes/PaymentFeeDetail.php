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

class PaymentFeeDetail extends ObjectModel
{
    public $module;
    public $feetype;
    public $feeamount;
    public $feepercent;
    public $min_amount;
    public $max_amount;
    public $orderamount;
    public $discount;
    public $active;
    public $customer_group;
    public $countries;
    public $category;
    public $manufacturer;
    public $supplier;
    public $priority;

    public $name;
    public $description;

    public static $definition = array(
        'table' => 'wk_paymentfee',
        'primary' => 'id',
        'multilang' => true,
        'multilang_shop' => true,
        'fields' => array(
            'module' => array('shop' => true, 'type' => self::TYPE_STRING, 'required' => true),
            'feetype' => array('shop' => true, 'type' => self::TYPE_STRING, 'required' => true),
            'feepercent' => array('shop' => true, 'type' => self::TYPE_FLOAT),
            'feeamount' => array('shop' => true, 'type' => self::TYPE_FLOAT),
            'min_amount' => array('shop' => true, 'type' => self::TYPE_FLOAT),
            'max_amount' => array('shop' => true, 'type' => self::TYPE_FLOAT),
            'orderamount' => array('shop' => true, 'type' => self::TYPE_FLOAT),
            'customer_group' => array('shop' => true, 'type' => self::TYPE_STRING),
            'countries' => array('shop' => true, 'type' => self::TYPE_STRING),
            'category' => array('shop' => true, 'type' => self::TYPE_STRING),
            'manufacturer' => array('shop' => true, 'type' => self::TYPE_STRING),
            'supplier' => array('shop' => true, 'type' => self::TYPE_STRING),
            'priority' => array('shop' => true, 'type' => self::TYPE_INT, 'required' => true),
            'discount' => array('shop' => true, 'type' => self::TYPE_BOOL, 'validate' => 'isBool', 'required' => true),
            'active' => array('shop' => true, 'type' => self::TYPE_BOOL, 'validate' => 'isBool', 'required' => true),
            /* Lang fields */
            'name' => array('type' => self::TYPE_HTML, 'lang' => true, 'validate' => 'isCleanHtml', 'required' => true),
            'description' => array('type' => self::TYPE_HTML, 'lang' => true, 'validate' => 'isCleanHtml'),
        ),
    );

    public function __construct($id = null, $idLang = null, $idShop = null)
    {
        parent::__construct($id, $idLang, $idShop);
        Shop::addTableAssociation('wk_paymentfee', array('type' => 'shop'));
        Shop::addTableAssociation('wk_paymentfee_lang', array('type' => 'fk_shop'));
    }

    public function getAllPaymentFeeDetails($active = false)
    {
        $sql = 'SELECT * FROM `'._DB_PREFIX_.'wk_paymentfee`';
        if ($active) {
            $sql .= 'WHERE `active` ='.(int) $active;
        }
        return Db::getInstance()->executeS($sql);
    }

    public function getFeeByPaymentModule($module, $active = false, $idShop = false)
    {
        if (!$idShop) {
            $idShop = Context::getContext()->shop->id;
        }
        return Db::getInstance()->executeS(
            'SELECT * FROM `'._DB_PREFIX_.'wk_paymentfee_shop`
            WHERE `module` = \''.pSQL($module). '\'
            '.($active ? ' AND `active` = 1' : '')
            . ' AND id_shop=' . (int)$idShop.'
            ORDER BY `priority` ASC'
        );
    }

    public static function getDescription($id, $langId)
    {
        return Db::getInstance()->getValue(
            'SELECT `description` FROM `'._DB_PREFIX_.'wk_paymentfee_lang`
            WHERE `id` ='.(int) $id.'
            AND `id_shop` ='.(int) Context::getContext()->shop->id .'
            AND `id_lang` ='.(int) $langId
        );
    }

    public function insertExtraFeeByOrderId($orderId, $extraFee, $module, $type)
    {
        return Db::getInstance()->execute(
            'INSERT INTO `'._DB_PREFIX_.'wk_paymentfee_order`
                (`id_order`, `extra_fee`, `module`, `type`,`date_add`, `date_upd`)
            VALUES ('.(int) $orderId.','.(float) $extraFee.', "'.pSql($module).'", '.(int) $type.', NOW(), NOW())'
        );
    }

    public function getFeeByIdOrder($idOrder)
    {
        return Db::getInstance()->getRow(
            'SELECT * FROM `'._DB_PREFIX_.'wk_paymentfee_order`
            WHERE `id_order` ='.(int) $idOrder
        );
    }

    public function insertCurrency($minIdCurrency, $maxIdCurrency, $feeIdCurrency, $orderIdCurrency, $idShop)
    {
        return Db::getInstance()->execute(
            'INSERT INTO `'._DB_PREFIX_.'wk_paymentfee_currency`
            (`id`, `id_shop`, `fee_currency`, `min_currency`, `max_currency`, `orderamount_currency`)
            VALUES ('.(int) $this->id.', '. (int) $idShop.', '. (int) $feeIdCurrency.', '. (int) $minIdCurrency.',
            '. (int) $maxIdCurrency.', '. (int) $orderIdCurrency.')'
        );
    }

    public function updateCurrency($minIdCurrency, $maxIdCurrency, $feeIdCurrency, $orderIdCurrency, $idShop)
    {
        return Db::getInstance()->execute(
            'UPDATE `'._DB_PREFIX_.'wk_paymentfee_currency`
            SET `fee_currency` = '.(int)$feeIdCurrency.', `min_currency` = '.(int)$minIdCurrency.',
            `max_currency` = '.(int)$maxIdCurrency.', `orderamount_currency` = '.(int)$orderIdCurrency.'
            WHERE `id` = '.(int)$this->id . ' AND `id_shop` = '.(int)$idShop
        );
    }

    public function getCurrencyById($id, $idShop = false)
    {
        if (!$idShop) {
            $idShop = Context::getContext()->shop->id;
        }
        $result = Db::getInstance()->getRow(
            'SELECT * FROM `'._DB_PREFIX_.'wk_paymentfee_currency`
            WHERE `id` = '.(int)$id. ' AND id_shop=' . (int)$idShop
        );

        if (!$result) {
            $result = Db::getInstance()->getRow(
                'SELECT * FROM `'._DB_PREFIX_.'wk_paymentfee_currency`
                WHERE `id` = '.(int)$id
            );
        }

        return $result;
    }
}
