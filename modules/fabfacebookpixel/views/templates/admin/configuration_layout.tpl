{*
* 2017 Manfredi Petruso
*
* NOTICE OF LICENSE
*
* This source file is subject to the Open Software License (OSL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/osl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to manfredi.petruso@fabvla.com so we can send you a copy immediately.
*
*
*  @author    Manfredi Petruso <manfredi.petruso@fabvla.com>
*  @copyright  2017 Manfredi Petruso
*  @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*}
{$info_current_shop}
{$reference_warning}
<div class="panel" id="fabfacebookpixel">
    <ul class="nav nav-tabs" id="nav-tab" role="tablist">
        <li class="nav-item active ffb_main_settings" >
            <a class="nav-link " id="ffb_main_settings-tab" data-toggle="tab" href="#ffb_main_settings" role="tab" aria-controls="ffb_main_settings" aria-selected="true">{l s='Main Settings' mod='fabfacebookpixel'}</a>
        </li>
        <li class="nav-item ffb_catalog_export">
            <a class="nav-link" id="ffb_catalog_export-tab" data-toggle="tab" href="#ffb_catalog_export" role="tab" aria-controls="ffb_catalog_export" aria-selected="false">{l s='Catalog Export' mod='fabfacebookpixel'}</a>
        </li>
        <li class="nav-item ffb_download_definitions">
            <a class="nav-link" id="ffb_download_definitions-tab" data-toggle="tab" href="#ffb_download_definitions" role="tab" aria-controls="ffb_download_definitions" aria-selected="false">{l s='Download Google and Facebook Definitions' mod='fabfacebookpixel'}</a>
        </li>
        <li class="nav-item ffb_category_mapping">
            <a class="nav-link" id="ffb_category_mapping-tab" data-toggle="tab" href="#ffb_category_mapping" role="tab" aria-controls="ffb_category_mapping" aria-selected="false">{l s='Category Mapping' mod='fabfacebookpixel'}</a>
        </li>
        {if $is_export_combinations}
        <li class="nav-item ffb_attribute_mapping">
            <a class="nav-link" id="ffb_attribute_mapping-tab" data-toggle="tab" href="#ffb_attribute_mapping" role="tab" aria-controls="ffb_attribute_mapping" aria-selected="false">{l s='Attribute Mapping' mod='fabfacebookpixel'}</a>
        </li>
        {/if}
    </ul>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade active in" id="ffb_main_settings" role="tabpanel" aria-labelledby="ffb_main_settings-tab">
            {$main_settings}

        </div>
        <div class="tab-pane fade" id="ffb_catalog_export" role="tabpanel" aria-labelledby="ffb_catalog_export-tab">
            {$catalog_export}
        </div>
        <div class="tab-pane fade" id="ffb_download_definitions" role="tabpanel" aria-labelledby="ffb_download_definitions-tab">
            {$display_export}
        </div>
        <div class="tab-pane fade" id="ffb_category_mapping" role="tabpanel" aria-labelledby="ffb_category_mapping-tab">
           {$category_mapping}
        </div>
        {if $is_export_combinations}
        <div class="tab-pane fade" id="ffb_attribute_mapping" role="tabpanel" aria-labelledby="ffb_attribute_mapping-tab">
            {$attribute_mapping}
        </div>
        {/if}
    </div>
</div>