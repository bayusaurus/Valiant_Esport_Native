	<footer>
			<!-- back to top -->
			<div class="backToTop text-center">&#8657;</div>
			<!-- back to top -->

	    	<!-- Sosmed -->
	    	<div class="socmed pt-4">
	    		<div class="container">
		    		<div class="row">
		    			
		    			<div class="col-md-7 py-4 px-4">
		    				<div class="boxFooter text-white py-4 px-4">
		    					<center><img src="<?= BASEURL ?>/image/logo.png"></center>
		    					<p class="mt-3 text-justify">TEAM VALIANT is an organisation was founded on June 2018, and is based in Jakarta, Indonesia. Our core vision is to build the landscape for eSports in the country, and revamping the way an eSports organisation should be ran.</p>
		    				</div>
		    			</div>

		    			<div class="col-md-5 py-4 px-4">
		    				<div class="boxFooter text-white py-4 px-4">
		    					<h2 class="text-center">OUR SOCIAL MEDIA</h2>
			    				<div class="row d-flex justify-content-center">
									<div class="col-sm-5 text-center text-light socmed-item py-4">
										<a href="https://www.instagram.com/cristiano"><img src="<?= BASEURL; ?>/image/icon-ig.png"></a><br>
										@TeamValiant
									</div>
									<div class="col-sm-5 text-center text-light socmed-item py-4">
										<a href="https://twitter.com/twitter"><img src="<?= BASEURL; ?>/image/icon-tw.png"><br></a>
										@TeamValiant
									</div>
									<div class="col-sm-5 text-center text-light socmed-item py-4">
										<a href="https://www.facebook.com/zuck"><img src="<?= BASEURL; ?>/image/icon-fb.png"></a><br>
										Team Valiant
									</div>
									<div class="col-sm-5 text-center text-light socmed-item py-4">
										<a href="https://www.youtube.com/channel/UC-lHJZR3Gqxm24_Vd_AJ5Yw""><img src="<?= BASEURL; ?>/image/icon-yt.png"></a><br>
										Team Valiant
									</div>
								</div>
							</div>
		    			</div>
		    		</div>
				</div>
	    	</div>
	    	<!-- End Sosmed -->
	    	
	    	<!-- Copyright -->
	    	<div class="footer">
	    		<p class="text-center text-light">Team Valiant. 2020. All Right Reserved.</p>
	    	</div>
	    	<!-- End Copyright -->
	</footer>

<script src="<?= BASEURL; ?>/js/jquery-3.4.1.min.js"></script>
<script src="<?= BASEURL; ?>/js/popper.min.js"></script>
<script src="<?= BASEURL; ?>/js/bootstrap.min.js"></script>

<script type="text/javascript">
    var $backToTop = $(".backToTop");
    $backToTop.hide();
    $(window).on('scroll', function() {
      if ($(this).scrollTop() > 100) {
        $backToTop.fadeIn();
      } else {
        $backToTop.fadeOut();
      }
    });

    $backToTop.on('click', function(e) {
      $("html, body").animate({scrollTop: 0}, 500);
    });
</script>