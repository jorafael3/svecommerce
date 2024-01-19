{**
* 2011 - 2021 HiPresta
*
* MODULE WhatsApp Live chat with customers
*
* @author    HiPresta <support@hipresta.com>
* @copyright HiPresta 2021
* @license   Addons PrestaShop license limitation
* @link      https://hipresta.com
*
* NOTICE OF LICENSE
*
* Don't use this module on several shops. The license provided by PrestaShop Addons
* for all its modules is valid only once for a single shop.
*}

<form accept="/" method="post" id="relatedProductForm">
    <div class="panel">
        <h3><i class="icon-cogs"></i> {l s='Add related product' mod='hiwhatsapp'}</h3>
        <div class="form-wrapper">
            <div class="form-group">
                <label class="control-label col-lg-3">{l s='Search Product' mod='hiwhatsapp'}</label>
                <div class="col-lg-7">
                    <input type="text" name="related_product" id="related_product" placeholder="{l s='Start typing product name' mod='hiwhatsapp'}">
                </div>
            </div>
        </div>
        <div class="panel-footer">
            <button type="button" class="btn btn-default btn btn-default pull-left" name="cancel_related_products_modal" id="cancel_related_products_modal"><i class="process-icon-cancel"></i> {l s='Cancel' mod='hiwhatsapp'}</button>
            <button type="submit" class="btn btn-default pull-right" name="submit_related_product" id="submit_related_product" data-id-account="{$id_account|intval}"><i class="process-icon-save"></i> {l s='Add' mod='hiwhatsapp'}</button>
        </div>
    </div>
</form>