<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Detail Order</h1>

    <p><?php //var_dump($data_order); exit; ?></p>
    <?= $this->session->flashdata('message') ?>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr> 
                            <th>No</th>
                            <td>Menu Name</td>
                            <td>Item Qty</td>
                            <td>Note</td>
                            <td>Price per Item</td>
                            <td>Sub Total</td>
                        </tr>
                    </thead>

                    <tbody>
                    <?php $total = 0;    ?>
                    <?php $i=0; foreach($data_order as $data_order): $i++;?>
                    
                    <tr>
                         <td><?= $i; ?></td>
                         <td><?= $data_order->name ?></td>
                         <td><?= $data_order->item_qty; ?></td>
                         <td><?php if($data_order->notes == ''){ echo '-'; } else{ echo $data_order->notes; } ; ?></td>
                         <td><?= "Rp. ".number_format($data_order->price_per_item); ?></td>
                         <td><?= "Rp. ".number_format($data_order->price_per_item * $data_order->item_qty); ?></td>
                         <?php $total += $data_order->price_per_item * $data_order->item_qty ?>
                    </tr>
                    <?php endforeach; ?>
                            <p style="font-weight: bold">No Order : </p>
                            <p style="text-decoration: underline;"><?= $data_order->receipt_no; ?></p>
                            
                            <p style="font-weight: bold">Order Date: </p>
                            <p style="text-decoration: underline;"><?= date_format(date_create($data_order->order_date),'D, d M Y || h:i:s a'); ?></p>

                            <p style="font-weight: bold">Bukti Pembayaran : </p>
                            <img src="<?= base_url($data_order->img_path); ?>" width="100" style="margin-bottom: 20px" alt="img bukti">
                            
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
                                        }; 
                                    ?>
                                </p>
                            </div>
                            
                            <div class="dropdown">
                                <button <?php if($data_order->order_status == 4){ echo "hidden"; }; ?> class="btn btn-primary dropdown-toggle my-3" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Update Order Status
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href=".base_url('admin/order/update_proses/proses/');.$data_order->order_id;.">Sedang Diproses</a>
                                    <a class="dropdown-item" href=".base_url('admin/order/update_proses/jalan/');.$data_order->order_id;.">Sedang di jalan</a>
                                    <a class="dropdown-item" href=".base_url('admin/order/update_proses/selesai/');.$data_order->order_id;.">Transaksi Selesai</a>
                                </div>
                            </div>
                            
                    </tbody>
                    <?php $tax = $total*10/100; ?>
                    <tfoot>
                        <tr>
                            <td colspan="4"></td>
                            <td><b>Total</b></td>
                            <td><b><?php echo "Rp. ".number_format($total); ?></b></td>
                        </tr>
                        <tr>
                            <td colspan="4"></td>
                            <td><b>Tax(10% ppn) </b></td>
                            <td><b><?php echo "Rp. ".number_format($tax); ?></b></td>
                        </tr>
                        <tr>
                            <td colspan="4"></td>
                            <td><b>Grand Total</b></td>
                            <td><b><?php echo "Rp. ".number_format($total + $tax); ?></b></td>
                        </tr>
                    </tfoot>

                </table>
                <?php if($data_order->order_status == 4){
                   echo "<a type='button' target='_blank' class='btn btn-primary' href=".base_url('admin/receipt/print/').$data_order->order_id." >Print Receipt <i class='fas fa-fw fa-print'></i></a>";
                }?>
            </div>
        </div>
    </div>

</div>

<script type="text/javascript">
    
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });

    var url = "<?php echo base_url(); ?>";

    function deleteUser(id) {
        var x = confirm("Apakah Anda ingin menghapus User ini?");
        if (x == true)
            window.location = url + "admin/user/delete/" + id;
        else
            return false;
    }
</script>