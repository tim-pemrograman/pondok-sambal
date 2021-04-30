<div class="gdlr-page-title-wrapper">
	<div class="gdlr-page-title-overlay"></div>
	<div class="gdlr-page-title-container container">
		<h1 class="gdlr-page-title">Beberapa Foto Kami</h1>
	</div>
</div>
<div class="content-wrapper">
	<div class="gdlr-content">

		<!-- Above Sidebar Section-->

		<!-- Sidebar With Content Section-->
		<div class="with-sidebar-wrapper">
			<section id="content-section-1">
				<div class="section-container container">
					<div class="gdlr-gallery-item gdlr-item" style="margin-bottom: 35px;">

						<?php
						foreach ($galleries as $gallery) :
						?>
							<div class="gallery-column four columns">
								<div class="gallery-item">
									<a href="<?= base_url($gallery->img_path) ?>" data-fancybox-group="gdlr-gal-1" data-rel="fancybox"><img onerror="this.src='<?= base_url('assets/images/default.jpg'); ?>'" src="<?= base_url($gallery->img_path) ?>" alt="" width="700" height="400" /></a>
								</div>
							</div>
						<?php endforeach; ?>
						<div class="clear"></div>
					</div>
					<div class="clear"></div>
				</div>
			</section>
		</div>

		<!-- Below Sidebar Section-->

	</div>
	<!-- gdlr-content -->
	<div class="clear"></div>
</div>
<!-- content wrapper -->