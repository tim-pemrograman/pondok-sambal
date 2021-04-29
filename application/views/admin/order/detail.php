<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Detail Order</h1>
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
                            <!-- <td>Menu Name</td> -->
                            <td>Item Qty</td>
                            <td>Price per Item</td>
                            <td>Sub Total</td>
                            <td>Note</td>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                    <?php $i=0; foreach($data_order as $data_order): $i++;?>
                    
                    <tr>
                         <td><?= $i; ?></td>
                         <!-- <td><?= $data_order->Fname.' '.$data_order->Lname; ?></td> -->
                         <td><?= $data_order->item_qty; ?></td>
                         <td><?= $data_order->price_per_item; ?></td>
                         <td><?= $data_order->price_per_item * $data_order->item_qty; ?></td>
                         <td><?php if($data_order->notes == ''){ echo '-'; } else{ echo $data_order->notes; } ; ?></td>
                         <td>
                             <a class="btn-circle btn-primary"
                                    href="<?= base_url('admin'); ?>/order/view/<?= $data_order->order_id; ?>"><i class="fas fa-eye "></i></a>
                             <!-- <a class="btn-circle btn-primary"
                                href="<?= base_url('admin'); ?>/user/edit/<?= $data_order->employee_id; ?>"><i class="fas fa-edit "></i></a> -->
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