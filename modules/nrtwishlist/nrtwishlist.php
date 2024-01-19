<?php
/*
* 2007-2016 PrestaShop
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
*  @copyright  2007-2016 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

use PrestaShop\PrestaShop\Core\Module\WidgetInterface;

if (!defined('_PS_VERSION_')) {
    exit;
}

require_once dirname(__FILE__).'/src/NrtWishlistProduct.php';

class NrtWishlist extends Module implements WidgetInterface
{
    public function __construct()
    {
        $this->name = 'nrtwishlist';
		$this->tab = 'front_office_features';
        $this->version = '2.1.2';
		$this->author = 'AxonVIP';
        $this->need_instance = 0;
        $this->bootstrap = true;
        $this->controllers = array('view');
        parent::__construct();
        $this->displayName = $this->l('Axon - Wishlist block');
        $this->description = $this->l('Adds a block containing the customer\'s wishlists.');
        $this->ps_versions_compliancy = array('min' => '1.7', 'max' => _PS_VERSION_);
    }
	
    public function install()
    {
        return parent::install()
			&& $this->createTables()
            && $this->registerHook('actionDeleteGDPRCustomer')
            && $this->registerHook('actionExportGDPRData')
            && $this->registerHook('actionProductDelete')
            && $this->registerHook('displayBeforeBodyClosingTag')
            && $this->registerHook('displayButtonWishList')
            && $this->registerHook('displayButtonWishListNbr')
            && $this->registerHook('displayCustomerAccount')
            && $this->registerHook('displayHeader')
            && $this->registerHook('displayMenuMobileCanVas')
            && $this->registerHook('displayMyAccountCanVas')
            && $this->registerHook('registerGDPRConsent');
    }

    public function uninstall()
    {
        return parent::uninstall() && $this->dropTables();
    }
	
    public function createTables()
    {
        $return = true;
        $this->dropTables();

        $return &= Db::getInstance()->execute('
            CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'nrt_wishlist_product` (
				`id_nrt_wishlist_product` int(10) NOT NULL auto_increment,
				`id_product` int(10) unsigned NOT NULL,
				`id_product_attribute` int(10) unsigned NOT NULL,
				`id_customer` int(10) unsigned NOT NULL,
				`id_shop` int(10) unsigned NOT NULL,
                PRIMARY KEY  (`id_nrt_wishlist_product`, `id_product` ,`id_product_attribute`, `id_customer`, `id_shop`)
            ) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8 ;');
					
        return $return;
    }

    public function dropTables()
    {
		return Db::getInstance()->execute('DROP TABLE IF EXISTS `'._DB_PREFIX_.'nrt_wishlist_product`');
    }

    public function hookDisplayHeader()
    {
		$dir_rtl = $this->context->language->is_rtl ? '-rtl' : '';
		
        $this->context->controller->registerStylesheet($this->name.'-css', 'modules/'.$this->name.'/views/css/front'.$dir_rtl.'.css', ['media' => 'all', 'priority' => 998]);
        $this->context->controller->registerJavascript($this->name.'-js', 'modules/'.$this->name.'/views/js/front.js', ['position' => 'bottom', 'priority' => 150]);
		
        $productsIds = NrtWishlistProduct::getWishlistProductsIds((int)$this->context->customer->id);

        Media::addJsDef(array(
			'opWishList' => array(
					'actions' => $this->context->link->getModuleLink('nrtwishlist', 'actions', array(), null, null, null, true),
					'login' => $this->context->link->getModuleLink('nrtwishlist', 'login', array(), null, null, null, true),
					'ids' =>  $productsIds,
					'alert' => ['add' => $this->l('Add to Wishlist'),
								'view' => $this->l('Go to Wishlist')]
        )));
		
    }

    public function renderWidget($hookName = null, array $configuration = [])
    {
        if ($hookName == null && isset($configuration['hook'])) {
            $hookName = $configuration['hook'];
        }
		
		$templateFile = 'module:' . $this->name . '/views/templates/hook/' . 'display-nb.tpl';
		
		$cacheId = 'nbWishList';
		
        if (preg_match('/^displayCustomerAccount\d*$/', $hookName)) {
            $templateFile = 'module:' . $this->name . '/views/templates/hook/' . 'display-account.tpl';
			$cacheId = 'acWishList';
        } elseif (preg_match('/^displayBeforeBodyClosingTag\d*$/', $hookName)) {
            $templateFile = 'module:' . $this->name . '/views/templates/hook/' . 'display-modal.tpl';
			$cacheId = 'mdWishList';
        } elseif (preg_match('/^displayButtonWishList\d*$/', $hookName)) {
            $templateFile = 'module:' . $this->name . '/views/templates/hook/' . 'display-btn.tpl';
			$cacheId = 'btnWishList|'.$configuration['smarty']->tpl_vars['product']->value['id_product'].'|'.$configuration['smarty']->tpl_vars['product']->value['id_product_attribute'];
			
			if (!$this->isCached($templateFile, $this->getCacheId($cacheId))) {
				$this->smarty->assign($this->getWidgetVariables($hookName, $configuration));
			}
        }
		
        return $this->fetch($templateFile, $this->getCacheId($cacheId));
    }

    public function getWidgetVariables($hookName = null, array $configuration = [])
    {
        if ($hookName == null && isset($configuration['hook'])) {
            $hookName = $configuration['hook'];
        }
		
		return array(
			'id_product_attribute' => $configuration['smarty']->tpl_vars['product']->value['id_product_attribute'],
			'id_product' => $configuration['smarty']->tpl_vars['product']->value['id_product'],
		);
    }

    public function hookActionProductDelete($product)
    {
        if (!empty($product['id_product'])) {
            Db::getInstance()->execute("DELETE FROM "._DB_PREFIX_."nrt_wishlist_product WHERE id_product = '".(int)pSQL($product['id_product'])."'");
        }
    }

    public function hookActionDeleteGDPRCustomer($customer)
    {
        if (!empty($customer['id'])) {
            $sql = "DELETE FROM "._DB_PREFIX_."nrt_wishlist_product WHERE id_customer = '".(int)pSQL($customer['id'])."'";
            if (Db::getInstance()->execute($sql)) {
                return json_encode(true);
            }
        }
    }

    public function hookActionExportGDPRData($customer)
    {
        if (!empty($customer['id'])) {
            $sql = "SELECT * FROM " . _DB_PREFIX_ . "nrt_wishlist_product WHERE id_customer = '".(int)pSQL($customer['id'])."'";
            if ($res = Db::getInstance()->executeS($sql)) {
                return json_encode($res);
            }
        }
    }
}
