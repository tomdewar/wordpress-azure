<?php get_header(); ?>


		<?php
			
			$obj_id = get_queried_object_id();
$current_url = get_permalink( $obj_id );
			
                            if (have_posts()):
                                while (have_posts()):
                                   the_post();
                                
                                  
                            
                                  
         ?>
         <?php
		 							
		 							   $tagarray = [];
                                  $post_tags = get_the_tags();
                                  
                                   foreach( $post_tags as $tag ) {
								    	$tagarray[] =  $tag->slug; 
								    }
                                   $jid = get_the_ID();		 							
		 							?>
<!-- <?php var_dump(get_post_meta(get_the_ID())); ?> -->
<style>
	.section-header p{
		color:#CB0000;
	}
	
	.btn{
		margin-top:20px;
	}
	
	.wpforms-field-number{
		margin: 20px 0;
	}
	
</style>

	    <?php if (get_the_post_thumbnail_url()): ?>
		<!--
		<section class="section section-divide sd_2 sd_3 sd_4 home-divide-one" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
			<div class="container">
				<div class="row">
					<div class="
						
						<?php if(types_render_field( "resource-assets") != 1) : ?>
							
						<?php endif; ?>
								
									
							col-5 bg-white__rgb mln74">
						<div class="section-divide__content">
 							<header class="section-header clear-br--1024">	
	 							
								<?php echo types_render_field( "resource-introduction",array( "output"=> "html")); ?>
							</header>  
						</div>
					</div>
				
				</div>
			</div>
		</section>
		-->
		<!-- insight -->
		<section class="section section-divide sd_2 sd_3 sd_4 home-divide-one" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
			<div class="container">
				<div class="row">
					<div class="col-5">
						<div class="section-divide__content bg-white__rgb neg74">
 							<header class="section-header clear-br--1024">	
								<?php echo types_render_field( "resource-introduction",array( "output"=> "html")); ?>
							</header>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- insight -->
		<?php endif; ?>
		<article <?php if (get_the_post_thumbnail_url()): ?>class="single-page single-page__divider rwd28" style="padding-top:50px;padding-bottom:50px" <?php else: ?> style="padding-top:130px;padding-bottom:60px" class="single-page single-page__divider rwd1"<?php endif; ?>>
			<div class="container">
				<div class="row">
					<div class=" <?php echo types_render_field( "resource-assets") == 0 ? "col-12" : "col-8"; ?>">
						
						<?php
						  if (!types_render_field( "not-show-main-title")):
						?>
						<header class="single-page__header"><div class="single-page__header-meta sphm_2">			<?php
								
						$id = get_the_ID();
		
										
$terms =  get_the_terms( $id , 'content-types' );

foreach ($terms as $term){
	echo $term->name.' ';
}

											
										?></div>
							<h1 class="single-page__header-title single-page__header-title-smallest stst_3"><?php the_title(); ?>	</h1>
							
							<?php endif; ?>
						</header>
						<div class="single-page__content text-14__all">
						<!--	<figure class="align-left"><img src="<?php echo types_render_field( "small-image",array( "output"=> "html")); ?>" width='200' alt=""></figure> -->
							<?php the_content(); ?>
						</div>
						
						<div class="single-page__footer">
							<div class="single-page__share">
								<h5 class="single-page__share_title">Share this</h5>
								<ul class="single-page__share_list">
									<li><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $current_url; ?>" target="_blank">
													<svg class="svg-sprite">
														<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#linkedin"></use>
													</svg></a></li>
									<li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $current_url; ?>" target="_blank">
													<svg class="svg-sprite">
														<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#facebook"></use>
													</svg></a></li>
									<li><a href="https://twitter.com/share?url=<?php echo $current_url; ?>&text=<?php the_title(); ?> via @HartleyMcMaster" target="_blank">
													<svg class="svg-sprite">
														<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#twitter"></use>
													</svg></a></li>
								</ul>
							</div>
						</div>
						<!--
						<div class="post-navigation">
							<div class="prev-post">
								<?php previous_post_link('%link', "<- PREVIOUS"); ?>
							</div>
							<div class="next-post">
								<?php next_post_link('%link', "NEXT ->"); ?>
							</div>
						</div>
						-->
						
					</div>
					<?php if(types_render_field( "resource-assets") == 1) : ?>
					<div class="col-4 content_divider single-page__divider-overlap jform7">
						<div class="space space-30 visible-1024"></div>
						<h3 class="single-page__content-title text-left single-page__content-title-smaller">
							
							<?php
								
								if (!types_render_field( "form-heading")){
									echo 'Download Resources';
								}
								else{
									echo types_render_field( "form-heading");
								}
								
							?>
							
							
						</h3>
						<?php echo do_shortcode(types_render_field( "resource-form-shortcode")); ?>
<!-- 						<form class="form-download-resources" method="post" action='<?php echo get_page_link(27); ?>'>
							<div class="form-field">
								<input type="text" placeholder="First Name" name='firstname' required>
							</div>
							<div class="form-field">
								<input type="text" placeholder="Last Name" name='lastname' required>
							</div>
							<div class="form-field">
								<input type="email" placeholder="Email" name='jemail' required>
							</div>
							<div class="form-field">
								<input type="text" placeholder="Phone" name='phone' required>
							</div>
							<div class="form-field">
								<input type="text" placeholder="Company Name" name='company' required>
							</div>
							<div class="form-field form-field--info"><span class="space space-15"></span>
								<p>We use your personal information to send you market insights such as reports, indices, event information, as well as HMCM services.</p>
								<p>You can requrest to stop receiving communications from us at any time by email us at gpdr@hmcm.co.uk Learn more about how we process your personal data, read our privacy policy</p><span class="space space-30"></span>
							</div>
							<div class="form-field form-field--submit">
								<input type='hidden' value='<?php echo $id; ?>' name='jpostid'>
								<input class="btn btn_line btn_line__primary" type="submit" value="Download">
							</div>
						</form> -->
						<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("resource-form-text") ) : ?><?php endif;?>
						<div class="space space-30 visible-1024"></div>
					</div>
					<?php endif; ?>
				</div>
			</div>
		</article>

		     <?php
                                    endwhile;
                                endif;

             ?>
             
             <div class="space space-20 bg-gradient <?php
	if(types_render_field( "not-show-related-content"))	
		echo 'nodisplay';
	
?>" style="margin-bottom: 25px;"></div>

	<?php
$args = array(
    'post_type' => 'resource',
    'posts_per_page' => '3',
    'tag_slug__in' => $tagarray,
    'post__not_in' => array($jid)
);

$post_query = new WP_Query($args);
if ($post_query->have_posts()):

?>


<div class="container <?php
	if(types_render_field( "not-show-related-content"))	
		echo 'nodisplay';
	
?>" 
	

	
	
	>
	<div class="row">
		<h2 class="h2-small font-bold text-red nospace-bottom" style="padding-left: 15px;">Related Content :</h2><span class="space space-15"></span><span class="space space-15 invisible-1024"></span>
		
		<?php
    while ($post_query->have_posts()):
       $post_query->the_post();
?>

								
								<div class="col-md-4 item-downloadebook 
									
												<?php
								
						$id = get_the_ID();
		
										
$terms =  get_the_terms( $id , 'content-types' );

foreach ($terms as $term){
	echo $term->slug.'2 ';
}

											
										?>
											
												<?php
								
						$id = get_the_ID();
		
										
$terms =  get_the_terms( $id , 'topic' );

foreach ($terms as $term){
	echo $term->slug.'2 ';
}

											
										?>
										
											">
									<div class="item-downloadebook--content item-downloadebook--content2">
										<figure>
											<a class='colorblack' style='border:none' href='<?php  echo get_permalink(); ?>'>
												<img src="<?php the_post_thumbnail_url(); ?>" alt="">
											</a>		
										</figure>
										<div class="item-downloadebook--content-text">
											<h3>
												
			<?php
								
						$id = get_the_ID();
		
										
$terms =  get_the_terms( $id , 'content-types' );

foreach ($terms as $term){
	echo $term->name.' ';
}

											
										?>
												
											</h3>
											<p><a class='colorblack'  style='border:none'  href='<?php  echo get_permalink(); ?>'><?php the_title(); ?></a></p><span class="space space-15 visible-1024"></span>
											
											<!-- <a class="text-link text-link--primary text-link--has-icon" href="<?php  echo get_permalink(); ?>"><span class="font-bold">More</span><i class="arrow-right"></i></a> -->
										</div>
									</div>
									<div class="space space-30 invisible-1024"></div>
								</div>
								<!-- .item-downloadebook-->

					
		<?php
    endwhile;
    ?>
    	</div>
</div>
	<div class="space space-30"></div>
<div class="space space-30"></div>


<?php
endif;

?>


<?php get_footer(); ?>