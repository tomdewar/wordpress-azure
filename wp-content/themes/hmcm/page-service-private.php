<?php
/**
 * Template Name: Service Private
 */
?>
<?php get_header(); ?>

<style>
.section-divide__content .section-header {
    margin-bottom: 0;
}
	
	.section-divide.sd_3 .section-divide__content {
    padding-bottom:0;
	padding-top: 110px;
		 }
.section-divide p {
    font-size:16px;
}
	
/* 	li {
    list-style: disc;
}
	
	ul{
		padding-left:15px;
	} */
	
	
</style>


<?php $ttt = types_render_field( "testimonials-title"); ?>

		<section class="section section-divide sd_2 sd_3 sd_4 jjserve home-divide-one service99" style="background-image: url(<?php echo types_render_field( "p-service-banner",array( "output"=> "raw")); ?>)">
			<div class="container">
				<div class="row">
					<div class="col-5">
						<div class="bg-white__rgb neg74">
							<div class="section-divide__content">
								<header class="section-header clear-br--1024">
									<?php echo types_render_field( "p-service-title",array( "output"=> "html")); ?>
								</header>
								<div class="section-content">
									<div>
										<?php echo types_render_field( "p-service-text",array( "output"=> "html")); ?>
										<span class="space space-30"></span>
									</div>
									<!--<p><a class="btn btn--secondary bts-2" href="<?php echo get_page_link(29); ?>"><span>Learn More</span></a></p>-->
								</div>
							</div>
						</div>
					</div>
					<div class="col-7">&nbsp;</div>
				</div>
			</div>
		</section>
		<div class="section-general">
			<div class="space-section" style='    height: 37px;'></div>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2 class="h2 font-bold text-red"><?php echo types_render_field( "p-service-plan-title"); ?></h2>
						<h3 class="h3-small text-red font-medium"><?php echo types_render_field( "p-service-plan-subtitle"); ?></h3>
						<p><?php echo types_render_field( "p-service-plan-text"); ?></p>
<span class="space space-20"></span>
						<div class="row">
							<div class="col-md-6">
								<h3 class="h3 text-red font-bold"><?php echo types_render_field( "p-service-plan-solution-title"); ?></h3>
									<?php echo types_render_field( "p-service-plan-solution",array( "output"=> "html")); ?>
								<div class="space space-30 visible-768"></div>
							</div>
							<div class="col-md-6">
								<h3 class="h3 text-red font-bold"><?php echo types_render_field( "p-service-plan-techniques-title"); ?></h3>
									<?php echo types_render_field( "p-service-plan-techniques",array( "output"=> "html")); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="space-section ss_2"></div>
		</div>
		<div class="sep-content">
			<div class="container">
				<div class="sep"></div>
			</div>
		</div>
		<div class="section-general">
<!-- 			<div class="space-section ss_2"></div> -->
			<span class="space space-20"></span>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2 class="h2 font-bold text-red"><?php echo types_render_field( "p-service-optimise-title"); ?></h2>
						<h3 class="h3-small text-red font-medium"><?php echo types_render_field( "p-service-optimise-subtitle"); ?></h3>
						<p><?php echo types_render_field( "p-service-optimise-text"); ?></p>
						<span class="space space-20"></span>
						<div class="row">
							<div class="col-md-6">
								<h3 class="h3 text-red font-bold"><?php echo types_render_field( "p-service-optimise-solution-title"); ?></h3>
									<?php echo types_render_field( "p-service-optimise-solution",array( "output"=> "html")); ?>
								<div class="space space-30 visible-768"></div>
							</div>
							<div class="col-md-6">
								<h3 class="h3 text-red font-bold"><?php echo types_render_field( "p-service-optimise-techniques-title"); ?></h3>
									<?php echo types_render_field( "p-service-optimise-techniques",array( "output"=> "html")); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
<!-- 			<div class="space-section ss_2"></div> -->
			<span class="space space-20"></span>
		</div>
		<div class="sep-content">
			<div class="container">
				<div class="sep"></div>
			</div>
		</div>
		<div class="section-general">
<!-- 			<div class="space-section ss_2"></div> -->
			<span class="space space-20"></span>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2 class="h2 font-bold text-red"><?php echo types_render_field( "p-service-measure-title"); ?></h2>
						<h3 class="h3-small text-red font-medium"><?php echo types_render_field( "p-service-measure-subtitle"); ?></h3>
						<p><?php echo types_render_field( "p-service-measure-text"); ?></p>
						<span class="space space-20"></span>
						<div class="row">
							<div class="col-md-6">
								<h3 class="h3 text-red font-bold"><?php echo types_render_field( "p-service-measure-solution-title"); ?></h3>
									<?php echo types_render_field( "p-service-measure-solution",array( "output"=> "html")); ?>
								<div class="space space-30 visible-768"></div>
							</div>
							<div class="col-md-6">
								<h3 class="h3 text-red font-bold"><?php echo types_render_field( "p-service-measure-techiques-title"); ?></h3>
									<?php echo types_render_field( "p-service-measure-techiques",array( "output"=> "html")); ?>
							</div>
						</div>
					</div>
				</div>
<!-- 				<div class="space-section"></div> -->
				<span class="space space-20"></span>
			</div>
		</div>
		<!-- .section-general-->
		<div class="space space-30 bg-gradient"></div>
		<div class="section-article__list bg-white__light">
<!-- 			<div class="space-section"></div> -->
			<span class="space space-20"></span>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<?php echo types_render_field( "results",array( "output"=> "html")); ?>
<!-- 		<span class="space space-30"></span> -->
						<span class="space space-15 invisible-1024"></span>
					</div>



										<?php
$args = array(
    'post_type' => 'resource',
    'posts_per_page' => '-1',
     'relation' => 'AND',                      //(string) - Possible values are 'AND' or 'OR' and is the equivalent of running a JOIN for each taxonomy
      array(
        'taxonomy' => 'content-types',                //(string) - Taxonomy.
        'field' => 'slug',                    //(string) - Select taxonomy term by ('id' or 'slug')
        'terms' => array( 'case-studies' ),    //(int/string/array) - Taxonomy term(s).
        'include_children' => true,           //(bool) - Whether or not to include children for hierarchical taxonomies. Defaults to true.
        'operator' => 'IN'                    //(string) - Operator to test. Possible values are 'IN', 'NOT IN', 'AND'.
      )
    
);

$post_query = new WP_Query($args);
if ($post_query->have_posts()):
    while ($post_query->have_posts()):
        $post_query->the_post();
        
        
        	
			if (types_render_field( "resourceprivate") == 'private' || types_render_field( "resourceprivate")  == 'private, public' ) :
?>

					<div class="col-md-4 item-article">
						<a class='colorblack' href='<?php  echo get_permalink(); ?>'>
						<div class="item-article--box">
							<figure>
							
								<?php if (has_post_thumbnail() ): ?>
												<img src="<?php the_post_thumbnail_url(); ?>" alt="">
											
										<?php elseif (types_render_field( "thumbnail",array( "output"=> "html"))): ?>
												<?php echo types_render_field( "thumbnail"); ?>
										<?php endif; ?>							
							
							</figure>
							<div class="item-article--content">
								<h3><?php the_title(); ?></h3>
								<!-- <span class="text-link text-link--primary text-link--has-icon font-bold" href="#">Learn more<i class="arrow-right"></i></span> -->
							</div>
						</div>
						</a>
					</div>
					
					
									
<?php
		endif;				
    endwhile;
endif;

?>
				</div>
			</div>
<!-- 			<div class="space-section"></div> -->
			<span class="space space-20"></span>
		</div>
		<!-- .section-article__list-->
		<div class="section-cta__sep">
			<div class="container">
				<div class="row align-items__stretch clear-br--1024 mt0">
					<div class="col-lg-8 first">
						
						<h2 class="h2 font-bold text-red mb20"><?php echo $ttt; ?></h2>
						
						<div class="testimonial-slider__wrapper">
							<div class="testimonial-slider">
								
									
					
										<?php
$args = array(
    'post_type' => 'testimonial',
    'posts_per_page' => '-1'
);

$post_query = new WP_Query($args);
if ($post_query->have_posts()):
    while ($post_query->have_posts()):
        $post_query->the_post();
        if (types_render_field( "testimonials-type") == 'private' ||types_render_field( "testimonials-type") == 'both') :

?>									
									<div class="item-quote__simple">
										<figure><img width='200' src="<?php the_post_thumbnail_url(); ?>" alt=""></figure>
										<?php the_content(); ?>
										<h3 class="h3-small font-bold"><?php the_title(); ?></h3><span class="position"><?php echo types_render_field( "job-title"); ?></span>
									</div>
									
									
<?php
	endif;
    endwhile;
endif;

?>					
									
								
							
							</div>
							<div class="custom-nav"><a class="custom-nav__prev" href="javascript:void(0)">
											<svg class="svg-sprite custom-nav__icon">
												<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#chevron-left"></use>
											</svg></a><a class="custom-nav__next" href="javascript:void(0)">
											<svg class="svg-sprite custom-nav__icon">
												<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#chevron-right"></use>
											</svg></a></div>
						</div><span class="space space-30 visible-1024"></span><span class="space space-15 visible-1024"></span>
					</div>
					<div class="col-lg-4 last d-flex align-items__center">
						<div class="item-cta__simple text-center">
											<?php
                            if (have_posts()):
                                while (have_posts()):
                                    the_post();
         ?>
							<h2 class="h2 font-light text-red">
								<?php echo types_render_field( "p-service-contact-text"); ?>
							</h2>
										     <?php
                                    endwhile;
                                endif;

             ?>
							<div class="space space-15"></div><a class="btn btn--primary btp-2" href="<?php echo get_page_link(31); ?>">Contact Us</a>
						</div>
					</div>
				</div>
			</div>
			<div class="space-section"></div>
		</div>
		<!-- .section-cta__sep-->
	


<?php get_footer(); ?>