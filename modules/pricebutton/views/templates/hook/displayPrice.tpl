{* 
 *}
<div class="row" id="INDEX_PR_C_BUTTONS" >
    {if $iscredit == 0}
        <div class="col-12 INDEX_PR_C_BUTTONS_CONTADO">
            <button onclick="changePriceCustom(this, {$product.id}, false)"
                class="add-to-cart price-custom btn btn-primary btn-custom-pry">
                {l s='Contado'}
            </button>
        </div>
    {else}
        <div class="col-12 INDEX_PR_C_BUTTONS_CREDITO">
            <button onclick="changePriceCustom(this, {$product.id}, true)"
                class="add-to-cart price-custom btn btn-secondary btn-custom-sec" id="secondary-price">
                {l s='Crédito'}
            </button>
        </div>
    {/if}
</div>
<div class="content-prices">
    {if $iscredit == 0}
        <div class="content-price-{$product.id} INDEX_PR_C_PRICE_CONTADO">
            <label class="label-price">
                {$product.price}
            </label>
        </div>
    {else}
        <div class="content-cuotas-{$product.id} INDEX_PR_C_PRICE_CREDITO">
            <span>12 cuotas desde</span>
            <br>
            <label class="label-price">
                {Tools::displayPrice(($price * 1.16) / 12)}
            </label>
        </div>
    {/if}
</div>