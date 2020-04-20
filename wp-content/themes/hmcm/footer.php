		<footer class="footer f2">
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-5">

							<div class="footer-widget__max_width"><div class="footer-widget footer-widget__text">
								<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("footer_one") ) : ?><?php endif;?>

</div>
								<div class="footer-widget footer-widget__subscribe footer-widget__space_border">
							<h3 class="footer-widget__title text-14"><?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("subscribe_text") ) : ?><?php endif;?></h3> 
									<a class="btn btn_line btn_line__white font-bold" href="<?php echo get_page_link(285); ?>">
										
										<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("subscribe-botton-text") ) : ?>
										<?php endif;?>
									</a>
								</div>
								<div class="footer-widget footer-widget__nav footer-widget__space_small">

									<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("footer_menu") ) : ?><?php endif;?>
								</div>
							</div>
						</div>
						<div class="col-3 offset-lg-1 clear-offset--1024">
							<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("footer_london") ) : ?><?php endif;?>
							<!--
							<div class="footer-widget footer-widget__information">
<h3 class="footer-widget__title footer-widget__title_icon mb-10">
									<svg class="svg-sprite">
										<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#map-marker-small"></use>
									</svg><span>LONDON</span></h3>
							<p>Redfren House <br>105 Ashley Road <br>St Albans <br>United Kingdom</p><span class="space space-30 invisible-768"></span><span class="space space-15 visible-768"></span>
							<p><a href="mailto:hmcm@hmcm.co.uk">hmcm@hmcm.co.uk</a></p></div>
							-->
							<div class="space space-45 invisible-1024"></div>

							<div class="space space-45 invisible-1024"></div>
							<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("footer_link") ) : ?><?php endif;?>
						
						</div>
						<div class="col-3">
							<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("footer_hk") ) : ?><?php endif;?>
							<!--
							<div class="footer-widget footer-widget__information">
<h3 class="footer-widget__title footer-widget__title_icon mb-10">
									<svg class="svg-sprite">
										<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#map-marker-small"></use>
									</svg><span>HONG KONG</span></h3>
							<p>11/F Crawford House <br>70 Queen's Road Central <br>Central <br>Hong Kong</p><span class="space space-30 invisible-768"></span><span class="space space-15 visible-768"></span>
							<p><a href="mailto:contact@hmcm.com.hk">contact@hmcm.com.hk</a></p></div>
							-->
						</div>
					</div>
				</div>
			</div>
			<!-- .footer-top-->
			<div class="footer-bottom">
				<div class="container">
					<div class="row">
						<div class="col-12 text-right"><div class="footer__copyright">
							
							
								<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("subscribe-under-text") ) : ?>
										<?php endif;?>
							
						</div></div>
					</div>
				</div>
			</div>
		</footer>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/plugins.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
		
		
		       <script>


            $(document).ready(function(){


//                 $('#thesubmit').click(function (e) {
	                
	          

//                     e.preventDefault();
//                     $.post('<?php echo admin_url( 'admin-ajax.php' );?>', {

//                         action: 'my_ajax_action', 
//                         jemail: $('#jemail').val(),

//                     }, function(data) {

//                        // alert(data);
// 					   $('.form-subscribe').html('<p>Thank you for your subscribe!</p>');

//                     });


                   

//                 });
					$('.btn-submit').click(function (e) {
	                
	          

                    e.preventDefault();
                    $.post('<?php echo admin_url( 'admin-ajax.php' );?>', {

                        action: 'my_ajax_action', 
                        jemail: $('#jemail').val(),

                    }, function(data) {

                       // alert(data);
					   $('.form-submit').html('<p>Thank you for your subscribe!</p>');

                    });


                   

                });


            });


        </script>
        
        <?php wp_footer(); ?>
		
		
	</body>
</html>