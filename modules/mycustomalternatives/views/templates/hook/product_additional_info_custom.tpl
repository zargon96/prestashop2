<div>
    alternative:
</div>
{block name='product_additional_info'}
 {hook h='displayProductAdditionalInfoCustom'}
{/block}
{if $alternatives}
 <div class="product-alternatives">
     {foreach from=$alternatives item=alternative}
         <p>{$alternative.product_name}</p>
         <img src="{$link->getImageLink($alternative.product_name, 'large_default')}" alt="{$alternative.product_name}">
     {/foreach}
 </div> 
{/if} 