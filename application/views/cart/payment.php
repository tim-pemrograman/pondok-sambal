<div class="gdlr-page-title-wrapper">
	<div class="gdlr-page-title-overlay"></div>
	<div class="gdlr-page-title-container container">
		<h1 class="gdlr-page-title">Checkout - Upload Payment</h1>
	</div>
</div>
<?php 
if(!$this->cart->contents()):
    echo 'You don\'t have any items yet.';
    // var_dump('masuk content tpi gk ad'); exit;
else:
?>
<!-- <?= form_open('cart/update_cart'); ?> -->
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
			<td</td> <td>
				</td>
				<td><strong>Total</strong></td>
				<td>Rp <?= $this->cart->format_number($this->cart->total()); ?></td>
		</tr>
	</tbody>
</table>
<div class="container">
    <div class="mt-5">
        <?= form_open_multipart('ordertaker/payment'); ?>
        <!-- Image Form -->
        <div class="d-flex justify-content-lg-between flex-column flex-md-row">
            <img class="order-md-1 order-2 mr-md-3" src="<?= base_url('assets/images/rekening.jpeg')?>" alt="" style="max-width: 500px; width:100%;">
            <div class="payment-content mb-5 order-md-2 order-1">
                <h3>Terima kasih Telah Memesan Order</h3>
                <p>Silahkan melakukan pembayaran E-Wallet atau Mobile Banking pada nomor akun yang tertera agar pesanan Anda segera diproses oleh staf kami.</p>
                <h6>No Rek BCA : XXXXXXXXXXXX</h6>
                <h6>Atas Nama : Pondok Sambal</h6>
                <div class="form-group">
                    <label for="inputImage pr-3">Image</label>
                    <input type="file" class="text-center" id="img_path" name="img_path" accept="image/*">
                    <?= form_error('img_path', '<small class="text-danger">', ' </small>') ?>
                </div>
                <button type="submit" name="submit" class="btn btn-primary" value="upload">Add Bukti</button>
            </div>
        </div>
        </form>
        <div class="clear">
            <p></p>
        </div>
    </div>

</div>


<?php 
echo form_close(); 
endif;
?>
