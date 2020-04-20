<?php
/**
 * Template Name: Home v2
 */
?>
<?php get_header(); ?>


		<section class="section section-divide sd_2 sd_3 home-divide-one">
			<div class="container-fluid">
				<?php
					$args = array(
					'category_name' => 'featured',     
					'posts_per_page' => '1',
					'post_type' => 'post'
					);
					$post_query = new WP_Query($args);
					if ($post_query->have_posts()):
						while ($post_query->have_posts()):
							$post_query->the_post();
				?>	
				<div class="row">
					<div class="col-5 bg-red__linear">
						<div class="section-divide__content clear-br--1024">
							<header class="section-header"><span class="section-divide__content_meta"><a class="font-light" href="#">FEATURED</a><a class="font-medium" href="#"><?php echo get_the_date( 'M Y' ); ?></a></span>
								<h2 class="section-header__title"><?php the_title(); ?></h2>
						<div class="space space-30"></div>
							</header>
							<div class="section-content">
								<p class="text-16"><?php echo types_render_field( "post-excerpt"); ?></p>
														<div class="space space-30"></div>
						<div class="space space-30"></div>
						<div class="space space-30"></div>
														<div class="space space-30"></div>
						<div class="space space-30"></div>
						<div class="space space-30"></div>
								<p><a class="btn btn--transparent btn-has--icon" href="#"><span class="text-14">Learn More</span><i class="arrow-right"></i></a></p>
							</div>
						</div>
					</div>
					<div class="col-7 bg-image" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);"></div>
				</div>
				<?php
					endwhile;
				endif;

				?>
				
			</div>
		</section>
				<?php
                            if (have_posts()):
                                while (have_posts()):
                                    the_post();
         ?>
		<div class="section-data-work">
			<div class="space-section"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-12 clear-br--1024 text-center">
						<?php echo types_render_field( "home-first-section",array( "output"=> "html")); ?>
<span class="space space-30"></span><span class="space space-15 invisible-1024"></span>
					</div>
					<div class="col-md-4 item-expertise">
						<div class="item-expertise__box">
							<figure class="item-expertise__image"><img src="<?php echo types_render_field( "home-plan-image",array( "output"=> "raw")); ?>" alt=""></figure>
							<div class="item-expertise__content">
								<?php echo types_render_field( "home-plan-text",array( "output"=> "html")); ?>
							</div>
						</div>
					</div>
					<!-- .item-expertise-->
					<div class="col-md-4 item-expertise">
						<div class="item-expertise__box">
							<figure class="item-expertise__image"><img src="<?php echo types_render_field( "home-optimise-image",array( "output"=> "raw")); ?>" alt=""></figure>
							<div class="item-expertise__content">
								<?php echo types_render_field( "home-optimise-text",array( "output"=> "html")); ?>
							</div>
						</div>
					</div>
					<!-- .item-expertise-->
					<div class="col-md-4 item-expertise">
						<div class="item-expertise__box">
							<figure class="item-expertise__image"><img src="<?php echo types_render_field( "home-measure-image",array( "output"=> "raw")); ?>" alt=""></figure>
							<div class="item-expertise__content">
								<?php echo types_render_field( "home-measure-text",array( "output"=> "html")); ?>
							</div>
						</div>
					</div>
					<!-- .item-expertise-->
				</div>
			</div>
			<div class="space-section"></div>
		</div>
		<!-- .section-data-work-->
		<div class="space space-30 bg-gradient"></div>
		<div class="section-longterm-impact">
			<div class="space-section"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-12 clear-br--1024 text-center">
						<?php echo types_render_field( "home-second-section",array( "output"=> "html")); ?><span class="space space-30"></span><span class="space space-15 invisible-1024"></span>
					</div>
					<div class="col-md-6 item-longtermimpact first">
						<a href='<?php echo get_page_link(13); ?>'>
							<div class="item-longtermimpact__box">
								<figure class="item-longtermimpact__image nospace-bottom"><img src="<?php echo types_render_field( "home-public-sector-image",array( "output"=> "raw")); ?>" alt=""></figure>
								<div class="item-longtermimpact__content">
								
									<?php echo types_render_field( "home-public-sector-text",array( "output"=> "raw")); ?>
									
								</div>
							</div>
						</a>
					</div>
					<!--.item-longtermimpact-->
					<div class="col-md-6 item-longtermimpact last">
						<a href='<?php echo get_page_link(11); ?>'>
						<div class="item-longtermimpact__box">
							<figure class="item-longtermimpact__image nospace-bottom"><img src="<?php echo types_render_field( "home-private-sector-image",array( "output"=> "raw")); ?>" alt=""></figure>
							<div class="item-longtermimpact__content">
								<?php echo types_render_field( "home-private-sector-text",array( "output"=> "html")); ?>
							</div>
						</div>
						</a>
					</div>
					<!--.item-longtermimpact-->
				</div>
			</div>
		</div>
		<div class="section-brand section-brand-homepage nospace-bottom nospace-top">
			<div class="space-section"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-12 clear-br--1024 text-center">
						<h2 class="h2 font-bold nospace-bottom">Empowering Leading Organizations Worldwide</h2><span class="space space-30"></span><span class="space space-15 invisible-1024"></span>
					</div>
					<div class="col-md-12">
						<div class="brand-slider__wrapper"><div class="brand-sliders">
							<div class="brand-slide">
								<div class="brand-slide__wrapper"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/brand-high/home_office_two.png" alt=""></div>
							</div>
							<div class="brand-slide">
								<div class="brand-slide__wrapper"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/brand-high/british-airways.png" alt=""></div>
							</div>
							<div class="brand-slide">
								<div class="brand-slide__wrapper"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/brand-high/thomson-reuters.png" alt=""></div>
							</div>
							<div class="brand-slide">
								<div class="brand-slide__wrapper"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/brand-high/ministry-of-justice.png" alt=""></div>
							</div>
							<div class="brand-slide">
								<div class="brand-slide__wrapper"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/brand-high/royal_mail.png" alt=""></div>
							</div>
							<div class="brand-slide">
								<div class="brand-slide__wrapper"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/brand-high/hs2.png" alt=""></div>
							</div></div>
							<div class="custom-nav"><a class="custom-nav__prev" href="javascript:void(0)">
											<svg class="svg-sprite custom-nav__icon">
												<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#chevron-left"></use>
											</svg></a><a class="custom-nav__next" href="javascript:void(0)">
											<svg class="svg-sprite custom-nav__icon">
												<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#chevron-right"></use>
											</svg></a></div>
						</div>
						<p class="text-center"><span class="space space-30"></span><a class="btn btn--primary btp-2" href="#">See more clients</a></p>
					</div>
				</div>
			</div>
			<div class="space-section"></div>
		</div>
			     <?php
                                    endwhile;
                                endif;

             ?>

<?php get_footer(); ?>