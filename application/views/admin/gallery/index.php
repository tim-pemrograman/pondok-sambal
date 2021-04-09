<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Gallery Images</h1>
    <a href="<?= base_url('admin'); ?>/gallery/add" class="btn btn-primary">Add Gallery Image</a>
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
                            <td>Image</td>
                            <td>Alt</td>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $i = 0;
                        foreach ($galleries as $gallery) : $i++ ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td data-toggle="modal" data-target="#gallery<?= $gallery->id; ?>"><img src="<?= base_url($gallery->img_path); ?>" width="200" height="100" style="object-fit: cover;" alt="<?= $gallery->img_alt; ?>"></td>
                                <td><?= $gallery->img_alt; ?></td>
                                <td>
                                    <a class="btn-circle btn-primary" data-toggle="modal" data-target="#editgallery<?= $gallery->id; ?>"><i class="fas fa-edit "></i></a>
                                    <a class="btn-circle btn-danger" onclick="return deletegallery(<?= $gallery->id; ?>)" href="javascript:void(0)"><i class="fas fa-trash "></i></a>
                                </td>
                            </tr>



                            <!--Update gallery-->
                            <div class="modal fade" id="editgallery<?= $gallery->id; ?>" tabindex="-1" role="dialog" aria-labelledby="editgallery" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editgallery">Edit Gallery Description</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="<?= base_url('admin/gallery/edit') ?>" method="post">
                                            <div class="modal-body">
                                                <!-- Description Form -->
                                                <input type="hidden" name="id_gallery" id="id_gallery" value="<?= $gallery->id; ?>">
                                                <div class="form-group">
                                                    <label for="inputDesc">Description</label>
                                                    <input class="form-control" type="text" id="img_alt" name="img_alt" value="<?= $gallery->img_alt; ?>">
                                                    <?= form_error('img_alt', '<small class="text-danger pl-3">', ' </small>') ?>
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

                            <!-- Modal Image -->
                            <div class="modal fade" id="gallery<?= $gallery->id; ?>" tabindex="-1" role="dialog" aria-labelledby="editgallery" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content" style="background: transparent; border:none;">
                                        <button style="color: white;" type="button" class="close text-right" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <img class="img-fluid" src="<?= base_url($gallery->img_path); ?>" alt="<?= $gallery->img_alt; ?>">
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

    function deletegallery(id) {
        var x = confirm("Apakah Anda ingin menghapus gallery?");
        if (x == true)
            window.location = url + "admin/gallery/delete/" + id;
        else
            return false;
    }
</script>