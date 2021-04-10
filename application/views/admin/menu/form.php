<div class="container-fluid">

    <div class="row">

        <div class="col-12">
            <h1 class="h3 mb-4 text-gray-800"><?= $header; ?> Menu</h1>
        </div>
        <div class="col-md-6">
            <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '
          </div>') ?>
            <?= $this->session->flashdata('message') ?>

            <div class="card">
                <div class="card-body">
                    <?php
                    $id = '';
                    if ($action == "edit") {
                        $id = '/' . $menu->id;
                    }
                    echo form_open_multipart('admin/menu/' . $action . $id); ?>

                    <!-- Name Form -->
                    <div class="form-group">
                        <label for="inputName">Nama</label>
                        <?php if ($action == "edit") echo '<input type="text" class="form-control" id="id_menu" name="id_menu" hidden value="' . $menu->id . '">';  ?>
                        <input type="text" class="form-control" id="name" name="name" placeholder="ex: Pondok Sambal Enak" value="<?php if ($action == "edit") echo $menu->name; ?>">
                        <?= form_error('name', '<small class="text-danger">', ' </small>') ?>
                    </div>

                    <!-- Category Form -->
                    <div class="form-group">
                        <label for="inputCategory">Kategori</label>
                        <select class="select-category custom-select" name="category_id">
                            <option <?php ($action == "edit") ? '' : 'selected'; ?> disabled>Pilih Kategori</option>
                            <?php foreach ($categories as $category) : ?>
                                <option value="<?= $category->id; ?>" <?php ($action == "edit" && ($menu->category_id) == ($category->id)) ? 'selected' : ''; ?>><?= $category->name; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <?= form_error('category_id', '<small class="text-danger">', ' </small>') ?>
                    </div>

                    <!-- Description Form -->
                    <div class="form-group">
                        <label for="inputDescription">Deskripsi</label>
                        <textarea class="form-control" type="text" id="description" name="description" rows="3"><?php if ($action == "edit") echo $menu->description; ?></textarea>
                        <?= form_error('description', '<small class="text-danger">', ' </small>') ?>
                    </div>

                    <!-- Price Form -->
                    <div class="form-group">
                        <label for="inputPrice">Harga</label>
                        <input class="form-control" type="text" id="price" name="price" value="<?php if ($action == "edit") echo $menu->price; ?>">
                        <?= form_error('price', '<small class="text-danger">', ' </small>') ?>
                    </div>

                    <!-- Image Form -->
                    <div class="form-group">
                        <label for="inputImage">Image</label>
                        <input type="file" class="form-control-file" id="img_path" name="img_path" accept="image/*">
                        <?= form_error('img_path', '<small class="text-danger">', ' </small>') ?>
                    </div>

                    <div class="text-right">
                        <a href="<?= base_url('admin/menu'); ?>" class="btn btn-secondary">Kembali</a>
                        <button type="submit" name="submit" class="btn btn-primary" value="upload"><?= $header; ?> Menu</button>
                    </div>
                    </form>
                </div>
            </div>


        </div>

    </div>

</div>