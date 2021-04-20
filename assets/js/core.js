$(document).ready(function() { 
    /*place jQuery actions here*/ 

    $("ul.products form").submit(function() {
        // Get the product ID and the quantity 
        var id = $(this).find('input[name=id]').val();
        var qty = $(this).find('input[name=quantity]').val();
        
         $.post("<?= base_url()?>/cart/add_cart_item", { id: id, quantity: qty, ajax: '1' },
              function(data){	
                  // Interact with returned data
          });
          
        return false; // Stop the browser of loading the page defined in the form "action" parameter.
    });

});

$(".empty").live("click", function(){
    $.get(link + "cart/empty_cart", function(){
        $.get(link + "cart/show_cart", function(cart){
              $("#cart_content").html(cart);
        });
    });
    
    return false;
});