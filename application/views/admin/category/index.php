<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Category</h1>
    <a href="index.php?page=admin/add" class="btn btn-primary">Add New Category</a>
    <br>
    <br>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr> 
                            <th>No</th>
                            <td>Category Name</td>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                       <tr>
                            <td>1</td>
                            <td>Main Course</td>
                            <td>
                                <a class="btn-circle btn-primary"
                                    href="#"><i
                                        class="fas fa-edit "></i></a>
                                <a class="btn-circle btn-danger"
                                    onclick="return confirm('Are You Sure to Delete This Record?')"
                                    href="#"><i
                                        class="fas fa-trash "></i></a>
                            </td>
                       </tr>
                       <tr>
                            <td>1</td>
                            <td>Desserts</td>
                            <td>
                                <a class="btn-circle btn-primary"
                                    href="#"><i
                                        class="fas fa-edit "></i></a>
                                <a class="btn-circle btn-danger"
                                    onclick="return confirm('Are You Sure to Delete This Record?')"
                                    href="#"><i
                                        class="fas fa-trash "></i></a>
                            </td>
                       </tr>
                    </tbody>

                </table>
            </div>
        </div>
    </div>

</div>