<?php
/*
* 2007-2015 PrestaShop
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
*  @copyright  2007-2015 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

if (!defined('_PS_VERSION_')) {
    exit;
}

require_once _PS_MODULE_DIR_ . 'nrtsearchbar/src/NrtSearchCore.php';
require_once _PS_MODULE_DIR_ . 'nrtsearchbar/src/NrtSearchProvider.php';

use PrestaShop\PrestaShop\Core\Module\WidgetInterface;
use AxonVip\Module\Adapter\Search\NrtSearchProvider;

class NrtSearchbar extends Module implements WidgetInterface
{
    public $templateFileBtn;
	public $templateFile;
	public $templateFileBox;
	public $defaults;
    public $cfgName;

    public function __construct()
    {
        $this->name = 'nrtsearchbar';
        $this->author = 'AxonVip';
        $this->version = '2.1.4';
        $this->need_instance = 0;
		$this->bootstrap = true;
		$this->cfgName = 'nrtsearch_';

        parent::__construct();

        $this->displayName = $this->l('Axon - Search bar');
        $this->description = $this->l('Adds a quick search field to your website.');

        $this->ps_versions_compliancy = array('min' => '1.7.1.0', 'max' => _PS_VERSION_);

		$this->templateFileBtn = 'module:nrtsearchbar/views/templates/hook/btn_search.tpl';
        $this->templateFile = 'module:nrtsearchbar/views/templates/hook/searchbar.tpl';
		$this->templateFileBox = 'module:nrtsearchbar/views/templates/hook/searchbar_modal.tpl';
		$this->defaults = array(
			'show_cat' => 1,
			'max_items' => 36
		);
    }

    public function install()
    {
        return parent::install()
            && $this->registerHook('displayBodyBottom')
            && $this->registerHook('displayButtonSearch')
            && $this->registerHook('displayHeaderMobileRight')
            && $this->registerHook('displaySearch')
            && $this->registerHook('displayHeader')
            && $this->registerHook('productSearchProvider')
            && $this->registerHook('actionProductSearchAfter')
			&& $this->setDefaults()
			&& $this->_createTab()
        ;
    }
	
    public function uninstall()
    {
        foreach ($this->defaults as $default => $value) {
            Configuration::deleteByName($this->cfgName . $default);
        }
        if (!parent::uninstall() || !$this->_deleteTab()) {
            return false;
        }
        return true;
    }
	
    private function _createTab()
    {
        $response = true;

        // First check for parent tab
        $parentTabID = Tab::getIdFromClassName('AdminMenuFirst');

        if ($parentTabID) {
            $parentTab = new Tab($parentTabID);
        }
        else {
            $parentTab = new Tab();
            $parentTab->active = 1;
            $parentTab->name = array();
            $parentTab->class_name = "AdminMenuFirst";
            foreach (Language::getLanguages() as $lang) {
                $parentTab->name[$lang['id_lang']] = "AXON - MODULES";
            }
            $parentTab->id_parent = 0;
            $parentTab->module ='';
            $response &= $parentTab->add();
        }
// Check for parent tab2
			$parentTab_2ID = Tab::getIdFromClassName('AdminMenuSecond');
			if ($parentTab_2ID) {
				$parentTab_2 = new Tab($parentTab_2ID);
			}
			else {
				$parentTab_2 = new Tab();
				$parentTab_2->active = 1;
				$parentTab_2->name = array();
				$parentTab_2->class_name = "AdminMenuSecond";
				foreach (Language::getLanguages() as $lang) {
					$parentTab_2->name[$lang['id_lang']] = "Modules";
				}
				$parentTab_2->id_parent = $parentTab->id;
				$parentTab_2->module = '';
				$parentTab_2->icon = 'build';
				$response &= $parentTab_2->add();
			}
			// Created tab
        $tab = new Tab();
        $tab->active = 1;
        $tab->class_name = "AdminNrtSearchBar";
        $tab->name = array();
        foreach (Language::getLanguages() as $lang) {
            $tab->name[$lang['id_lang']] = "- Products Search";
        }
        $tab->id_parent = $parentTab_2->id;
        $tab->module = $this->name;
        $response &= $tab->add();

        return $response;
    }

    /* ------------------------------------------------------------- */
    /*  DELETE THE TAB MENU
    /* ------------------------------------------------------------- */
    private function _deleteTab()
    {
        $id_tab = Tab::getIdFromClassName('AdminNrtSearchBar');
        $parentTabID = Tab::getIdFromClassName('AdminMenuFirst');

        $tab = new Tab($id_tab);
        $tab->delete();
// Get the number of tabs inside our parent tab
        // If there is no tabs, remove the parent
		$parentTab_2ID = Tab::getIdFromClassName('AdminMenuSecond');
		$tabCount_2 = Tab::getNbTabs($parentTab_2ID);
        if ($tabCount_2 == 0) {
            $parentTab_2 = new Tab($parentTab_2ID);
            $parentTab_2->delete();
        }
        // Get the number of tabs inside our parent tab
        // If there is no tabs, remove the parent
        $tabCount = Tab::getNbTabs($parentTabID);
        if ($tabCount == 0) {
            $parentTab = new Tab($parentTabID);
            $parentTab->delete();
        }

        return true;
    }
	
    public function setDefaults()
    {
        foreach ($this->defaults as $default => $value) {
            Configuration::updateValue($this->cfgName . $default, $value);
        }
        return true;
    }
	
    public function postProcess()
    {
        if (Tools::isSubmit('submit'.$this->name)) {
            $languages = Language::getLanguages(false);
            $values = array();
			$values[$this->cfgName.'show_cat'] = Tools::getValue($this->cfgName.'show_cat');
			$values[$this->cfgName.'max_items'] = Tools::getValue($this->cfgName.'max_items');
			
            Configuration::updateValue($this->cfgName.'show_cat', $values[$this->cfgName.'show_cat']);
			Configuration::updateValue($this->cfgName.'max_items', $values[$this->cfgName.'max_items']);
	
            return $this->displayConfirmation($this->trans('The settings have been updated.', array(), 'Admin.Notifications.Success'));
        }

        return '';
    }

    public function getContent()
    {
		$this->context->controller->addJqueryPlugin('tagify');
        return $this->postProcess().$this->renderForm();
    }

    public function renderForm()
    {
        $fields_form = array(
            'form' => array(
                'legend' => array(
                    'title' => $this->l('Settings'),
                    'icon' => 'icon-cogs'
                ),
                'input' => array(
	              	array(
		                'type' => 'switch',
		                'label' => $this->l('Display categories'),
		                'name' => $this->cfgName.'show_cat',
		                'desc' => $this->l('Show list categories to filter.'),
		                'values' => array(
		                  	array(
			                    'id' => 'active_on',
			                    'value' => 1,
			                    'label' => $this->l('Enabled')
		                  	),
		                  	array(
			                    'id' => 'active_off',
			                    'value' => 0,
			                    'label' => $this->l('Disabled')
		                  	)
		                )
	              	),
					array(
						'type' => 'text',
						'label' => $this->l('Max items'),
						'name' => $this->cfgName.'max_items',
						'required' => false,
						'class' => 'fixed-width-xxl',
						'suffix' => 'items'
					),
                ),
                'submit' => array(
                    'title' => $this->l('Save')
                )
            ),
        );

        $lang = new Language((int)Configuration::get('PS_LANG_DEFAULT'));

        $helper = new HelperForm();
        $helper->show_toolbar = false;
        $helper->table = $this->table;
        $helper->default_form_language = $lang->id;
        $helper->module = $this;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') ? Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') : 0;
        $helper->identifier = $this->identifier;
        $helper->submit_action = 'submit'.$this->name;
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false).'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->tpl_vars = array(
            'fields_value' => $this->getConfigFieldsValues(),
            'languages' => $this->context->controller->getLanguages(),
            'id_language' => $this->context->language->id
        );

        return $helper->generateForm(array($fields_form));
    }

    public function getConfigFieldsValues()
    {
		
        $languages = Language::getLanguages(false);
        $fields = array();
		$fields[$this->cfgName.'show_cat'] = Configuration::get($this->cfgName.'show_cat');
		$fields[$this->cfgName.'max_items'] = Configuration::get($this->cfgName.'max_items');

        return $fields;
    }
	
    private function getCategories($category)
    {
        $range = '';
        $maxdepth = 0;
        if (Validate::isLoadedObject($category)) {
            if ($maxdepth > 0) {
                $maxdepth += $category->level_depth;
            }
            $range = 'AND nleft >= '.(int)$category->nleft.' AND nright <= '.(int)$category->nright;
        }

        $resultIds = array();
        $resultParents = array();
        $result = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS('
			SELECT c.id_parent, c.id_category, cl.name, cl.description, cl.link_rewrite
			FROM `'._DB_PREFIX_.'category` c
			INNER JOIN `'._DB_PREFIX_.'category_lang` cl ON (c.`id_category` = cl.`id_category` AND cl.`id_lang` = '.(int)$this->context->language->id.Shop::addSqlRestrictionOnLang('cl').')
			INNER JOIN `'._DB_PREFIX_.'category_shop` cs ON (cs.`id_category` = c.`id_category` AND cs.`id_shop` = '.(int)$this->context->shop->id.')
			WHERE (c.`active` = 1 OR c.`id_category` = '.(int)Configuration::get('PS_HOME_CATEGORY').')
			AND c.`id_category` != '.(int)Configuration::get('PS_ROOT_CATEGORY').'
			'.((int)$maxdepth != 0 ? ' AND `level_depth` <= '.(int)$maxdepth : '').'
			'.$range.'
			AND c.id_category IN (
				SELECT id_category
				FROM `'._DB_PREFIX_.'category_group`
				WHERE `id_group` IN ('.pSQL(implode(', ', Customer::getGroupsStatic((int)$this->context->customer->id))).')
			)
			ORDER BY `level_depth` ASC, cs.`position` ASC');
        foreach ($result as &$row) {
            $resultParents[$row['id_parent']][] = &$row;
            $resultIds[$row['id_category']] = &$row;
        }

        return $this->getTree($resultParents, $resultIds, $maxdepth, ($category ? $category->id : null));
    }

    public function getTree($resultParents, $resultIds, $maxDepth, $id_category = null, $currentDepth = 0)
    {
        if (is_null($id_category)) {
            $id_category = $this->context->shop->getCategory();
        }

        $children = [];

        if (isset($resultParents[$id_category]) && count($resultParents[$id_category]) && ($maxDepth == 0 || $currentDepth < $maxDepth)) {
            foreach ($resultParents[$id_category] as $subcat) {
                $children[] = $this->getTree($resultParents, $resultIds, $maxDepth, $subcat['id_category'], $currentDepth + 1);
            }
        }

        if (isset($resultIds[$id_category])) {
            $link = $this->context->link->getCategoryLink($id_category, $resultIds[$id_category]['link_rewrite']);
            $name = str_repeat('<span></span>', 1 * $currentDepth).$resultIds[$id_category]['name'];
            $desc = $resultIds[$id_category]['description'];
        } else {
            $link = $name = $desc = '';
        }

        return [
            'id' => $id_category,
            'link' => $link,
            'name' => $name,
            'desc'=> $desc,
            'children' => $children
        ];
    }

    public function hookDisplayHeader()
    {		
		$dir_rtl = $this->context->language->is_rtl ? '-rtl' : '';
		
		$suffix = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';
		
        $this->context->controller->registerStylesheet($this->name.'-css', 'modules/'.$this->name.'/views/css/front'.$dir_rtl.'.css', ['media' => 'all', 'priority' => 150]); $this->context->controller->registerJavascript($this->name.'-autocomplete', 'modules/'.$this->name.'/views/js/jquery.autocomplete.min.js', ['position' => 'bottom', 'priority' => 150]);	
        $this->context->controller->registerJavascript($this->name.'-js', 'modules/'.$this->name.'/views/js/front' . $suffix . '.js', ['position' => 'bottom', 'priority' => 150]);
		
		$opThemect = json_decode( Configuration::get('opThemect'), true );
		
		$current_category_id = (int) Tools::getValue('c');
		
		if ( !$current_category_id ) {
			$current_category_id = (int) Tools::getValue('id_category');
		}

		$search_string = Tools::getValue('s');
		
        if (!$search_string) {
            $search_string = Tools::getValue('search_query');
        }
		
        Media::addJsDef(array(
			'opSearch' => array('all_results_product' => $this->l('View all product results'),
								'noProducts' => $this->l('No products found'),
								'count' => Configuration::get($this->cfgName.'max_items'),
							    'sku' => $this->l('SKU:'),
								'divider' => $this->l('Results from product'),
								'search_string' => $search_string,
								'current_category_id' => $current_category_id,
							    'imageType' => isset($opThemect['general_product_image_type_small'])?$opThemect['general_product_image_type_small']:'')
        ));
    }
	
    public function getWidgetVariables($hookName, array $configuration = [])
    {
		$category = new Category((int)Configuration::get('PS_HOME_CATEGORY'), $this->context->language->id);
		
		$show_cat = Configuration::get($this->cfgName.'show_cat');

        $widgetVariables = array(
			'show_cat' => isset($configuration['show_cat']) ? $configuration['show_cat'] : $show_cat,
			'categories' => $this->getCategories($category),
            'search_controller_url' => $this->context->link->getPageLink('search', null, null, null, false, null, true),
			'icon' => isset($configuration['icon']) ? $configuration['icon'] : ''
        );

		return $widgetVariables;
    }

    public function renderWidget($hookName, array $configuration = [])
    {
        if ($hookName == null && isset($configuration['hook'])) {
            $hookName = $configuration['hook'];
        }
		
		$cacheId = 'nrtSearch';

		if ($hookName == 'displaySearch') {
			$templateFile = $this->templateFile;
			if( isset($configuration['show_cat']) ){
				$cacheId .= '|' . $configuration['show_cat'];
			}
		}elseif($hookName == 'displayBodyBottom'){
			$templateFile = $this->templateFileBox;
		}else{
			$templateFile = $this->templateFileBtn;
			if( isset($configuration['icon']) && $configuration['icon'] ){
				$cacheId .= '|' . $configuration['icon'];
			}
		}
		
		if (!$this->isCached($templateFile, $this->getCacheId($cacheId))) {
			 $this->smarty->assign($this->getWidgetVariables($hookName, $configuration));
		}
				
		return $this->fetch($templateFile, $this->getCacheId($cacheId));
    }
	
    public function hookProductSearchProvider()
    {
        $controller = Dispatcher::getInstance()->getController();

        if (!empty($this->context->controller->php_self)) {
            $controller = $this->context->controller->php_self;
        }
		
		$controller = Tools::strtolower( $controller );
		
		if( $controller != 'search' ){
			return null;
		}
		
		$search_string = Tools::getValue('s');
		
        if (!$search_string) {
            $search_string = Tools::getValue('search_query');
        }
		
		if( !$search_string ){
			return null;
		}
		
        return new NrtSearchProvider(
        	$this->getTranslator(),
			new NrtSearchCore()
        );
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////

    public function hookActionProductSearchAfter($data)
    {
        if(Tools::getValue('nrtAjax')){
            ob_end_clean();
            header('Content-Type: application/json');
            $this->ajaxRender(json_encode($this->getAjaxProductSearchVariables($data)));
    
            return;
        }
    }

    public function getAjaxProductSearchVariables($data)
    {
        if (!empty($data['products']) && is_array($data['products'])) {
            $data['products'] = $this->prepareProductArrayForAjaxReturn($data['products']);
        }

        return $data;
    }

    public function prepareProductArrayForAjaxReturn(array $products)
    {
        $filter = $this->get('prestashop.core.filter.front_end_object.product_collection');

        return $filter->filter($products);
    }

    public function ajaxRender($value = null, $controller = null, $method = null)
    {
        if ($controller === null) {
            $controller = get_class($this);
        }

        if ($method === null) {
            $bt = debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS);
            $method = $bt[1]['function'];
        }

        /* @deprecated deprecated since 1.6.1.1 */
        Hook::exec('actionAjaxDieBefore', array('controller' => $controller, 'method' => $method, 'value' => $value));

        /*
         * @deprecated deprecated since 1.6.1.1
         * use 'actionAjaxDie'.$controller.$method.'Before' instead
         */
        Hook::exec('actionBeforeAjaxDie' . $controller . $method, array('value' => $value));
        Hook::exec('actionAjaxDie' . $controller . $method . 'Before', array('value' => $value));
        header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');

        echo $value;
        exit;
    }
}
