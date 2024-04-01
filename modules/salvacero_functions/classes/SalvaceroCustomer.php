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
    public $amount_inicial;
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
            'amount_inicial' => array('type' => self::TYPE_FLOAT, 'required' => false),
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

    public static function getAmountCompletoForIdPs($id)
    {
        $table = _DB_PREFIX_ . "salvacero_customers";
        $query   = "SELECT amount_inicial FROM `$table` WHERE id_customer_ps = $id";
        return Db::getInstance()->getValue($query);
    }

    // JORGE ALVARADO
    public static function DeleteAmountForIdPs($id)
    {
        $table = _DB_PREFIX_ . "salvacero_customers";
        $query   = "DELETE FROM `$table` WHERE id_customer_ps = $id";
        $result = Db::getInstance()->execute($query);
        return $result !== false;
    }

    public static function setCustomerCreditDataForIdPs($id, $total, $meses, $orden)
    {
        $table = _DB_PREFIX_ . "salvacero_customers_order_credit_data";
        $query = "INSERT INTO `$table`
            (
                customer_id,
                total,
                meses,
                orden_number
            ) VALUES (
                '$id',
                '$total',
                '$meses',
                '$orden'
            )";
            
        $result = Db::getInstance()->execute($query);
        return $result !== false;
    }

    public static function getOrderByCustomer($id_customer)
    {
        // Realizar una consulta para obtener el ID del último pedido del cliente
        $result = Db::getInstance()->getValue(
            '
        SELECT `id_order`
        FROM `' . _DB_PREFIX_ . 'orders`
        WHERE `id_customer` = ' . (int)$id_customer . '
        ORDER BY `id_order` DESC
        LIMIT 1'
        );

        return $result ? $result : null; // Devuelve el ID del último pedido o null si no hay pedidos
    }

    public static function setCustomerCreditDataForIdPs_after($datos)
    {
        $table = _DB_PREFIX_ . "salvacero_customers_order_credit_data";

        $order_id = $datos["order_id"];
        $customer_id = $datos["customer_id"];
        $reference = $datos["reference"];

        $query = "UPDATE`$table`
            SET
                orden_number = '$order_id',
                actualizado = 1,
                referencia = '$reference'
            where customer_id = '$customer_id'
            and actualizado = 0
            ";
            
        $result = Db::getInstance()->execute($query);
        return $result !== false;
    }

    public static function getLastOrderByCustomerId($customer_id) {
        $sql = "SELECT * 
                FROM " . _DB_PREFIX_ . "orders 
                WHERE id_customer = " . (int)$customer_id . "
                ORDER BY id_order desc
                -- limit 1
                ";
        
        $result = Db::getInstance()->getRow($sql);
        return [$result,$sql];
    }

    public static function getDatosCreditoOrden($id,$reference)
    {
        $table = _DB_PREFIX_ . "salvacero_customers_order_credit_data";
        $query   = "SELECT * FROM `$table` WHERE referencia = '$reference' and customer_id = $id";
        return Db::getInstance()->getRow($query);
    }

}
