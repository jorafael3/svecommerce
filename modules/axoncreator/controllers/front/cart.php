<?php
/**
 * AxonCreator - Website Builder
 *
 * NOTICE OF LICENSE
 *
 * @author    axonvip.com <support@axonvip.com>
 * @copyright 2021 axonvip.com
 * @license   You can not resell or redistribute this software.
 *
 * https://www.gnu.org/licenses/gpl-3.0.html
 */


class AxonCreatorCartModuleFrontController extends ModuleFrontController
{
    public $ssl = true;

    /**
    * @see FrontController::initContent()
    */
    public function initContent()
    {
        parent::initContent();

        $modal = null;

		if(ob_get_contents()){
			ob_end_clean();
		}
        header('Content-Type: application/json');
        die(json_encode([
            'preview' => $this->renderWidget(['cart' => $this->context->cart]),
        ]));
    }
	
    public function renderWidget(array $params)
    {
        if (Configuration::isCatalogMode()) {
            return;
        }
		
		$template = AXON_CREATOR_PATH . 'views/templates/widgets/cart.tpl';

        $this->context->smarty->assign($this->getWidgetVariables($params));

        return $this->context->smarty->fetch($template);
    }

    public function getWidgetVariables(array $params)
    {
        $cart_url = $this->getCartSummaryURL();

        return array(
            'cart' => (new PrestaShop\PrestaShop\Adapter\Cart\CartPresenter())->present(isset($params['cart']) ? $params['cart'] : $this->context->cart),
            'cart_url' => $cart_url,
			'has_ajax' => (bool)Configuration::get('PS_BLOCK_CART_AJAX')
        );
    }
	
    private function getCartSummaryURL()
    {
        return $this->context->link->getPageLink(
            'cart',
            null,
            $this->context->language->id,
            array(
                'action' => 'show'
            ),
            false,
            null,
            true
        );
    }
}
