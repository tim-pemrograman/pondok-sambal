<div class="container-fluid">

    <div class="row">

        <div class="col-12">
            <h1 class="h3 mb-4 text-gray-800">Tambah Kategori</h1>
        </div>
        <div class="col-md-6">
            <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '
          </div>') ?>
            <?= $this->session->flashdata('message') ?>

            <div class="card">
                <div class="card-body">
                    <?php echo form_open_multipart('admin/category/add'); ?>

                    <!-- Name Form -->
                    <div class="form-group">
                        <label for="inputName">Nama</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="ex: Pondok Sambal Enak">
                        <?= form_error('name', '<small class="text-danger">', ' </small>') ?>
                    </div>

                    <!-- Description Form -->
                    <div class="form-group">
                        <label for="inputDescription">Deskripsi</label>
                        <input class="form-control" type="text" id="description" name="description">
                        <?= form_error('description', '<small class="text-danger">', ' </small>') ?>
                    </div>

                    <!-- Image Form -->
                    <div class="form-group">
                        <label for="inputImage">Image</label>
                        <input type="file" class="form-control-file" id="img_path" name="img_path" accept="image/*">
                        <?= form_error('img_path', '<small class="text-danger">', ' </small>') ?>
                    </div>

                    <div class="text-right">
                        <a href="<?= base_url('admin/category'); ?>" class="btn btn-secondary">Kembali</a>
                        <button type="submit" name="submit" class="btn btn-primary" value="upload">Tambah Kategori</button>
                    </div>
                    </form>
                </div>
            </div>


        </div>

    </div>

</div>