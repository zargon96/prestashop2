{if $alternatives}
    <div id="acquistato-insieme">
        <h3>Spesso acquistati insieme</h3>
        
        <ul>
            {foreach $alternatives as $alternative}
                <li>
                    <a href="{$alternative.link}" target="_blank">{$alternative.names.0}</a>
                    <span class="js-alternative-price" data-price="{$alternative.price}"> - {number_format($alternative.price, 2)} €</span>
                </li>
            {/foreach}
        </ul>

        <p>Totale: <span id="js-total-price">0.00</span> €</p>
    </div>
{/if}








