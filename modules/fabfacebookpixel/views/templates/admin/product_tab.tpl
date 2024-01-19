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
<div class="panel product-tab">
    <fieldset>
        <input type="hidden" value="true" name="fabfacebookpixel_product_tab">
        <!-- Activate Facebook Pixel -->
        <div class="card-block row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div>
                    <h2>
                        {l s='Exclude this product in export and tracking' mod='fabfacebookpixel'}
                        <span class="help-box" data-toggle="popover" data-content="{l s='Here you may exclude/include this product in the Facebook catalog' mod='fabfacebookpixel'}" data-original-title="" title=""></span>
                    </h2>
                    <div class="radio">
                        <label>
                            <input type="radio" name="fab_product_exclusion" value="0" {if !$status}checked="checked"{/if}>
                            {l s='Include' mod='fabfacebookpixel'}
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="fab_product_exclusion" value="1" {if $status}checked="checked"{/if}>
                            {l s='Exclude' mod='fabfacebookpixel'}
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </fieldset>
    {if $save_button == 0}
        <div class="panel-footer">
            <a href="index.php?controller=AdminProducts&amp;token={$token}" class="btn btn-default"><i class="process-icon-cancel"></i> {l s='Cancel'  mod='fabfacebookpixel'}</a>
            <button type="submit" name="submitAddproduct" value="1" class="btn btn-default pull-right"><i class="process-icon-save"></i> {l s='Save'  mod='fabfacebookpixel'}</button>
            <button type="submit" name="submitAddproductAndStay" value="1" class="btn btn-default pull-right"><i class="process-icon-save"></i> {l s='Save and stay'  mod='fabfacebookpixel'}</button>
        </div>
    {/if}
</div>

