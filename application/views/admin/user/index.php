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
                            <td>First Name</td>
                            <td>Last Name</td>
                            <td>Email</td>
                            <td>Phone</td>
                            <td>Address</td>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                    <?php $i=0; foreach($data_users as $data_users): $i++;?>
                    
                    <tr>
                         <td><?= $i; ?></td>
                         <td><?= $data_users->Fname; ?></td>
                         <td><?= $data_users->Lname; ?></td>
                         <td><?= $data_users->email; ?></td>
                         <td><?= $data_users->phone; ?></td>
                         <td><?= $data_users->address; ?></td>
                         <td>
                             <a class="btn-circle btn-primary"
                                href="<?= base_url('admin'); ?>/user/edit/<?= $data_users->employee_id; ?>"><i class="fas fa-edit "></i></a>
                             <a class="btn-circle btn-danger" onclick="return deleteUser(<?= $data_users->employee_id; ?>)" href="javascript:void(0)"><i class="fas fa-trash "></i></a>
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