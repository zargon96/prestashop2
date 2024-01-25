$(document).ready(function() {
    // Funzione per calcolare la somma dei prezzi degli articoli alternativi
    function calcolaSommaPrezzi() {
        var totalPrice = 0;

        // Itera attraverso gli elementi con la classe 'js-alternative-price'
        $('.js-alternative-price').each(function() {
            var price = parseFloat($(this).data('price'));

            if (!isNaN(price)) {
                totalPrice += price;
            }
        });

        // Aggiorna l'elemento con l'id 'js-total-price' con la somma totale
        $('#js-total-price').text(totalPrice.toFixed(2));
    }

    // Chiama la funzione quando la pagina è completamente caricata
    calcolaSommaPrezzi();
});

