<div class="gdlr-page-title-wrapper">
	<div class="gdlr-page-title-overlay"></div>
	<div class="gdlr-page-title-container container">
		<h1 class="gdlr-page-title">Order History</h1>
	</div>
</div>

<div class="text-center mt-5">
<h2>Ongoing order</h2>
</div>
<div class="mt-5 row" style="display: flex;">
<?php foreach ($ongoing_orders as $ongoing_order):?>

<?php if($ongoing_order->order_status == 0 || $ongoing_order->order_status == 1){ ?>
	<div class="col-2 ml-5 border border-secondary">
	<div style="display: inline-grid; grid-template-rows:2fr 2fr 1fr;">
		<h5 class="text-center mt-2">Mohon Tunggu Konfirmasi Pesanan Anda</h5>
		<div class="text-center">
			<img style="max-width: 220px;" src="<?= base_url('assets/images/waiting.gif') ?>" alt="">
			<br>
			</div>
			<p>
		No. Order: <?= $ongoing_order->order_id ?>
			
			</p>
		<!-- <div class="clear">
			<p></p>
		</div> -->
		</div>

	</div>
	<?php }elseif($ongoing_order->order_status == 0 || $ongoing_order->order_status == 2) { ?>
	<div class="col-2 ml-5 border border-secondary" >
		<div style="display: inline-grid; grid-template-rows:2fr 2fr 1fr;">
			<h5 class="text-center mt-2">Pesanan sedang dipersiapkan! </h5>
			<div class="text-center">
				<img style="max-width: 200px;" src="<?= base_url('assets/images/wait-food.gif') ?>" alt="">
				<br>
			</div>
			<p>
				No. Order: <?= $ongoing_order->order_id ?>
			
			</p>
			<!-- <div class="clear">
				<p></p>
			</div> -->
		
		</div>
	
	</div>
	<?php }elseif($ongoing_order->order_status == 0 || $ongoing_order->order_status == 3) { ?>
	<div class="col-2 ml-5 border border-secondary">
	<div style="display: inline-grid; grid-template-rows:2fr 2fr 1fr;">
		<h5 class="text-center mt-2">Pesanan dalam perjalanan! Bersiaplah untuk makan. </h5>
		<div class="text-center">
			<img style="max-width: 150px;" src="<?= base_url('assets/images/otw.gif') ?>" alt="">
			<br>
		</div>
		<p>
			No. Order: <?= $ongoing_order->order_id ?>
		</p>
		</div>
	
	</div>
	<?php }elseif($ongoing_order->order_status == 4) { ?>

		<table width="100%" cellpadding="0" cellspacing="0">
	<thead>
		<tr>
			<th>Item</th>
			<th>Qty</th>
			<th>Item Description</th>
			<th>Item Price</th>
			<th>Sub-Total</th>
		</tr>
	</thead>
	<tbody>
		<?php $i = 1; ?>

		<?php foreach($ongoing_orders as $orders): ?>
		<?php echo form_hidden('rowid[]', $orders['rowid']); ?>
		<tr <?php if($i&1){ echo 'class="alt"'; }?>>
		<td>
			
		</td>
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
			<td</td> <td>
				</td>
				<td><strong>Total</strong></td>
				<td>Rp <?= $this->cart->format_number($this->cart->total()); ?></td>
		</tr>
	</tbody>
</table>
	<?php } ?>
	<?php endforeach; ?>
</div>
<div class="clear">
			<p></p>
		</div>
