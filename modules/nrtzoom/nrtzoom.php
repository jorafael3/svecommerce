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

class NrtZoom extends Module implements WidgetInterface 
{
    private $templateFile;
    private $_configDefaults = array();

    public function __construct()
    {
        $this->name = 'nrtzoom';
        $this->author = 'AxonVip';
        $this->version = '2.0.2';
        $this->need_instance = 0;

        $this->bootstrap = true;
        parent::__construct();

        $this->displayName = $this->l('Axon - Zoom');
        $this->description = $this->l('Enables zooming on images and magnifier effects');

        $this->ps_versions_compliancy = array('min' => '1.7.1.0', 'max' => _PS_VERSION_);

        $this->templateFile = 'module:nrtzoom/nrtzoom.tpl';
		
        // Config defaults
        $this->_configDefaults = array(
			'NRT_zoom_enable' => 1,
			'NRT_zoom_type' => 'window'
		);
    }

    public function install()
    {		
        return  parent::install()
				&& $this->registerHook('displayHeader')
				&& $this->_createConfigs()
				&& $this->_createTab();		
    }

    public function uninstall()
    {
        return  parent::uninstall()
				&& $this->_deleteConfigs()
				&& $this->_deleteTab();
    }
	
    /* ------------------------------------------------------------- */
    /*  CREATE CONFIGS
    /* ------------------------------------------------------------- */
    private function _createConfigs()
    {
			
		$response = true;	
        foreach ($this->_configDefaults as $default => $value) {
            $response &= Configuration::updateValue($default, $value);
        }

        return $response;
    }

    /* ------------------------------------------------------------- */
    /*  DELETE CONFIGS
    /* ------------------------------------------------------------- */
    private function _deleteConfigs()
    {
		$response = true;	
        foreach ($this->_configDefaults as $default => $value) {
            $response &= Configuration::deleteByName($default);
        }

        return $response;
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
        $tab->class_name = "AdminManageZoom";
        $tab->name = array();
        foreach (Language::getLanguages() as $lang){
            $tab->name[$lang['id_lang']] = "- Zoom";
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
        $id_tab = Tab::getIdFromClassName('AdminManageZoom');
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

    public function getContent()
    {
		$output = '';
		$response = true;	
        if (Tools::isSubmit('submit'.$this->name)) {
			foreach ($this->_configDefaults as $default => $value) {
				$response &= Configuration::updateValue($default, Tools::getValue($default));
			}
			if (!$response)
				$output = '<div class="alert alert-danger conf error">'.$this->l('An error occurred on saving.').'</div>';
			else
				$output .= $this->displayConfirmation($this->l('Settings updated'));
		}
        return $output.$this->renderForm();
    }


    protected function renderForm()
    {
        $default_lang = (int)Configuration::get('PS_LANG_DEFAULT');

        $yes_no = array(
			array('value'=>'0','name'=>'No'),
			array('value'=>'1','name'=>'Yes')
        );
		
        $zoom_type = array(
			array('value'=>'inner','name'=>'Inner'),
			array('value'=>'adjacent','name'=>'Adjacent')
        );

        $fields_form = array(
			'form' => array(
				'legend' => array(
					'title' => $this->l('Settings'),
					'icon' => 'icon-cogs'
				),
				'input' => array(
					array(
						'type' => 'select',
						'name' => 'NRT_zoom_enable' ,
						'label' => $this->l('Activate Zoom'),
						'class' => 'fixed-width-xxl',
						'required' => false,
						'options' => array(
							'query' => $yes_no,
							'id' => 'value',
							'name' => 'name'
						)
					),
					array(
						'type' => 'hidden',
						'name' => 'NRT_zoom_type' ,
						'label' => $this->l('Zoom type'),
						'class' => 'fixed-width-xxl',
						'required' => false,
						'options' => array(
							'query' => $zoom_type,
							'id' => 'value',
							'name' => 'name'
						)
					),
				),
				'submit' => array(
					'title' => $this->l('Save'),
				)
			),
		);
				
        $helper = new HelperForm();
		$helper->show_toolbar = false;
		$helper->table =  $this->table;
		$lang = new Language((int)Configuration::get('PS_LANG_DEFAULT'));
		$helper->default_form_language = $lang->id;
		$helper->module = $this;
		$helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') ? Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') : 0;
		$helper->identifier = $this->identifier;
		$helper->submit_action = 'submit'.$this->name;
		$helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false).'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
		$helper->token = Tools::getAdminTokenLite('AdminModules');
		
		$helper->tpl_vars = array(
			'uri' => $this->getPathUri(),
			'fields_value' => $this->getFormValues(),
			'languages' => $this->context->controller->getLanguages(),
			'id_language' => $this->context->language->id
		);
        return $helper->generateForm(array($fields_form));
    }

    public function getFormValues()
    {
		$values = array();
		foreach ($this->_configDefaults as $default => $value) {
            $values[$default] = Configuration::get($default);
        }
		return $values;
    }
	
    public function hookDisplayHeader()
    {
		if(Configuration::get('NRT_zoom_enable')){
		
			$this->context->controller->registerJavascript('js_easyzoom', 'modules/'.$this->name.'/js/easy-zoom.min.js', ['position' => 'bottom', 'priority' => 150]);
			$this->context->controller->registerJavascript('js_zoom', 'modules/'.$this->name.'/js/zoom.js', ['position' => 'bottom', 'priority' => 150]);	
			
			$this->context->controller->addCSS($this->_path.'js/easy-zoom.css');
		}
								
    }

    public function renderWidget($hookName = null, array $configuration = []) {}

    public function getWidgetVariables($hookName = null, array $configuration = []) {}
	
}
