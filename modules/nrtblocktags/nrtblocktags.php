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

use PrestaShop\PrestaShop\Core\Module\WidgetInterface;

class NrtBlockTags extends Module implements WidgetInterface
{

    public $templateFile;
	
	function __construct()
	{
		$this->name = 'nrtblocktags';
		$this->tab = 'front_office_features';
		$this->version = '2.0.2';
		$this->author = 'AxonVIP';
		$this->need_instance = 0;

		$this->bootstrap = true;
		parent::__construct();

		$this->displayName = $this->l('Axon - Tags block');
		$this->description = $this->l('Required by author: AxonVIP.');
		$this->ps_versions_compliancy = array('min' => '1.7', 'max' => _PS_VERSION_);
		
		$this->templateFile = 'module:nrtblocktags/views/templates/hook/blocktags.tpl';
	}

	function install()
	{
		$success = (parent::install()
			&& $this->registerHook('header')
			&& Configuration::updateValue('NRTBLOCKTAGS_NBR', 10)
			&& Configuration::updateValue('NRTBLOCKTAGS_MAX_LEVEL', 3)
			&& Configuration::updateValue('NRTBLOCKTAGS_RANDOMIZE', false)
			&& $this->_createTab()
		);

		$this->_clearCache('*');

		return $success;
	}

	public function uninstall()
	{
		$this->_clearCache('*');
		$this->_deleteTab();
		return parent::uninstall();
	}

	public function hookAddProduct($params)
	{
		$this->_clearCache('*');
	}

	public function hookUpdateProduct($params)
	{
		$this->_clearCache('*');
	}

	public function hookDeleteProduct($params)
	{
		$this->_clearCache('*');
	}

	public function _clearCache($template, $cache_id = NULL, $compile_id = NULL)
	{
		parent::_clearCache('nrtblocktags.tpl');
	}
    /* ------------------------------------------------------------- */
    /*  CREATE THE TAB MENU
    /* ------------------------------------------------------------- */
    private function _createTab()
    {
        $response = true;

        // First check for parent tab
        $parentTabID = Tab::getIdFromClassName('AdminMenuFirst');

        if ($parentTabID) {
            $parentTab = new Tab($parentTabID);
        } else {
            $parentTab = new Tab();
            $parentTab->active = 1;
            $parentTab->name = array();
            $parentTab->class_name = "AdminMenuFirst";
            foreach (Language::getLanguages() as $lang){
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
        $tab->class_name = "AdminNrtBlockTags";
        $tab->name = array();
        foreach (Language::getLanguages() as $lang){
            $tab->name[$lang['id_lang']] = "- Block Tags";
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
        $id_tab = Tab::getIdFromClassName('AdminNrtBlockTags');
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
        if ($tabCount == 0){
            $parentTab = new Tab($parentTabID);
            $parentTab->delete();
        }

        return true;
    }
	public function getContent(){
		$output = '';
		$errors = array();
		if (Tools::isSubmit('submitNrtBlockTags'))
		{
				$tagsNbr = Tools::getValue('NRTBLOCKTAGS_NBR');
				
				if (!strlen($tagsNbr)){
					$errors[] = $this->l('Please complete the "Displayed tags" field.');
				}
				elseif (!Validate::isInt($tagsNbr) || (int)($tagsNbr) <= 0){
					$errors[] = $this->l('Invalid number.');
				}

				$tagsLevels = Tools::getValue('NRTBLOCKTAGS_MAX_LEVEL');
				if (!strlen($tagsLevels)){
					$errors[] = $this->l('Please complete the "Tag levels" field.');
				}
				elseif (!Validate::isInt($tagsLevels) || (int)($tagsLevels) <= 0){
					$errors[] = $this->l('Invalid value for "Tag levels". Choose a positive integer number.');
				}

				$randomize = Tools::getValue('NRTBLOCKTAGS_RANDOMIZE');
				if (!strlen($randomize)){
					$errors[] = $this->l('Please complete the "Randomize" field.');
				}
				elseif (!Validate::isBool($randomize)){
					$errors[] = $this->l('Invalid value for "Randomize". It has to be a boolean.');
				}
				if (count($errors)){
					$output = $this->displayError(implode('<br />', $errors));
				}
				else{
					Configuration::updateValue('NRTBLOCKTAGS_NBR', (int)$tagsNbr);
					Configuration::updateValue('NRTBLOCKTAGS_MAX_LEVEL', (int)$tagsLevels);
					Configuration::updateValue('NRTBLOCKTAGS_RANDOMIZE', (bool)$randomize);

					$output = $this->displayConfirmation($this->l('Settings updated'));
				}
		}
		return $output.$this->renderForm();
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
						'type' => 'text',
						'label' => $this->l('Displayed tags'),
						'name' => 'NRTBLOCKTAGS_NBR',
						'class' => 'fixed-width-xs',
						'desc' => $this->l('Set the number of tags you would like to see displayed in this block. (default: 10)')
						),
						array(
								'type' => 'text',
								'label' => $this->l('Tag levels'),
								'name' => 'NRTBLOCKTAGS_MAX_LEVEL',
								'class' => 'fixed-width-xs',
								'desc' => $this->l('Set the number of different tag levels you would like to use. (default: 3)')
						),
						array(
							'type' => 'switch',
							'label' => $this->l('Random display'),
							'name' => 'NRTBLOCKTAGS_RANDOMIZE',
							'class' => 'fixed-width-xs',
							'desc' => $this->l('If enabled, displays tags randomly. By default, random display is disabled and the most used tags are displayed first.'),
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
						)
				),
				'submit' => array(
					'title' => $this->l('Save'),
				)
			),
		);

		$helper = new HelperForm();
		$helper->show_toolbar = false;
		$helper->table = $this->table;
		$lang = new Language((int)Configuration::get('PS_LANG_DEFAULT'));
		$helper->default_form_language = $lang->id;
		$helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') ? Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') : 0;
		$helper->identifier = $this->identifier;
		$helper->submit_action = 'submitNrtBlockTags';
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
		return array(
			'NRTBLOCKTAGS_NBR' => Tools::getValue('NRTBLOCKTAGS_NBR', (int)Configuration::get('NRTBLOCKTAGS_NBR')),
			'NRTBLOCKTAGS_MAX_LEVEL' => Tools::getValue('NRTBLOCKTAGS_MAX_LEVEL', (int)Configuration::get('NRTBLOCKTAGS_MAX_LEVEL')),
			'NRTBLOCKTAGS_RANDOMIZE' => Tools::getValue('NRTBLOCKTAGS_RANDOMIZE', (bool)Configuration::get('NRTBLOCKTAGS_RANDOMIZE')),
		);
	}
	
    public function renderWidget($hookName, array $configuration)
    {
        if (!$this->isCached($this->templateFile, $this->getCacheId())) {
            $this->smarty->assign($this->getWidgetVariables($hookName, $configuration));
        }

        return $this->fetch($this->templateFile, $this->getCacheId());
    }

    public function getWidgetVariables($hookName, array $configuration)
    {
		$tags = $this->getMainTags((int)($configuration['cookie']->id_lang), (int)(Configuration::get('NRTBLOCKTAGS_NBR')));
		$max = -1;
		$min = -1;
		foreach ($tags as $tag){
			if ($tag['times'] > $max){
				$max = $tag['times'];
			}
			if ($tag['times'] < $min || $min == -1){
				$min = $tag['times'];
			}
		}

		if ($min == $max){
			$coef = $max;
		}
		else{
			$coef = (Configuration::get('NRTBLOCKTAGS_MAX_LEVEL') - 1) / ($max - $min);
		}

		if (!count($tags)){
			return false;
		}
		if (Configuration::get('NRTBLOCKTAGS_RANDOMIZE')){
			shuffle($tags);
		}
		foreach ($tags as &$tag){
			$tag['class'] = 'tag_level'.(int)(($tag['times'] - $min) * $coef + 1);	
		}
					
        return array(
            'tags' => $tags
        );
    }
	
    public function getMainTags($idLang, $nb = 10)
    {
        $context = Context::getContext();
        if (Group::isFeatureActive()) {
            $groups = FrontController::getCurrentCustomerGroups();
            return Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS('
            SELECT t.name, counter AS times
            FROM `'._DB_PREFIX_.'tag_count` pt
            LEFT JOIN `'._DB_PREFIX_.'tag` t ON (t.id_tag = pt.id_tag)
            WHERE pt.`id_group` '.(count($groups) ? 'IN ('.implode(',', $groups).')' : '= 1').'
            AND pt.`id_lang` = '.(int) $idLang.' 
            ORDER BY times ASC
            LIMIT '.(int) $nb);
        } else {
            return Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS('
            SELECT t.name, counter AS times
            FROM `'._DB_PREFIX_.'tag_count` pt
            LEFT JOIN `'._DB_PREFIX_.'tag` t ON (t.id_tag = pt.id_tag)
            WHERE pt.id_group = 0 AND pt.`id_lang` = '.(int) $idLang.' 
            ORDER BY times ASC
            LIMIT '.(int) $nb);
        }
    }
	
}
