<div class="gdlr-page-title-wrapper">
	<div class="gdlr-page-title-overlay"></div>
	<div class="gdlr-page-title-container container">
		<h1 class="gdlr-page-title">About Us</h1>
	</div>
</div>
<div class="content-wrapper" >
	<div class="gdlr-content">

		<!-- Above Sidebar Section-->

		<div class="with-sidebar-wrapper">
			<div class="container">
            <div class="with-sidebar-left twelve columns">
					<div class="with-sidebar-content twelve columns">
						<section id="content-section-1">
							<div class="section-container container">
								<div class="blog-item-wrapper">
                                    <h1 style="text-transform:capitalize; margin: 0 0 20px 0;"><?= $company->name; ?></h1>
									
									<div class="flexbox-container" style="display:flex;">
										<!-- Image Div -->
										<div class="column" style="flex: 1;">
											<img onerror="this.src='<?= base_url('assets/images/default.jpg'); ?>'"  class="float-lg-left" 
												style="
													width: calc(100% - 30px);
													max-width:500px;
													border-radius: 5px; 
													float:left;
													margin-right: 30px;
													" src="<?= base_url($company->gallery_image); ?>" alt="<?= $company->name; ?>">
										</div>
										<!-- Description Div -->
										<div class="column" style="flex: 1;">
											<p style="font-size: 20px; font-weight: bold; ">About</p>
											<p style="white-space: pre-line; font-size: 18px; margin-bottom: 35px 0;"><?= $company->about; ?></p>
											
											<p style="font-size: 20px; font-weight: bold; ">Address</p>
											<p style="white-space: pre-line; font-size: 18px; margin-bottom: 20px 0;"><?= $company->address; ?></p>

											<p style="font-size: 20px; font-weight: bold; ">Email</p>
											<a style="white-space: pre-line; font-size: 18px; margin-bottom: 20px 0;" href="<?= 'mailto:'.$company->email; ?>" target="_blank" ><?= $company->email; ?></a>

											<p style="font-size: 20px; font-weight: bold; margin-top: 20px; ">Phone</p>
											<p style="white-space: pre-line; font-size: 18px; margin-bottom: 20px 0;"><?= $company->phone; ?></p>
										</div>

									</div>
									
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

		<!-- Below Sidebar Section-->

	</div>
	<!-- gdlr-content -->
	<div class="clear"></div>
</div>
<!-- content wrapper -->
