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

{literal}
<script>
{/literal}

var datalistFullfilled = new Array();
var psToken = '{$admin_token}';
var idLang = {$id_lang};


{literal}
</script>
{/literal}

<form class="form form-horizontal mb-2" action="{$current_index}&token={$token}&tab=ffb_category_mapping" method="post"">
    <div class="card" id="ffp-category-mapping-card">
        <div class="card-header">
            <i class="material-icons">import_export</i>
            {l s='Map Prestashop Category to Google and Facebook Categories' mod='fabfacebookpixel'}
        </div>
        <div class="card-body ml-4">
            <div class="card-block row">
                <div class="card-text">
                    <div class="row mb-2">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 pl-0">
                            <h4 class="text-muted font-weight-light">{l s='Before mapping categories you should' mod='fabfacebookpixel'} <a href="#ffb_download_definitions" id="definitions-directlink">{l s='download Google and Facebook Definitions if wasn\'t done yet.'  mod='fabfacebookpixel'}</a></h4>
                            <h4 class="text-muted font-weight-light">{l s='Categories inherit parent\'s mapping, if no mapping is assigned.' mod='fabfacebookpixel'}</h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-block row">

                    <table class="table table-form">
                        <thead>
                        <tr>
                            <th><strong>Prestashop Category</strong></th>
                            <th><strong>Google Category</strong></th>
                            <th><strong>Facebook Category</strong></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>

                        {foreach from=$mapped_rows key=k item=v}
                             <tr class="clonable-row">
                                 <td>
                                     <select name="ffpcat[{$k}][ps]" id="ffpcat-{$k}-ps" class="js-select2 form-control ps" >
                                         {foreach $ps_categories as $ps_category}
                                             <option {if ($v.id_category==$ps_category.id_category)}selected{/if} value="{$ps_category.id_category}">{$ps_category.name|stripslashes} ({$ps_category.id_category})</option>
                                         {/foreach}
                                     </select>
                                 </td>

                                 <td>
                                     <select name="ffpcat[{$k}][google]" id="ffpcat-{$k}-google" class="js-select2 form-control google">
                                        <option value="{$v.id_google_category}" selected>{$v.google_category_name|stripslashes}</option>
                                     </select>
                                 </td>
                                 <td>
                                     <select name="ffpcat[{$k}][facebook]" id="ffpcat-{$k}-facebook" class="js-select2 form-control facebook">
                                         <option value="{$v.id_facebook_category}" selected>{$v.facebook_category_name|stripslashes}</option>
                                     </select>
                                 </td>
                                 <td style="text-align:right">
                                     <button type="button" class="btn btn-primary delete" aria-label="Iceberg">
                                         <i class="material-icons">delete</i> Delete
                                     </button>
                                 </td>

                             </tr>

                        {/foreach}
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td style="text-align:right">
                                    <button type="button" class="btn btn-primary addnew" aria-label="Iceberg">
                                        <i class="material-icons">add</i> Add New
                                    </button>
                                </td>
                            </tr>

                        </tbody>
                    </table>

            </div>
        </div>
        <div class="card-footer">
            <button type="submit" value="1" name="{$submit_action}" class="btn btn-default pull-right">
                <i class="process-icon-save"></i> {l s='Save' mod='fabfacebookpixel'}
            </button>
        </div>
    </div>
</form>




