{if $product_id}
    <div class="add">
        <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="button" onclick="addToCartAjax()">
            <i class="material-icons shopping-cart"></i>
            Aggiungi al carrello
        </button>
    </div>

    <script>
        function addToCartAjax() {
            var xhr = new XMLHttpRequest();
            //console.log('URL della richiesta AJAX:', '{$link->getModuleLink(ps_shoppingcart, ajax, [], null, null, null, true)}');
            xhr.open('POST', '{$link->getModuleLink(ps_shoppingcart, ajax, [], null, null, null, true)}', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onload = function () {
                console.log('Risposta AJAX:', xhr.responseText);
                updateCartOnHomePage(xhr.responseText);
            };
            xhr.send('ajax=true&add=1&id_product={$product_id}');
        }

        function updateCartOnHomePage(response) {
        console.log('Risposta AJAX:', response); 
        var responseData = JSON.parse(response);

        if (responseData.preview) {
            // Cerca l'elemento _desktop_cart per assicurarti che esista
            var cartContainer = document.getElementById('_desktop_cart');

            if (cartContainer) {
                // Aggiorna il carrello sulla home page con il nuovo markup HTML
                cartContainer.innerHTML = responseData.preview;

                // Trova e aggiorna il numero di prodotti nel carrello sulla home page
                var cartProductsCount = cartContainer.querySelector('.cart-products-count');
                if (cartProductsCount) {
                    // Debug: Visualizza il valore di cartItemCount prima dell'assegnazione
                    console.log('cartItemCount:', responseData.cartItemCount);

                    // Utilizza direttamente i dati dalla risposta AJAX
                    cartProductsCount.textContent = '(' + responseData.cartItemCount + ')';
                } else {
                    console.error('Elemento .cart-products-count non trovato.');
                }
            } else {
                console.error('Elemento _desktop_cart non trovato.');
            }
        } else {
            console.error('La risposta non contiene l\'anteprima del carrello.');
        }
    }

    </script>
{/if}









