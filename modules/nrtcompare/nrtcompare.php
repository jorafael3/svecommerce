<?php
/*
* 2017 AxonVIP
*
* NOTICE OF LICENSE
*
*  @author AxonVIP <axonvip@gmail.com>
*  @copyright  2017 axonvip.com
*   
*/

if (!defined('_PS_VERSION_')) {
    exit;
}

use PrestaShop\PrestaShop\Core\Module\WidgetInterface;
use PrestaShop\PrestaShop\Adapter\Image\ImageRetriever;
use PrestaShop\PrestaShop\Adapter\Product\PriceFormatter;
use PrestaShop\PrestaShop\Core\Product\ProductListingPresenter;
use PrestaShop\PrestaShop\Adapter\Product\ProductColorsRetriever;

class NrtCompare extends Module implements WidgetInterface
{
    public function __construct()
    {
		$this->name = 'nrtcompare';
		$this->tab = 'front_office_features';
		$this->version = '2.1.3';
		$this->author = 'AxonVIP';
		$this->need_instance = 0;

		$this->bootstrap = true;
		parent::__construct();

		$this->displayName = $this->l('Axon - Product Compare');
		$this->description = $this->l('Required by author: AxonVIP.');
		$this->ps_versions_compliancy = array('min' => '1.7', 'max' => _PS_VERSION_);
    }

    public function install()
    {
		return parent::install()
            && $this->registerHook('displayHeader')	
			&& $this->registerHook('displayButtonCompareNbr')
            && $this->registerHook('displayButtonCompare')
			&& $this->registerHook('displayMenuMobileCanVas')
			&& $this->registerHook('displayMyAccountCanVas');
    }

    public function uninstall()
    {
		return parent::uninstall();
    }

    public function hookDisplayHeader()
    {
		$dir_rtl = $this->context->language->is_rtl ? '-rtl' : '';
		
        $this->context->controller->registerStylesheet($this->name.'-css', 'modules/'.$this->name.'/views/css/front'.$dir_rtl.'.css', ['media' => 'all', 'priority' => 150]);
        $this->context->controller->registerJavascript($this->name.'-js', 'modules/'.$this->name.'/views/js/front.js', ['position' => 'bottom', 'priority' => 150]);

        $productsIds = $this->context->cookie->nrtCompare;
		
		if($productsIds) {
			$productsIds = json_decode($productsIds, true);
		}else{
			$productsIds = array();
		}

        Media::addJsDef(array(
			'opCompare' => array(
					'actions' => $this->context->link->getModuleLink('nrtcompare', 'actions', array(), null, null, null, true),
					'ids' =>  $productsIds,
					'alert' => ['add' => $this->l('Compare'),
								'view' => $this->l('Compare')]
        )));
    }
		
    public function renderWidget($hookName = null, array $configuration = [])
    {		
        if ($hookName == null && isset($configuration['hook'])) {
            $hookName = $configuration['hook'];
        }
		
        $templateFile = 'module:' . $this->name . '/views/templates/hook/' . 'display-nb.tpl';
		
		$cacheId = 'nbCompare';
		
		if (preg_match('/^displayButtonCompare\d*$/', $hookName)) {
            $templateFile = 'module:' . $this->name . '/views/templates/hook/' . 'display-btn.tpl';

			$cacheId = 'btnCompare|'.$configuration['smarty']->tpl_vars['product']->value['id_product'].'|'.$configuration['smarty']->tpl_vars['product']->value['id_product_attribute'];
			
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
	
}
