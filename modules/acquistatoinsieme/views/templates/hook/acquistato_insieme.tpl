
{if $alternatives}
    <div id="acquistato-insieme">
        <h3>Spesso acquistati insieme</h3>
        <div class="row">
            {foreach $alternatives as $alternative}
                <div class="col-md-4" style="width: 20% !important;">
                    <img style="width: 80px; height: 80px;" src="{$alternative.image}" alt="{$alternative.names.0}">
                </div>
            {/foreach}
            <p>Prezzo totale prodotti: <span id="js-total-price">{number_format($total_price, 2)}</span></p>
        </div>
        <br>
        <ul>
            {foreach $alternatives as $alternative}
                <li>
                    <input type="checkbox" name="selected_alternatives[]" value="{$alternative.price}" class="js-alternative-checkbox" data-price="{$alternative.price}">
                    <label><a href="{$alternative.link}" target="_blank">{$alternative.names.0}</a></label>
                    <span class="js-alternative-price" data-price="{$alternative.price}"> - {number_format($alternative.price, 2)} €</span>
                </li>
            {/foreach}
        </ul>
    </div>
{/if}
<script>
    function updatePrice() {
    let price = 0.00;
    const checkboxes = document.getElementsByClassName("js-alternative-checkbox");

    for (let i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i].checked) {
            price += parseFloat(checkboxes[i].getAttribute('data-price'));
        }
    }

    document.getElementById("js-total-price").innerText = price.toFixed(2) + " €";
}

// Collega la funzione all'evento di cambio di stato delle checkbox
const checkboxes = document.getElementsByClassName("js-alternative-checkbox");
for (let i = 0; i < checkboxes.length; i++) {
    checkboxes[i].addEventListener('change', updatePrice);
}

// Chiamata iniziale per visualizzare il prezzo totale
updatePrice();

</script>










