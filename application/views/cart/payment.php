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
            <?php echo $items['qty']; ?>
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
<?php echo form_open_multipart('ordertaker/add_proof'); ?>
                    <!-- Image Form -->
                    <div class="form-group">
                    <img src="<?= base_url('assets/images/rekening.jpeg')?>" alt="" style="width: 20%; display:block; margin-left:auto; margin-right:auto;">
                    </div>
                    <div class="text-center">
                        <label for="inputImage">Image</label>
                        <input type="file" class="text-center" id="img_path" name="img_path" accept="image/*">
                        <?= form_error('img_path', '<small class="text-danger">', ' </small>') ?>
                    </div>
                    <div class="text-center">
                        <button type="submit" name="submit" class="btn btn-primary" value="upload">Add Bukti</button>
                    </div>
                    </form>
                   <div class="clear"><p></p></div>
               

<?php 
echo form_close(); 
endif;
?>