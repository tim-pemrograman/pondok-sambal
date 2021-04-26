<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Message List</h1>
    <!-- <a href="index.php?page=admin/add" class="btn btn-primary">Add New Message</a> -->
    <br>
    <br>
    <?= $this->session->flashdata('message') ?>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr> 
                            <th>No</th>
                            <td>Sender Email</td>
                            <td>Phone</td>
                            <td>Review</td>
                            <td>Rasa</td>
                            <td>Sambal</td>
                            <td>Keramaian</td>
                            <td>Kenyamanan</td>
                            <td>Pelayanan</td>
                            <td>Reveiced Date</td>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                    <?php $i=0; foreach($data_message as $data_message): $i++; $a=1; $b=1; $c=1; $d=1; $e=1; ?>
                    
                    <tr>
                         <td><?= $i; ?></td>
                         <td><?= $data_message->email; ?></td>
                         <td><?= $data_message->phone; ?></td>
                         <td><?= $data_message->review; ?></td>
                         <td><?php while($a <= $data_message->r_rasa){ echo '<icon class="fas fa-star" style="color: #FFD700"></icon>'; $a++; }; echo ' ['.$data_message->r_rasa.']'?></td>
                         <td><?php while($b <= $data_message->r_sambal){ echo '<icon class="fas fa-star" style="color: #FFD700"></icon>'; $b++; }; echo ' ['.$data_message->r_sambal.']'?></td>
                         <td><?php while($c <= $data_message->r_keramaian){ echo '<icon class="fas fa-star" style="color: #FFD700"></icon>'; $c++; }; echo ' ['.$data_message->r_keramaian.']'?></td>
                         <td><?php while($d <= $data_message->r_kenyamanan){ echo '<icon class="fas fa-star" style="color: #FFD700"></icon>'; $d++; }; echo ' ['.$data_message->r_kenyamanan.']'?></td>
                         <td><?php while($e <= $data_message->r_pelayanan){ echo '<icon class="fas fa-star" style="color: #FFD700"></icon>'; $e++; }; echo ' ['.$data_message->r_pelayanan.']'?></td>
                         <td><?= date_format(date_create($data_message->date_submitted),'d M Y | H:i:s'); ?></td>
                         <td>
                             <a class="btn-circle btn-danger" onclick="return deleteMessage(<?= $data_message->message_id; ?>)" href="javascript:void(0)"><i class="fas fa-trash "></i></a>
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

    function deleteMessage(id) {
        var x = confirm("Apakah Anda ingin menghapus Message ini?");
        if (x == true)
            window.location = url + "admin/message/delete/" + id;
        else
            return false;
    }
</script>