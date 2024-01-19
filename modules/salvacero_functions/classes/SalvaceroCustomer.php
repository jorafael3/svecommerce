<?php

/**
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License version 3.0
 * that is bundled with this package in the file LICENSE.txt
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this module to a newer
 * versions in the future. If you wish to customize this module for your needs
 * please refer to CustomizationPolicy.txt file inside our module for more information.
 *
 * @author Webkul IN
 * @copyright Since 2010 Webkul
 * @license https://opensource.org/licenses/AFL-3.0 Academic Free License version 3.0
 */

class SalvaceroCustomer extends ObjectModel
{

    public $id;
    public $id_customer_ps;
    public $active;
    public $amount;
    public $date_add;
    public $date_upd;

    /**
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'salvacero_customers',
        'primary' => 'id',
        'fields' => array(
            'id_customer_ps' => array('type' => self::TYPE_INT, 'required' => true),
            'active' => array('type' => self::TYPE_INT, 'required' => true),
            'amount' => array('type' => self::TYPE_FLOAT, 'required' => false),
            'date_add' => array(
                'type' => self::TYPE_DATE,
                'required'  =>  false,
                'validate'  =>  'isDateFormat'
            ),
            'date_upd' => array(
                'type' => self::TYPE_DATE,
                'required'  =>  false,
                'validate'  =>  'isDateFormat'
            ),
        ),
    );

    public static function getCustomerForIdPs($id)
    {
        $table = _DB_PREFIX_ . "salvacero_customers";
        $query   = "SELECT * FROM `$table` WHERE id_customer_ps = $id";
        return Db::getInstance()->getRow($query);
    }



    public static function getAmountForIdPs($id)
    {
        $table = _DB_PREFIX_ . "salvacero_customers";
        $query   = "SELECT amount FROM `$table` WHERE id_customer_ps = $id";
        return Db::getInstance()->getValue($query);
    }
}
