
{if $alternatives}
    <hr>
    <div class="product-alternatives">
        <h6>{l s='Product Alternatives' d='Modules.Mycustomalternatives.Product'}</h6>
        <ul>
            {foreach $alternatives as $alternative}
                <br>
                <li>
                    <a href="{$alternative.link}">
                        <img style="max-width: 100px; max-height: 100px;" src="{$alternative.image|escape:'html':'UTF-8'}" alt="{$alternative.names[0]|escape:'html':'UTF-8'}" />
                        <span>{$alternative.names[0]|escape:'html':'UTF-8'}</span>
                        <span>{$alternative.reference|escape:'html':'UTF-8'}</span>
                    </a>
                </li>
            {/foreach}
        </ul>
    </div>
{/if}







