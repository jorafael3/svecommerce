<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.currency.query_handler.get_reference_currency' shared service.

return $this->services['prestashop.adapter.currency.query_handler.get_reference_currency'] = new \PrestaShop\PrestaShop\Adapter\Currency\QueryHandler\GetReferenceCurrencyHandler(${($_ = isset($this->services['prestashop.core.localization.cldr.locale_repository']) ? $this->services['prestashop.core.localization.cldr.locale_repository'] : $this->load('getPrestashop_Core_Localization_Cldr_LocaleRepositoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.core.query_bus']) ? $this->services['prestashop.core.query_bus'] : $this->load('getPrestashop_Core_QueryBusService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.core.admin.lang.repository']) ? $this->services['prestashop.core.admin.lang.repository'] : $this->load('getPrestashop_Core_Admin_Lang_RepositoryService.php')) && false ?: '_'}->findAll());