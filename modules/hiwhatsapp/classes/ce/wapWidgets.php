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

namespace CE;

defined('_PS_VERSION_') or die;

class HiWapWidgets extends WidgetBase
{
    public function getName()
    {
        return 'wap-widgets';
    }

    public function getTitle()
    {
        return $this->l('WhatsApp Widgets');
    }

    public function getIcon()
    {
        return 'fa fa-whatsapp';
    }

    public function getCategories()
    {
        return array('prestashop');
    }

    protected function _registerControls()
    {
        $this->startControlsSection(
            'section_title',
            array(
                'label' => $this->l('WhatsApp Widgets'),
            )
        );

        $widgets = \HiWhatsAppAccount::getAccounts();
        $widget_options = array();
        if (is_array($widgets) && $widgets) {
            foreach ($widgets as $widget) {
                $widget_options[$widget['id_hiwhatsapp']] = $widget['name'];
            }
        } else {
            $widget_options[0] = $this->l('Widgets not found');
        }

        $this->addControl(
            'widget',
            array(
                'label' => $this->l('Select WhatsApp Account'),
                'type' => ControlsManager::SELECT,
                'options' => $widget_options,
                'default' => isset($widgets[0]['id_hiwhatsapp']) ? $widgets[0]['id_hiwhatsapp'] : 0,
                'description' => $this->l('You can create more widgets from WhatsApp module configuration page')
            )
        );

        $this->endControlsSection();
    }

    protected function render()
    {
        $settings = $this->getSettings();

        $module = \Module::getInstanceByName('hiwhatsapp');
        echo $module->displayWidget($settings['widget']);
    }

    protected function l($string)
    {
        return translate($string, 'hiblogblockswidget', basename(__FILE__, '.php'));
    }
}
