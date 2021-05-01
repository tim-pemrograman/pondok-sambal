<div class="gdlr-page-title-wrapper">
	<div class="gdlr-page-title-overlay"></div>
	<div class="gdlr-page-title-container container">
		<h1 class="gdlr-page-title">Our Menu</h1>
	</div>
</div>

<div class="content-wrapper">
	<div class="gdlr-content">
		<!-- Above Sidebar Section-->

		<!-- Sidebar With Content Section-->
		<div class="with-sidebar-wrapper">
			<section id="content-section-1">
				<div class="gdlr-color-wrapper  gdlr-show-all no-skin"
					style="background-color: #ffffff; padding-top: 70px; padding-bottom: 5px; ">
					<div class="container">
						<div class="three columns">
							<div class="gdlr-item gdlr-content-item" style="margin-bottom: 55px;"></div>
							<div class="gdlr-image-frame-item gdlr-item">
								<div class="gdlr-frame frame-type-none">
									<div class="gdlr-image-link-shortcode"><img
											src="<?= base_url('assets/images/menu/bandengmillenium.jpeg')?>" alt=""
											width="250" height="250" /></div>
								</div>
							</div>
						</div>
						<div class="three columns">
							<div class="gdlr-item gdlr-content-item" style="margin-bottom: 55px;"></div>
							<div class="gdlr-image-frame-item gdlr-item">
								<div class="gdlr-frame frame-type-none">
									<div class="gdlr-image-link-shortcode"><img
											src="<?= base_url('assets/images/menu/SATEAYAM.jpeg')?>" alt="" width="250"
											height="250" /></div>
								</div>
							</div>
						</div>
						<div class="six columns">
							<div class="menu-item-wrapper menu-column-1 type-list" style="margin-bottom: 60px;">
								<div class="gdlr-item-title-wrapper gdlr-item  pos-left-divider gdlr-size-small ">
									<div class="gdlr-item-title-head">
										<h3 class="gdlr-item-title gdlr-skin-title gdlr-skin-border">Rekomendasi Kami
										</h3>
										<div class="gdlr-item-title-divider gdlr-right"></div>
										<div class="clear"></div>
									</div>
								</div>
								<div class="menu-item-holder">
									<div class="gdlr-menu-list-wrapper">
										<?php foreach ($featured_menus as $menu): ?>
										<div class="clear"></div>
										<div class="twelve columns">
											<div class="gdlr-menu-item gdlr-list-menu  with-price">
												<div class="gdlr-ux gdlr-list-menu-ux">
													<div class="gdlr-menu-item-content">
														<h3 class="menu-title gdlr-skin-title gdlr-content-font"><a
																href="<?= base_url('loginpage/login')?>"><?= $menu->name; ?></a></h3>
														<div class="menu-info menu-ingredients-caption gdlr-skin-info">
															<?= $menu->description; ?></div>
															<h3>Rp <?= $menu->price; ?></h3>
														
													</div>

													<div class="menu-info menu-price gdlr-title-font gdlr-skin-link">
													<a class="btn-circle btn-primary" href="<?= base_url('loginpage/login')?>"><i
																class="fa fa-shopping-cart ">Order Now!</i></a>
														<div class="gdlr-list-menu-gimmick"></div>
													</div>
												</div>
											</div>
										</div>
										<?php endforeach; ?>
										<div class="clear"></div>
									</div>
									<div class="clear"></div>
								</div>
							</div>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<div class="clear"></div>
			</section>

			<section id="content-section-2">
				<div class="gdlr-parallax-wrapper gdlr-background-image gdlr-show-all gdlr-skin-dark-skin"
					id="gdlr-parallax-wrapper-1" data-bgspeed="0.1"
					style="background-image: url('<?= base_url('assets/images/food.jpg')?>'); padding-top: 170px; padding-bottom: 140px; ">
					<div class="container">
						<div class="gdlr-item gdlr-content-item">
							<h2 style="font-size: 75px; text-align: center;">All Menu</h2>
							<h5 style="text-align: center;">Aneka menu Pondok Sambal</h5>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<div class="clear"></div>
			</section>
			<section id="content-section-3">
				<div class="gdlr-color-wrapper  gdlr-show-all no-skin"
					style="background-color: #ffffff; padding-bottom: 25px; ">
					<div class="container">
						<div class="menu-item-wrapper menu-column-3 type-classic">
							<div class="menu-item-holder">
								<div class="gdlr-grid" data-type="menu" data-layout="fitRows">
									<?php $i=0; foreach($menus as $cat_menu): 
											
											$i++;
										?>
									<div class="four columns">
										<div class="gdlr-item gdlr-menu-item gdlr-classic-menu with-price">
											<div class="gdlr-ux gdlr-classic-menu-ux">
												<div class="gdlr-menu-thumbnail">
													<a href="<?= base_url('loginpage/login')?>">
														<img src="
															<?php 
															if(($cat_menu->product_img) == '') {
																echo(base_url('assets/images/default.jpg'));
															} else  {
																echo(base_url($cat_menu->product_img));
															}
														?>" alt="<?= $cat_menu->name; ?>" width="400" height="300"
															onerror="this.src='<?= base_url('assets/images/default.jpg'); ?>'" />
													</a>
												</div>
												<div class="gdlr-menu-item-content">
													<h3 class="menu-title gdlr-skin-title gdlr-content-font"><a
															href="<?= base_url('loginpage/login')?>"><?= $menu->name; ?></a></h3>
													<div class="menu-info menu-ingredients-caption gdlr-skin-info">
														<?= $menu->description; ?></div>
													<h3>Rp <?= $menu->price; ?></h3>
													<p><a class="add_cart btn-circle btn-primary" href="<?= base_url('loginpage/login')?>" ><i class="fa fa-shopping-cart" style="padding-right: 10px;"></i>Order Now!</a></p>
													
												</div>
											</div>
										</div>
									</div>

									<?php 
											if(($i%3) == 0 && $i <= count($menus) && $i!== 0) {
												echo"<div class='clear'></div>";
											}
										endforeach; ?>
								</div>
								<div class="clear"></div>
							</div>
						</div>
						<div class="clear"></div>
						<div class="clear"></div>
					</div>
				</div>
				<div class="clear"></div>
			</section>
		</div>
		<!-- Below Sidebar Section-->

	</div>
	<!-- gdlr-content -->
	<div class="clear"></div>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('.add_cart').click(function () {
				var id = $(this).data("id");
				var name = $(this).data("name");
				var price = $(this).data("price");
				var quantity = $('#' + id).val();
				$.ajax({
					url: "<?php echo site_url('menupage/add_to_cart');?>",
					method: "POST",
					data: {
						id: id,
						name: name,
						price: price,
						quantity: quantity
					},
					success: function (data) {
						$('#detail_cart').html(data);
					}
				});
			});
			$('#detail_cart').load("<?php echo site_url('menupage/load_cart');?>");
			$(document).on('click', '.remove_cart', function () {
				var menu = $(this).attr("id");
				$.ajax({
					url: "<?php echo site_url('menupage/delete_cart');?>",
					method: "POST",
					data: {
						menu: menu
					},
					success: function (data) {
						$('#detail_cart').html(data);
					}
				});
			});
		});

	</script>

</div>
<!-- content wrapper -->
