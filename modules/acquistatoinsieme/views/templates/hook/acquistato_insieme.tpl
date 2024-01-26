
{if $alternatives}    
    <div id="acquistato-insieme">
        <h3>Spesso acquistati insieme</h3>
        <div class="row">
            {foreach $alternatives as $alternative}
                <div class="col-md-4" style="width: 15% !important;">
                    <img style="width: 80px; height: 80px;" src="{$alternative.image}" alt="{$alternative.names.0}">
                </div>
            {/foreach}
            
            <div class="col-md-6">
                <p>Prezzo totale prodotti: <span id="js-total-price">{number_format($total_price, 2)}</span></p>
            </div>
            <div class="col-md-6">
                <form action="{$cartLink}" method="post"  method="post" onsubmit="updatePrice()">
                    <input type="hidden" name="controller" value="cart" />
                    <input type="hidden" name="add" value="1" />
                    {foreach $alternatives as $alternative}
                        {if $alternative.selected}
                            <input type="hidden" name="id_product_{$alternative.id_product}" value="{$alternative.id_product}" />
                        {/if}
                    {/foreach}
                    <input type="submit" name="addToCartButton" class="inputButton btn btn-primary js-add-to-cart" value=" Aggiungi tutti al carrello" data-action="addSelectedToCart" />
                </form>
            </div>
            
        </div>
        <br>
        <ul>
            {foreach $alternatives as $alternative}
                <li> 
                    <input type="checkbox" name="selected_alternatives[]" class="js-alternative-checkbox" value="{$alternative.price}" data-price="{$alternative.price}" checked />
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

    // Seleziona tutti gli elementi checkbox
    var alternativeCheckboxes = document.querySelectorAll('.js-alternative-checkbox');
    var addToCartButton = document.querySelector('.js-add-to-cart');

    // Funzione per aggiornare lo stato del pulsante in base allo stato delle checkbox
    function updateAddToCartButtonState() {
        var atLeastOneChecked = Array.from(alternativeCheckboxes).some(function(checkbox) {
            return checkbox.checked;
        });

        // Controlla se almeno una checkbox è selezionata
        if (atLeastOneChecked) {
            addToCartButton.removeAttribute('disabled'); // Abilita l'input
        } else {
            addToCartButton.setAttribute('disabled', true); // Disabilita l'input
        }
    }

    // Aggiorna lo stato del pulsante quando cambia lo stato delle checkbox
    alternativeCheckboxes.forEach(function(checkbox) {
        checkbox.addEventListener('change', function() {
            updateAddToCartButtonState();
        });
    });

    // Chiamata iniziale per assicurarsi che lo stato del pulsante sia corretto
    updateAddToCartButtonState();


    
</script>










