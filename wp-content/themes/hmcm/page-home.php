<?php
/**
 * Template Name: Home
 */
?>
<?php get_header(); ?>

<section class="home-header">
<div class="container-fluid">
<div class="row">
<div class="col text-center">
	<h1 class="home-header__title">
		<span class="home-header__title--first"><?php echo types_render_field( "home-banner-slogan",array( "output"=> "raw")); ?></span>
		<span class="home-header__title--second"><?php echo types_render_field( "home-banner-tagline",array( "output"=> "raw")); ?></span>
		
	</h1>
	<span class="space space-10"></span>
	<span class="space space-30"></span>
	<p><a class="btn btn--primary" id='hmbtn' href="#">Learn More</a></p>
</div>
</div>
</div> 
</section><!-- / .home-header -->

		<div class="section-data-work" id='jjmainsection'>
			<div class="space-section"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-12 clear-br--1024 text-center">
						<h2 class="h2 font-bold text-red" style="margin-bottom: 10px;"><?php echo types_render_field( "home-first-section-slogan",array( "output"=> "raw")); ?></h2>
						<?php echo types_render_field( "home-first-section",array( "output"=> "html")); ?>
					</div>
					<span class="space space-30"></span>
					<span class="space space-30"></span>
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
						
						<h2 class="h2 font-light nospace-bottom"><?php echo types_render_field( "home-second-section-slogan",array( "output"=> "raw")); ?></h2><span class="space space-10"></span>
						
						
						<?php echo types_render_field( "home-second-section",array( "output"=> "html")); ?>
						<span class="space space-30"></span><span class="space space-15 invisible-1024"></span>
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
			<div class="space-section"></div>
		</div>
		<!-- .section-longterm-impact-->
		<section class="section section-divide sd_2 home-divide-one" id='longterm'>
			<div class="container-fluid">

				<div class="row">
					<div class="col-5 bg-red__linear">
						<div class="section-divide__content clear-br--1024">
							<header class="section-header"><span class="section-divide__content_meta"><a class="font-light" href="javascript:;">FEATURED</a><a class="font-medium" href="#"><?php echo types_render_field( "home-featured-date", array("format" =>'M Y')); ?></a></span>
								<h2 class="section-header__title"><a style='color:white' href='<?php echo types_render_field( "home-featured-link"); ?>'><?php echo types_render_field( "home-featured-title"); ?></a></h2>
							</header>
							<div class="section-content">
								<p class="text-16"><?php echo types_render_field( "home-featured-text"); ?></p>
								<p><a class="btn btn--transparent btn-has--icon" href="<?php echo types_render_field( "home-featured-link"); ?>"><span class="text-14">More</span><i class="arrow-right"></i></a></p>
							</div>
						</div>
					</div>
					<div class="col-7 bg-image" style="background-image: url(<?php echo types_render_field( "home-featured-image",array( "output"=> "raw")); ?>);"></div>
				</div>

			</div>
		</section>
		<div class="section-brand section-brand-homepage nospace-bottom nospace-top">
			<div class="space-section"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-12 clear-br--1024 text-center">
						<h2 class="h2 font-bold nospace-bottom"><?php echo types_render_field( "testimonial-heading"); ?></h2><span class="space space-30"></span><span class="space space-15 invisible-1024"></span>
					</div>
					<div class="col-md-12">
						<div class="brand-slider__wrapper"><div class="brand-sliders">
													<?php
$args = array(
    'post_type' => 'client',
    'posts_per_page' => '9999999'
);

$post_query = new WP_Query($args);
if ($post_query->have_posts()):
    while ($post_query->have_posts()):
       $post_query->the_post();
?>
							<div class="brand-slide">
								<div class="brand-slide__wrapper"><img src="<?php the_post_thumbnail_url(); ?>" alt=""></div>
							</div>
						
											
		<?php
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
						</div>
						<p class="text-center"><span class="space space-30"></span><a class="btn btn--primary btp-2" href="<?php echo get_page_link(38); ?>">See more clients</a></p>
					</div>
				</div>
			</div>
			<div class="space-section"></div>
		</div>

<script>
	$(document).ready(function(){
		$('#hmbtn').click(function(e){
			e.preventDefault();
			window.scrollTo({ 
			    top: $("#jjmainsection").offset().top-20, 
			    behavior: "smooth" 
			});
		});
	});
	
</script>

<?php get_footer(); ?>