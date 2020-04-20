<?php
/**
 * Template Name: Company
 */
?>
<?php get_header(); ?>

<style>
	#company .single-page__header-float-content{
		padding: 60px 20px;
		text-align: center;
	}
	
	#company .single-page__header-title-smallest{
		font-size:24px;
	}
	.section-bg--float.sbf_2 {
    padding-top: 50px;
    padding-bottom: 50px;
}
.single-page{
	padding-top: 0px;
}

</style>

	<article class="single-page single-page--company nospace-top nospace-bottom">
			<header id="company" class="single-page__header single-page__header-bg single-page__header-float" style="background-image: url('<?php echo types_render_field( "company-banner",array( "output"=> "raw")); ?>;')">
				<div class="container">
					<div class="single-page__header-float-content">
						<h1 class="single-page__header-title single-page__header-title-smallest"><?php echo types_render_field( "company-banner-title",array( "output"=> "raw")); ?></h1>
						<!--<div class="space space-30"></div><a class="btn btn--primary" href="<?php echo get_page_link(31); ?>">Contact Us</a>-->
					</div>
				</div>
			</header>
			<div class="single-page__content">
				<div class="container">
					<div class="row">
						<?php echo types_render_field( "company-content",array( "output"=> "html")); ?>
					</div>
				</div>
				<div class="space-section" style="    height: 50px;"></div>
				<div class="space space-40 bg-gradient"></div>
				
<div class="space space-30"></div>
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<?php echo types_render_field( "company-team-section",array( "output"=> "html")); ?>
							<div class="space space-30"></div>
						</div>
													<?php
$args = array(
    'post_type' => 'team',
    'posts_per_page' => '-1'
);

$post_query = new WP_Query($args);
if ($post_query->have_posts()):
    while ($post_query->have_posts()):
        $post_query->the_post();
?>			


						
						
						<div class="col-md-3 item-team">
							<div class="item-team--box">
								<figure><a class='colorblack2' href='<?php  echo get_permalink(); ?>'><img width='250' src="<?php the_post_thumbnail_url(); ?>" alt=""></a></figure>
								<div class="item-team--content">
									<h3><a class='colorblack2' href='<?php  echo get_permalink(); ?>'><?php the_title(); ?></a></h3>
									
									
									<span class="position"><?php echo types_render_field( "job-title2"); ?></span>
<!-- 									<ul class="item-team--content-socmed">
										<li><a href="<?php echo types_render_field( "linkedin-link"); ?>">
														<svg class="svg-sprite">
															<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#linkedin"></use>
														</svg></a></li>
									</ul> -->
								</div>
								<div class="space space-30"></div>
							</div>
						</div>
						
	<?php
    endwhile;
endif;
?>	


										</div>
				</div>
			
				
				
				<?php
                            if (have_posts()):
                                while (have_posts()):
                                    the_post();
         ?>
				
				<div class="section section-bg nospace-top nospace-bottom section-bg--float sbf_2" style="background-image: url('<?php echo types_render_field( "company-career-banner-image",array( "output"=> "raw")); ?>');">
					<div class="section-bg--mask"></div>
					<div class="container">
						<div class="row">
							<div class="col-lg-12">
								<div class="section-header">
									<h2 class="section-header__title text-red">Careers</h2>
								</div>
								<div class="section-content jjcareer">
									<?php echo types_render_field( "company-career-section",array( "output"=> "html")); ?>
									<div class="space space-30"></div>
									<p class="text-left">
										<a class="btn btn_line btn_line__primary" style="margin-right: 20px;" href="<?php echo types_render_field( "company-send-cv-email",array( "output"=> "raw")); ?>">Submit CV</a>
									<?php if (types_render_field( "show_vacancies",array( "output"=> "raw"))): ?>
										<a class="btn btn_line btn_line__primary" href="<?php echo home_url(); ?>/current-vacancies">Current Vacancies</a>
									<?php endif; ?>
									</p>
								</div>
							</div>
<!-- 							<div class="col-lg-6">
								<div class="space space-30 visible-1024"></div>
								<div class="section-header">
									<h2 class="section-header__title text-red">Latest Vacancies</h2>
								</div>
								<div class="section-content">
									<?php echo types_render_field( "company-vacancy",array( "output"=> "html")); ?>
								</div>
							</div> -->
						</div>
					</div>
				</div>
			</div>
		</article>
		
			     <?php
                                    endwhile;
                                endif;

             ?>
			<div class="container">
				<div class="row">
					<div class="col-lg-10 offset-1">
						<?php the_content(); ?>
					</div>
				</div>
			</div>


<?php get_footer(); ?>