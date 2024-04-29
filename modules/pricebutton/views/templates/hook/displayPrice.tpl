{* 
 *}
<div class="row" id="INDEX_PR_C_BUTTONS" >
    <div class="col-12 INDEX_PR_C_BUTTONS_CONTADO" id="">
        <button onclick="changePriceCustom(this, {$product.id}, false)"
            class="add-to-cart price-custom btn btn-primary btn-custom-pry">
            {l s='Contado'}
        </button>
    </div>
    <div class="col-6 INDEX_PR_C_BUTTONS_CREDITO" id="">
        <button onclick="changePriceCustom(this, {$product.id}, true)"
            class="add-to-cart price-custom btn btn-secondary btn-custom-sec" id="secondary-price">
            {l s='Crédito'}
        </button>
    </div>

</div>
<div class="content-prices">
    <div class="content-price-{$product.id} INDEX_PR_C_PRICE_CONTADO">
        <label class="label-price">
            {$product.price}
        </label>
    </div>

    <div class="content-cuotas-{$product.id} INDEX_PR_C_PRICE_CREDITO">
        <span>12 cuotas desde</span>
        <br>
        <label class="label-price">
            {Tools::displayPrice(($price * 1.16) / 12)}
        </label>
    </div>
</div>