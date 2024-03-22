<?php
/**
* 2007-2017 PrestaShop
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
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2017 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

class StOutOfStockToNowhereProClass
{
    public static function getQantityByIdProduct($id_product, $id_shop)
    {
        $sql = '
            SELECT `quantity`
            FROM `'._DB_PREFIX_.'st_stock_visibility_pro`
            WHERE `id_product` = '.(int)$id_product.' AND `id_shop` = '.(int)$id_shop;
        return Db::getInstance()->getValue($sql);
    }
    public static function deleteByIdProduct($id_product, $id_shop)
    {
        return Db::getInstance()->execute('DELETE FROM '._DB_PREFIX_.'st_stock_visibility_pro WHERE `id_product`='.(int)$id_product.' AND  `id_shop`='.(int)$id_shop);
    }
    public static function save($old_stock_info, $id_product, $quantity, $id_shop)
    {
        if($old_stock_info===false)
            return self::create($id_product, $quantity, $id_shop);
        else
            return self::update($id_product, $quantity, $id_shop);
    }
    public static function update($id_product, $quantity, $id_shop)
    {
        return Db::getInstance()->update('st_stock_visibility_pro', array(
                    'quantity' => $quantity,
                ), '`id_product`='.$id_product.' AND `id_shop`='.$id_shop);
    }
    public static function create($id_product, $quantity, $id_shop)
    {
        return Db::getInstance()->insert('st_stock_visibility_pro', array(
                    'id_product' => $id_product,
                    'quantity' => $quantity,
                    'id_shop' => $id_shop,
                ));
    }

    public static function getAll()
    {
        return Db::getInstance()->executeS('
            SELECT *
            FROM `'._DB_PREFIX_.'st_stock_visibility_pro`
            WHERE `id_shop` = '.(int)Context::getContext()->shop->id
        );
    }
}