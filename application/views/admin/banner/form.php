<div class="container-fluid">

    <div class="row">

        <div class="col-12">
            <h1 class="h3 mb-4 text-gray-800">Add Banner</h1>
        </div>
        <div class="col-md-6">
            <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '
          </div>') ?>
            <?= $this->session->flashdata('message') ?>

            <div class="card">
                <div class="card-body">
                    <?php echo form_open_multipart('admin/banner/add'); ?>
                    <!-- Image Form -->
                    <div class="form-group">
                        <label for="inputImage">Image</label>
                        <input type="file" class="form-control-file" id="img_path" name="img_path" accept="image/*">
                        <?= form_error('img_path', '<small class="text-danger">', ' </small>') ?>
                    </div>

                    <!-- Title Form -->
                    <div class="form-group">
                        <label for="inputTitle">Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="ex: Pondok Sambal Enak">
                        <?= form_error('title', '<small class="text-danger">', ' </small>') ?>
                    </div>

                    <!-- Subtitle Form -->
                    <div class="form-group">
                        <label for="inputSubtitle">Subtitle</label>
                        <input class="form-control" type="text" id="subtitle" name="subtitle">
                        <?= form_error('subtitle', '<small class="text-danger">', ' </small>') ?>
                    </div>

                    <!-- Description Form -->
                    <div class="form-group">
                        <label for="inputDesc">Description</label>
                        <input class="form-control" type="text" id="img_alt" name="img_alt">
                        <?= form_error('img_alt', '<small class="text-danger">', ' </small>') ?>
                    </div>

                    <div class="text-right">
                        <a href="<?= base_url('admin/banner'); ?>" class="btn btn-secondary">Back</a>
                        <button type="submit" name="submit" class="btn btn-primary" value="upload">Add Banner</button>
                    </div>
                    </form>
                </div>
            </div>


        </div>

    </div>

</div>