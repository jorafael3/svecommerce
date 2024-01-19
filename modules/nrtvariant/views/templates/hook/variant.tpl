{if count($main_variants) > 1}
    {$check_active = false}

    {foreach from=$main_variants key=key_variant item=variant}
        {$hidden_variant = ''}

        {if $id_product_attribute|intval == $variant.id_product_attribute|intval}
            {$check_active = true}
        {/if}
        
        {if isset($NRT_variant_limit) && $NRT_variant_limit && count($main_variants) > $NRT_variant_limit}
            {if $key_variant >= $NRT_variant_limit && $id_product_attribute|intval != $variant.id_product_attribute|intval}
                {$hidden_variant = ' hidden'}
            {/if}
            {if ($key_variant == $NRT_variant_limit - 1) && !$check_active}
                {$hidden_variant = ' hidden'}
            {/if}
        {/if}
        <a href="{$variant.url}"
        class="{$variant.type}{if $id_product_attribute|intval == $variant.id_product_attribute|intval && $axs_variant} active{/if} ax-swatch-inner js-variant{$hidden_variant}"
        title=""
        data-url="{url entity='module' name='nrtvariant' controller='actions'}"
        data-tpl-product="{$tpl_product}"
        data-image-type="{$imageType}"
        data-id-product="{$variant.id_product|intval}"
        data-id-product-attribute="{$variant.id_product_attribute|intval}"
        {if $variant.texture} style="background-image: url({$variant.texture})" 
        {elseif $variant.html_color_code} style="background-color: {$variant.html_color_code}" {/if}>
            <span class="corlor-tooltip">
                    <span class="bg-tooltip"
                        {if $variant.texture} style="background-image: url({$variant.texture})" 
                        {elseif $variant.html_color_code} style="background-color: {$variant.html_color_code}" {/if}>
                    </span>
                    <span class="name-tooltip">{$variant.name}</span>
            </span>
        </a>
        {if isset($NRT_variant_limit) && $NRT_variant_limit && count($main_variants) > $NRT_variant_limit}
            {if $key_variant == $NRT_variant_limit}
                <span class="ax-swatches-more">+{count( $main_variants ) - $NRT_variant_limit}</span>
            {/if}
        {/if}
    {/foreach}
{/if}