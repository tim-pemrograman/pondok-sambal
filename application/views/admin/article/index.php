<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Article</h1>
    <a href="<?= base_url('admin'); ?>/article/add" class="btn btn-primary">Add New Article</a>
    <br>
    <br>
    <?= $this->session->flashdata('message') ?>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr> 
                            <th>No</th>
                            <td>Article Title</td>
                            <td>Article Views</td>
                            <td>Employee Name</td>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                    <?php $i=0; foreach ($articles as $article): $i++;?>
                    
                       <tr>
                            <td><?= $i; ?></td>
                            <td style="text-transform: capitalize;"><?= $article->title; ?></td>
                            <td><i class="fas fa-eye mr-2"></i> <?= $article->views; ?></td>
                            <td><?= ($article->Fname ." ". $article->Lname); ?></td>
                            <td>
                                <a class="btn-circle btn-primary"
                                    href="<?= base_url('admin'); ?>/article/edit/<?= $article->article_id; ?>"><i class="fas fa-edit "></i></a>
                                <a class="btn-circle btn-primary"
                                    href="<?= base_url('admin'); ?>/article/view/<?= $article->article_id; ?>"><i class="fas fa-eye "></i></a>
                                <a class="btn-circle btn-danger" onclick="return deleteArticle(<?= $article->article_id; ?>)" href="javascript:void(0)"><i class="fas fa-trash "></i></a>
                            </td>
                       </tr>
                       <?php endforeach; ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>

</div>


<script type="text/javascript">
    var url = "<?php echo base_url(); ?>";

    function deleteArticle(id) {
        var x = confirm("Apakah Anda ingin menghapus kategori?");
        if (x == true)
            window.location = url + "admin/article/delete/" + id;
        else
            return false;
    }
</script>