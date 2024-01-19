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

if (!defined('_PS_VERSION_')) {
    exit;
}

function upgrade_module_6_0_0()
{
    $idShop = Context::getContext()->shop->id;
    $wkQueries = array(
        "ALTER TABLE `"._DB_PREFIX_."wk_paymentfee_currency`
        ADD COLUMN `id_shop` int(10) unsigned NOT NULL AFTER `id`",

        "ALTER TABLE `"._DB_PREFIX_."wk_paymentfee_currency` DROP PRIMARY KEY,
        ADD PRIMARY KEY(`id`, `id_shop`)",

        "ALTER TABLE `"._DB_PREFIX_."wk_paymentfee_lang`
        ADD COLUMN `id_shop` int(10) unsigned NOT NULL AFTER `id`",

        "ALTER TABLE `"._DB_PREFIX_."wk_paymentfee_lang` DROP PRIMARY KEY,
        ADD PRIMARY KEY(`id`, `id_shop`, `id_lang`)",

        "CREATE TABLE IF NOT EXISTS `"._DB_PREFIX_."wk_paymentfee_shop` (
            `id` int(10) unsigned NOT NULL,
            `id_shop` int(10) unsigned NOT NULL,
            `module` varchar(255) NOT NULL,
            `feetype` ENUM('amount', 'percent', 'both') NOT NULL DEFAULT  'amount',
            `feepercent` decimal(5,2) NOT NULL DEFAULT '0.00',
            `feeamount` decimal(17,2) NOT NULL DEFAULT '0.00',
            `min_amount` decimal(17,2) NOT NULL DEFAULT '0.00',
            `max_amount` decimal(20,2) NOT NULL DEFAULT '0.00',
            `orderamount` decimal(20,2) NOT NULL DEFAULT '0.00',
            `calculate_fee` int(3) unsigned NOT NULL,
            `customer_group` text,
            `countries` text,
            `category` text,
            `manufacturer` text,
            `supplier` text,
            `priority` int(10) NOT NULL DEFAULT '1',
            `discount` tinyint(1) unsigned NOT NULL DEFAULT '0',
            `active` tinyint(1) unsigned NOT NULL DEFAULT '0',
            PRIMARY KEY  (`id`,`id_shop`)
        ) ENGINE="._MYSQL_ENGINE_." DEFAULT CHARSET=utf8",

        "INSERT INTO `"._DB_PREFIX_."wk_paymentfee_shop` (`id`, `id_shop`, `module`, `feetype`, `feepercent`,
        `feeamount`, `min_amount`, `max_amount`, `orderamount`, `calculate_fee`, `customer_group`, `countries`,
        `category`, `manufacturer`, `supplier`, `priority`, `discount`, `active`)
        SELECT  `id`, ". (int) $idShop .", `module`, `feetype`, `feepercent`, `feeamount`, `min_amount`, `max_amount`,
        `orderamount`, `calculate_fee`, `customer_group`, `countries`,
        `category`, `manufacturer`, `supplier`, `priority`, `discount`, `active`
        FROM  `"._DB_PREFIX_."wk_paymentfee`",

        "UPDATE `"._DB_PREFIX_."wk_paymentfee_lang` set `id_shop`=". (int) $idShop,

        "UPDATE `"._DB_PREFIX_."wk_paymentfee_currency` set `id_shop`=". (int) $idShop,
    );

    $wkDatabaseInstance = Db::getInstance();
    $wkSuccess = true;
    foreach ($wkQueries as $wkQuery) {
        $wkSuccess &= $wkDatabaseInstance->execute(trim($wkQuery));
    }

    if ($wkSuccess) {
        Configuration::updateValue('Wk_TAXCALTYPE', '1');
        Configuration::updateValue('Wk_FEECALBASE', '3');
    }
    
    return $wkSuccess;
}
