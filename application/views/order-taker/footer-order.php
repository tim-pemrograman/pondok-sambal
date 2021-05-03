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
					admin@pondoksambalresto.com

					<div class="clear"></div>
					<div class="gdlr-space" style="margin-top: 13px;"></div>

					<i class="gdlr-icon fa fa-link" style="color: #fff; font-size: 16px; "></i>
					<a href="https://pondoksambal.tugaskuliah.web.id/">pondoksambal.tugaskuliah.web.id/</a>
				</div>
			</div>
		</div>
		<div class="footer-column three columns" id="footer-widget-2">
			<div id="recent-posts-4" class="widget widget_recent_entries gdlr-item gdlr-widget">
				<h3 class="gdlr-widget-title">Recent Posts</h3>
				<div class="clear"></div>
				<ul>
					<?php foreach ($recent_articles as $article): ?>
					<li>
					<a href="<?= base_url('article/detail/').$article->article_id?>"><?= $article->title; ?></a>
					</li>
					<?php endforeach; ?>
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
			<!-- <div class="copyright-left">

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

			</div> -->
			<div class="copyright-right">
				Copyright 2021 Valorant. All Right Revered.
			</div>
			<div class="clear"></div>
		</div>
	</div>
</footer>
<!-- </div> -->
<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?php echo base_url(); ?>homepage">Logout</a>
            </div>
        </div>
    </div>
</div>
<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/') ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/') ?>js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="<?= base_url('assets/') ?>vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?= base_url('assets/') ?>js/demo/chart-area-demo.js"></script>
<script src="<?= base_url('assets/') ?>js/demo/chart-pie-demo.js"></script>

<!-- Fancybox -->
<script type='text/javascript' src='<?= base_url('plugins/fancybox/jquery.fancybox.pack.js') ?>'></script>
<script type='text/javascript' src='<?= base_url('plugins/fancybox/helpers/jquery.fancybox-media.js') ?>'></script>
<script type='text/javascript' src='<?= base_url('plugins/fancybox/helpers/jquery.fancybox-thumbs.js') ?>'></script>
<script type='text/javascript' src='<?= base_url('plugins/gdlr-portfolio/gdlr-portfolio-script.js') ?>'></script>

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
//plugin bootstrap minus and plus
//http://jsfiddle.net/laelitenetwork/puJ6G/
$('.btn-number').click(function(e){
    e.preventDefault();
    
    fieldName = $(this).attr('data-field');
    type      = $(this).attr('data-type');
    var input = $("input[name='"+fieldName+"']");
    var currentVal = parseInt(input.val());
    if (!isNaN(currentVal)) {
        if(type == 'minus') {
            
            if(currentVal > input.attr('min')) {
                input.val(currentVal - 1).change();
            } 
            if(parseInt(input.val()) == input.attr('min')) {
                $(this).attr('disabled', true);
            }

        } else if(type == 'plus') {

            if(currentVal < input.attr('max')) {
                input.val(currentVal + 1).change();
            }
            if(parseInt(input.val()) == input.attr('max')) {
                $(this).attr('disabled', true);
            }

        }
    } else {
        input.val(0);
    }
});
$('.input-number').focusin(function(){
   $(this).data('oldValue', $(this).val());
});
$('.input-number').change(function() {
    
    minValue =  parseInt($(this).attr('min'));
    maxValue =  parseInt($(this).attr('max'));
    valueCurrent = parseInt($(this).val());
    
    name = $(this).attr('name');
    if(valueCurrent >= minValue) {
        $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the minimum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    if(valueCurrent <= maxValue) {
        $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the maximum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    
    
});
$(".input-number").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
             // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) || 
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
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
