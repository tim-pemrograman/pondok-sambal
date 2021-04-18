<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Menu</h1>
    <a href="<?= base_url('admin'); ?>/menu/add" class="btn btn-primary">Add New Menu</a>
    <br>
    <br>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <td>Menu Name</td>
                            <td>Description</td>
                            <td>Image</td>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $i = 0;
                        foreach ($menus as $menu) : $i++ ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $menu->name; ?></td>
                                <td><?= $menu->description; ?></td>
                                <td>
                                    <?php if ($menu->product_img) echo '<img src="' . base_url($menu->product_img) . '" alt="' . $menu->name . '" width="100">'; ?>
                                </td>
                                <td>
                                    <a class="btn-circle btn-primary" href="<?= base_url('admin'); ?>/menu/edit/<?= $menu->id; ?>"><i class="fas fa-edit "></i></a>
                                    <a class="btn-circle btn-danger" onclick="return deleteMenu(<?= $menu->id; ?>)" href="javascript:void(0)"><i class="fas fa-trash "></i></a>
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

    function deleteMenu(id) {
        var x = confirm("Apakah Anda ingin menghapus kategori?");
        if (x == true)
            window.location = url + "admin/menu/delete/" + id;
        else
            return false;
    }
</script>