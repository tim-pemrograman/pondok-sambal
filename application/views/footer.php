<footer class="footer-wrapper">
	<div class="footer-container container">
		<div class="footer-column three columns" id="footer-widget-1">
			<div id="text-5" class="widget widget_text gdlr-item gdlr-widget">
				<h3 class="gdlr-widget-title">About Us</h3>
				<div class="clear"></div>
				<div class="textwidget"><i class="gdlr-icon fa fa-location-arrow"
						style="color: #fff; font-size: 16px; "></i> Pondok Sambal, Jln. Golden Land Blok A No 3 Simpang
					Kara Batam Centre

					<div class="clear"></div>
					<div class="gdlr-space" style="margin-top: 13px;"></div>

					<i class="gdlr-icon fa fa-phone" style="color: #fff; font-size: 16px; "></i> +6281371337667
					<div class="clear"></div>
					<div class="gdlr-space" style="margin-top: 13px;"></div>

					<i class="gdlr-icon fa fa-mobile" style="color: #fff; font-size: 20px; "></i> +6281371337667

					<div class="clear"></div>
					<div class="gdlr-space" style="margin-top: 13px;"></div>

					<i class="gdlr-icon fa fa-envelope-o" style="color: #fff; font-size: 16px; "></i>
					reservation@pondoksambalresto.com

					<div class="clear"></div>
					<div class="gdlr-space" style="margin-top: 13px;"></div>

					<i class="gdlr-icon fa fa-link" style="color: #fff; font-size: 16px; "></i>
					http://pondoksambalresto.com
				</div>
			</div>
		</div>
		<div class="footer-column three columns" id="footer-widget-2">
			<div id="recent-posts-4" class="widget widget_recent_entries gdlr-item gdlr-widget">
				<h3 class="gdlr-widget-title">Recent Posts</h3>
				<div class="clear"></div>
				<ul>
					<li>
						<a href="<?= base_url('article')?>">Cuma disini Pedasnya gak ngebosenin</a>
					</li>
					<li>
						<a href="<?= base_url('article')?>">Kamu tidak akan tahu apa itu pedas kalau belum ke
							Pondok Sambal!</a>
					</li>
					<li>
						<a href="<?= base_url('article')?>">Cuma disini kamu bisa makan enak dan pedas yang
							nagih!</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="footer-column six columns" id="footer-widget-3">
			<div id="text-10" class="widget widget_text gdlr-item gdlr-widget">
				<h3 class="gdlr-widget-title">Come and check us out!</h3>
				<div class="clear"></div>
				<div class="textwidget"><img src="<?= base_url('assets/images/partners.png')?>" alt="" width="10%" />
					<div class="clear"></div>
					<div class="gdlr-space" style="margin-top: 15px;"></div>
				</div>
			</div>
		</div>
		<div class="clear"></div>
	</div>

	<div class="copyright-wrapper">
		<div class="copyright-container container">
			<div class="copyright-left">

				<a href="#" target="_blank">
					<i class="gdlr-icon fa fa-facebook"></i>
				</a>
				<a href="#" target="_blank">
					<i class="gdlr-icon fa fa-twitter"></i>
				</a>
				<a href="#" target="_blank">
					<i class="gdlr-icon fa fa-linkedin"></i>
				</a>
				<a href="#" target="_blank">
					<i class="gdlr-icon fa fa-google-plus"></i>
				</a>
				<a href="#" target="_blank">
					<i class="gdlr-icon fa fa-pinterest"></i>
				</a>
				<a href="#" target="_blank">
					<i class="gdlr-icon fa fa-flickr"></i>
				</a>

			</div>
			<div class="copyright-right">
				Copyright 2021 Valorant. All Right Revered.
			</div>
			<div class="clear"></div>
		</div>
	</div>
</footer>
</div>
<!-- body-wrapper -->

<script type='text/javascript' src='<?= base_url('js/jquery/jquery.js')?>'></script>
<script type='text/javascript' src='<?= base_url('js/jquery/jquery-migrate.min.js')?>'></script>
<script>
	var ms_grabbing_curosr = '<?= base_url('
	plugins / masterslider / public / assets / css / common / grabbing.php ')?>',
		ms_grab_curosr = '<?= base_url('
	plugins / masterslider / public / assets / css / common / grab.php ')?>';

</script>
<script type='text/javascript' src='<?= base_url('plugins/superfish/js/superfish.js')?>'></script>
<script type='text/javascript' src='<?= base_url('js/hoverIntent.min.js')?>'></script>
<script type='text/javascript' src='<?= base_url('plugins/dl-menu/modernizr.custom.js')?>'></script>
<script type='text/javascript' src='<?= base_url('plugins/dl-menu/jquery.dlmenu.js')?>'></script>
<script type='text/javascript' src='<?= base_url('plugins/jquery.easing.js')?>'></script>
<script type='text/javascript' src='<?= base_url('plugins/fancybox/jquery.fancybox.pack.js')?>'></script>
<script type='text/javascript' src='<?= base_url('plugins/fancybox/helpers/jquery.fancybox-media.js')?>'></script>
<script type='text/javascript' src='<?= base_url('plugins/fancybox/helpers/jquery.fancybox-thumbs.js')?>'></script>
<script type='text/javascript' src='<?= base_url('plugins/flexslider/jquery.flexslider.js')?>'></script>
<script type='text/javascript' src='<?= base_url('plugins/jquery.isotope.min.js')?>'></script>
<script type='text/javascript' src='<?= base_url('js/plugins.min.js')?>'></script>
<script type='text/javascript' src='<?= base_url('plugins/masterslider/public/assets/js/masterslider.min.js')?>'>
</script>
<script type='text/javascript' src='<?= base_url('plugins/jquery.transit.min.js')?>'></script>
<script type='text/javascript' src='<?= base_url('plugins/gdlr-portfolio/gdlr-portfolio-script.js')?>'></script>


<script>
$(":radio").change(function () {
  $(".choice").text(this.value + " stars");
});
</script>

<script>
	(function ($) {
		"use strict";

		$(function () {
			var masterslider_d1da = new MasterSlider();

			// slider controls
			masterslider_d1da.control('arrows', {
				autohide: true,
				overVideo: true
			});
			masterslider_d1da.control('bullets', {
				autohide: false,
				overVideo: true,
				dir: 'h',
				align: 'bottom',
				space: 6,
				margin: 25
			});
			// slider setup
			masterslider_d1da.setup("slider_1", {
				width: 1140,
				height: 800,
				minHeight: 0,
				space: 0,
				start: 1,
				grabCursor: false,
				swipe: true,
				mouse: false,
				keyboard: true,
				layout: "fullwidth",
				wheel: false,
				autoplay: false,
				instantStartLayers: false,
				mobileBGVideo: false,
				loop: true,
				shuffle: false,
				preload: 0,
				heightLimit: true,
				autoHeight: false,
				smoothHeight: true,
				endPause: false,
				overPause: true,
				fillMode: "fill",
				centerControls: true,
				startOnAppear: false,
				layersMode: "center",
				autofillTarget: "",
				hideLayers: false,
				fullscreenMargin: 0,
				speed: 20,
				dir: "h",
				parallaxMode: 'swipe',
				view: "basic"
			});




			window.masterslider_instances = window.masterslider_instances || {};
			window.masterslider_instances["5_d1da"] = masterslider_d1da;
		});

	})(jQuery);

</script>


<script>
	(function ($) {
		"use strict";

		$(function () {
			var masterslider_d1da2 = new MasterSlider();

			// slider setup
			masterslider_d1da2.setup("slider_2", {
				width: 1140,
				height: 800,
				minHeight: 0,
				space: 0,
				start: 1,
				grabCursor: false,
				swipe: true,
				mouse: false,
				keyboard: true,
				layout: "fullwidth",
				wheel: false,
				autoplay: false,
				instantStartLayers: false,
				mobileBGVideo: false,
				loop: true,
				shuffle: false,
				preload: 0,
				heightLimit: true,
				autoHeight: false,
				smoothHeight: true,
				endPause: false,
				overPause: true,
				fillMode: "fill",
				centerControls: true,
				startOnAppear: false,
				layersMode: "center",
				autofillTarget: "",
				hideLayers: false,
				fullscreenMargin: 0,
				speed: 20,
				dir: "h",
				parallaxMode: 'swipe',
				view: "basic"
			});




			window.masterslider_instances = window.masterslider_instances || {};
			window.masterslider_instances["5_d1da"] = masterslider_d1da2;
		});

	})(jQuery);

</script>

</body>

</html>
