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
 *  @version  Release: $Revision: 7060 $
 *  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 *  International Registered Trademark & Property of PrestaShop SA
 */

if (!defined('_PS_VERSION_')) {
    exit;
}

use PrestaShop\PrestaShop\Core\Module\WidgetInterface;

class NrtCountDown extends Module implements WidgetInterface
{
	
	private $templateFile;
	
    public function __construct()
    {	
        $this->name = 'nrtcountdown';
		$this->version = '2.0.5';
		$this->tab = 'front_office_features';
        $this->author = 'AxonVip';
		$this->bootstrap = true;
		$this->need_instance = 0;

        parent::__construct();

        $this->displayName = $this->l('Axon - Special price countdown');
        $this->description = $this->l('Show timer for special price with definied time limit');
        $this->ps_versions_compliancy = array('min' => '1.7.1.0', 'max' => _PS_VERSION_);
		$this->templateFile = 'module:nrtcountdown/views/templates/hook/countdown.tpl';
    }

    public function install()
    {
        return  parent::install()
				&& $this->registerHook('displayHeader')
				&& $this->registerHook('displayCountDown');	
    }

    public function uninstall()
    {
        return  parent::uninstall();
    }

    public function renderWidget($hookName = null, array $configuration = [])
    {
        if ($hookName == null && isset($configuration['hook'])) {
            $hookName = $configuration['hook'];
        }
		
		if (!isset($configuration['smarty']->tpl_vars['product']->value['id_product'])) {
            return;
        }
		
		$cacheId = 'countdown|'.$configuration['smarty']->tpl_vars['product']->value['id_product'].'|'.$configuration['smarty']->tpl_vars['product']->value['id_product_attribute'];
		
		if (!$this->isCached($this->templateFile, $this->getCacheId($cacheId))) {
			$this->smarty->assign($this->getWidgetVariables($hookName, $configuration));
		}

        return $this->fetch($this->templateFile, $this->getCacheId($cacheId));
    }

    public function getWidgetVariables($hookName = null, array $configuration = [])
    {
        if ($hookName == null && isset($configuration['hook'])) {
            $hookName = $configuration['hook'];
        }

        if (isset($configuration['smarty']->tpl_vars['product']->value['specific_prices']['to'])) {
            return array(
                'to' => $configuration['smarty']->tpl_vars['product']->value['specific_prices']['to'],
            );
        }
    }

    public function hookdisplayHeader($params)
    {
		$this->context->controller->registerJavascript('js_countdown', 'modules/'.$this->name.'/views/js/countdown.min.js', ['position' => 'bottom', 'priority' => 51]);
		$this->context->controller->registerJavascript('js_countdown_product', 'modules/'.$this->name.'/views/js/front.js', ['position' => 'bottom', 'priority' => 900]);

        Media::addJsDef(array(
            'opCountDown' => [
                'timezone' => Configuration::get('PS_TIMEZONE'),
            ]
        ));
    }
	
}
