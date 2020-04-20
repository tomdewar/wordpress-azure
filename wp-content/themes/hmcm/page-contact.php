<?php
/**
 * Template Name: Contact
 */
?>
<?php get_header(); ?>
<style>
	.wpforms-field-hp{
		display:none;
	}
	
	.btn{
		margin-top:20px;
	}

		form [type="text"], form [type="email"], form [type="tel"], form [type="password"], form select, form textarea, form input {
    border-radius: 0;
    border: none;
    background: #F0F1F1;
	padding: 12px 16px;
    width: 100%;
    font-family: "Roboto", sans-serif;
    margin: 15px 0;
}
	
	label{
		display:none;
	}
</style>

		<div class="space-section__first"></div>
		<div class="section-contact">
			<div class="space-section jsm"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-6 fullwidth-1024" style="padding-right: 60px">
						<h2 class="text-left h2 font-bold text-red nospace-bottom"><?php echo types_render_field( "contact-page-title"); ?></h2><span class="space space-30"></span><span class="space space-15 invisible-1024"></span>
						<div class="item-contact-information ici_2">
							
							<div class="item_content">
								<h3 class="text-red h3-small font-medium have-icon__left">
											<svg class="svg-sprite size-16 fill-red">
												<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#map-marker-small"></use>
											</svg><span>LONDON</span>
								</h3>
								<div class="item_subcontent">
									<div class="text-16 text-red">
										<?php echo types_render_field( "london-office-address",array( "output"=> "html")); ?>
										<span class="space space-30 invisible-768"></span><span class="space space-15 visible-768"></span>
									</div>
									<p class="text-16">
										<?php echo types_render_field( "london-office-contact",array( "output"=> "html")); ?>
									</p>
								</div>
							</div>
							<!-- .item_content-->
							<div class="item_map">
								<?php echo types_render_field( "london-office-map",array( "output"=> "html")); ?>
							</div>
							<!-- .item_map-->
						</div>
						<span class="space space-30 invisible-768"></span><span class="space space-30 invisible-768"></span><span class="space space-30"></span>
						<!-- .item-contact-information-->
						<div class="item-contact-information ici_2">
							<div class="item_content mb30">
								<h3 class="text-red h3-small font-medium have-icon__left">
											<svg class="svg-sprite size-16 fill-red">
												<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#map-marker-small"></use>
											</svg><span>HONG KONG</span>
								</h3>
								<div class="item_subcontent">
									<div class="text-16 text-red"><?php echo types_render_field( "hk-office-address",array( "output"=> "html")); ?></div><span class="space space-30 invisible-768"></span><span class="space space-15 visible-768"></span>
									<p class="text-16">
										<?php echo types_render_field( "hk-office-contact",array( "output"=> "html")); ?>
									</p>
								</div>
							</div>
							<div class="item_map">
								<?php echo types_render_field( "hk-office-map",array( "output"=> "html")); ?>
							</div>
						</div>
						
						<span class="space space-30"></span><span class="space space-30 "></span><span class="space space-30"></span>
						<!-- .item-contact-information-->
						<div class="item-contact-information ici_2">
							<?php echo types_render_field( "media-enquiries",array( "output"=> "html")); ?>
						</div>
						<!-- .item-contact-information-->
					</div>
					<div class="col-md-6 fullwidth-1024 section-contact__form" style="padding-left: 60px">
						<h2 class="text-left h2 font-bold text-red nospace-bottom"><?php echo types_render_field( "contact-form-title"); ?></h2><span class="space space-30"></span><span class="space space-15 invisible-1024"></span>
						<?php echo types_render_field( "contact-form",array( "output"=> "html")); ?>
						<?php the_content(); ?>
					
<!-- 						<form class="form-contact__page row" id='form-subscribe2'>
							<div class="form-field col-md-6">
								<input type="text" placeholder="First Name" name='fname' id='fname' required>
							</div>
							<div class="form-field col-md-6">
								<input type="text" placeholder="Last Name" name='lname' id='lname' required>
							</div>
							<div class="form-field col-md-12">
								<input type="text" placeholder="Company Name" name='company' id='company' required>
							</div>
							<div class="form-field col-md-12">
								<input type="text" placeholder="Phone" name='phone' id='phone' required>
							</div>
							<div class="form-field col-md-12">
								<input type="email" placeholder="email"  name='jemail' id='jemail' required>
							</div>
							<div class="form-field col-md-12">
								<input type="text" placeholder="Subject"  name='subject' id='subject' required>
							</div>
							<div class="form-field col-md-12">
								<textarea cols="0" rows="6" placeholder="Message"  name='jmessage' id='jmessage' required></textarea>
							</div>
							<div class="form-field col-md-12 text-center">
								<input class="btn btn_line btn_line__primary font-bold" type="submit" id='thesubmit2' value="Submit">
								<p class="submitting">Please wait...we are submitting the form...</p>
							</div>
							
						</form> -->
					</div>
				</div>
			</div>
			<div class="space-section"></div>
		</div>


<?php get_footer(); ?>

   <script>


            $(document).ready(function(){


                $('#thesubmit2').click(function (e) {
	                
	            
	          
                    e.preventDefault();
                    $('#thesubmit2').hide();
                    $('.submitting').show();
                    $.post('<?php echo admin_url( 'admin-ajax.php' );?>', {

                        action: 'my_ajax_action2', 
                        jemail: $('#jemail').val(),
                        fname: $('#fname').val(),
                        lname: $('#lname').val(),
                        company: $('#company').val(),
                        phone: $('#phone').val(),
                        subject: $('#subject').val(),
                        jmessage: $('#jmessage').val(),

                    }, function(data) {
						
					  alert(data);
					   $('.submitting').html('Your form is submitted! Thank you!');

                    });


                   

                });


            });


        </script>