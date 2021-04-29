<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Manage Order</h1>
    <!-- <a href="<?= base_url('admin'); ?>/user/add" class="btn btn-primary">Add New Users</a> -->
    <br>
    <br>
    <?= $this->session->flashdata('message') ?>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
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
            </div>
        </div>
    </div>

</div>


<script type="text/javascript">
    var url = "<?php echo base_url(); ?>";

    function deleteUser(id) {
        var x = confirm("Apakah Anda ingin menghapus User ini?");
        if (x == true)
            window.location = url + "admin/user/delete/" + id;
        else
            return false;
    }
</script>