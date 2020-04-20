<?php get_header(); ?>

		<?php
                            if (have_posts()):
                                while (have_posts()):
                                    the_post();
         ?>
         
		<article class="single-page page-single-page">
			<header class="single-page__header">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<h1 class="single-page__header-title clear-br--1024"><?php the_title(); ?></h1>
						</div>
					</div>
				</div>
			</header>
			<div class="single-page__content">
				<div class="container">
					<div class="row">
						<div class="col-12 jmaincontent">
							<?php the_content(); ?>
						</div>
					</div>
				</div>
			</div>
		</article>
		
		     <?php
                                    endwhile;
                                endif;

             ?>


<?php get_footer(); ?>