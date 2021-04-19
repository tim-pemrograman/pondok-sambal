<div class="container-fluid">

    <div class="row">

        <div class="col-12">
            <h1 class="h3 mb-4 text-gray-800"><?= $header; ?> Artikel</h1>
        </div>
        <div class="col-md-6">
            <?= form_error('article', '<div class="alert alert-danger" role="alert">', '
          </div>') ?>
            <?= $this->session->flashdata('message') ?>

            <div class="card">
                <div class="card-body">
                    <?php
                    $id = '';
                    if ($action == "edit") {
                        $id = '/' . $article->article_id;
                    }
                    echo form_open_multipart('admin/article/' . $action . $id); ?>

                    <!-- Title Form -->
                    <div class="form-group">
                        <label for="inputTitle">Judul</label>
                        <?php if ($action == "edit") echo '<input type="text" class="form-control" id="id_article" name="id_article" hidden value="' . $article->article_id . '">';  ?>
                        <input type="text" class="form-control" id="title" name="title" value="<?php if ($action == "edit") echo $article->title; ?>">
                        <?= form_error('article', '<small class="text-danger">', ' </small>') ?>
                    </div>

                    <!-- Content Form -->
                    <div class="form-group">
                        <label for="inputContent">Isi Artikel</label>
                        <textarea class="form-control" type="text" id="content" name="content" rows="10"><?php if ($action == "edit") echo $article->content; ?></textarea>
                        <?= form_error('content', '<small class="text-danger">', ' </small>') ?>
                    </div>

                    <!-- Image Form -->
                    <div class="form-group">
                        <label for="inputImage">Image</label>
                        <input type="file" class="form-control-file" id="img_path" name="img_path" accept="image/*">
                        <?= form_error('img_path', '<small class="text-danger">', ' </small>') ?>
                    </div>

                    <div class="text-right">
                        <a href="<?= base_url('admin/article'); ?>" class="btn btn-secondary">Kembali</a>
                        <button type="submit" name="submit" class="btn btn-primary" value="upload"><?= $header; ?> Artikel</button>
                    </div>
                    </form>
                </div>
            </div>


        </div>

    </div>

</div>
