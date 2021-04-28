<div class="container-fluid">
    <div class="col-6">
        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Manage SEO</h1>
        <?= $this->session->flashdata('message') ?>

            <?php
                $id = '/' . $data_seo->seo_id;
            echo form_open('admin/seo/edit'. $id); ?>    


        <!-- <form method="POST" action="" enctype="multipart/form-data"> -->

            <div class="form-group">
                <label>Meta Keyword</label>
                <br>
                <?php if ($action == "edit") echo '<input type="text" class="form-control" id="id_seo" name="id_seo" hidden value="' . $data_seo->seo_id . '">';  ?>
                <textarea name="meta_key" id="" cols="90" rows="5"><?= $data_seo->meta_keyword; ?></textarea>
                <?= form_error('meta_key', '<small class="text-danger">', ' </small>') ?>
            </div>

            <div class="form-group">
                <label>Meta Description</label>
                <br>
                <textarea name="meta_desc" id="" cols="90" rows="5"><?= $data_seo->meta_description; ?></textarea>
                <?= form_error('meta_desc', '<small class="text-danger">', ' </small>') ?>
            </div>
        
            <button type="submit" name="addAdmin" class="btn btn-primary">Update</button>
        <!-- </form> -->
    </div>
</div>
