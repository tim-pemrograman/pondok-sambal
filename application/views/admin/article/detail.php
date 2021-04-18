<div class="container-fluid">

    <!-- Page Heading -->
    <a href="<?= base_url('admin'); ?>/article" class="btn btn-primary">Kembali</a>

    <!-- DataTales Example -->
    <div class="card shadow my-4" style="max-width: 1000px;">
        <div class="card-body">
            <h1 class="text-gray-800" style="text-transform: capitalize;"><?= $article->title; ?></h1>
            <p class="text-muted">
                <i class="fas fa-pen mr-2"></i><?= $article->Fname." ".$article->Lname; ?> 
                <time class="ml-2 font-italic"><?= (new DateTime($article->created_at))->format('d M Y H:i')?></time>
            </p>
            <?php if($article->img_path) {?>
            <img class="float-lg-left mr-lg-3"
            style="
                width:100%;
                max-width: 400px; 
                height: 300px; 
                object-fit:cover; 
                border-radius: 5px;" src="<?= base_url($article->img_path); ?>" alt="<?= $article->title; ?>">
            <?php } ?>
            <p class="mt-3 h5" style="white-space: pre-line;"><?= $article->content; ?></p>
        </div>
    </div>

</div>