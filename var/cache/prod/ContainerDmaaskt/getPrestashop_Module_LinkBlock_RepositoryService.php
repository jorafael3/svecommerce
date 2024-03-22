<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.module.link_block.repository' shared service.

return $this->services['prestashop.module.link_block.repository'] = new \PrestaShop\Module\LinkList\Repository\LinkBlockRepository(${($_ = isset($this->services['doctrine.dbal.default_connection']) ? $this->services['doctrine.dbal.default_connection'] : $this->getDoctrine_Dbal_DefaultConnectionService()) && false ?: '_'}, 'phgv_', ${($_ = isset($this->services['prestashop.adapter.legacy.context']) ? $this->services['prestashop.adapter.legacy.context'] : $this->getPrestashop_Adapter_Legacy_ContextService()) && false ?: '_'}->getLanguages(false, ${($_ = isset($this->services['prestashop.adapter.shop.context']) ? $this->services['prestashop.adapter.shop.context'] : ($this->services['prestashop.adapter.shop.context'] = new \PrestaShop\PrestaShop\Adapter\Shop\Context())) && false ?: '_'}->getContextShopID()), ${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.feature.multistore']) ? $this->services['prestashop.adapter.feature.multistore'] : $this->load('getPrestashop_Adapter_Feature_MultistoreService.php')) && false ?: '_'}->isUsed(), ${($_ = isset($this->services['prestashop.adapter.shop.context']) ? $this->services['prestashop.adapter.shop.context'] : ($this->services['prestashop.adapter.shop.context'] = new \PrestaShop\PrestaShop\Adapter\Shop\Context())) && false ?: '_'}, ${($_ = isset($this->services['prestashop.module.link_block.adapter.object_model_handler']) ? $this->services['prestashop.module.link_block.adapter.object_model_handler'] : ($this->services['prestashop.module.link_block.adapter.object_model_handler'] = new \PrestaShop\Module\LinkList\Adapter\ObjectModelHandler())) && false ?: '_'});
