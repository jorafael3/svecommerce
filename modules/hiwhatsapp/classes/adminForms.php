<?php
/**
* 2011 - 2021 HiPresta
*
* MODULE WhatsApp Live chat with customers
*
* @author    HiPresta <support@hipresta.com>
* @copyright HiPresta 2021
* @license   Addons PrestaShop license limitation
* @link      https://hipresta.com
*
* NOTICE OF LICENSE
*
* Don't use this module on several shops. The license provided by PrestaShop Addons
* for all its modules is valid only once for a single shop.
*/

class HiWhatsAppAdminForms
{
    public function __construct($module)
    {
        $this->module = $module;
        $this->name = $module->name;
        $this->context = Context::getContext();
    }

    public function reanderWapAccountForm($id_account = null)
    {
        $account = new HiWhatsAppAccount($id_account);

        $available_positions = $this->module->getAvailablePositions();
        $positions = array();
        foreach ($available_positions as $key => $position) {
            array_push($positions, array(
                'id' => $key,
                'name' => $position,
                'val' => $key
            ));
        }

        $fields_form = array(
            'form' => array(
                'legend' => array(
                    'title' => $this->l('WhatsApp Account'),
                    'icon' => 'icon-cogs'
                ),
                'input' => array(
                    array(
                        'type' => 'hidden',
                        'name' => 'id_account'
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Active'),
                        'name' => 'active',
                        'class' => 't',
                        'is_bool' => true,
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
                        'type' => 'file',
                        'label' => $this->l('Avatar'),
                        'name' => 'avatar',
                        'desc' => ($id_account && $account->avatar) ? $this->module->renderImage($account->avatar) : ''
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->l('Account Name'),
                        'name' => 'account_name',
                        'lang' => true,
                        'required' => true,
                        'placeholder' => $this->l('Jone Doe')
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->l('Title'),
                        'name' => 'title',
                        'lang' => true,
                        'required' => true,
                        'placeholder' => $this->l('Technical Support')
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->l('Account Number'),
                        'name' => 'account_number',
                        'required' => true,
                        'placeholder' => '+123456789'
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->l('Button Label'),
                        'name' => 'button_label',
                        'lang' => true,
                        'required' => true,
                        'placeholder' => $this->l('Need help? Chat via WhatsApp')
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->l('Text when offline'),
                        'name' => 'offline_text',
                        'lang' => true,
                        'placeholder' => $this->l('I\'ll be back online soon ...')
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Always Available'),
                        'name' => 'always_available',
                        'class' => 't',
                        'is_bool' => true,
                        'values' => array(
                            array(
                                'id' => 'always_available_on',
                                'value' => 1,
                                'label' => $this->l('Enabled')
                            ),
                            array(
                                'id' => 'always_available_off',
                                'value' => 0,
                                'label' => $this->l('Disabled')
                            )
                        )
                    ),
                    array(
                        'type' => 'weektime',
                        'label' => $this->l('Custom Availability'),
                        'name' => 'availability',
                        'lang' => false
                    ),
                    array(
                        'type' => 'checkbox',
                        'label' => $this->l('Positions to display'),
                        'multiple' => true,
                        'name' => 'position',
                        'class' => 'account_position',
                        'values' => array(
                            'query' => $positions,
                            'id' => 'id',
                            'name' => 'name'
                        ),
                    ),
                    array(
                        'type' => 'shop',
                        'label' => $this->l('Assign the Account to these shops'),
                        'name' => 'checkBoxShopAsso',
                    )
                ),
                'submit' => array(
                    'title' => $id_account ? $this->l('Update') : $this->l('Add'),
                    'name' => $id_account ? 'submit_wap_account_update' : 'submit_wap_account_add',
                ),
                'buttons' => array(
                    array(
                        'title' =>  $this->l('Cancel'),
                        'name' => 'submit_cancel_wap_account',
                        'type' => 'submit',
                        'icon' => 'process-icon-cancel',
                        'class' => 'btn btn-default pull-left',
                    )
                )
            ),
        );

        $helper = new HelperForm();
        $languages = Language::getLanguages(false);
        foreach ($languages as $key => $language) {
            $languages[$key]['is_default'] = (int)($language['id_lang'] == Configuration::get('PS_LANG_DEFAULT'));
        }
        $helper->languages = $languages;
        $helper->default_form_language = (int)Configuration::get('PS_LANG_DEFAULT');
        $helper->allow_employee_form_lang = (int)Configuration::get('PS_LANG_DEFAULT');
        $helper->show_toolbar = false;
        $this->fields_form = array();
        $helper->submit_action = 'submitWapAccountSettings';
        $helper->currentIndex = AdminController::$currentIndex.'&configure='.$this->module->name.'&'.$this->module->name.'=whatsapp_accounts';
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->module = $this->module;
        $helper->table = 'hiwhatsapp';
        $helper->identifier = 'id_hiwhatsapp';
        $helper->id = $id_account;
        $helper->tpl_vars = array(
            'fields_value' => $this->getWapAccountFieldsValues($id_account),
            'module_dir' => __PS_BASE_URI__ . 'modules/' . $this->module->name,
            'availability_hours' => $this->module->getAvailabilityHours(),
            'weekdays' => $this->module->getWeekdays()
        );

        return $helper->generateForm(array($fields_form));
    }

    public function getWapAccountFieldsValues($id_account = null)
    {
        if ($id_account) {
            $account = new HiWhatsAppAccount($id_account);

            $positions = array();
            $account_positions = $this->module->getAccountPositions($id_account);
            if (is_array($account_positions) && $account_positions) {
                foreach ($account_positions as $position) {
                    $positions['position_'.$position['position']] = true;
                }
            }

            $ret = array(
                'id_account' => $id_account,
                'active' => $account->active,
                'avatar' => $account->avatar,
                'account_name' => $account->name,
                'title' => $account->title,
                'account_number' => $account->account_number,
                'always_available' => $account->always_available,
                'availability' => json_decode($account->availability, true),
                'button_label' => $account->button_label,
                'offline_text' => $account->offline_text
            );

            $ret = array_merge($ret, $positions);

            return $ret;
        } else {
            $empty_array = array();
            foreach (Language::getLanguages(false) as $lang) {
                $empty_array[$lang['id_lang']] = '';
            }
            return array(
                'id_account' => 0,
                'active' => true,
                'avatar' => '',
                'account_name' => $empty_array,
                'title' => $empty_array,
                'account_number' => '',
                'always_available' => 1,
                'availability' => $this->module->getDefaultAvailability(),
                'button_label' => $empty_array,
                'offline_text' => $empty_array
            );
        }
    }

    public function reanderWapAccountsList()
    {
        $fields_list = array(
            'sort' => array(
                'title' => $this->l('Sort'),
                'width' => 60,
                'type' => 'text',
                'search' => false,
            ),
            'id_hiwhatsapp' => array(
                'title' => $this->l('ID'),
                'width' => 60,
                'type' => 'text',
                'search' => false,
            ),
            'avatar' => array(
                'title' => $this->l('Avatar'),
                'type' => 'image',
                'search' => false,
            ),
            'name' => array(
                'title' => $this->l('Account Name'),
                'width' => 140,
                'type' => 'text',
                'search' => false,
            ),
            'title' => array(
                'title' => $this->l('Title'),
                'width' => 140,
                'type' => 'text',
                'search' => false,
            ),
            'positions' => array(
                'title' => $this->l('Positions'),
                'width' => 140,
                'type' => 'text',
                'search' => false,
            ),
            'related_products' => array(
                'title' => $this->l('Products'),
                'search' => false
            ),
            'related_categories' => array(
                'title' => $this->l('Categories'),
                'search' => false
            )
        );

        if (Shop::isFeatureActive()) {
            $fields_list['shops'] = array(
                'title' => $this->l('Shops'),
                'width' => 140,
                'type' => 'text',
                'search' => false,
            );
        }

        $fields_list['active'] = array(
            'title' => $this->l('Status'),
            'width' => 140,
            'type' => 'text',
            'search' => false,
        );
        // $fields_list['custom_hook'] = array(
        //     'title' => $this->l('Custom Hook'),
        //     'width' => 140,
        //     'type' => 'text',
        //     'search' => false,
        // );
        $helper = new HelperList();
        $helper->module = $this->module;
        $helper->shopLinkType = '';
        $helper->simple_header = false;
        $helper->no_link = true;
        $helper->actions = array('edit', 'delete');
        $helper->identifier = 'id_hiwhatsapp';
        $helper->show_toolbar = false;
        $helper->title = $this->l('WhatsApp Accounts');
        $helper->table = 'hiwhatsapp';
        $helper->toolbar_btn['new'] = array(
            'href' => '#',
            'desc' => $this->l('Add new account')
        );
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->currentIndex = AdminController::$currentIndex.'&configure='.$this->module->name.'&'.$this->module->name.'=whatsapp_accounts';
        $accounts = HiWhatsAppAccount::getAccounts();
        $accounts = $this->module->prepareAccountsForAdmin($accounts);
        $helper->listTotal = count($accounts);
        $helper->tpl_vars = array(
            'image_dir' => __PS_BASE_URI__.'modules/'.$this->module->name.'/views/img/'
        );
        return $helper->generateList($accounts, $fields_list);
    }

    public function renderSettingsForm()
    {
        $fields_form = array(
            'form' => array(
                'legend' => array(
                    'title' => $this->l('Settings'),
                    'icon' => 'icon-cogs'
                ),
                'input' => array(
                    array(
                        'type' => 'select',
                        'label' => $this->module->l('Chatbox Position'),
                        'name' => 'chatbox_position',
                        'options' => array(
                            'query' => array(
                                array(
                                    'id' => 'left',
                                    'name' => $this->module->l('Left')
                                ),
                                array(
                                    'id' => 'right',
                                    'name' => $this->module->l('Right')
                                )
                            ),
                            'id' => 'id',
                            'name' => 'name'
                        )
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Display offline accounts in chatbox'),
                        'name' => 'display_offline_chatbox',
                        'class' => 't',
                        'is_bool' => true,
                        'values' => array(
                            array(
                                'id' => 'offline_chatbox_on',
                                'value' => 1,
                                'label' => $this->l('Enabled')
                            ),
                            array(
                                'id' => 'offline_chatbox_off',
                                'value' => 0,
                                'label' => $this->l('Disabled')
                            )
                        ),
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Display offline Widgets'),
                        'name' => 'display_offline_widgets',
                        'class' => 't',
                        'is_bool' => true,
                        'values' => array(
                            array(
                                'id' => 'offline_widgets_on',
                                'value' => 1,
                                'label' => $this->l('Enabled')
                            ),
                            array(
                                'id' => 'offline_widgets_off',
                                'value' => 0,
                                'label' => $this->l('Disabled')
                            )
                        ),
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Clean Database when module uninstalled'),
                        'name' => 'clean_db',
                        'class' => 't',
                        'is_bool' => true,
                        'desc' => $this->l('Not recommended, use this only when you’re not going to use the module'),
                        'values' => array(
                            array(
                                'id' => 'clean_db_on',
                                'value' => 1,
                                'label' => $this->l('Enabled')
                            ),
                            array(
                                'id' => 'clean_db_off',
                                'value' => 0,
                                'label' => $this->l('Disabled')
                            )
                        ),
                    ),
                ),
                'submit' => array(
                    'title' => $this->l('Save'),
                    'name' => 'submit_wap_settings',
                ),
            ),
        );

        $helper = new HelperForm();
        $languages = Language::getLanguages(false);
        foreach ($languages as $key => $language) {
            $languages[$key]['is_default'] = (int)($language['id_lang'] == Configuration::get('PS_LANG_DEFAULT'));
        }
        $helper->languages = $languages;
        $helper->default_form_language = (int)Configuration::get('PS_LANG_DEFAULT');
        $helper->allow_employee_form_lang = (int)Configuration::get('PS_LANG_DEFAULT');
        $helper->show_toolbar = false;
        $this->fields_form = array();
        $helper->submit_action = 'submitBlockSettings';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false).'&configure='.$this->module->name.'&tab_module='.$this->module->tab.'&module_name='.$this->module->name.'&'.$this->module->name.'=generel_settings';
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->module = $this->module;
        $helper->tpl_vars = array(
            'fields_value' => $this->getGlobalSettingValues()
        );
        return $helper->generateForm(array($fields_form));
    }

    public function getGlobalSettingValues()
    {
        return array(
            'chatbox_position' => $this->module->chatbox_position,
            'display_offline_chatbox' => $this->module->display_offline_chatbox,
            'display_offline_widgets' => $this->module->display_offline_widgets,
            'clean_db' => $this->module->clean_db
        );
    }

    public function renderRelatedCategories($id_account)
    {
        $selected_categories = $this->module->getRelatedCategories($id_account);
        if (!is_array($selected_categories) || !$selected_categories) {
            $selected_categories = array();
        }

        $selected_categories = array_map('current', $selected_categories);

        $fields_form = array(
            'form' => array(
                'legend' => array(
                    'title' => $this->l('Assign Categories'),
                    'icon' => 'icon-cogs'
                ),
                'desc' => $this->l('This account will be available only in selected category and product pages. Leave blank to display it in all pages.'),
                'input' => array(
                    array(
                        'type' => 'hidden',
                        'name' => 'id_account',
                    ),
                    array(
                        'type' => 'categories',
                        'label' => $this->l('Select Categories'),
                        'name' => 'categories',
                        'tree' => array(
                             'id' => 'account_categories',
                             'use_checkbox' => true,
                             'selected_categories' => $selected_categories,
                        )
                    )
                ),
                'submit' => array(
                    'title' => $this->l('Save'),
                    'name' => 'submit_assign_categories_form',
                ),
                'buttons' => array(
                    array(
                        'title' =>  $this->l('Cancel'),
                        'name' => 'close_modal_button',
                        'type' => 'submit',
                        'icon' => 'process-icon-cancel',
                        'class' => 'btn btn-default pull-left',
                    )
                )
            ),
        );

        $helper = new HelperForm();
        $languages = Language::getLanguages(false);
        foreach ($languages as $key => $language) {
            $languages[$key]['is_default'] = (int)($language['id_lang'] == Configuration::get('PS_LANG_DEFAULT'));
        }
        $helper->languages = $languages;
        $helper->default_form_language = (int)Configuration::get('PS_LANG_DEFAULT');
        $helper->allow_employee_form_lang = (int)Configuration::get('PS_LANG_DEFAULT');
        $helper->show_toolbar = false;
        $helper->submit_action = 'submitAssignCategoriesForm';
        $helper->currentIndex = '';
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->module = $this->module;
        $helper->tpl_vars = array(
            'fields_value' => array(
                'id_account' => $id_account
            )
        );

        return $helper->generateForm(array($fields_form));
    }

    public function l($string)
    {
        return $this->module->l($string);
    }
}
