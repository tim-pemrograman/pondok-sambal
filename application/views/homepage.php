<div class="content-wrapper">
	<div class="gdlr-content">

		<!-- Above Sidebar Section-->
		<div class="above-sidebar-wrapper">
			<section id="content-section-1">
				<div class="gdlr-full-size-wrapper gdlr-show-all" style="padding-bottom: 0px;  background-color: #ffffff; ">
					<div class="gdlr-master-slider-item gdlr-slider-item gdlr-item" style="margin-bottom: 0px;">
						<!-- MasterSlider -->
						<div id="P_slider_1" class="master-slider-parent ms-parent-id-1">

							<!-- MasterSlider Main -->
							<div id="slider_1" class="master-slider ms-skin-default">
								<?php foreach ($banners as $banner) : ?>
									<div class="ms-slide" data-delay="3" data-fill-mode="fill">
										<div class="mask" style="background-color: black;">
											<img src="<?= base_url($banner->img_path) ?>" alt="<?= $banner->img_alt; ?>" title="<?= $banner->img_alt; ?>" data-src="<?= base_url($banner->img_path) ?>" style="opacity: 0.6; " />
										</div>

										<div class="ms-layer  msp-cn-1-7"  data-effect="t(true,n,-150,n,n,n,n,n,n,n,n,n,n,n,n)" data-duration="250" data-ease="easeOutQuint" data-offset-x="0" data-offset-y="-106" data-origin="mc" data-position="normal">
											<?= $banner->subtitle; ?></div>

										<div class="ms-layer  msp-cn-1-8" style="font-size:100px" data-effect="t(true,n,n,-500,n,n,n,n,n,n,n,n,n,n,n)" data-duration="275" data-delay="162" data-ease="easeOutQuint" data-offset-x="228" data-offset-y="314" data-origin="tl" data-position="normal">
											<?= $banner->title; ?></div>
									</div>
								<?php endforeach; ?>
							</div>
							<!-- END MasterSlider Main -->

						</div>
						<!-- END MasterSlider -->


					</div>
					<div class="clear"></div>
					<div class="clear"></div>
				</div>
				<div class="clear"></div>
			</section>
		</div>

		<!-- Sidebar With Content Section-->
		<div class="with-sidebar-wrapper">
			<section id="content-section-2">
				<div class="section-container container">
					<div class="gdlr-column-service-tab gdlr-item" style="margin-top: -105px;">
						<div class="clear"></div>
						<div class="gdlr-column-service-tab-item  gdlr-first four columns" style="background: #FFD44C;">
							<div class="gdlr-column-service-item gdlr-type-1">
								<div class="column-service-image"><img src="<?= base_url('assets/images/icon.png') ?>" alt="" width="70" height="74" /></div>
								<h3 class="column-service-title">Cocok untuk Santapan Anda</h3>
								<div class="clear"></div>
								<div class="column-service-content">
									<p>Kami mengikuti Protokol Kesehatan sehingga orang hanya dapat menikmati dan makan
										makanan yang enak di Pondok Sambal</p>
								</div><a class="column-service-learn-more" href="<?= base_url('') ?>">Read More</a>
							</div>
						</div>
						<div class="gdlr-column-service-tab-item  four columns" style="background: #e9c051;">
							<div class="gdlr-column-service-item gdlr-type-1">
								<div class="column-service-image"><img src="<?= base_url('assets/images/icon.png') ?>" alt="" width="70" height="71" /></div>
								<h3 class="column-service-title">Berbagai Sambal</h3>
								<div class="clear"></div>
								<div class="column-service-content">
									<p>Kami menyediakan berbagai macam sambal yang dapat membuat perut dan lidah kalian bergoyang dan nafsu makan bertambah! Mau tau seenak apa? Ayo pesan sekarang!</p>
								</div><a class="column-service-learn-more" href="<?= base_url('') ?>">Read More</a>
							</div>
						</div>
						<div class="gdlr-column-service-tab-item  gdlr-last four columns" style="background: #d6b353;">
							<div class="gdlr-column-service-item gdlr-type-1">
								<div class="column-service-image"><img src="<?= base_url('assets/images/icon.png') ?>" alt="" width="70" height="71" /></div>
								<h3 class="column-service-title">Pelayanan yang Memuaskan</h3>
								<div class="clear"></div>
								<div class="column-service-content">
									<p>Kami hanya menggunakan bahan segar untuk memberikan yang terbaik bagi pelanggan
										kami Pondok Sambal makanan enak</p>
								</div><a class="column-service-learn-more" href="<?= base_url('') ?>">Read More</a>
							</div>
						</div>
						<div class="clear"></div>
					</div>
					<div class="clear"></div>
				</div>
			</section>
			<section id="content-section-3">
				<div class="gdlr-color-wrapper  gdlr-show-all no-skin" style="background-color: #ffffff; padding-bottom: 55px; ">
					<div class="container">
						<div class="six columns">
							<div class="gdlr-item gdlr-about-us-item">
								<h3 class="about-us-item-title gdlr-skin-title">Little About Us</h3>
								<div class="about-us-item-caption gdlr-skin-info">
									<p>The History Of us</p>
								</div>
								<div class="about-us-item-title-divider"></div>
								<div class="about-us-item-content">
									<p>Pondok Sambal adalah sebuah restoran yang tidak hanya menyediakan makanan yang
										enak dan nikmat, tetapi juga rasa pedas dari berbagai sambal kami. Anda mungkin
										tidak menemukan makanan seperti itu di tempat lain. Ingin tahu lebih banyak?</p>
								</div><a class="about-us-learn-more" href="<?= base_url('') ?>">Learn More</a>
								<div class="clear"></div>
							</div>
						</div>
						<div class="three columns">
							<div class="gdlr-item gdlr-content-item"></div>
							<div class="gdlr-image-frame-item gdlr-item">
								<div class="gdlr-frame frame-type-none">
									<div class="gdlr-image-link-shortcode"><img src="<?= base_url('assets/images/article/resto.jpg') ?>" alt="" width="237" height="237" /></div>
								</div>
							</div>
						</div>
						<div class="three columns">
							<div class="gdlr-item gdlr-content-item"></div>
							<div class="gdlr-image-frame-item gdlr-item">
								<div class="gdlr-frame frame-type-none">
									<div class="gdlr-image-link-shortcode"><img src="<?= base_url('assets/images/article/resto-2.jpg') ?>" alt="" width="237" height="237" /></div>
								</div>
							</div>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<div class="clear"></div>
			</section>
			<section id="content-section-4">
				<div class="gdlr-parallax-wrapper gdlr-background-image gdlr-show-all gdlr-skin-dark-yellow-skin" id="gdlr-parallax-wrapper-1" data-bgspeed="0.1" style="background-image: url('<?= base_url('assets/images/food-bg.jpg') ?>'); padding-top: 90px; padding-bottom: 10px; width:100%; background-size:cover; background-repeat:no-repeat; ">
					<div class="container">
						<div class="menu-item-wrapper menu-column-3 type-classic" data-ajax="<?= base_url('wp-admin/admin-ajax.php') ?>">
							<div class="gdlr-item-title-wrapper gdlr-item  pos-center-divider gdlr-size-large ">
								<div class="gdlr-item-title-head">
									<h3 class="gdlr-item-title gdlr-skin-title gdlr-skin-border">Chef Recommends</h3>
									<div class="gdlr-item-title-divider gdlr-left"></div>
									<div class="gdlr-item-title-divider gdlr-right"></div>
									<div class="clear"></div>
								</div>
							</div>
							<div class="gdlr-item-title-nav gdlr-nav-container  pos-center-divider gdlr-size-large"><i class="icon-angle-left gdlr-flex-prev"></i><i class="icon-angle-right gdlr-flex-next"></i></div>
							<div class="menu-item-holder">
								<div class="gdlr-menu-carousel-item gdlr-item">
									<div class="flexslider" data-type="carousel" data-nav-container="menu-item-holder" data-columns="3">
										<ul class="slides">
										<?php foreach ($featured_menus as $menu): ?>
											<li class="gdlr-item gdlr-menu-item gdlr-classic-menu with-price">
												<div class="gdlr-menu-thumbnail">
													<a href="<?= base_url('menupage/single') ?>">
													<img src="
														<?php 
														if(($menu->product_img) == '') {
															echo(base_url('assets/images/default.jpg'));
														} else  {
															echo(base_url($menu->product_img));
														}
														?>" 
													alt="<?= $menu->name; ?>" width="400" height="300" 
													onerror="this.src='<?= base_url('assets/images/default.jpg'); ?>'" /></a>
													<div class="menu-info menu-recommendation"><span class="menu-recommendation-inner"><i class="fa fa-thumbs-o-up"></i>Recommended</span></div>
												</div>
												<div class="gdlr-menu-item-content">
													<h3 class="menu-title gdlr-skin-title gdlr-content-font"><a href="<?= base_url('menupage/single') ?>"><?= $menu->name; ?></a></h3>
													<div class="menu-info menu-ingredients-caption gdlr-skin-info">
														<?= $menu->description; ?></div>
													<div class="menu-info menu-rating gdlr-skin-link">
													<?php for($star = 0; $star<$menu->rating; $star++) 
														echo "<i class='fa fa-star icon-star'></i>";
													?>
													</div>
													<div class="menu-info menu-price gdlr-title-font gdlr-skin-link">Rp
														<?= $menu->price; ?></div>
												</div>
											</li>
										<?php endforeach; ?>
										</ul>
									</div>
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
			<section id="content-section-5">
				<div class="gdlr-color-wrapper  gdlr-show-all no-skin" style="background-color: #ffffff; padding-top: 80px; padding-bottom: 55px; ">
					<div class="container">
						<div class="three columns">
							<div class="gdlr-image-frame-item gdlr-item">
								<div class="gdlr-frame frame-type-none">
									<div class="gdlr-image-link-shortcode"><img src="<?= base_url('assets/images/menu-1.jpg') ?>" alt="" width="400" height="487" /><span class="gdlr-image-link-overlay">&nbsp;</span><span class="gdlr-image-frame-content"><span class="gdlr-image-frame-content-title gdlr-title-font">The Best
												Chef</span><span class="gdlr-image-frame-content-caption">Hanya
												bergairah dan memasak dengan cinta mungkin Chef kami yang bisa membuat
												Anda jatuh cinta dengan makanan kita!</span></span>
									</div>
								</div>
							</div>
						</div>
						<div class="three columns">
							<div class="gdlr-image-frame-item gdlr-item">
								<div class="gdlr-frame frame-type-none">
									<div class="gdlr-image-link-shortcode"><img src="<?= base_url('assets/images/menu-2.jpg') ?>" alt="" width="400" height="487" /><span class="gdlr-image-link-overlay">&nbsp;</span><span class="gdlr-image-frame-content"><span class="gdlr-image-frame-content-title gdlr-title-font">We Pick
												Carefully</span><span class="gdlr-image-frame-content-caption">Setiap
												bahan-bahan yang kami pilih dan masak akan menjadi makanan terbaik yang
												pernah Anda miliki rasa!</span></span>
									</div>
								</div>
							</div>
						</div>
						<div class="six columns">
							<div class="gdlr-item gdlr-about-us-item">
								<h3 class="about-us-item-title gdlr-skin-title">Perfect Ingredients</h3>
								<div class="about-us-item-caption gdlr-skin-info">
									<p>This is our secret</p>
								</div>
								<div class="about-us-item-title-divider"></div>
								<div class="about-us-item-content">
									<p>Kelezatan dan rasa pedas dari makanan kita semuanya dari yang terbaik
										bahan yang sudah kami siapkan untuk lidah dan perut anda. Ingin melihat
										Makanan lezat kita?</p>
								</div><a class="about-us-learn-more" href="<?= base_url('menupage/menu') ?>">Learn
									More</a>
								<div class="clear"></div>
							</div>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<div class="clear"></div>
			</section>
			<section id="content-section-6">
				<div class="gdlr-color-wrapper  gdlr-show-all no-skin" style="background-color: #ffd44c; padding-bottom: 5px; ">
					<div class="container">
						<div class="gdlr-item gdlr-stunning-item">
							<div class="stunning-item-inner">
								<div class="stunning-item-icon"><i class="fa fa-bullhorn"></i></div>
								<div class="stunning-item-content-wrapper">
									<h2 class="stunning-item-title gdlr-skin-title">Special Promotion For This Month!
									</h2>
									<div class="stunning-item-caption gdlr-skin-info">
										<p>Datang dengan lebih dari 8 orang mendapatkan diskon 20%. Ajak semua temanmu ke sini!</p>
									</div>
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
			<section id="content-section-7">
				<div class="gdlr-parallax-wrapper gdlr-background-image gdlr-show-all gdlr-skin-dark-yellow-skin-3" id="gdlr-parallax-wrapper-2" data-bgspeed="0.1" style="background-image: url('<?= base_url('assets/images/wood-cook.jpg') ?>'); padding-top: 85px; padding-bottom: 45px; width: 100%; background-size:cover; background-repeat:no-repeat; ">
					<div class="container">
						<div class="gdlr-title-item" style="margin-bottom: 65px;">
							<div class="gdlr-item-title-wrapper gdlr-item  pos-center-divider gdlr-size-large ">
								<div class="gdlr-item-title-head">
									<h3 class="gdlr-item-title gdlr-skin-title gdlr-skin-border">How to get to us</h3>
									<div class="gdlr-item-title-divider gdlr-left"></div>
									<div class="gdlr-item-title-divider gdlr-right"></div>
									<div class="clear"></div>
								</div>
							</div>
						</div>
						<div class="clear"></div>
						<div class="four columns">
							<div class="gdlr-item gdlr-content-item">
								<p>
								<div class="gdlr-shortcode-wrapper">
									<div class="gdlr-item-title-wrapper gdlr-item  pos-left-content gdlr-size-small ">
										<div class="gdlr-item-title-head">
											<h3 class="gdlr-item-title gdlr-skin-title gdlr-skin-border">Want to
												contact us?</h3>
											<div class="clear"></div>
										</div>
									</div>
								</div>
								</p>
								<p>
								<div class="clear"></div>
								<div class="gdlr-space" style="margin-top: -30px;"></div>
								</p>
								<p>We provide our location, Number, and email just for you!</p>
								<p>
								<div class="clear"></div>
								<div class="gdlr-space" style="margin-top: 35px;"></div>
								</p>
								<p><a class="gdlr-button medium border-button" href="aboutpage/contact" target="_self" style="color:#ffd44c; border-color:#ffd44c; ">Contact Us!</a></p>
							</div>
						</div>
						<div class="four columns">
							<div class="gdlr-contact-us-tab gdlr-item">
								<h3 class="gdlr-content-title gdlr-content-font">Contact Info</h3>
								<div class="contact-us-tab-item">
									<div class="contact-us-tab-icon"><i class="fa fa-location-arrow"></i></div>
									<div class="contact-us-tab-content">
										<p><strong>Pondok Sambal Restaurant</strong>
											<br />Jln. Golden Land Blok A No 3 Simpang Kara Batam Centre
										</p>
									</div>
								</div>
								<div class="contact-us-tab-item">
									<div class="contact-us-tab-icon"><i class="fa fa-phone"></i></div>
									<div class="contact-us-tab-content">
										<p>+6281371337667
											<br />+6281371337667
										</p>
									</div>
								</div>
								<div class="contact-us-tab-item">
									<div class="contact-us-tab-icon"><i class="fa fa-envelope-o"></i></div>
									<div class="contact-us-tab-content">
										<p> reservation@pondoksambalrestaurant.com</p>
									</div>
								</div>
								<div class="clear"></div>
							</div>
						</div>
						<div class="four columns">
							<div class="gdlr-item gdlr-opening-hours-item gdlr-type-1">
								<h3 class="gdlr-content-title gdlr-content-font">Opening Hours</h3>
								<div class="opening-hours-day"><span class="gdlr-head"><i class="fa fa-clock-o"></i>Monday</span><span class="gdlr-tail">10:00 AM -
										9:00 PM</span></div>
								<div class="opening-hours-day"><span class="gdlr-head"><i class="fa fa-clock-o"></i>Tuesday</span><span class="gdlr-tail"><strong>CLOSED</strong></span></div>
								<div class="opening-hours-day"><span class="gdlr-head"><i class="fa fa-clock-o"></i>Wednesday</span><span class="gdlr-tail">10:00 AM -
										9:00 PM</span></div>
								<div class="opening-hours-day"><span class="gdlr-head"><i class="fa fa-clock-o"></i>Thursday</span><span class="gdlr-tail">10:00 AM -
										9:00 PM</span></div>
								<div class="opening-hours-day"><span class="gdlr-head"><i class="fa fa-clock-o"></i>Friday</span><span class="gdlr-tail">10:00 AM -
										9:00 PM</span></div>
								<div class="opening-hours-day"><span class="gdlr-head"><i class="fa fa-clock-o"></i>Saturday</span><span class="gdlr-tail">09:00 AM -
										11:00 PM</span></div>
								<div class="opening-hours-day"><span class="gdlr-head"><i class="fa fa-clock-o"></i>Sunday</span><span class="gdlr-tail">09:00 AM -
										11:00 PM</span></div>
							</div>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<div class="clear"></div>
			</section>
			<section id="content-section-8">
				<div class="gdlr-color-wrapper  gdlr-show-all no-skin" style="background-color: #ffffff; padding-top: 65px; padding-bottom: 5px; ">
					<div class="container">
						<div class="three columns">
							<div class="gdlr-title-item">
								<div class="gdlr-item-title-wrapper gdlr-item  pos-left gdlr-size-small ">
									<div class="gdlr-item-title-head">
										<h3 class="gdlr-item-title gdlr-skin-title gdlr-skin-border">Recent Articles
										</h3>
										<div class="clear"></div>
									</div>
									<div class="gdlr-item-title-caption gdlr-skin-info">Find out more article just here!
									</div><a class="gdlr-item-title-link" href="article">Read All News</a>
								</div>
							</div>
						</div>
						<div class="nine columns">
							<div class="blog-item-wrapper">
								<div class="blog-item-holder">
									<div class="gdlr-isotope" data-type="blog" data-layout="fitRows">
										<div class="clear"></div>
										<div class="four columns">
											<div class="gdlr-item gdlr-blog-grid">
												<div class="gdlr-ux gdlr-blog-grid-ux">
													<article id="post-852" class="post-852 post type-post status-publish format-standard has-post-thumbnail hentry category-fit-row tag-blog tag-life-style">
														<div class="gdlr-standard-style">
															<div class="gdlr-blog-thumbnail">
																<a href="#"> <img src="<?= base_url('assets/images/article/resto.jpg') ?>" alt="" width="400" height="300" /></a>
															</div>

															<div class="gdlr-blog-info gdlr-info">
																<div class="blog-info blog-date"><i class="fa fa-clock-o"></i><a href="#">03 Mar
																		2020</a></div>
																<div class="blog-info blog-author"><i class="fa fa-pencil"></i><a href="#" title="Posts by Jose" rel="author">Jose</a>
																</div>
																<div class="clear"></div>
															</div>

															<header class="post-header">
																<h3 class="gdlr-blog-title gdlr-content-font"><a href="article">Cuma disini kamu bisa
																		makan enak dan pedas yang nagih!</a></h3>
																<div class="clear"></div>
															</header>
															<!-- entry-header -->

															<div class="gdlr-blog-content">Cuma disini kamu bosa
																melepaskan rindumu akan kepedasan yang hakiki. Pondok
																Sambal tidak cuma menawarkan sambal yang itu-itu saja,
																tapi kami masih banyak lagi...
																<div class="clear"></div><a href="#" class="excerpt-read-more">Read More</a>
															</div>
														</div>
													</article>
													<!-- #post -->
												</div>
											</div>
										</div>
										<div class="four columns">
											<div class="gdlr-item gdlr-blog-grid">
												<div class="gdlr-ux gdlr-blog-grid-ux">
													<article id="post-862" class="post-862 post type-post status-publish format-standard has-post-thumbnail hentry category-blog category-fit-row tag-blog tag-link tag-news">
														<div class="gdlr-standard-style">
															<div class="gdlr-blog-thumbnail">
																<a href="#"> <img src="<?= base_url('assets/images/article/resto-2.jpg') ?>" alt="" width="400" height="300" /></a>
															</div>

															<div class="gdlr-blog-info gdlr-info">
																<div class="blog-info blog-date"><i class="fa fa-clock-o"></i><a href="#">12 Feb
																		2020</a></div>
																<div class="blog-info blog-author"><i class="fa fa-pencil"></i><a href="#" title="Posts by Steven" rel="author">Steven</a>
																</div>
																<div class="clear"></div>
															</div>

															<header class="post-header">
																<h3 class="gdlr-blog-title gdlr-content-font"><a href="article">Kamu tidak akan tahu apa
																		itu pedas kalau belum ke Pondok Sambal!</a></h3>
																<div class="clear"></div>
															</header>
															<!-- entry-header -->

															<div class="gdlr-blog-content">Apa benar kalian sudah pernah
																makan makanan yang membuat kalian keringat, berliang air
																mata tapi nagih terus? Kalau belum, kalian harus ke
																Pondok Sambal. Sambal disini membuatmu melupakan
																semuanya kecuali rasa pedas yang membuatmu mau lagi dan
																...
																<div class="clear"></div><a href="article" class="excerpt-read-more">Read More</a>
															</div>
														</div>
													</article>
													<!-- #post -->
												</div>
											</div>
										</div>
										<div class="four columns">
											<div class="gdlr-item gdlr-blog-grid">
												<div class="gdlr-ux gdlr-blog-grid-ux">
													<article id="post-859" class="post-859 post type-post status-publish format-standard has-post-thumbnail hentry category-blog category-fit-row tag-blog tag-news">
														<div class="gdlr-standard-style">
															<div class="gdlr-blog-thumbnail">
																<a href="<?= base_url('') ?>"> <img src="<?= base_url('assets/images/resto-3.jpg') ?>" alt="" width="400" height="300" /></a>
																<div class="gdlr-sticky-banner"><i class="fa fa-bullhorn"></i>Sticky Post</div>
															</div>

															<div class="gdlr-blog-info gdlr-info">
																<div class="blog-info blog-date"><i class="fa fa-clock-o"></i><a href="#">23 Jan
																		2020</a></div>
																<div class="blog-info blog-author"><i class="fa fa-pencil"></i><a href="#" title="Posts by Kisus" rel="author">Kisus</a>
																</div>
																<div class="clear"></div>
															</div>

															<header class="post-header">
																<h3 class="gdlr-blog-title gdlr-content-font"><a href="<?= base_url('article') ?>">Cuma
																		disini Pedasnya gak ngebosenin</a></h3>
																<div class="clear"></div>
															</header>
															<!-- entry-header -->

															<div class="gdlr-blog-content">Kalian mau cari tempat makan
																siang, sore, dan bahkan malam? Disini tempat yang tepat
																terutama untuk kalian kaum pencinta pedas yang
																menggoyang lidah. Hanya di...
																<div class="clear"></div><a href="article" class="excerpt-read-more">Read More</a>
															</div>
														</div>
													</article>
													<!-- #post -->
												</div>
											</div>
										</div>
										<div class="clear"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<div class="clear"></div>
			</section>

			<section id="content-section-10">
				<div class="gdlr-color-wrapper  gdlr-show-all no-skin" style="background-color: #f5f5f5; padding-top: 70px; padding-bottom: 50px; ">
					<div class="container">
						<div class="twelve columns">
							<div class="gdlr-item-title-wrapper gdlr-item  pos-center-divider gdlr-size-small ">
								<div class="gdlr-item-title-head">
									<h3 class="gdlr-item-title gdlr-skin-title gdlr-skin-border">Gallery</h3>
									<div class="gdlr-item-title-divider gdlr-left"></div>
									<div class="gdlr-item-title-divider gdlr-right"></div>
									<div class="clear"></div>
								</div>
							</div>
							<div class="gdlr-gallery-item gdlr-item">
								<?php
								$i = 0;
								foreach ($galleries as $gallery) :
									$i++;
								?>
									<div class="gallery-column <?= ($i == 1) ? 'two-fifth' : 'one-fifth' ?> columns">
										<div class="gallery-item">
											<a href="<?= base_url($gallery->img_path) ?>" data-fancybox-group="gdlr-gal-1" data-rel="fancybox"><img src="<?= base_url($gallery->img_path) ?>" alt="<?= $gallery->img_alt; ?>" width="400" height="<?= ($i == 1) ? '500' : '400' ?>" /></a>
										</div>
									</div>
									<?php if ($i == 7) break; ?>
								<?php endforeach; ?>

								<div class="clear"></div>
							</div>
						</div>

						<div class="clear"></div>
					</div>
				</div>
				<div class="clear"></div>
			</section>
			<section id="content-section-11">
				<div class="gdlr-parallax-wrapper gdlr-background-image gdlr-show-all gdlr-skin-dark-yellow-skin-2" id="gdlr-parallax-wrapper-3" data-bgspeed="0.1" style="background-image: url('<?= base_url('assets/images/page-title-background.jpg') ?>'); padding-top: 80px; padding-bottom: 60px; width:100%; background-size:cover; background-repeat:no-repeat;">
					<div class="container">
						<div class="one-fifth column"></div>
						<div class="three-fifth columns">
							<div class="gdlr-testimonial-item-wrapper gdlr-info-font">
								<div class="gdlr-item-title-wrapper gdlr-item  pos-center gdlr-size-large ">
									<div class="gdlr-item-title-head">
										<h3 class="gdlr-item-title gdlr-skin-title gdlr-skin-border">Testimonial</ih3>
											<div class="clear"></div>
									</div>
								</div>
								<div class="gdlr-item-title-nav gdlr-nav-container  pos-center gdlr-size-large"><i class="icon-angle-left gdlr-flex-prev"></i><img src="<?= base_url('assets/images/dark/testimonial-quote.png') ?>" alt="" /><i class="icon-angle-right gdlr-flex-next"></i></div>
								<div class="gdlr-item gdlr-testimonial-item carousel large plain-style">
									<div class="gdlr-ux gdlr-testimonial-ux">
										<div class="flexslider" data-type="carousel" data-nav-container="gdlr-testimonial-item" data-columns="1">
											<ul class="slides">
												<li class="testimonial-item">
													<div class="testimonial-content gdlr-skin-content">
														<p>Sumpah gak ngerti lagi, nagih banget. Kemarin kesini pas-pas
															lewat buat cari tempat makan siang, eh sekali nya makan.
															Nagih sumpah. Ayam Bakarnya enak banget, jusnya juga fresh
															tapi yang paling enak tuh Bandeng Milleniumnya. Pasti bakal
															datang lagi bawa rombongan nih!</p>
													</div>
													<div class="testimonial-info"><span class="testimonial-author gdlr-skin-link-color">Sukiman</span><span class="testimonial-position gdlr-skin-info"><span>,
															</span>PNS</span>
													</div>
												</li>
												<li class="testimonial-item">
													<div class="testimonial-content gdlr-skin-content">
														<p>Mau cari tempat yang sambelnya tuh nendang banget. Pas-pasan
															liat ada Pondok Sambal, coba pesan online dan hasilnya
															astaga, kok bisa belom terkenal selama ini. Ayamnya enak dan
															bumbunya meresap, bandeng nya enak banget, tapi yang buat
															top banget adalah Sambalnya. Jadi sambalnya ada 8 macam dan
															semuanya ENAAAK!</p>
													</div>
													<div class="testimonial-info"><span class="testimonial-author gdlr-skin-link-color">Ningsih</span><span class="testimonial-position gdlr-skin-info"><span>,
															</span>Food Blogger</span>
													</div>
												</li>
												<li class="testimonial-item">
													<div class="testimonial-content gdlr-skin-content">
														<p>Sambel sini mantul. Pedasnya pas, dan pakai nasi + bandeng
															milleniumnya, beuh. Surga untuk pecinta pedas</p>
													</div>
													<div class="testimonial-info"><span class="testimonial-author gdlr-skin-link-color">Budi</span><span class="testimonial-position gdlr-skin-info"><span>,
															</span>Mahasiswa</span>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="one-fifth column"></div>
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
</div>
<!-- content wrapper -->