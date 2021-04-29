<div class="container-fluid">

    <div class="row">

        <div class="col-12">
            <h1 class="h3 mb-4 text-gray-800"><?= $header; ?> Users</h1>
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
                            $id = '/' . $data_user->employee_id;
                        }
                    echo form_open('admin/user/' . $action . $id); ?>

                    <!-- FName Form -->
                    <div class="form-group">
                        <label for="inputFName">First Name</label>
                        <?php if ($action == "edit") echo '<input type="text" class="form-control" id="id_employee" name="id_employee" hidden value="' . $data_user->employee_id . '">';  ?>
                        <input type="text" class="form-control" id="fname" name="fname" value="<?php if ($action == "edit") echo $data_user->Fname; ?>" placeholder="ex: John">
                        <?= form_error('fname', '<small class="text-danger">', ' </small>') ?>
                    </div>
                    
                    <!-- LName Form -->
                    <div class="form-group">
                        <label for="inputLName">Last Name</label>
                        <input type="text" class="form-control" id="lname" name="lname" value="<?php if ($action == "edit") echo $data_user->Lname; ?>" placeholder="ex: Waterson">
                        <?= form_error('lname', '<small class="text-danger">', ' </small>') ?>
                    </div>
                    
                    <!-- Email Form -->
                    <div class="form-group">
                        <label for="inputEmail">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?php if ($action == "edit") echo $data_user->email; ?>" placeholder="ex: John@gmail.com">
                        <?= form_error('name', '<small class="text-danger">', ' </small>') ?>
                    </div>
                    
                    <!-- Password Form -->
                    <div class="form-group">
                        <label for="inputPassword">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        <?= form_error('password', '<small class="text-danger">', ' </small>') ?>
                    </div>

                     <!-- Confirm Password Form -->
                     <div class="form-group">
                        <label for="inputConfPassword">Confirm Password</label>
                        <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" placeholder="Confirm Password">
                        <?= form_error('confirmpassword', '<small class="text-danger">', ' </small>') ?>
                    </div>
                    
                     <!-- Confirm Password Form -->
                     <div class="form-group">
                        <label for="inputPhone">Phone</label>
                        <input type="number" class="form-control" id="phone" name="phone" value="<?php if ($action == "edit") echo $data_user->phone; ?>" placeholder="ex: 081255609088">
                        <?= form_error('phone', '<small class="text-danger">', ' </small>') ?>
                    </div>
                     
                     <!-- Confirm Password Form -->
                     <div class="form-group">
                        <label for="inputAddress">Address</label>
                        <input type="text" class="form-control" id="address" name="address" value="<?php if ($action == "edit") echo $data_user->address; ?>" placeholder="ex: Batam Center, Batam, Indonesia">
                        <?= form_error('address', '<small class="text-danger">', ' </small>') ?>
                    </div>


                   

                    <div class="text-right">
                        <a href="<?= base_url('admin/user'); ?>" class="btn btn-secondary">Kembali</a>
                        <button type="submit" name="submit" class="btn btn-primary" value="upload"><?= $header; ?> Users</button>
                    </div>
                    </form>
                </div>
            </div>


        </div>

    </div>

</div>