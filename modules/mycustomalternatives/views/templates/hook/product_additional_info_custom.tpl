<div>
    alternative:
</div>
{if $alternatives}
    <div class="product-alternatives">
        <h3>{l s='Product Alternatives' d='Modules.Mycustomalternatives.Product'}</h3>
        <ul>
            {foreach $alternatives as $alternative}
                <li>
                    <a href="{$alternative.link}">
                        <img src="{$alternative.image}" alt="{$alternative.name}" />
                        <span>{$alternative.name}</span>
                    </a>
                </li>
            {/foreach}
        </ul>
    </div>
{/if}