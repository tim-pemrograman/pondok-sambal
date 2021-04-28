<div class="gdlr-page-title-wrapper">
	<div class="gdlr-page-title-overlay"></div>
	<div class="gdlr-page-title-container container">
		
	</div>
</div>
<div class="content-wrapper" style="margin-bottom: 50px;">
	<div class="gdlr-content">

		<!-- Above Sidebar Section-->

		<!-- Sidebar With Content Section-->
		<div class="with-sidebar-wrapper">
			<div class="container">
            <div class="with-sidebar-left twelve columns">
					<div class="with-sidebar-content twelve columns">
						<section id="content-section-1">
							<div class="section-container container">
								<div class="blog-item-wrapper">
                                    <h1 style="text-transform:capitalize; margin:0;"><?= $article->title; ?></h1>
                                    <p>Diunggah pada <?= (new DateTime($article->created_at))->format('d M Y H:i')?> oleh <?= $article->Fname." ".$article->Lname; ?> </p>
                                    <div>
                                        <img class="float-lg-left" 
                                            style="
                                                width: calc(100% - 30px);
                                                max-width:500px;
                                                border-radius: 5px; 
                                                float:left;
                                                margin-right: 30px;
                                                " src="<?= base_url($article->img_path); ?>" alt="<?= $article->title; ?>">
                                    </div>
                                    <p style="white-space: pre-line; font-size: 18px; margin: 30px 0;"><?= $article->content; ?></p>
								</div>
								<div class="clear"></div>
							</div>
						</section>
					</div>

					<!-- <div class="clear"></div> -->
				</div>

			</div>
		</div>

		<!-- Below Sidebar Section-->

	</div>
	<!-- gdlr-content -->
	<div class="clear"></div>
</div>

<!-- content wrapper -->
