<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Manage Order</h1>
    <!-- <a href="<?= base_url('admin'); ?>/user/add" class="btn btn-primary">Add New Users</a> -->
    <p>Filter : <?= $status; ?></p>
    <?= $this->session->flashdata('message') ?>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr> 
                            <th>No</th>
                            <th>Receipt No</th>
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
                                    case '5':
                                        echo '5 - Transaksi ditolak';
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
                             <a class="btn-circle btn-danger" onclick="return deleteOrder(<?= $data_order->order_id; ?>)" href="javascript:void(0)"><i class="fas fa-trash "></i></a>
                         </td>
                    </tr>
                    <?php endforeach; ?>
                        <!-- <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle my-3" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Filter
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="<?= base_url('admin'); ?>/order/update_proses/proses/<?= $data_order->order_id; ?>">Sedang Diproses</a>
                                <a class="dropdown-item" href="<?= base_url('admin'); ?>/order/update_proses/jalan/<?= $data_order->order_id; ?>">Sedang di jalan</a>
                                <a class="dropdown-item" href="<?= base_url('admin'); ?>/order/update_proses/selesai/<?= $data_order->order_id; ?>">Transaksi Selesai</a>
                            </div>
                        </div> -->
                        <a href="<?= base_url('admin/order/') ?>" class="btn btn-warning mb-3 btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-filter"></i>
                            </span>
                            <span class="text">Clear Filter</span>
                        </a>

                        <a href="<?= base_url('admin/order/filter/0') ?>" class="btn btn-secondary mb-3 ml-3 btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-clock"></i>
                            </span>
                            <span class="text">Pending Order</span>
                        </a>

                        <a href="<?= base_url('admin/order/filter/2') ?>" class="btn btn-primary mb-3 ml-3 btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-clock"></i>
                            </span>
                            <span class="text">Sedang diproses</span>
                        </a>

                        <a href="<?= base_url('admin/order/filter/3') ?>" class="btn btn-info mb-3 ml-3 btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-car-side"></i>
                            </span>
                            <span class="text">Sedang dijalan</span>
                        </a>

                        <a href="<?= base_url('admin/order/filter/4') ?>" class="btn btn-success mb-3 ml-3 btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-check-square"></i>
                            </span>
                            <span class="text">Transaksi Selesai</span>
                        </a>

                        <a href="<?= base_url('admin/order/filter/5') ?>" class="btn btn-danger mb-3 ml-3 btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-times-circle"></i>
                            </span>
                            <span class="text">Transaksi ditolak</span>
                        </a>
                       

                    </tbody>

                </table>
            </div>
        </div>
    </div>

</div>


<script type="text/javascript">
    var url = "<?php echo base_url(); ?>";

    function deleteOrder(id) {
        var x = confirm("Apakah Anda ingin menghapus Order ini?");
        if (x == true)
            window.location = url + "admin/order/delete/" + id;
        else
            return false;
    }
</script>