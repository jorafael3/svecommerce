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
<form class="form form-horizontal mb-2" action="{$current_index}&token={$token}&tab=ffb_catalog_export" method="post" enctype="multipart/form-data" novalidate>
    <input type="hidden" name="{$submit_action}" value="1">
        <div class="card">
            <div class="card-header">
                <i class="material-icons">storage</i>
                {l s='Incremental Catalog Storage' mod='fabfacebookpixel'}
            </div>
            <div class="card-body ml-4">
                <div class="card-block row mb-2">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 text-left text-lg-right align-middle text-sm-left text-md-left">
                        <label for="FAB_FACEBOOK_CHUNK_ACTIVE" class="control-label">
                        {l s='Activate incremental catalog storage' mod='fabfacebookpixel'}
                        </label>
                    </div>
                    
                    <div class="col-8 col-sm-12 col-md-12 col-lg-8">
                        <span class="switch prestashop-switch fixed-width-lg">
						    <input type="radio" name="FAB_FACEBOOK_CHUNK_ACTIVE" id="FAB_FACEBOOK_CHUNK_ACTIVE_on" value="1" {if $is_chunk_active}checked="checked"{/if}>
							<label for="FAB_FACEBOOK_CHUNK_ACTIVE_on">{l s='Yes' mod='fabfacebookpixel'}</label>
							<input type="radio" name="FAB_FACEBOOK_CHUNK_ACTIVE" id="FAB_FACEBOOK_CHUNK_ACTIVE_off" value="0" {if !$is_chunk_active}checked="checked"{/if}>
							<label for="FAB_FACEBOOK_CHUNK_ACTIVE_off">{l s='No' mod='fabfacebookpixel'}</label>
							<a class="slide-button btn"></a>
						</span>
                    </div>
                </div>
                <!-- end card block row -->
                <div class="card-block row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 text-left text-lg-right align-middle text-sm-left text-md-left">
                        <label for="FAB_FACEBOOK_CHUNK_QTY" class="control-label required">
                        {l s='Quantity of products for any URL request' mod='fabfacebookpixel'}
                        </label>
                    </div>
                    
                    <div class="col-8 col-sm-12 col-md-12 col-lg-8">
                        <input type="text" name="FAB_FACEBOOK_CHUNK_QTY" id="FAB_FACEBOOK_CHUNK_QTY" class="col-lg-4 col-xl-5 col-md-4 col-sm-12 form-control" required="required" value="{$chunk_quantity}"></input>
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
