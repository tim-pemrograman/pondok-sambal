
<div class="content-wrapper">
	<div class="gdlr-content">

		<!-- Above Sidebar Section-->
		<div class="above-sidebar-wrapper">
			<section id="content-section-1">
				<div class="gdlr-color-wrapper  gdlr-show-all no-skin"
					style="background-color: #0b0b0b; padding-bottom: 100px; ">
					<div class="container">
						<div class="clear"></div>
					</div>
				</div>
				<div class="clear"></div>
			</section>
			<section id="content-section-2">
				<div class="gdlr-full-size-wrapper gdlr-show-all"
					style="padding-bottom: 20px;  background-color: #ffffff; ">
					<div class="gdlr-item gdlr-content-item" style="margin-bottom: 0px;">

						<div class="wpgmp_map_container wpgmp-map-1" rel=map1>
							<iframe
								src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.069643588132!2d104.04098499999999!3d1.1099797!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d9893013d2c40b%3A0x9cf7810d08183a8!2sMakanan%20khas%20Jawa%20-%20Indonesia!5e0!3m2!1sid!2sid!4v1615128594204!5m2!1sid!2sid"
								width="100%" height="480" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
							<div
								style="position: absolute;width: 80%;bottom: 20px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;">
							</div>

						</div>
						<div class="clear"></div>
						<div class="clear"></div>
					</div>
					<div class="clear"></div>
			</section>
		</div>

		<!-- Sidebar With Content Section-->
		<div class="with-sidebar-wrapper">
			<div class="with-sidebar-container container">
				<div class="with-sidebar-left eight columns">
					<div class="with-sidebar-content twelve columns">
						<section id="content-section-3">
							<div class="section-container container">
								<div class="gdlr-item gdlr-content-item" style="margin-bottom: 60px;">
									<p>
										<div class="clear"></div>
										<div class="gdlr-space" style="margin-top: -22px;"></div>
										<h5 class="gdlr-heading-shortcode " style="font-weight: bold;">Please fulfil the
											form below. </h5>
										<?= $this->session->flashdata('message') ?>
										<div class="clear"></div>
										<div class="gdlr-space" style="margin-top: 25px;"></div>
										<div role="form" class="wpcf7" id="wpcf7-f4-o1" lang="en-US" dir="ltr">
											<div class="screen-reader-response"></div>
											<form class="quform" action="<?= base_url('aboutpage/sendMessage'); ?>"
												method="post">

												<div class="quform-elements">
													<div style="text-align: left;">
														<!-- Rasa -->
														<div class="quform-element six columns">
															<br>
															<h6 style="margin-bottom:0;">Rasa Makanan</h6>
															
																
																<fieldset>
																<div class="star-rating">
																	<input type="radio" id="star1" name="rasa"
																		value="1" /><i></i><label for="star1"
																		title="Very Poor">1 star</label>
																	<input type="radio" id="star2" name="rasa"
																		value="2" /><i></i><label for="star2" 
																		title="Poor">2 stars</label>
																	<input type="radio" id="star3" name="rasa"
																		value="3" /><i></i><label for="star3" title="Good">3
																		stars</label>
																	<input type="radio" id="star4" name="rasa"
																		value="4" /><i></i><label for="star4"
																		title="Very Good">4 stars</label>
																	
																	<input type="radio" id="star5" name="rasa"
																		value="5" /><i></i><label for="star5"
																		title="Outstanding">5 stars</label>
																</div>
																</fieldset>
															
														</div>
														<!-- Sambal -->
														<div class="quform-element six columns">
															<br>
															<h6 style="margin-bottom:0;">Rasa Sambal</h6>
															
																<fieldset>
																<div class="star-rating">
																	<input type="radio" id="star1" name="sambal"
																		value="1" /><i></i><label for="star1"
																		title="Very Poor">1 star</label>
																	<input type="radio" id="star2" name="sambal"
																		value="2" /><i></i><label for="star2" 
																		title="Poor">2 stars</label>
																	<input type="radio" id="star3" name="sambal"
																		value="3" /><i></i><label for="star3" title="Good">3
																		stars</label>
																	<input type="radio" id="star4" name="sambal"
																		value="4" /><i></i><label for="star4"
																		title="Very Good">4 stars</label>
																	
																	<input type="radio" id="star5" name="sambal"
																		value="5" /><i></i><label for="star5"
																		title="Outstanding">5 stars</label>
																</div>
																</fieldset>
															
														</div>
														<!-- Keramaian -->
														<div class="quform-element six columns">
															<br>
															<h6 style="margin-bottom:0;">Keramaian</h6>
															
																<fieldset>
																<div class="star-rating">
																	<input type="radio" id="star1" name="ramai"
																		value="1" /><i></i><label for="star1"
																		title="Very Poor">1 star</label>
																	<input type="radio" id="star2" name="ramai"
																		value="2" /><i></i><label for="star2" 
																		title="Poor">2 stars</label>
																	<input type="radio" id="star3" name="ramai"
																		value="3" /><i></i><label for="star3" title="Good">3
																		stars</label>
																	<input type="radio" id="star4" name="ramai"
																		value="4" /><i></i><label for="star4"
																		title="Very Good">4 stars</label>
																	
																	<input type="radio" id="star5" name="ramai"
																		value="5" /><i></i><label for="star5"
																		title="Outstanding">5 stars</label>
																</div>
																</fieldset>
															
														</div>
														<!-- Kenyamanan -->
														<div class="quform-element six columns">
															<br>
															<h6 style="margin-bottom:0;">Kenyamanan</h6>
															
																<fieldset>
																<div class="star-rating">
																	<input type="radio" id="star1" name="nyaman"
																		value="1" /><i></i><label for="star1"
																		title="Very Poor">1 star</label>
																	<input type="radio" id="star2" name="nyaman"
																		value="2" /><i></i><label for="star2" 
																		title="Poor">2 stars</label>
																	<input type="radio" id="star3" name="nyaman"
																		value="3" /><i></i><label for="star3" title="Good">3
																		stars</label>
																	<input type="radio" id="star4" name="nyaman"
																		value="4" /><i></i><label for="star4"
																		title="Very Good">4 stars</label>
																	
																	<input type="radio" id="star5" name="nyaman"
																		value="5" /><i></i><label for="star5"
																		title="Outstanding">5 stars</label>
																</div>
																</fieldset>
															
														</div>
														<!-- Pelayanan -->
														<div class="quform-element six columns">
															<br>
															<h6 style="margin-bottom:0;">Pelayanan</h6>
															
																<fieldset>
																	<div class="star-rating">
																		<input type="radio" id="star1" name="layanan"
																			value="1" /><i></i><label for="star1"
																			title="Very Poor">1 star</label>
																		<input type="radio" id="star2" name="layanan"
																			value="2" /><i></i><label for="star2" title="Poor">2
																			stars</label>
																		<input type="radio" id="star3" name="layanan"
																			value="3" /><i></i><label for="star3" title="Good">3
																			stars</label>
																		<input type="radio" id="star4" name="layanan"
																			value="4" /><i></i><label for="star4"
																			title="Very Good">4 stars</label>
																		<input type="radio" id="star5" name="layanan"
																			value="5" /><i></i><label for="star5"
																			title="Outstanding">5 stars</label>
																	</div>
																</fieldset>
															
														</div>

													</div>
													<!-- Email -->
													<div class="quform-element">

														<br>
														<span class="wpcf7-form-control-wrap your-email">
															<input id="email" type="email" name="email" class="input1"
																placeholder="Email*" aria-required="true">
															<?= form_error('email', '<small style="color:red;">', ' </small>') ?>
														</span>

													</div>
													<!-- Name -->
													<div class="quform-element">

														<br>
														<br>
														<span class="wpcf7-form-control-wrap your-name">
															<input id="phone" type="text" name="phone" class="input1"
																aria-required="true" aria-invalid="false"
																placeholder="Nomor Telepon*">
															<?= form_error('phone', '<small style="color:red;">', ' </small>') ?>
														</span>
													</div>
													<!-- Message -->
													<div class="quform-element">

														<br>
														<span class="wpcf7-form-control-wrap your-message">
															<textarea id="review" name="review" cols="40" rows="5"
																class="input1" aria-invalid="false"
																placeholder="Silahkan memberi ulasan mengenai rumah makan kami"></textarea>
														</span>

													</div>

													<!-- Begin Submit button -->
													<div class="quform-submit">
														<div class="quform-submit-inner">
															<button type="submit"
																class="submit-button"><span>Send</span></button>
														</div>
														<div class="quform-loading-wrap"><span
																class="quform-loading"></span></div>
													</div>

												</div>
											</form>
										</div>
								</div>
								<div class="clear"></div>
							</div>
						</section>
					</div>

					<div class="clear"></div>
				</div>

				<div class="gdlr-sidebar gdlr-right-sidebar four columns">
					<div class="gdlr-item-start-content sidebar-right-item">
						<!-- <div id="text-6" class="widget widget_text gdlr-item gdlr-widget">
                                    <h3 class="gdlr-widget-title">Before Contacting Us</h3>
                                    <div class="clear"></div>
                                    <div class="textwidget">Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Non equidem invideo, miror magis posuere velit aliquet.</div>
                                </div> -->
						<div id="text-7" class="widget widget_text gdlr-item gdlr-widget">
							<h3 class="gdlr-widget-title">Contact Information</h3>
							<div class="clear"></div>
							<div class="textwidget">
								<p><i class="gdlr-icon fa fa-map-marker"
										style="color: #444444; font-size: 16px; "></i>Pondok Sambal, Jln. Golden Land
									Blok A No 3 Simpang Kara Batam Centre</p>
								<p><i class="gdlr-icon fa fa-phone" style="color: #444444; font-size: 16px; "></i>
									+6281371337667</p>
								<p><i class="gdlr-icon fa fa-envelope" style="color: #444444; font-size: 16px; "></i>
									reservation@pondoksambalrestaurant.com</p>
								<p><i class="gdlr-icon fa fa-clock-o" style="color: #444444; font-size: 16px; "></i> Mon - Sat / 11:00-20:00, Sun / CLOSED</p>
							</div>
						</div>
						<!-- <div id="text-8" class="widget widget_text gdlr-item gdlr-widget">
							<h3 class="gdlr-widget-title">Social Media</h3>
							<div class="clear"></div>
							<div class="textwidget"><a href="http://facebook.com/goodlayers"><i
										class="gdlr-icon fa fa-facebook"
										style="color: #444444; font-size: 28px; "></i></a> <a
									href="http://twitter.com/goodlayers"><i class="gdlr-icon fa fa-twitter"
										style="color: #444444; font-size: 28px; "></i></a> <a href="#"><i
										class="gdlr-icon fa fa-dribbble"
										style="color: #444444; font-size: 28px; "></i></a> <a href="#"><i
										class="gdlr-icon fa fa-pinterest"
										style="color: #444444; font-size: 28px; "></i></a> <a href="#"><i
										class="gdlr-icon fa fa-google-plus"
										style="color: #444444; font-size: 28px; "></i></a> <a href="#"><i
										class="gdlr-icon fa fa-instagram"
										style="color: #444444; font-size: 28px; "></i></a>
							</div> -->
						</div>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>

		<!-- Below Sidebar Section-->
		<!-- <div class="below-sidebar-wrapper">
                    <section id="content-section-4">
                        <div class="gdlr-parallax-wrapper gdlr-background-image gdlr-show-all no-skin" id="gdlr-parallax-wrapper-1" data-bgspeed="0.2" style="background-image: url('<?= base_url('../wp-content/assets/uploads/2015/06/bg-section-1.jpg') ?>'); padding-top: 100px; padding-bottom: 50px; ">
                            <div class="container">
                                <div class="four columns">
                                    <div class="gdlr-box-with-icon-ux gdlr-ux">
                                        <div class="gdlr-item gdlr-box-with-icon-item pos-top type-circle">
                                            <div class="box-with-circle-icon" style="background-color: #f7c51e"><i class="fa fa-envelope" style="color:#ffffff;"></i>
                                                <br>
                                            </div>
                                            <h4 class="box-with-icon-title">Contact By Email</h4>
                                            <div class="clear"></div>
                                            <div class="box-with-icon-caption">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="four columns">
                                    <div class="gdlr-box-with-icon-ux gdlr-ux">
                                        <div class="gdlr-item gdlr-box-with-icon-item pos-top type-circle">
                                            <div class="box-with-circle-icon" style="background-color: #f7c51e"><i class="fa fa-phone" style="color:#ffffff;"></i>
                                                <br>
                                            </div>
                                            <h4 class="box-with-icon-title">Contact By Phone</h4>
                                            <div class="clear"></div>
                                            <div class="box-with-icon-caption">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="four columns">
                                    <div class="gdlr-box-with-icon-ux gdlr-ux">
                                        <div class="gdlr-item gdlr-box-with-icon-item pos-top type-circle">
                                            <div class="box-with-circle-icon" style="background-color: #f7c51e"><i class="fa fa-home" style="color:#ffffff;"></i>
                                                <br>
                                            </div>
                                            <h4 class="box-with-icon-title">Come To See Us</h4>
                                            <div class="clear"></div>
                                            <div class="box-with-icon-caption">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </section>
                </div> -->

	</div>
	<!-- gdlr-content -->
	<div class="clear"></div>
</div>
<!-- content wrapper -->

