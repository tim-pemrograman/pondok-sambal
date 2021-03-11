<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Message</h1>
    <!-- <a href="index.php?page=admin/add" class="btn btn-primary">Add New Message</a> -->
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
                            <td>Semder Email</td>
                            <td>Message Subject</td>
                            <td>Message Body</td>
                            <td>Reveiced Date</td>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                       <tr>
                            <td>1</td>
                            <td>steven@gmail.com</td>
                            <td>Saran untuk Pondok Sambal</td>
                            <td>Saran untuk pondok sambal , mungkin sambal nya bisa di banyakin lain kali</td>
                            <td>20 Mar 2021</td>
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
                            <td>Jose@gmail.com</td>
                            <td>Review Makanan</td>
                            <td>Setelah saya mencoba makanan di pondok sambal , saya merasakan kelezatan yang tiada tara dari sambal yang dibuat oleh pondok sambal</td>
                            <td>18 June 2022</td>
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