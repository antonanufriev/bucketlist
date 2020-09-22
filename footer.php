<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>


		<a href="#" id="back-to-top"><img src="<?php echo get_template_directory_uri(); ?>/images/all_img_topbtn.png" alt="ページトップへ"></a>

<div id="footer">
	<div class="container">
		<div class="footer_line"></div>
		<div class="footer_titlebox"><h2 class="footer_title">マーケティング、WEB制作、動画制作のご依頼はこちら</h2></div>
		<div class="footerarea">
			<div class="footerarea_left">
				<a href="<?php echo get_option('home'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/footer_img_logo.png" width="148" class="img-fluid" /></a>
			</div>
			<div class="footerarea_right">
				<div class="footerbox">
					<div class="footerbox_left">
						<div class="text1a"><div class="phonebox">TEL</div> お気軽にお問い合わせください。</div>
						<div class="phonenumber">06-000-0000</div>
						<div class="text2">営業時間 10:00 - 18:00</div>	
					</div>
					<div class="footerbox_right">
						<div class="button"><a href=""><div class="btn">お問い合わせはこちら</div></a></div>
					</div>
				</div>					
					<div class="text3">〒550-0014 ⼤阪市⻄区北堀江2-6-18 アドバンス⼼斎橋NEXTURE 501号室</div>

			</div>
		</div>
	</div>
</div>

</div><!-- #wrapper -->

<?php wp_footer(); ?>

<script>
    (function($){
           
        if ($('#back-to-top').length) {
            var scrollTrigger = 100,
                backToTop = function () {
                    var scrollTop = $(window).scrollTop();
                    if (scrollTop > scrollTrigger) {
                        $('#back-to-top').addClass('show');
                    } else {
                        $('#back-to-top').removeClass('show');
                    }
                };
            backToTop();
            $(window).on('scroll', function () {
                backToTop();
            });
            $('#back-to-top').on('click', function (e) {
                e.preventDefault();
                $('html,body').animate({
                    scrollTop: 0
                }, 700);
            });
        }     
    })(jQuery);
</script>

<script>
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });
</script>
	
<script>
	var navigation = new Navigation(document.getElementById("navigation"));	
</script>

</body>
</html>
