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
																><?= $menu->name; ?></a></h3>
														<div class="menu-info menu-ingredients-caption gdlr-skin-info">
															<?= $menu->description; ?></div>
														<h3>Rp <?= $menu->price; ?></h3>

													</div>

													
													<div class="input-group" style="width: 30%; float:right;" >
													<button class="add_cart btn  btn-block">
														<?= form_open('cart/add_cart_item'); ?>
            														<fieldset>
																	
                													<?= form_input('quantity','1' ); ?>
                													<?= form_hidden('id', $menu->id); ?>
														</div>
														<br>
														
                													<?= form_submit('add', 'Add to Cart!'); ?>
            														</fieldset>
        													<?= form_close(); ?>
														
														</button>
														<div class="gdlr-list-menu-gimmick"></div>
													
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
				<div class="gdlr-color-wrapper gdlr-show-all no-skin"
					style="background-color: #ffffff; padding-bottom: 25px; ">
					<div class="container-fluid">
						<div class="menu-item-wrapper menu-column-3 type-classic">
							<div class="menu-item-holder">
								<div class="row">
								<?php $i=0; foreach($menus as $cat_menu): ?>
									<div class="col-lg-3 col-md-4 col-sm-6 col-12">
										<div class="gdlr-item gdlr-menu-item gdlr-classic-menu with-price">
											<div class="gdlr-ux gdlr-classic-menu-ux">
												<div class="gdlr-menu-thumbnail">
													<a>
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
															href="#"><?= $cat_menu->name; ?></a></h3>
													<div class="menu-info menu-ingredients-caption gdlr-skin-info">
														<?= $cat_menu->description; ?></div>
													<h3>Rp <?= $cat_menu->price; ?></h3>
													
													<div class="clear"> <br></div>
													<button class="add_cart btn btn-block">
														<?= form_open('cart/add_cart_item'); ?>
            														<fieldset>
																	
                													<?= form_input('quantity','1' ); ?>
                													<?= form_hidden('id', $cat_menu->id); ?>
                													<?= form_submit('add', 'Add to Cart!'); ?>
            														</fieldset>
        													<?= form_close(); ?>
														
														</button>
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
	<!-- <script type="text/javascript" src="<?= base_url().'assets/js/jquery-3.2.1.js'?>"></script>
	<script type="text/javascript" src="<?= base_url().'assets/js/bootstrap.js'?>"></script> -->

	

	<script>
$(document).ready(function() { 
    /*place jQuery actions here*/ 

    $("button.add_cart form").submit(function() {
        // Get the product ID and the quantity 
        var id = $(this).find('input[name=id]').val();
        var qty = $(this).find('input[name=quantity'+id+']').val();
        
         $.post("<?= base_url()?>/cart/add_cart_item", { id: id, quantity: qty, ajax: '1' },
              function(data){	
                  // Interact with returned data
          });
          
        return false; // Stop the browser of loading the page defined in the form "action" parameter.
    });

});

$(".empty").live("click", function(){
    $.get(link + "cart/empty_cart", function(){
        $.get(link + "cart/show_cart", function(cart){
              $("#cart_content").html(cart);
        });
    });
    
    return false;
});
</script>

</div>
<!-- content wrapper -->
