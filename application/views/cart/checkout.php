<div class="gdlr-page-title-wrapper">
	<div class="gdlr-page-title-overlay"></div>
	<div class="gdlr-page-title-container container">
		<h1 class="gdlr-page-title">Checkout</h1>
	</div>
</div>
<?php 
if(!$this->cart->contents()):
    echo 'You don\'t have any items yet.';
    // var_dump('masuk content tpi gk ad'); exit;
else:
?>
 
<?= form_open('cart/update_cart'); ?>
<table width="100%" cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th>Qty</th>
            <th>Item Description</th>
            <th>Item Price</th>
            <th>Sub-Total</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1; ?>
       
        <?php foreach($this->cart->contents() as $items): ?>
            <?php echo form_hidden('rowid[]', $items['rowid']); ?>
        <tr <?php if($i&1){ echo 'class="alt"'; }?>>
            <td>
            <?php echo form_input(array('name' => 'qty[]', 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5')); ?>
            </td>
             
            <td><?php echo $items['name']; ?></td>
             
            <td>Rp <?php echo $this->cart->format_number($items['price']); ?></td>
            <td>Rp <?php echo $this->cart->format_number($items['subtotal']); ?></td>
        </tr>
         
        <?php $i++; ?>
        <?php endforeach; ?>
         
        <tr>
            <td</td>
            <td></td>
            <td><strong>Total</strong></td>
            <td>Rp <?= $this->cart->format_number($this->cart->total()); ?></td>
        </tr>
    </tbody>
</table>
<p><?= form_submit('', 'Update your Cart'); form_submit('', 'Update your Cart'); echo anchor('cart/empty_cart', 'Empty Cart', 'class="empty"');?></p>
<p><small>If the quantity is set to zero, the item will be removed from the cart.</small></p>
<h3>Method of payment</h3>

<div class="container-transaction">
 <div class="left-side">
  <div class="card">
   <div class="card-line"></div>
   <div class="buttons"></div>
  </div>
  <div class="post">
   <div class="post-line"></div>
   <div class="screen">
    <div class="dollar">Rp</div>
   </div>
   <div class="numbers"></div>
   <div class="numbers-line2"></div>
  </div>
 </div>
 <div class="right-side">
  <div class="new"> <a href="<?= base_url('ordertaker/payment')?>"> E-Wallet and M-banking </a></div> 
 </div>
 <div class="left-side" style="margin-left:60%; --left-side: #ca4242;">
  <div class="card" style="-webkit-box-shadow: 9px 9px 9px -2px rgba(200, 77, 93, 0.72);
	-moz-box-shadow: 9px 9px 9px -2px rgba(200, 77, 77, 0.72);
	-webkit-box-shadow: 9px 9px 9px -2px rgba(200, 77, 77, 0.72); width:94px; height:40px; background-image: url('<?=base_url('assets/images/rupiah.jpeg')?>'); background-size: cover;">
  </div>
  <div class="post">
   <div class="post-line"></div>
   <div class="screen">
    <div class="dollar" style="color: #d63038;">Rp</div>
   </div>
   <div class="numbers"></div>
   <div class="numbers-line2"></div>
  </div>
 </div>
 <div class="right-side">
  <div class="new"> <a href="">COD</a> </div> 
 </div>
</div>
<div class="clear">
    <p></p>
</div>
<?php 
echo form_close(); 
endif;
?>
