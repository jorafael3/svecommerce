{* 
 *}
<div class="row">
    <div class="col-6">
        <button onclick="changePriceCustom(this, {$product.id}, false)"
            class="add-to-cart price-custom btn btn-primary btn-custom-pry">
            {l s='Contado'}
        </button>
    </div>
    <div class="col-6">
        <button onclick="changePriceCustom(this, {$product.id}, true)"
            class="add-to-cart price-custom btn btn-secondary btn-custom-sec" id="secondary-price">
            {l s='Crédito'}
        </button>
    </div>

</div>
<div class="content-prices">
    <div class="content-price-{$product.id}">
        <label class="label-price">
            {$product.price}
        </label>

    </div>

    <div class="content-cuotas-{$product.id}" style="display: none;">
        <span>12 cuotas desde</span>
        <br>
        <label class="label-price">
            {Tools::displayPrice(($price * 1.16) / 12)}
        </label>
    </div>
</div>