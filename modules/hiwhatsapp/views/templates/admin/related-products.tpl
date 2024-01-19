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

<div class="panel account-related-products">
    <h3><i class="icon-list"></i> {l s='Related Products' mod='hiwhatsapp'}</h3>
    <p class="alert alert-info">
        {l s='This account will be available only in selected product pages. Leave blank to display it in all pages.' mod='hiwhatsapp'}
    </p>
    {if $relatedProducts}
        <ul class="related-products-sortable list-unstyled clearfix" data-id-account="{$id_account|intval}">
            {foreach from=$relatedProducts item=product}
                <li class="product-pack-item media-product-pack" style="width: 125px;cursor: move;" data-id-product="{$product.id_product|intval}">
                    <img class="media-product-pack-img" src="{$product.img_link|escape:'htmlall':'UTF-8'}" style="max-width: 100%">
                    <span class="media-product-pack-title">
                        {l s='Name' mod='hiwhatsapp'}: {$product.name|truncate:20:'..'|escape:'html':'UTF-8'}
                    </span>
                    <span class="media-product-pack-ref">
                        {if $product.reference}
                            {l s='REF' mod='hiwhatsapp'}: {$product.reference|escape:'html':'UTF-8'}
                        {else}
                            &nbsp;
                        {/if}
                    </span>
                    <a href="#" class="btn btn-default btn-primary media-product-pack-action delete-related-product" data-id-product="{$product.id_product|intval}" data-id-account="{$id_account|intval}">
                        <i class="icon-trash"></i>
                    </a>
                </li>
            {/foreach}
        </ul>
    {else}
        <div class="list-empty">
            <div class="list-empty-msg">
                <i class="icon-warning-sign list-empty-icon"></i>
                {l s='No records found' mod='hiwhatsapp'}
            </div>
        </div>
    {/if}
</div>