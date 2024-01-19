<?php
/**
* 2011 - 2021 HiPresta
*
* MODULE WhatsApp Live chat with customers
*
* @author    HiPresta <support@hipresta.com>
* @copyright HiPresta 2021
* @license   Addons PrestaShop license limitation
* @link      https://hipresta.com
*
* NOTICE OF LICENSE
*
* Don't use this module on several shops. The license provided by PrestaShop Addons
* for all its modules is valid only once for a single shop.
*/

class HiWhatsAppAccount extends ObjectModel
{
    public $id_hiwhatsapp;
    public $active;
    public $avatar;
    public $name;
    public $title;
    public $account_number;
    public $always_available;
    public $availability;
    public $button_label;
    public $offline_text;
    public $position;

    public static $definition = array(
        'table' => 'hiwhatsapp',
        'primary' => 'id_hiwhatsapp',
        'multilang' => true,
        'fields' => array(
            'active' => array('type' => self::TYPE_INT, 'validate' => 'isInt'),
            'avatar' => array('type' => self::TYPE_STRING, 'validate' => 'isCleanHtml', 'size' => 255),
            'name' => array('type' => self::TYPE_STRING, 'validate' => 'isCleanHtml', 'lang' => true, 'size' => 255, 'required' => true),
            'title' => array('type' => self::TYPE_STRING, 'validate' => 'isCleanHtml', 'lang' => true, 'size' => 255, 'required' => true),
            'account_number' => array('type' => self::TYPE_STRING, 'validate' => 'isCleanHtml', 'size' => 255),
            'always_available' => array('type' => self::TYPE_INT, 'validate' => 'isInt'),
            'availability' => array('type' => self::TYPE_STRING, 'validate' => 'isCleanHtml'),
            'button_label' => array('type' => self::TYPE_STRING, 'validate' => 'isCleanHtml', 'lang' => true, 'size' => 255, 'required' => true),
            'offline_text' => array('type' => self::TYPE_STRING, 'validate' => 'isCleanHtml', 'lang' => true),
            'position' => array('type' => self::TYPE_INT, 'validate' => 'isInt'),
        )
    );

    public function add($autodate = true, $null_values = false)
    {
        $res = parent::add($autodate, $null_values);

        return $res;
    }

    public function update($null_values = false)
    {
        $res = parent::update($null_values);

        return $res;
    }

    
    public function delete()
    {
        $context = Context::getContext();
        $res = parent::delete();
        $res &= Db::getInstance()->execute('
            DELETE FROM `'._DB_PREFIX_.'hiwhatsapp_shop`
            WHERE id_hiwhatsapp = '.(int)$this->id.'
            AND id_shop = '.$context->shop->id);

        return $res;
    }

    public static function getAccounts($active = false, $offset = 0, $limit = 0, $orderWay = 'DESC', $orderBy = 'position')
    {
        $id_lang = Context::getContext()->language->id;
        $id_shop = Context::getContext()->shop->id;
        $query = new DbQuery();

        $query
            ->select('w.*')
            ->select('w_l.*')
            ->from('hiwhatsapp', 'w')
            ->leftJoin('hiwhatsapp_lang', 'w_l', 'w_l.`id_hiwhatsapp` = w.`id_hiwhatsapp`')
            ->leftJoin('hiwhatsapp_shop', 'w_s', 'w_s.`id_hiwhatsapp` = w.`id_hiwhatsapp`')
            ->where('w_l.`id_lang` = '.(int)$id_lang)
            ->where('w_s.`id_shop` = '.(int)$id_shop);

        if ($active) {
            $query->where('w.active = 1');
        }

        $query
            ->limit((int)$limit, (int)$offset)
            ->orderBy('w.'.pSQL($orderBy).' '.pSQL($orderWay));

        $accounts = Db::getInstance()->executeS($query->build());

        return $accounts;
    }

    public function getAccountsByProductID($id_product, $active = true)
    {
        $id_product = (int)$id_product;
        if (!$id_product) {
            return array();
        }

        $id_lang = Context::getContext()->language->id;
        $id_shop = Context::getContext()->shop->id;

        $query = new DbQuery();

        $query
            ->select('w.*')
            ->select('w_l.*')
            ->from('hiwhatsapprelatedproduct', 'wrp')
            ->leftJoin('hiwhatsapp', 'w', 'w.`id_hiwhatsapp` = wrp.`id_hiwhatsapp`')
            ->leftJoin('hiwhatsapp_lang', 'w_l', 'w_l.`id_hiwhatsapp` = w.`id_hiwhatsapp`')
            ->leftJoin('hiwhatsapp_shop', 'w_s', 'w.`id_hiwhatsapp` = w_s.`id_hiwhatsapp`')
            ->where('w_l.`id_lang` = '.(int)$id_lang)
            ->where('w_s.`id_shop` = '.(int)$id_shop)
            ->where('wrp.`id_product` = '.(int)$id_product);

        if ($active) {
            $query->where('w.active = 1');
        }

        return Db::getInstance()->executeS($query);
    }

    public function getAccountsByCategories($categories, $active = true)
    {
        if (!is_array($categories) || !$categories) {
            return array();
        }

        $id_lang = Context::getContext()->language->id;
        $id_shop = Context::getContext()->shop->id;

        $query = new DbQuery();

        $categories = implode(',', $categories);

        $query
            ->select('w.*')
            ->select('w_l.*')
            ->from('hiwhatsapprelatedcategory', 'wrc')
            ->leftJoin('hiwhatsapp', 'w', 'w.`id_hiwhatsapp` = wrc.`id_hiwhatsapp`')
            ->leftJoin('hiwhatsapp_lang', 'w_l', 'w_l.`id_hiwhatsapp` = w.`id_hiwhatsapp`')
            ->leftJoin('hiwhatsapp_shop', 'w_s', 'w.`id_hiwhatsapp` = w_s.`id_hiwhatsapp`')
            ->where('w_l.`id_lang` = '.(int)$id_lang)
            ->where('w_s.`id_shop` = '.(int)$id_shop)
            ->where('wrc.`id_category` IN ('.pSQL($categories).')');

        if ($active) {
            $query->where('w.active = 1');
        }

        return Db::getInstance()->executeS($query);
    }

    public function getAccountsForCurrentPage($products = array(), $categories = array(), $position = 'productAdditionalInfo', $active = true)
    {
        if (!is_array($products) || !$products) {
            $products = array(0);
        }

        if (!is_array($categories) || !$categories) {
            $categories = array(0);
        }

        $products = implode(',', $products);
        $categories = implode(',', $categories);

        $id_lang = Context::getContext()->language->id;
        $id_shop = Context::getContext()->shop->id;

        $query = '
            SELECT w.*, w_l.* 
            FROM `'._DB_PREFIX_.'hiwhatsapp` w
            LEFT JOIN `'._DB_PREFIX_.'hiwhatsapp_lang` w_l
                ON (w_l.`id_hiwhatsapp` = w.`id_hiwhatsapp`)
            LEFT JOIN `'._DB_PREFIX_.'hiwhatsapp_shop` w_s
                ON (w_s.`id_hiwhatsapp` = w.`id_hiwhatsapp`)
            LEFT JOIN `'._DB_PREFIX_.'hiwhatsappposition` w_p
                ON (w_p.`id_hiwhatsapp` = w.`id_hiwhatsapp`)
            WHERE w_l.`id_lang` = '.(int)$id_lang.'
            AND w_s.`id_shop` = '.(int)$id_shop.'
            AND w_p.`position` = \''.pSQL($position).'\'
            AND (
                (w.id_hiwhatsapp NOT IN (SELECT wrp.id_hiwhatsapp FROM `'._DB_PREFIX_.'hiwhatsapprelatedproduct` wrp)
                AND w.id_hiwhatsapp NOT IN (SELECT wrc.id_hiwhatsapp FROM `'._DB_PREFIX_.'hiwhatsapprelatedcategory` wrc))
                OR
                (w.`id_hiwhatsapp` IN (SELECT `id_hiwhatsapp` FROM `'._DB_PREFIX_.'hiwhatsapprelatedcategory` WHERE `id_category` IN ('.pSQL($categories).')))
                OR
                (w.`id_hiwhatsapp` IN (SELECT `id_hiwhatsapp` FROM `'._DB_PREFIX_.'hiwhatsapprelatedproduct` WHERE `id_product` IN ('.pSQL($products).')))
            )
        ';

        if ($active) {
            $query .= ' AND w.`active` = 1';
        }

        $query .= ' ORDER BY w.`position` DESC';

        return Db::getInstance()->executeS($query);
    }

    public function getAccountById($id_account, $active = true)
    {
        $id_lang = Context::getContext()->language->id;
        $id_shop = Context::getContext()->shop->id;

        $query = '
            SELECT w.*, w_l.* 
            FROM `'._DB_PREFIX_.'hiwhatsapp` w
            LEFT JOIN `'._DB_PREFIX_.'hiwhatsapp_lang` w_l
                ON (w_l.`id_hiwhatsapp` = w.`id_hiwhatsapp`)
            LEFT JOIN `'._DB_PREFIX_.'hiwhatsapp_shop` w_s
                ON (w_s.`id_hiwhatsapp` = w.`id_hiwhatsapp`)
            LEFT JOIN `'._DB_PREFIX_.'hiwhatsappposition` w_p
                ON (w_p.`id_hiwhatsapp` = w.`id_hiwhatsapp`)
            WHERE w_l.`id_lang` = '.(int)$id_lang.'
            AND w_s.`id_shop` = '.(int)$id_shop.'
            AND w.`id_hiwhatsapp` = '.(int)$id_account.'
            GROUP BY w.`id_hiwhatsapp`
        ';

        if ($active) {
            $query .= ' AND w.`active` = 1';
        }

        return Db::getInstance()->executeS($query);
    }

    public static function getPosition()
    {
        return (int)DB::getInstance()->getValue('SELECT MAX(position) FROM '._DB_PREFIX_.'hiwhatsapp') + 1;
    }
}
