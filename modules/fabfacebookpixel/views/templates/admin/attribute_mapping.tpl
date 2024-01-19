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

    var psAttrGroups = [
    {foreach $ps_attribute_groups as $ps_attribute_group}
        {ldelim}id : {$ps_attribute_group.id_attribute_group}, text : '{$ps_attribute_group.name}'{rdelim},
    {/foreach}
    ];

    var fbAttributeGroups = [
    {foreach $facebook_attribute_groups as $facebook_attribute_group}
        {ldelim}id : {$facebook_attribute_group.value}, text : '{$facebook_attribute_group.label}'{rdelim},
    {/foreach}
    ];
    var psToken = '{$admin_token}';
    var mappedToString = '{l s='Mapped to' mod='fabfacebookpixel'}';
{literal}
</script>
{/literal}


<form class="form form-horizontal mb-2" action="{$current_index}&token={$token}&tab=ffb_attribute_mapping" method="post"">
    <div class="card" id="ffp-attribute-mapping-card">
        <div class="card-header">
            <i class="material-icons">import_export</i>
            {l s='Map Prestashop Attributes to Facebook ones' mod='fabfacebookpixel'}
        </div>
        <div class="card-body ml-4">
            <div class="card-block row">
                <div class="card-text">
                    <div class="row mb-2">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 pl-0">
                            <h4 class="text-muted font-weight-light">{l s='You can map the same Facebook Attribute to different Prestashop ones. ' mod='fabfacebookpixel'}</h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-block row">

                    <table class="table table-form">
                        <thead>
                        <tr>
                            <th><strong>Prestashop Attribute</strong></th>
                            <th></th>
                            <th><strong>Facebook Attribute</strong></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>

                        {foreach from=$mapped_rows key=k item=v}
                             <tr class="clonable-row">
                                 <td>
                                     <select name="ffbattrgr[{$k}][ps]"  id="ffbattrgr-{$k}-ps" class="js-select2 form-control psattr" >
                                             <option value="{$v.id_attribute_group}" selected>{$v.name_attribute_group}</option>
                                     </select>
                                 </td>
                                 <td>
                                     {l s='Mapped to' mod='fabfacebookpixel'}
                                 </td>

                                 <td>
                                     <select name="ffbattrgr[{$k}][facebook]" class="js-select2 form-control facebookattr" list="ffbattrgr-{$k}-facebook" data-hidden="ffbattrgr-{$k}-facebook">
                                         <option value="{$v.id_facebook_attribute_group}" selected>{$v.name_facebook_attribute_group}</option>
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




