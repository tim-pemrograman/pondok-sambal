<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Homepage Banner</h1>
    <a href="<?= base_url('admin'); ?>/banner/add" class="btn btn-primary">Add New Banner</a>
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
                            <td>Title</td>
                            <td>Subtitle</td>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $i = 0;
                        foreach ($banners as $banner) : $i++ ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><img src="<?= base_url($banner->img_path); ?>" width="100" alt="img Makanan Nusantara"></td>
                                <td><?= $banner->img_alt; ?></td>
                                <td><?= $banner->title; ?></td>
                                <td><?= $banner->subtitle; ?></td>
                                <td>
                                    <a class="btn-circle btn-primary" data-toggle="modal" data-target="#editBanner<?= $banner->id; ?>"><i class="fas fa-edit "></i></a>
                                    <a class="btn-circle btn-danger" onclick="return deleteBanner(<?= $banner->id; ?>)" href="javascript:void(0)"><i class="fas fa-trash "></i></a>
                                </td>
                            </tr>



                            <!--Update Banner-->
                            <div class="modal fade" id="editBanner<?= $banner->id; ?>" tabindex="-1" role="dialog" aria-labelledby="editBanner" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editBanner">Edit Banner</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="<?= base_url('admin/banner/edit') ?>" method="post">
                                            <div class="modal-body">
                                                <!-- Title Form -->
                                                <div class="form-group">
                                                    <label for="inputTitle">Title</label>
                                                    <input type="hidden" name="id_banner" id="id_banner" value="<?= $banner->id; ?>">
                                                    <input type="text" class="form-control" id="title" name="title" value="<?= $banner->title; ?>">
                                                    <?= form_error('title', '<small class="text-danger">', ' </small>') ?>
                                                </div>

                                                <!-- Subtitle Form -->
                                                <div class="form-group">
                                                    <label for="inputSubtitle">Subtitle</label>
                                                    <input class="form-control" type="text" id="subtitle" name="subtitle" value="<?= $banner->subtitle; ?>">
                                                    <?= form_error('subtitle', '<small class="text-danger">', ' </small>') ?>
                                                </div>

                                                <!-- Description Form -->
                                                <div class="form-group">
                                                    <label for="inputDesc">Description</label>
                                                    <input class="form-control" type="text" id="img_alt" name="img_alt" value="<?= $banner->img_alt; ?>">
                                                    <?= form_error('img_alt', '<small class="text-danger">', ' </small>') ?>
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

    function deleteBanner(id) {
        var x = confirm("Apakah Anda ingin menghapus banner?");
        if (x == true)
            window.location = url + "admin/banner/delete/" + id;
        else
            return false;
    }
</script>