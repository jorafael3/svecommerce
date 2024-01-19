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


<form class="form form-horizontal mb-2" action="{$current_index}&token={$token}" method="post">
    <input type="hidden" name="{$submit_action}" value="1">
        <div class="card">
            <div class="card-header">
                <i class="material-icons">settings</i>
                {l s='Settings' mod='fabfacebookpixel'}
            </div>
            <!-- Activate Facebook Pixel -->
            <div class="card-body ml-4">


                <div class="card-block row mb-2">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 text-left text-lg-right align-middle text-sm-left text-md-left">
                        <label for="FAB_FACEBOOK_PIXEL_ACTIVE" class="control-label">
                        {l s='Activate Facebook Pixel' mod='fabfacebookpixel'}
                        </label>
                    </div>

                    <div class="col-8 col-sm-12 col-md-12 col-lg-8">
                        <div class="row">
                            <span class="switch prestashop-switch fixed-width-lg">
                                <input type="radio" name="FAB_FACEBOOK_PIXEL_ACTIVE" id="FAB_FACEBOOK_PIXEL_ACTIVE_on" value="1" {if $is_pixel_active}checked="checked"{/if}>
                                <label for="FAB_FACEBOOK_PIXEL_ACTIVE_on">{l s='Yes' mod='fabfacebookpixel'}</label>
                                <input type="radio" name="FAB_FACEBOOK_PIXEL_ACTIVE" id="FAB_FACEBOOK_PIXEL_ACTIVE_off" value="0" {if !$is_pixel_active}checked="checked"{/if}>
                                <label for="FAB_FACEBOOK_PIXEL_ACTIVE_off">{l s='No' mod='fabfacebookpixel'}</label>
                                <a class="slide-button btn"></a>
                            </span>
                        </div>
                    </div>
                </div>
                <!-- end card block row -->

                <!-- Pixel ID -->
                <div class="block-fb-pixel-id">
                    <div class="card-block row mb-2">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-4 text-left text-lg-right align-middle text-sm-left text-md-left">
                            <label for="FAB_FACEBOOK_PIXEL_ID" class="control-label required">
                            {l s='Pixel ID' mod='fabfacebookpixel'}
                            </label>
                        </div>

                        <div class="col-8 col-sm-12 col-md-12 col-lg-8">
                            <div class="row">
                                <input type="text" name="FAB_FACEBOOK_PIXEL_ID" id="FAB_FACEBOOK_PIXEL_ID" class="col-lg-4 col-xl-5 col-md-4 col-sm-12 form-control" required="required" value="{$pixel_id}"></input>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card block row -->

                <!-- Conversion API Token -->
                <div class="block-fb-pixel-id">
                    <div class="card-block row mb-2">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-4 text-left text-lg-right align-middle text-sm-left text-md-left">
                            <label for="FAB_FACEBOOK_CONVERSIONAPI_TOKEN" class="control-label">
                                {l s='Conversion API Token' mod='fabfacebookpixel'}
                            </label>
                        </div>

                        <div class="col-8 col-sm-12 col-md-12 col-lg-8">
                            <div class="row">
                                <input type="text" name="FAB_FACEBOOK_CONVERSIONAPI_TOKEN" id="FAB_FACEBOOK_CONVERSIONAPI_TOKEN" class="col-lg-4 col-xl-5 col-md-4 col-sm-12 form-control" value="{$api_token}"></input>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card block row -->

                <!-- Conversion API Token -->
                <div class="block-fb-pixel-id">
                    <div class="card-block row mb-2">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-4 text-left text-lg-right align-middle text-sm-left text-md-left">
                            <label for="FAB_FACEBOOK_CONVERSIONAPI_TEST" class="control-label">
                                {l s='Conversion API TEST Event Code' mod='fabfacebookpixel'}
                            </label>
                        </div>

                        <div class="col-8 col-sm-12 col-md-12 col-lg-8">
                            <div class="row">
                                <input type="text" name="FAB_FACEBOOK_CONVERSIONAPI_TEST" id="FAB_FACEBOOK_CONVERSIONAPI_TEST" class="col-lg-4 col-xl-5 col-md-4 col-sm-12 form-control" value="{$api_test}">
                            </div>
                            <div class="row mt-1">
                                <span class="small font-secondary">{l s='Use the TEST Event Code provided by Facebook, in order to test server events.' mod='fabfacebookpixel'}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card block row -->

                {if $show_microdata}
                <!-- Add Microdata -->
                <div class="card-block row mb-2">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 text-left text-lg-right align-middle text-sm-left text-md-left">
                        <label for="FAB_FACEBOOK_MICRODATA" class="control-label">
                            {l s='Add Microdata to product page' mod='fabfacebookpixel'}
                        </label>
                    </div>

                    <div class="col-8 col-sm-12 col-md-12 col-lg-8">
                        <div class="row">
                            <span class="switch prestashop-switch fixed-width-lg">
                                <input type="radio" name="FAB_FACEBOOK_MICRODATA" id="FAB_FACEBOOK_MICRODATA_on" value="1" {if $has_microdata}checked="checked"{/if}>
                                <label for="FAB_FACEBOOK_MICRODATA_on">{l s='Yes' mod='fabfacebookpixel'}</label>
                                <input type="radio" name="FAB_FACEBOOK_MICRODATA" id="FAB_FACEBOOK_MICRODATA_off" value="0" {if !$has_microdata}checked="checked"{/if}>
                                <label for="FAB_FACEBOOK_MICRODATA_off">{l s='No' mod='fabfacebookpixel'}</label>
                                <a class="slide-button btn"></a>
                            </span>
                        </div>
                    </div>
                </div>
                <!-- end card block row -->
                {/if}


                <!-- Description field to be used -->
                <div class="card-block row mb-2">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 text-left text-lg-right align-middle text-sm-left text-md-left">
                        <label for="FAB_FACEBOOK_PIXEL_DESCRIPTION_FIELD" class="control-label">
                        {l s='Description field to be used' mod='fabfacebookpixel'}
                        </label>
                    </div>

                    <div class="col-8 col-sm-12 col-md-12 col-lg-8">
                        <div class="row">
                            <select class="col-lg-4 col-xl-5 col-md-4 col-sm-12 form-control c-select" name="FAB_FACEBOOK_PIXEL_DESCRIPTION_FIELD" id="FAB_FACEBOOK_PIXEL_DESCRIPTION_FIELD">
                                {foreach $description_fields as $item}
                                    <option value="{$item.id}" {if $item.id == $description_field}selected{/if}>{$item.label}</option>
                                {/foreach}
                            </select>
                        </div>
                    </div>
                </div>
                <!-- end card block row -->

                <!-- Image Type -->
                <div class="card-block row mb-2">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 text-left text-lg-right align-middle text-sm-left text-md-left">
                        <label for="FAB_FACEBOOK_PIXEL_IMAGE_TYPE" class="control-label">
                        {l s='Image Type format used for the catalog image' mod='fabfacebookpixel'}
                        </label>
                    </div>

                    <div class="col-8 col-sm-12 col-md-12 col-lg-8">
                        <div class="row">
                            <select class="col-lg-4 col-xl-5 col-md-4 col-sm-12 form-control c-select" name="FAB_FACEBOOK_PIXEL_IMAGE_TYPE" id="FAB_FACEBOOK_PIXEL_IMAGE_TYPE">
                                {foreach $image_types as $item}
                                    <option value="{$item.id_image_type}" {if $item.id_image_type == $image_type}selected{/if}>{$item.name}</option>
                                {/foreach}
                            </select>
                        </div>
                    </div>
                </div>
                <!-- end card block row -->


                <!-- Export products with empty description -->
                <div class="card-block row mb-2">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 text-left text-lg-right align-middle text-sm-left text-md-left">
                        <label for="FAB_GOOGLE_EXPORT_EMPTY_DESC" class="control-label">
                        {l s='Export products with empty description' mod='fabfacebookpixel'}
                        </label>
                    </div>

                    <div class="col-8 col-sm-12 col-md-12 col-lg-8">
                        <div class="row">
                            <span class="switch prestashop-switch fixed-width-lg">
                                <input type="radio" name="FAB_GOOGLE_EXPORT_EMPTY_DESC" id="FAB_GOOGLE_EXPORT_EMPTY_DESC_on" value="1" {if $is_empty_description}checked="checked"{/if}>
                                <label for="FAB_GOOGLE_EXPORT_EMPTY_DESC_on">{l s='Yes' mod='fabfacebookpixel'}</label>
                                <input type="radio" name="FAB_GOOGLE_EXPORT_EMPTY_DESC" id="FAB_GOOGLE_EXPORT_EMPTY_DESC_off" value="0" {if !$is_empty_description}checked="checked"{/if}>
                                <label for="FAB_GOOGLE_EXPORT_EMPTY_DESC_off">{l s='No' mod='fabfacebookpixel'}</label>
                                <a class="slide-button btn"></a>
                            </span>
                        </div>
                    </div>
                </div>
                <!-- end card block row -->


                <!-- Export products with empty description -->
                <div class="card-block row mb-2">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 text-left text-lg-right align-middle text-sm-left text-md-left">
                        <label for="FAB_PIXEL_TAX_INCLUDED" class="control-label">
                        {l s='Export product price including taxes' mod='fabfacebookpixel'}
                        </label>
                    </div>

                    <div class="col-8 col-sm-12 col-md-12 col-lg-8">
                        <div class="row">
                            <span class="switch prestashop-switch fixed-width-lg">
                                <input type="radio" name="FAB_PIXEL_TAX_INCLUDED" id="FAB_PIXEL_TAX_INCLUDED_on" value="1" {if $is_tax_included}checked="checked"{/if}>
                                <label for="FAB_PIXEL_TAX_INCLUDED_on">{l s='Yes' mod='fabfacebookpixel'}</label>
                                <input type="radio" name="FAB_PIXEL_TAX_INCLUDED" id="FAB_PIXEL_TAX_INCLUDED_off" value="0" {if !$is_tax_included}checked="checked"{/if}>
                                <label for="FAB_PIXEL_TAX_INCLUDED_off">{l s='No' mod='fabfacebookpixel'}</label>
                                <a class="slide-button btn"></a>
                            </span>
                        </div>
                    </div>
                </div>
                <!-- end card block row -->


                <!-- Brand value for products without a brand -->
                <div class="card-block row mb-2">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 text-left text-lg-right align-middle text-sm-left text-md-left">
                        <label for="FAB_PIXEL_BRAND_OVERRIDE" class="control-label">
                        {l s='Brand value for products without a brand' mod='fabfacebookpixel'}
                        </label>
                    </div>

                    <div class="col-8 col-sm-12 col-md-12 col-lg-8">
                        <div class="row">
                            <input type="text" name="FAB_PIXEL_BRAND_OVERRIDE" id="FAB_PIXEL_BRAND_OVERRIDE" class="col-lg-4 col-xl-5 col-md-4 col-sm-12 form-control" value="{$brand_override}"></input>
                        </div>
                    </div>
                </div>
                <!-- end card block row -->

                {if $show_export_combinations}
                    <!-- Export combinations-->
                    <div class="card-block row mb-2">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-4 text-left text-lg-right align-middle text-sm-left text-md-left">
                            <label for="FAB_PIXEL_COMBINATIONS" class="control-label">
                            {l s='Export Combinations' mod='fabfacebookpixel'}
                            </label>
                        </div>

                        <div class="col-8 col-sm-12 col-md-12 col-lg-8">
                            <div class="row">
                                <span class="switch prestashop-switch fixed-width-lg">
                                    <input type="radio" name="FAB_PIXEL_COMBINATIONS" id="FAB_PIXEL_COMBINATIONS_on" value="1" {if $is_export_combinations}checked="checked"{/if}>
                                    <label for="FAB_PIXEL_COMBINATIONS_on">{l s='Yes' mod='fabfacebookpixel'}</label>
                                    <input type="radio" name="FAB_PIXEL_COMBINATIONS" id="FAB_PIXEL_COMBINATIONS_off" value="0" {if !$is_export_combinations}checked="checked"{/if}>
                                    <label for="FAB_PIXEL_COMBINATIONS_off">{l s='No' mod='fabfacebookpixel'}</label>
                                    <a class="slide-button btn"></a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end card block row -->
                {/if}

                <hr />

                <!-- Debug-->
                <div class="card-block row mb-2">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 text-left text-lg-right align-middle text-sm-left text-md-left">
                        <label for="FAB_PIXEL_DEBUG" class="control-label">
                            {l s='Enable Debug' mod='fabfacebookpixel'}
                        </label>
                    </div>

                    <div class="col-8 col-sm-12 col-md-12 col-lg-8">
                        <div class="row">
                                <span class="switch prestashop-switch fixed-width-lg">
                                    <input type="radio" name="FAB_PIXEL_DEBUG" id="FAB_PIXEL_DEBUG_on" value="1" {if $is_debug}checked="checked"{/if}>
                                    <label for="FAB_PIXEL_DEBUG_on">{l s='Yes' mod='fabfacebookpixel'}</label>
                                    <input type="radio" name="FAB_PIXEL_DEBUG" id="FAB_PIXEL_DEBUG_off" value="0" {if !$is_debug}checked="checked"{/if}>
                                    <label for="FAB_PIXEL_DEBUG_off">{l s='No' mod='fabfacebookpixel'}</label>
                                    <a class="slide-button btn"></a>
                                </span>
                        </div>
                        <div class="row mt-1">
                                <span class="small font-secondary">{l s='Enabling debug will create a log file in the module directory.' mod='fabfacebookpixel'}</span>
                        </div>
                        <div class="row">
                            <span class="small font-secondary">{l s='Enable only for debug purposes and do not use in production.' mod='fabfacebookpixel'}</span>
                        </div>
                    </div>
                </div>
                <!-- end card block row -->


            </div>
            <div class="card-footer">
				<button type="submit" value="1" name="{$submit_action}" class="btn btn-default pull-right">
				    <i class="process-icon-save"></i> {l s='Save' mod='fabfacebookpixel'}
				</button>
			</div>
        </div>
</form>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->
