
    <style>
    body{
    font-family: "Lucida Sans";
    font-size: 12px;
}
 
#wrap{
    width: 1024px;
}
 
ul.products{
    list-style-type: none;
    width: 525px;
    margin: 0;
    padding: 0;
}
 
    ul.products li{
        background: #eeeeee;
        border: 1px solid #d3d3d3;
        padding: 5px;
        width: 150px;
        text-align: center;
        float: left;
        margin-right: 10px;
    }
 
    ul.products h3{
        margin: 0;
        padding: 0px 0px 5px 0px;
        font-size: 14px;
    }
     
    ul.products small{
        display: block;
    }
     
    ul.products form fieldset{
        border: 0px;
    }
     
    ul.products form label{
        font-size: 12px;
    }
     
    ul.products form input[type=text]{
        width: 18px;
        background: #FFF;
        border: 1px solid #d3d3d3;
    }
    </style>

<ul class="products">
    <?php foreach($tbl_product as $p): ?>
    <li>
        <h3><?= $p['name']; ?></h3>
        <img src="<?= base_url(); ?><?= $p['product_img']; ?>" alt="" width="80%"/>
        <small>Rp <?= $p['price']; ?></small>
        <?= form_open('cart/add_cart_item'); ?>
            <fieldset>
                <label>Quantity</label>
                <?= form_input('quantity', '1', 'maxlength="2"'); ?>
                <?= form_hidden('id', $p['id']); ?>
                <?= form_submit('add', 'Add'); ?>
            </fieldset>
        <?= form_close(); ?>
    </li>
    <?php endforeach;?>
</ul>
<script>
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
</script>
