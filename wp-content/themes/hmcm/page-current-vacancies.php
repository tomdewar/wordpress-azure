<?php
/**
 * Template Name: Current Vacancies
 */
?>

<?php get_header(); ?>

         
		<article class="single-page">
			<header class="single-page__header">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="single-page__header-title clear-br--1024"><?php the_title(); ?></h1>
						</div>
					</div>
				</div>
			</header>
			<div class="single-page__content">
				<div class="container">
					<div class="row">
						<!-- <div class="col-md-8 offset-md-2"> -->
						<div class="col-md-12">
							<?php the_content(); ?>
							
						</div>
					</div>
				</div>
			</div>
		</article>


<?php get_footer(); ?>