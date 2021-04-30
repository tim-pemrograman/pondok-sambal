<div class="gdlr-page-title-wrapper">
	<div class="gdlr-page-title-overlay"></div>
	<div class="gdlr-page-title-container container">
		<h1 class="gdlr-page-title">Order History</h1>
	</div>
</div>
<?php 
if(!$all_orders): ?>
<div class="text-center mt-5">
    <h1 class="text-center">You don't have any orders yet.</h1>;
    <img class="text-center" src="<?= base_url('assets/images/none.gif') ?>" alt="">
</div>
<?php else:
?>
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
	
	</div>}


	<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr> 
                            <th>No</th>
                            <td>Customer Name</td>
                            <td>Total Qty</td>
                            <td>Total Price</td>
                            <td>Payment Method</td>
                            <td>Order Date</td>
                            <td>Order Status</td>
                            <td>Bukti Transaksi</td>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                    <?php $i=0; foreach($data_order as $data_order): $i++;?>
                    
                    <tr>
                         <td><?= $i; ?></td>
                         <td><?= $data_order->Fname.' '.$data_order->Lname; ?></td>
                         <td><?= $data_order->total_qty; ?></td>
                         <td><?= $data_order->total_price; ?></td>
                         <td><?php if($data_order->payment_method == 1){echo 'Cash on Delivery';}else{echo "Bank Transfer";}; ?></td>
                         <td><?= date_format(date_create($data_order->order_date),'d M Y || H:i:s')?></td>
                         <td>
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
                                }; 
                            ?>
                         </td>
                         <td><img src="<?= base_url($data_order->img_path); ?>" width="100" alt="img bukti"></td>
                         <td>
                             <a class="btn-circle btn-primary"
                                    href="<?= base_url('admin'); ?>/order/view/<?= $data_order->order_id; ?>"><i class="fas fa-eye "></i></a>
                             <!-- <a class="btn-circle btn-primary"
                                href="<?= base_url('admin'); ?>/user/edit/<?= $data_order->employee_id; ?>"><i class="fas fa-edit "></i></a> -->
                             <a class="btn-circle btn-danger" onclick="return deleteUser(<?= $data_order->order_id; ?>)" href="javascript:void(0)"><i class="fas fa-trash "></i></a>
                         </td>
                    </tr>
                    <?php endforeach; ?>
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle my-3" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Filter
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="<?= base_url('admin'); ?>/order/update_proses/proses/<?= $data_order->order_id; ?>">Sedang Diproses</a>
                                <a class="dropdown-item" href="<?= base_url('admin'); ?>/order/update_proses/jalan/<?= $data_order->order_id; ?>">Sedang di jalan</a>
                                <a class="dropdown-item" href="<?= base_url('admin'); ?>/order/update_proses/selesai/<?= $data_order->order_id; ?>">Transaksi Selesai</a>
                            </div>
                        </div>
                    </tbody>

                </table>
	<?php } ?>
	<?php endforeach; ?>
</div>
<div class="clear">
			<p></p>
		</div>
<?php endif; ?>