<?php get_header(); ?>

		<?php
                            if (have_posts()):
                                while (have_posts()):
                                   the_post();
                                  
                            
                                  
         ?>
         

		
		
		
		
				<article class="single-page single-page__author">
			<div class="container c2">
				<div class="row">
					<div class="col-md-12">
						<div class="item-director">
							<div class="item-director--box">
								<figure><img width='180' src="<?php the_post_thumbnail_url(); ?>" alt=""></figure>
								<div class="item-director--content">
									<h1 class="item-director--title single-page__header-title single-page__header-title-smallest stst_4"><?php the_title(); ?></h1>
									<h2 class="item-director--subtitle single-page__header-subtitle nospace-top sphs_2" style="margin-bottom:0;"><?php echo types_render_field( "job-title2"); ?></h2>
									<ul class="item-director--content--socmed text-left">
										<?php if (types_render_field( "linkedin-link")!=''): ?>
										<li><a target='_blank' href="<?php echo types_render_field( "linkedin-link"); ?>">
												<img style="display:block; width: 30px; margin-top: 5px" src="<?php echo get_template_directory_uri() ?>/assets/images/linkedin.png">
											</a>
										</li>
										<?php endif; ?>

									</ul>
												<div class="space space-30"></div>
									<?php the_content(); ?>									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
<?php
					
$id = get_the_ID();	

			
$args = array(
    'post_type' => 'post',
    'posts_per_page' => '3',
    'toolset_relationships' => array(
            'role' => 'child',
            'related_to' => $id, // ID of starting post
            'relationship' =>'team-post',
        ),
);
					
$post_query = new WP_Query($args);
					
if ($post_query->have_posts()): 		
					
?>

			
			
				<div class="space-section" style="    height: 35px;"></div>
			<div class="space space-15 bg-gradient"></div>
			<div class="space-section"  style="    height: 35px;"></div>


					


			<div class="container c2">
				<div class="row">
					<div class="col-md-12">
						<h2 class="h2-small font-bold text-red nospace-bottom">Articles from this author:</h2><span class="space space-15"></span><span class="space space-15 invisible-1024"></span>
					</div>
					
					<?php
						
					
				/*	$writer = toolset_get_related_post( 
				        65,
				        'team-post', //slug of relationship
				        'child'
				    );
					var_dump($writer); */
						
					?>
					
											
<?php
    while ($post_query->have_posts()):
        $post_query->the_post();
?>


					
					<div class="col-md-4 item-article">
						<div class="item-article--box">
							<a class='colorblack' href='<?php  echo get_permalink(); ?>'>
								<figure><img src="<?php the_post_thumbnail_url(); ?>" alt=""></figure>
								<div class="item-article--content">
									<h3><?php the_title(); ?></h3>
									<p><?php the_excerpt(); ?></p><a class="text-link text-link--primary text-link--has-icon font-bold ">Learn more<i class="arrow-right"></i></span>
								</div>
							</a>
						</div>
					</div>

<?php

    endwhile;
endif;


?>
				</div>
			</div>
		</article>


		
		     <?php
                                    endwhile;
                                endif;

             ?>


<?php get_footer(); ?>