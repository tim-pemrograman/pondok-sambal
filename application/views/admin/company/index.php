<div class="container-fluid">
    <div class="col-6">
        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Company Profile</h1>
        <br>
        <br>
        <?= $this->session->flashdata('message') ?>

            <?php
                $id = '/' . $data_company->company_id;
            echo form_open_multipart('admin/company/edit'. $id); ?>


        <!-- <form method="POST" action="" enctype="multipart/form-data"> -->
            <div class="form-group">
                <label for="exampleInputEmail1">Company Name</label>
                <input type="name" class="form-control" name="name" required placeholder="Company Name" value="<?= $data_company->name; ?>">
                <?= form_error('name', '<small class="text-danger">', ' </small>') ?>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">About</label>
                <br>
                <textarea name="about" id="" cols="90" rows="10"><?= $data_company->about; ?></textarea>
                <?= form_error('about', '<small class="text-danger">', ' </small>') ?>

            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Company Email</label>
                <input type="email" class="form-control" name="email" required placeholder="Company Email" value="<?= $data_company->email; ?>">
                <?= form_error('email', '<small class="text-danger">', ' </small>') ?>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Company Address</label>
                <input type="name" class="form-control" name="address" required placeholder="Company Address" value="<?= $data_company->address; ?>">
                <?= form_error('address', '<small class="text-danger">', ' </small>') ?>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Company Phone</label>
                <input type="number" class="form-control" name="phone" required placeholder="Company Phone" value="<?= $data_company->phone; ?>">
                <?= form_error('phone', '<small class="text-danger">', ' </small>') ?>
            </div>

            <div class="form-group">
                <label>Gallery Image</label>
                <input type="file" class="form-control-file" name="gallery_img" id="gallery_img">
                <?= form_error('gallery_img', '<small class="text-danger">', ' </small>') ?>
            </div>

            <div class="form-group">
                <label>Banner Image</label>
                <input type="file" class="form-control-file" name="banner_img" id="banner_img">
                <?= form_error('banner_img', '<small class="text-danger">', ' </small>') ?>
            </div>
        
            <button type="submit" name="addAdmin" class="btn btn-primary">Update</button>
        <!-- </form> -->
    </div>
</div>
