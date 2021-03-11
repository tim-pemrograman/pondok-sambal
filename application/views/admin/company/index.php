<div class="container-fluid">
    <div class="col-6">
        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Company Profile</h1>
        <form method="POST" action="#" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleInputEmail1">Company Name</label>
                <input type="name" class="form-control" name="name" required placeholder="Company Name" value="RM. Pondok Sambal">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">About</label>
                <br>
                <textarea name="about" id="" cols="90" rows="10"></textarea>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Company Email</label>
                <input type="name" class="form-control" name="email" required placeholder="Company Email" value="info@pondoksambal.com">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Company Address</label>
                <input type="name" class="form-control" name="email" required placeholder="Company Address" value="JL. bla bla bala">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Company Phone</label>
                <input type="name" class="form-control" name="email" required placeholder="Company Phone" value="08781238123283">
            </div>

            <div class="form-group">
                <label>Gallery Image</label>
                <input type="file" class="form-control-file" name="gallery_img" required id="gallery_img">
            </div>

            <div class="form-group">
                <label>Banner Image</label>
                <input type="file" class="form-control-file" name="banner_img" required id="banner_img">
            </div>
        
            <button type="submit" name="addAdmin" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
