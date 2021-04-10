<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Category</h1>
    <a href="<?= base_url('admin'); ?>/category/add" class="btn btn-primary">Add New Category</a>
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
                            <td>Category Name</td>
                            <td>Description</td>
                            <td>Image</td>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $i = 0;
                        foreach ($categories as $category) : $i++ ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $category->name; ?></td>
                                <td><?= $category->description; ?></td>
                                <td>
                                    <?php if ($category->category_img) echo '<img src="' . base_url($category->category_img) . '" alt="' . $category->name . '" width="100">'; ?>
                                </td>
                                <td>
                                    <a class="btn-circle btn-primary" data-toggle="modal" data-target="#editCategory<?= $category->id; ?>"><i class="fas fa-edit "></i></a>
                                    <a class="btn-circle btn-danger" onclick="return deleteCategory(<?= $category->id; ?>)" href="javascript:void(0)"><i class="fas fa-trash "></i></a>
                                </td>
                            </tr>

                            <!--Update Category-->
                            <div class="modal fade" id="editCategory<?= $category->id; ?>" tabindex="-1" role="dialog" aria-labelledby="editcategory" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editcategory">Ubah Kategori</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <?php echo form_open_multipart('admin/category/edit'); ?>
                                        <div class="modal-body">
                                            <!-- Name Form -->
                                            <div class="form-group">
                                                <label for="inputName">Nama</label>
                                                <input type="hidden" name="id_category" id="id_category" value="<?= $category->id; ?>">
                                                <input type="text" class="form-control" id="name" name="name" value="<?= $category->name; ?>">
                                                <?= form_error('name', '<small class="text-danger">', ' </small>') ?>
                                            </div>

                                            <!-- Description Form -->
                                            <div class="form-group">
                                                <label for="inputDescription">Deskripsi</label>
                                                <input class="form-control" type="text" id="description" name="description" value="<?= $category->description; ?>">
                                                <?= form_error('description', '<small class="text-danger">', ' </small>') ?>
                                            </div>

                                            <!-- Image Form -->
                                            <div class="form-group">
                                                <label for="inputImage">Image</label>
                                                <input type="file" class="form-control-file" id="img_path" name="img_path" accept="image/*">
                                                <?= form_error('img_path', '<small class="text-danger">', ' </small>') ?>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Update</button>
                                        </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>

</div>

<script type="text/javascript">
    var url = "<?php echo base_url(); ?>";

    function deleteCategory(id) {
        var x = confirm("Apakah Anda ingin menghapus kategori?");
        if (x == true)
            window.location = url + "admin/category/delete/" + id;
        else
            return false;
    }
</script>