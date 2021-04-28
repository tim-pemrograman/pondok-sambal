<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Employee List</h1>
    <a href="<?= base_url('admin'); ?>/user/add" class="btn btn-primary">Add New Users</a>
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
                            <!-- <td>Total Price</td> -->
                            <td>Payment Method</td>
                            <td>Order Date</td>
                            <td>Order Status</td>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                    <?php $i=0; foreach($data_order as $data_order): $i++;?>
                    
                    <tr>
                         <td><?= $i; ?></td>
                         <td><?= $data_order->Fname.' '.$data_order->Lname; ?></td>
                         <td><?= $data_order->total_qty; ?></td>
                         <td><?php if($data_order->payment_method == 1){echo 'Cash on Delivery';}else{echo "Bank Transfer";}; ?></td>
                         <td><?= date_format(date_create($data_order->order_date),'d M Y || H:i:s')?></td>
                         <td><?= $data_order->order_status; ?></td>
                         <td>
                             <!-- <a class="btn-circle btn-primary"
                                href="<?= base_url('admin'); ?>/user/edit/<?= $data_order->employee_id; ?>"><i class="fas fa-edit "></i></a>
                             <a class="btn-circle btn-danger" onclick="return deleteUser(<?= $data_order->employee_id; ?>)" href="javascript:void(0)"><i class="fas fa-trash "></i></a> -->
                         </td>
                    </tr>
                    <?php endforeach; ?>
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