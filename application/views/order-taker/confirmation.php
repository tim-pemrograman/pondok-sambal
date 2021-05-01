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
<div class="mt-5" style="display: flex;">
<?php foreach ($ongoing_orders as $ongoing_order):?>

<?php if($ongoing_order->order_status == 0 || $ongoing_order->order_status == 1){ ?>
	<div class="row border border-secondary" style="margin: auto;">
	<div class="col-sm" style=" grid-template-rows:2fr 2fr 1fr;">
		<h6 class="text-center mt-2">Mohon Tunggu Konfirmasi Pesanan Anda</h6>
        <p> No. Order: <?= $ongoing_order->receipt_no ?> </p>
        </div>
    <div class="col-4">
			<img style="max-width: 210px; max-height: 110px;" src="<?= base_url('assets/images/waiting.gif') ?>" alt="">
	</div>

		
   
	</div>
	<?php }elseif($ongoing_order->order_status == 0 || $ongoing_order->order_status == 2) { ?>
	<div class="row border border-secondary" style="margin: auto;" >
		<div class="col-sm" style=" grid-template-rows:2fr 2fr 1fr;">
			<h6 class="text-center mt-2">Pesanan sedang dipersiapkan! </h6>
            <p>No. Order: <?= $ongoing_order->receipt_no ?></p>
            
			</div>
            <div class="col-4">   
				<img style="max-width: 210px; max-height: 100px;" src="<?= base_url('assets/images/wait-food.gif') ?>" alt="">
				</div>
	
			<!-- <div class="clear">
				<p></p>
			</div> -->
		
		</div>
	
	
	<?php }elseif($ongoing_order->order_status == 0 || $ongoing_order->order_status == 3) { ?>
	<div class="row border border-secondary" style="margin: auto; ">
	<div class="col-sm" style="grid-template-rows:2fr 2fr 1fr;">
		<h6 class="text-center mt-2">Pesanan dalam perjalanan! Bersiaplah untuk makan. </h6>
		<p>No. Order: <?= $ongoing_order->receipt_no ?></p>
        </div>
		<div class="col-4">
			<img style="max-width: 210px; max-height: 100px;" src="<?= base_url('assets/images/otw.gif') ?>" alt="">
		</div>
		
	
	</div>




	<?php } ?>
	<?php endforeach; ?>
</div>

<?php endif; ?>
<?= $this->session->flashdata('message') ?>
    <div class="container">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr> 
                            <th>No</th>
                            <th>Receipt No</th>
                            <th>Customer Name</th>
                            <th>Total Qty</th>
                            <th>Total Price</th>
                            <th>Payment Method</th>
                            <th>Order Date</th>
                            <th>Order Status</th>
                            <th>Detail</th>
                        </tr>
                    </thead>

                    <tbody>
                    <?php $i=0; foreach($data_order as $data_order): $i++;?>
                    
                    <tr>
                         <td><?= $i; ?></td>
                         <td><?= $data_order->receipt_no; ?></td>
                         <td><?= $data_order->Fname.' '.$data_order->Lname; ?></td>
                         <td><?= $data_order->total_qty; ?></td>
                         <td><?= "Rp. ".number_format($data_order->total_price); ?></td>
                         <td><?php if($data_order->payment_method == 1){echo 'Cash on Delivery';}else{echo "Bank Transfer";}; ?></td>
                         <td><?= date_format(date_create($data_order->order_date),'d M Y || H:i:s')?></td>
                         <!-- <td style="background-color: #008000; color: white;"> -->
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
                         
                         <td>
                             <a class="btn-circle btn-primary"
                                    href="<?= base_url(); ?>/ordertaker/view/<?= $data_order->order_id; ?>"><i class="fas fa-eye "></i></a>
                             
                         </td>
                    </tr>
                    <?php endforeach; ?>
                        
                    </tbody>

                </table>
            </div>
        </div>
    </div>