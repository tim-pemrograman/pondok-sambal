<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Article</h1>
    <a href="index.php?page=admin/add" class="btn btn-primary">Add New Article</a>
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
                            <td>Article Content</td>
                            <td>Article assets/images</td>
                            <td>Article Views</td>
                            <td>Employee Name</td>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                       <tr>
                            <td>1</td>
                            <td>Mengapa Makanan Nusantara Terasa Sangat Lezat ?</td>
                            <td><img src="https://www.goodnewsfromindonesia.id/assets/uploads/post/large-8-makanan-unik-khas-nusantara-dd01e6847330e5b27d9be8c57847f853.jpg" width="100" alt="img Makanan Nusantara"></td>
                            <td>125 Views</td>
                            <td>Admin Pondok Sambal</td>
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
                            <td>2</td>
                            <td>Apa saja menu favorit RM. Pondok Sambal Menurut Customer ?</td>
                            <td><img src="data:image/jpeg;base64,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" width="100" alt="Logo Pondok Sambal Article"></td>
                            <td>2093 Views</td>
                            <td>Admin Pondok Sambal</td>
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