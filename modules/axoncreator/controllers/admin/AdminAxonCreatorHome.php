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

use AxonCreator\Wp_Helper;

class AdminAxonCreatorHomeController extends ModuleAdminController
{
    public $name;

    public function __construct()
    {
        $this->bootstrap = true;
        $this->className = 'AxonCreatorPost';
        $this->table = 'axon_creator_post';

        $this->addRowAction('edit');
        $this->addRowAction('delete');
		
        parent::__construct();
		
        if (!$this->module->active) {
            Tools::redirectAdmin($this->context->link->getAdminLink('AdminDashboard'));
        }
		
        $this->_orderBy = 'id_axon_creator_post';
        $this->identifier = 'id_axon_creator_post';
		
		$list_pages = array();
		
		$list_pages[0] = array(
			'id' => 0,
			'name' => $this->l(' - Choose (optional) - ')
		);
		
        $this->fields_options = array(
            'general' => array(
                'title' =>    $this->l('Settings'),
                'fields' =>    array(
                    'active_home_layout' => array(
                        'title' => $this->l('Home layout'),
                        'desc' => $this->l('Choose your home layout. You can create multiple layouts in list above. So you can change them fast when needed.'),
                        'cast' => 'intval',
                        'type' => 'select',
                        'list' => array_merge($list_pages, $this->module->getListByPostType('home')),
                        'identifier' => 'id'
                    ),
                ),
                'submit' => array('title' => $this->l('Save'))
            )
        );

        $this->fields_list = array(
            'id_axon_creator_post' => array('title' => $this->l('ID'), 'align' => 'center', 'class' => 'fixed-width-xs'),
            'title' => array('title' => $this->l('Name'), 'width' => 'auto'),
            'active' => array('title' => $this->l('Active'), 'align' => 'center', 'search' => false, 'active' => 'status', 'type' => 'bool')
        );
		
		$this->_where = ' AND `post_type` = "home"';
		
        $this->bulk_actions = array(
            'delete' => array(
                'text' => $this->l('Delete selected'),
                'icon' => 'icon-trash',
                'confirm' => $this->l('Delete selected items?'),
            ),
        );

        $this->name = 'AdminAxonCreatorHome';
    }
	
    public function initToolBarTitle()
    {
        $this->toolbar_title[] = $this->l('Axon - Home');
    }
	
    public function renderList()
    {				
        return Wp_Helper::api_get_notification() . parent::renderList();
    }

    public function postProcess()
    {
        if (Tools::isSubmit('submit' . $this->className)) {
            $returnObject = $this->processSave();
            if (!$returnObject) {
                return false;
            }
			if( count( $this->module->getListByPostType('home') ) == 1 ){
				Configuration::updateValue( 'active_home_layout', $returnObject->id );
			}
			Tools::redirectAdmin($this->context->link->getAdminLink($this->name) . '&id_axon_creator_post='.$returnObject->id .'&updateaxon_creator_post');
        }		

        return parent::postProcess();
    }

    public function renderForm()
    {
		$id_lang = (int) Configuration::get('PS_LANG_DEFAULT');
		
        $obj = new $this->className((int) Tools::getValue('id_axon_creator_post'));
		
        if ($obj->id){
            $url = $this->context->link->getAdminLink('AxonCreatorEditor').'&post_type=home&id_post=' . $obj->id . '&id_lang='. $id_lang;
        }
        else{
            $url = false;
        }
		
		$obj->post_type = 'home';
		$obj->id_employee = (int) $this->context->employee->id;
		
        $this->fields_form[0]['form'] = array(
            'legend' => array(
                'title' => isset($obj->id) ? $this->l('Edit layout.') : $this->l('New layout'),
                'icon' => isset($obj->id) ? 'icon-edit' : 'icon-plus-square',
            ),
            'input' => array(
                array(
                    'type' => 'hidden',
                    'name' => 'id_axon_creator_post',
                ),
                array(
                    'type' => 'text',
                    'label' => $this->l('Title'),
                    'name' => 'title',
                    'required' => true,
                ),
				array(
					'type' => 'hidden',
					'name' => 'post_type'
				),
				array(
					'type' => 'hidden',
					'name' => 'id_employee'
				),
				array(
					'type'     => 'switch',
					'label'    => $this->l('Status'),
					'name'     => 'active',
					'is_bool'  => true,
					'values'   => array(
						array(
							'id'    => 'active',
							'value' => 1,
							'label' => $this->l('Enabled'),
						),
						array(
							'id'    => 'active',
							'value' => 0,
							'label' => $this->l('Disabled'),
						),
					),
				),
                array(
                    'type' => 'page_trigger',
                    'label' => '',
                    'url'  => $url,
                )
            ),
            'buttons' => array(
                'cancelBlock' => array(
                    'title' => $this->l('Cancel'),
                    'href' => (Tools::safeOutput(Tools::getValue('back', false)))
                        ?: $this->context->link->getAdminLink($this->name),
                    'icon' => 'process-icon-cancel',
                ),
            ),
            'submit' => array(
                'name' => 'submit' . $this->className,
                'title' => $this->l('Save'),
            ),
        );


        if (Tools::getValue('name')) {
            $obj->title = Tools::getValue('name');
        }

        $helper = $this->buildHelper();
        $helper->fields_value = (array) $obj;
        return Wp_Helper::api_get_notification() . $helper->generateForm($this->fields_form);
    }

    protected function buildHelper()
    {
        $helper = new HelperForm();

        $helper->module = $this->module;
        $helper->identifier = $this->className;
        $helper->token = Tools::getAdminTokenLite($this->name);
        $helper->languages = $this->_languages;
        $helper->currentIndex = $this->context->link->getAdminLink($this->name);
        $helper->default_form_language = $this->default_form_language;
        $helper->allow_employee_form_lang = $this->allow_employee_form_lang;
        $helper->toolbar_scroll = true;
        $helper->toolbar_btn = $this->initToolbar();

        return $helper;
    }
			
}
