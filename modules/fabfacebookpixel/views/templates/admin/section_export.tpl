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

<form class="form form-horizontal mb-2">
    <div class="card">
        <div class="card-header">
            <i class="material-icons">category</i>
            {l s='Google Category Definitions' mod='fabfacebookpixel'}
        </div>
        <div class="card-body ml-4">
            <div class="card-block row">
                <div class="card-text">
                    <div class="row mb-2 align-items-center">
                        <div class="col-sm-12 col-md-12 col-lg-9 col-xl-9 pl-0">
                            <h4 class="text-muted font-weight-light">{l s='Google Category Definitions should be set in the exported catalog for each product. It is not mandatory, but strongly suggested. Download Definitions from Google and set a definition for each category, in the category panel.' mod='fabfacebookpixel'}</h4>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-3 col-xl-3 pl-0 text-right">
                		    <button type="button" class="btn btn-default" name="get_google_definitions" data-updatemsg="{l s='Update Google Definitions' mod='fabfacebookpixel'}" id="get_google_definitions" data-token="{$token|escape:'htmlall':'UTF-8'}">
                		        <i class="icon-download"></i>&nbsp;<span id="btn-message">{if ($noGoogleDefinitions)}{l s='Download Google Definitions' mod='fabfacebookpixel'}{else}{l s='Update Google Definitions' mod='fabfacebookpixel'}{/if}</span>
                		    </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end card block row -->
        </div>
    </div>
</form>
<form class="form form-horizontal mb-2">
    <div class="card">
        <div class="card-header">
            <i class="material-icons">category</i>
            {l s='Facebook Category Definitions' mod='fabfacebookpixel'}
        </div>
        <div class="card-body ml-4">
            <div class="card-block row">
                <div class="card-text">
                    <div class="row mb-2 align-items-center">
                        <div class="col-sm-12 col-md-12 col-lg-9 col-xl-9 pl-0">
                            <h4 class="text-muted font-weight-light">{l s='Facebook Category Definitions should be set in the exported catalog for each product. It is not mandatory, but strongly suggested. Download Definitions from Facebook and set a definition for each category, in the category panel.' mod='fabfacebookpixel'}</h4>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-3 col-xl-3 pl-0 text-right">
                            <button type="button" class="btn btn-default" name="get_facebook_definitions" data-updatemsg="{l s='Update Facebook Categories Definitions' mod='fabfacebookpixel'}" id="get_facebook_definitions" data-token="{$token|escape:'htmlall':'UTF-8'}">
                                <i class="icon-download"></i>&nbsp;<span id="btn-message">{if ($noFacebookDefinitions)}{l s='Download Facebook Categories Definitions' mod='fabfacebookpixel'}{else}{l s='Update Facebook Categories Definitions' mod='fabfacebookpixel'}{/if}</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end card block row -->
        </div>
    </div>
</form>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->