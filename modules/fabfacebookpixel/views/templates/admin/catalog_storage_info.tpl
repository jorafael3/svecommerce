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
            <i class="material-icons">import_export</i>
            {l s='Catalog Export / Storage' mod='fabfacebookpixel'}
        </div>
        <div class="card-body ml-4">
            <div class="card-block row">
                <div class="card-text">
                    <div class="row mb-2">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 pl-0">
                            <h4 class="text-muted font-weight-light">{l s='According to the options enabled on your shop you may export the catalog for different configurations available.' mod='fabfacebookpixel'}</h4>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="card-block row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 pl-0">
                    <div id="generator" data-token="{$token}" data-url="{$shopProtocol}{$storeCatalogUrl}" data-csv-prefix="{$shopUrl}modules/fabfacebookpixel/catalog/catalogexport_">
                        <div class="">
                            <div class="row">
                                <div class="col-lg col-md-12 col-sm-12">
                                    <label class="form-control-label small" for="shopName">{l s='Current Shop Selected' mod='fabfacebookpixel'}</label>
                                    {foreach $shops as $shop}
                                        {if $shop.id_shop == $shopId }
                                        <input type="hidden" name="shopId" id="shopId" value="{$shop.id_shop}" />
                                        <input type="text" name="shopName" id="shopName" value="{$shop.name}" disabled />
                                        {/if}
                                    {/foreach}
                                </div>
                                <div class="col-lg col-md-12 col-sm-12">
                                    <label class="form-control-label small" for="langId">{l s='Language' mod='fabfacebookpixel'}</label>
                                    <select name="langId" id="langId">
                                        {foreach $languages as $language}
                                            <option value="{$language.id_lang}" data-iso="{$language.iso_code}" {if $language.id_lang == $langId }selected{/if}>{$language.name} {if $language.id_lang == $langId }(Default){/if}</option>
                                        {/foreach}
                                    </select>
                                </div>
                                <div class="col-lg col-md-12 col-sm-12">
                                    <label class="form-control-label small" for="countryId">{l s='Country' mod='fabfacebookpixel'}</label>
                                    <select name="countryId" id="countryId" data-iso="countryIso">
                                        {foreach $countries as $country}
                                            <option value="{$country.id_country}" data-iso="{$country.iso_code}" {if $country.id_country == $countryId }selected{/if}>{$country.name} {if $country.id_country == $countryId }(Default){/if}</option>
                                        {/foreach}
                                    </select>
                                </div>
                                <div class="col-lg col-md-12 col-sm-12">
                                    <label class="form-control-label small" for="currencyId">{l s='Currency' mod='fabfacebookpixel'}</label>
                                    <select name="currencyId" id="currencyId" data-iso="currencyIso">
                                        {foreach $currencies as $currency}
                                            <option value="{$currency->id}" data-iso="{$currency->iso_code}" {if $currency->id == $currencyId }selected{/if}>{$currency->name} {if $country.id_country == $countryId }(Default){/if}</option>
                                        {/foreach}
                                    </select>
                                </div>
                                <div class="col-lg-2 col-xl-2 col-md-12 col-sm-12">
                                    <label class="form-control-label small" for="currencyId">{l s='Dynamic Info' mod='fabfacebookpixel'}</label>
                                    <select name="catalogInfo" id="catalogInfo">
                                        <option value="0">{l s='No' mod='fabfacebookpixel'}</option>
                                        <option value="1">{l s='Country' mod='fabfacebookpixel'}</option>
                                        <option value="2">{l s='Language' mod='fabfacebookpixel'}</option>
                                    </select>
                                </div>
                                <div class="col-lg col-md-12 col-sm-12 p-lg-0 p-md-2 p-sm-2">
                                    <div class="row">
                                        <div class="col-lg"><label class="form-control-label small" for="currencyId">&nbsp;</label></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg text-right pr-1">
                                            <a href="#" id="exportUrl">
                                                <button type="button" class="btn btn-default" name="export_catalog_file" id="export_catalog_file">
                                                <i class="icon-download"></i>&nbsp;{l s='Export Catalog File' mod='fabfacebookpixel'}
                                                </button>
            		                        </a>
            		                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end card block row -->
            
            <hr />

            <div class="card-block row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 pl-0">
                    <div class="alert alert-warning" id="dyncatalog" data-message-country="{l s='Dynamic Info Catalog: only these fields are exported: id, price, sale_price, override (for the selected country).' mod='fabfacebookpixel'}"  data-message-language="{l s='Dynamic Info Catalog: only these fields are exported: id, title, description, google_product_category, product_type, link, override (for the selected language).' mod='fabfacebookpixel'}" style="display:none">
     
                    </div>
                    <p>{l s='You can set a cronjob to build and save the Facebook catalog in the module folder, using the following URL:' mod='fabfacebookpixel'}</p>
                    <div class="">
                        <div class="row align-items-center">
                            <div class="col-lg-10 col-sm-12 col-md-12">
                                <p class="small">
                                    <a href="" id="storeurlanchor" target="_blank" class="url"><strong><span id="storeurl" style="overflow-wrap: break-word;"></span></strong></a>
                                </p>
                            </div>
                            <div class="col-lg-2 col-sm-12 col-md-12 text-right p-lg-0 p-md-2">
                                <button type="button" class="btn btn-default copy-to-clipboard" name="copy-to-clipboard" data-elem="storeurl">
                                    <i class="icon-copy"></i>&nbsp;{l s='Copy to clipboard' mod='fabfacebookpixel'}
                                </button>
                            </div>
                        </div>
                    </div>
                    <hr />
            
                    <p>{l s='Once your cron is correctly set up you can configure the catalog URL in the Facebook Business Manager to reload catalog automatically, setting this link as source url:' mod='fabfacebookpixel'}</p>
                    
                    <div class="">
                        <div class="row align-items-center">
                            <div class="col-lg-10 col-sm-12 col-md-12">
                                <p class="small">
                                    <a href="" id="catalogcsvanchor" target="_blank" class="url"><strong><span id="catalogcsv" style="overflow-wrap: break-word;"></span></strong></a>
                                </p>
                            </div>
                            <div class="col-lg-2 col-sm-12 col-md-12 text-right p-lg-0 p-md-2">
                                    <button type="button" class="btn btn-default copy-to-clipboard" name="copy-to-clipboard" data-elem="catalogcsv">
                                    <i class="icon-copy"></i>&nbsp;{l s='Copy to clipboard' mod='fabfacebookpixel'}
                                    </button>
                            </div>
                        </div>
                    </div>
                    <hr />
                    <p><h4 class="text-muted font-weight-light">{l s='You may optionally select a category to be exported' mod='fabfacebookpixel'}</h4></p>
                
                    <p>{$categoryBox}</p>
                </div>
            </div>
            <!-- end card block row -->
        </div>
    </div>    
</form>




