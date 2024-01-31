
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
                    <input type="submit" name="addToCartButton" class="inputButton btn btn-primary js-add-to-cart" value=" Aggiungi tutti al carrello" data-action="addSelectedToCart" />
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
    let price = 0.00;

    $('.js-alternative-checkbox:checked').each(function () {
      price += parseFloat($(this).data('price'));
    });

    $('#js-total-price').text(price.toFixed(2) + ' €');
  };

  prestashop.blockcart.updateSelectedProducts = function () {
    const selectedIds = $('.js-alternative-checkbox:checked').map(function () {
      return $(this).val();
    }).get();

    $('#js-selected-products').val(selectedIds.join(','));
  };

  $('.js-alternative-checkbox').on('change', function () {
    prestashop.blockcart.updateAddToCartButtonState();
    prestashop.blockcart.updatePrice();
    prestashop.blockcart.updateSelectedProducts();
  });

  $('.js-add-to-cart').on('click', function () {
    const selectedIds = $('.js-alternative-checkbox:checked').map(function () {
      return $(this).val();
    }).get();

    selectedIds.forEach(function (productId) {
      prestashop.blockcart.addToCart(productId);
    });
  });

  prestashop.blockcart.addToCart = function (productId) {
    const formData = new FormData();
    formData.append('controller', 'cart');
    formData.append('add', '1');
    formData.append('id_product', productId);

    fetch('index.php?controller=cart&action=add', {
      method: 'POST',
      body: formData,
    })
    .then(response => response.json())
    .then(data => {
      console.log(data);
    })
    .catch(error => {
      console.error('Error adding to cart:', error);
    });
  };

  // Initial call to update the add to cart button state
  prestashop.blockcart.updateAddToCartButtonState();

  // Initial call to display the total price
  prestashop.blockcart.updatePrice();
});

    


</script>











