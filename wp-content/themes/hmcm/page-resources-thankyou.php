<?php
/**
 * Template Name: Resources Thank You
 */
?>
<?php get_header(); ?>

		<article class="single-page nospace-bottom">
			<header class="single-page__header text-left nospace-bottom">
				<div class="container">
					<div class="row">
						<div class="col-md-12 clear-br--1024">
							<?php the_content(); ?>
														
							
						</div>
					</div>
				</div>
			</header>
			
			
		</article>
		
		<div class="space space-30 bg-gradient" style="    margin-top: 20px;
    margin-bottom: 36px;"></div>
		<div class="section-download__list">
			
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2 class="h2-small font-bold text-red nospace-bottom">Related Content:</h2><span class="space space-15"></span><span class="space space-15 invisible-1024"></span>
					</div>
									<?php
										
			
			$myarray[] =  types_render_field( "related-content-1");	
			$myarray[] =  types_render_field( "related-content-2");	
			$myarray[] =  types_render_field( "related-content-3");	
			$myarray[] =  types_render_field( "related-content-4");							
										
$args = array(
    'post_type' => array('resource','post'),
    'posts_per_page' => '4',
    'post__in'      => $myarray,
    'orderby' => 'rand'  
);

$post_query = new WP_Query($args);
if ($post_query->have_posts()):
    while ($post_query->have_posts()):
       $post_query->the_post();
?>
					<div class="col-6 col-lg-3 item-downloadebook">
						<div class="item-downloadebook--content">
							<figure>
							<a class='colorblack'  style='border:none'  href='<?php  echo get_permalink(); ?>'>
					
								<?php if (has_post_thumbnail() ): ?>
												<img src="<?php the_post_thumbnail_url(); ?>" alt="">
											
										<?php elseif (types_render_field( "thumbnail",array( "output"=> "html"))): ?>
												<?php echo types_render_field( "thumbnail"); ?>
										<?php endif; ?>
							</a>
							</figure>
							<div class="item-downloadebook--content-text">
								<a class='colorblack'  style='border:none'  href='<?php  echo get_permalink(); ?>'>
								<h3>
									
									
												<?php
								
						$id = get_the_ID();
		
										
$terms =  get_the_terms( $id , 'content-types' );

foreach ($terms as $term){
	echo $term->name.' ';
}

if (!$terms){
	echo 'Article';
}

											
										?>
									
									
								</h3>
								</a>
								<a class='colorblack'  style='border:none'  href='<?php  echo get_permalink(); ?>'><p><?php the_title(); ?></p></a>
								
								<!-- <a class="text-link text-link--primary text-link--has-icon" href="<?php  echo get_permalink(); ?>"><span class="font-bold">Download</span><i class="arrow-right"></i></a> -->
							</div>
						</div>
					</div>
			
		     <?php
                                    endwhile;
                                endif;

             ?>
				</div>
			</div>
			<div class="space-section"></div>
		</div>


<?php get_footer(); ?>