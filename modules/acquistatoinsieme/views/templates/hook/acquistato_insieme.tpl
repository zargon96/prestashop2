
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
                <form id="addToCartForm" action="{$cartLink}" method="post" onsubmit="updatePrice(); addToCart(); return false;">
                    <input type="hidden" name="controller" value="cart" />
                    <input type="hidden" name="add" value="1" />
                    <input type="hidden" id="js-selected-products" name="id_product_" value="" />
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
    const alternativeCheckboxes = document.querySelectorAll('.js-alternative-checkbox');
    const addToCartButton = document.querySelector('.js-add-to-cart');

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

    function updateSelectedProducts() {
        const selectedIds = Array.from(document.querySelectorAll(".js-alternative-checkbox:checked"))
            .map(checkbox => checkbox.getAttribute('value'));

        document.getElementById("js-selected-products").value = selectedIds.join(',');
    }

    
    function updateAddToCartButtonState() {
        const atLeastOneChecked = Array.from(alternativeCheckboxes).some(checkbox => checkbox.checked);

        if (atLeastOneChecked) {
            addToCartButton.removeAttribute('disabled');
        } else {
            addToCartButton.setAttribute('disabled', true);
        }
    }

    alternativeCheckboxes.forEach(checkbox => {
        checkbox.addEventListener('change', () => {
            updateAddToCartButtonState();
            updatePrice();
            updateSelectedProducts();
        });
    });

    addToCartButton.addEventListener('click', () => {
        document.getElementById('addToCartForm').submit();
    });

    // Funzione per aggiornare lo stato del pulsante all'avvio della pagina
    updateAddToCartButtonState();

    // Chiamata iniziale per visualizzare il prezzo totale
    updatePrice();

    
</script>











