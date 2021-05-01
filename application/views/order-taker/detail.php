<div class="gdlr-page-title-wrapper">
	<div class="gdlr-page-title-overlay"></div>
	<div class="gdlr-page-title-container container">
		<h1 class="gdlr-page-title">Order Detail</h1>
	</div>
</div>

<div class="container">
	<h1 class="h3 mt-4 mb-2 text-gray-800">Detail Order</h1>
	<div class="table-responsive">
		<table class="table table-bordered mb-5" id="dataTable" width="100%" cellspacing="0">
			<thead>
				<tr>
					<th>No</th>
					<th>Image</th>
					<th>Menu Name</th>
					<th>Item Qty</th>
					<th>Note</th>
					<th>Price per Item</th>
					<th>Sub Total</th>
				</tr>
			</thead>

			<tbody>
				<?php $total = 0;    ?>
				<?php $i=0; foreach($data_order as $data_order): $i++;?>

				<tr>
					<td><?= $i; ?></td>
					<td>
					<a href="<?= base_url($data_order->product_img) ?>" data-fancybox-group="gdlr-gal-1"
										data-rel="fancybox"><img src="<?= base_url($data_order->product_img) ?>"
											alt="<?= $data_order->name; ?>" style="max-width: 80px;" 
											 /></a>
					</td>
					<td><?= $data_order->name ?></td>
					<td><?= $data_order->item_qty; ?></td>
					<td><?php if($data_order->notes == ''){ echo '-'; } else{ echo $data_order->notes; } ; ?></td>
					<td><?= "Rp. ".number_format($data_order->price_per_item); ?></td>
					<td><?= "Rp. ".number_format($data_order->price_per_item * $data_order->item_qty); ?></td>
					<?php $total += $data_order->price_per_item * $data_order->item_qty ?>
				</tr>
				<?php endforeach; ?>

				<div class="flexbox-container" style="display:flex;">

					<!-- Div Kiri -->
					<div class="column" style="flex: 1;">
						<p style="font-weight: bold">No Order : </p>
						<p style="text-decoration: underline;"><?= $data_order->receipt_no; ?></p>

						<p style="font-weight: bold">Order Date: </p>
						<p style="text-decoration: underline;">
							<?= date_format(date_create($data_order->order_date),'D, d M Y || h:i:s a'); ?></p>


					</div>

					<!-- Div Kanan -->
					<div class="column" style="flex: 1;">
						<!-- Status Order Header -->
						<div class="column">
							<p style="font-weight: bold">Status Order :</p>
							<p>
								<?php 
										switch($data_order->order_status){
											case '0':
												echo '0 - Belum Dibayar';
												break;
											case '1':
												echo '1 - Menunggu Konfirmasi Admin';
												break;
											case '2':
												echo '2 - Sedang Diproses';
												break;
											case '3':
												echo '3 - Sedang di jalan';
												break;
											case '4':
												echo '4 - Transaksi Selesai';
												break;
											case '5':
												echo '5 - Transaksi ditolak oleh Pondok Sambal';
												break;
										}; 
									?>
							</p>
						</div>

					</div>
				</div>
	</div>
</div>

</tbody>
<?php $tax = $total*10/100; ?>
<tfoot>

	<tr>
		<td colspan="5"></td>
		<td><b>Total</b></td>
		<td><b><?php echo "Rp. ".number_format($total); ?></b></td>
	</tr>
	<tr>
		<td colspan="5"></td>
		<td><b>Tax(10% ppn) </b></td>
		<td><b><?php echo "Rp. ".number_format($tax); ?></b></td>
	</tr>
	<tr>
		<td colspan="5"></td>
		<td><b>Grand Total</b></td>
		<td><b><?php echo "Rp. ".number_format($total + $tax); ?></b></td>
	</tr>
</tfoot>

</table>
</div>
</div>