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

use PrestaShop\PrestaShop\Adapter\Image\ImageRetriever;
use PrestaShop\PrestaShop\Adapter\Product\PriceFormatter;
use PrestaShop\PrestaShop\Core\Product\ProductListingPresenter;
use PrestaShop\PrestaShop\Adapter\Product\ProductColorsRetriever;

class NrtCompareActionsModuleFrontController extends ModuleFrontController
{
    public function postProcess()
    {
        if (Tools::getValue('process') == 'remove') {
            $this->processRemove();
        } elseif (Tools::getValue('process') == 'add') {
            $this->processAdd();
        } elseif (Tools::getValue('process') == 'removeAll') {
            $this->processRemoveAll();
        }
    }

    public function processRemove()
    {
        header('Content-Type: application/json');
        $idProduct = (int)Tools::getValue('idProduct');
		$idProductAttribute = (int)Tools::getValue('idProductAttribute');
		
        $productsIds = $this->context->cookie->nrtCompare;
		
		if ($productsIds) {
			$productsIds = json_decode($productsIds, true);
		}else{
			$productsIds = array();
		}
		
		$restIds = array();
		
		foreach ($productsIds as $key => $product) {
			if ($idProduct.'-'.$idProductAttribute != $product) {
				$restIds[] = $product;
			}
		}

        $this->context->cookie->__set('nrtCompare', json_encode($restIds, true));

		$this->ajaxDie(json_encode(array(
			'productsIds' => $restIds
		)));
    }

    public function processRemoveAll()
    {
        header('Content-Type: application/json');

        $productsIds = array();
        $this->context->cookie->__set('nrtCompare', json_encode($productsIds, true));
		
		$this->ajaxDie(json_encode(array(
			'productsIds' => $productsIds
		)));
    }

    public function processAdd()
    {
        header('Content-Type: application/json');

        $idProduct = (int)Tools::getValue('idProduct');
		$idProductAttribute = (int)Tools::getValue('idProductAttribute');

        $productsIds = $this->context->cookie->nrtCompare;
		
		if ($productsIds) {
			$productsIds = json_decode($productsIds, true);
		}else{
			$productsIds = array();
		}
		
        if (!in_array($idProduct.'-'.$idProductAttribute, $productsIds)) {
            $productsIds[] = $idProduct.'-'.$idProductAttribute;
        }
			
		$this->context->cookie->__set('nrtCompare', json_encode($productsIds, true));

		$this->ajaxDie(json_encode(array(
			'productsIds' => $productsIds
		)));
		
    }
}
