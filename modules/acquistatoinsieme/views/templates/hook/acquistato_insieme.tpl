
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
                <form id="addToCartForm" action="{$cartLink}" method="post" onsubmit="updatePrice(); addToCart(); return false;" enctype="multipart/form-data">
                    <input type="hidden" name="controller" value="cart" />
                    <input type="hidden" name="add" value="1" />
                    <input type="hidden" id="js-selected-products" name="selected_products" value="" />
                    <input type="submit" id="addToCartButton" name="addToCartButton" class="inputButton btn btn-primary js-add-to-cart" onclick="addProducts()" value=" Aggiungi tutti al carrello" data-action="addSelectedToCart" />
                </form>
            </div>
            
        </div>
        <br>
        <ul>
            {foreach $alternatives as $alternative}
                <li> 
                    <input type="checkbox" name="selected_alternatives[]" class="js-alternative-checkbox" value="{$alternative.price} {$product.id_product}" data-price="{$alternative.price} {$product.id_product}" checked />
                    <label><a href="{$alternative.link}" target="_blank">{$alternative.names.0}</a></label>
                    <span class="js-alternative-price" data-price="{$alternative.price}"> - {number_format($alternative.price, 2)} €</span>
                </li>
            {/foreach}
        </ul>
    </div>
{/if}
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {
    prestashop.blockcart = prestashop.blockcart || {};

    prestashop.blockcart.updateAddToCartButtonState = function () {
        const atLeastOneChecked = $('.js-alternative-checkbox:checked').length > 0;

        if (atLeastOneChecked) {
        $('.js-add-to-cart').removeAttr('disabled');
        } else {
        $('.js-add-to-cart').attr('disabled', true);
        }
    };

    prestashop.blockcart.updatePrice = function () {
    let selectedProducts = [];

        $('.js-alternative-checkbox:checked').each(function () {
            let productInfo = $(this).val().split(' ');
            let productId = productInfo[1];
            selectedProducts.push(productId);
        });

        $('#js-selected-products').val(selectedProducts.join(','));

        let price = 0.00;

        $('.js-alternative-checkbox:checked').each(function () {
            price += parseFloat($(this).data('price'));
        });

        $('#js-total-price').text(price.toFixed(2) + ' €');
    }




    $('.js-alternative-checkbox').on('change', function () {
        prestashop.blockcart.updateAddToCartButtonState();
        prestashop.blockcart.updatePrice();

    });

        prestashop.blockcart.updateAddToCartButtonState();

        prestashop.blockcart.updatePrice();

    });

    function addProducts() {
    var selectedProducts = [];

    $('.js-alternative-checkbox:checked').each(function () {
        var productInfo = $(this).val().split(' ');
        var productId = productInfo[1];
        selectedProducts.push(productId);
    });

    addToCart(selectedProducts);
}


function addToCart(selectedProducts) {
var refreshURL = $('.blockcart').data('refresh-url');

// Itera attraverso tutti i prodotti selezionati
selectedProducts.forEach(function(productId) {
    var requestData = {
        controller: 'cart',
        add: '1',
        ajax: '1',
        id_product: productId,
        token: prestashop.static_token
    };

    // Invia una richiesta AJAX per aggiungere il prodotto al carrello
    $.post(refreshURL, requestData).then(function (resp) {
        $('.blockcart').replaceWith($(resp.preview).find('.blockcart'));

        prestashop.emit('updateCart', {
            reason: {
                linkAction: 'add',
            },
        });
    }).fail(function (resp) {
        prestashop.emit('handleError', { eventType: 'updateShoppingCart', resp: resp });
    });
});
}





   

</script>











