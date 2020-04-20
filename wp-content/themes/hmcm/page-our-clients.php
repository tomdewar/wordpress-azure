<?php
/**
 * Template Name: Our Clients
 */
?>
<?php get_header(); ?>

<style>
	@media (max-width: 992px){
	
		.item-cta__simple .btn--primary.btp-2 {
		    border: none !important;
		    margin-top: 10px;
		    margin-left: 0px;
		}

	}
	
</style>


		<article class="single-page nospace-bottom our-clients">
			<!-- header-->
			
			
				<?php
                            if (have_posts()):
                                while (have_posts()):
                                    the_post();
         ?>
			<div class="section-cta__sep mt000">
				<div class="container">
					<div class="row align-items__stretch clear-br--1024">
						<div class="col-lg-8 first">
							<div class="item-quote__simple">
								<div class='row'>
								<h1 class="item-quote__simple-heading text-red">Our Clients</h1>
								
								<?php the_content(); ?>
								
								</div>
								
									<?php
		                                    endwhile;
		                                endif;
		
		             ?>
								
								<div class="space space-30 visible-768"></div>
								<div class='row'>
								<h2 class="h2 font-bold nospace-bottom" style="margin-top: 50px;font-size: 20px"><?php echo types_render_field( "first-title",array( "output"=> "html")); ?></h2><span class="space space-30"></span><span class="space space-15 invisible-1024"></span>
								
		             
		             
		             		   
			             		   <?php
							$args = array(
							    'post_type' => 'client',
							    'posts_per_page' => '9999999',
							        'tax_query' => array(                     //(array) - use taxonomy parameters (available with Version 3.1).
									    'relation' => 'AND',                      //(string) - Possible values are 'AND' or 'OR' and is the equivalent of running a JOIN for each taxonomy
									      array(
									        'taxonomy' => 'clients-type',                //(string) - Taxonomy.
									        'field' => 'slug',                    //(string) - Select taxonomy term by ('id' or 'slug')
									        'terms' => array( 'private' ),    //(int/string/array) - Taxonomy term(s).
									        'include_children' => true,           //(bool) - Whether or not to include children for hierarchical taxonomies. Defaults to true.
									        'operator' => 'IN'                    //(string) - Operator to test. Possible values are 'IN', 'NOT IN', 'AND'.
									      )
									    )
							);
							
							$post_query = new WP_Query($args);
							if ($post_query->have_posts()):
							    while ($post_query->have_posts()):
							       $post_query->the_post();
						?>
						
						<div class="col-md-3 item-client col-6">
							<div class="item-client--box"><img src="<?php the_post_thumbnail_url(); ?>" alt=""></div>
						</div>
						
					<?php
		                                    endwhile;
		                                endif;
		
		             ?>
		            		       
		            		       
		            		             
		             

		             		   </div>	   
		             
		             <?php
                            if (have_posts()):
                                while (have_posts()):
                                    the_post();
         ?>
         
		             <div class='row'>
								<h2 class="h2 font-bold nospace-bottom" style="margin-top: 50px;font-size: 20px"><?php echo types_render_field( "second-title",array( "output"=> "html")); ?></h2><span class="space space-30"></span><span class="space space-15 invisible-1024"></span>
								
		             	<?php
		                                    endwhile;
		                                endif;
		
		             ?>
		            		
		             
		             		   
			             		   <?php
							$args = array(
							    'post_type' => 'client',
							    'posts_per_page' => '9999999',
							           'tax_query' => array(                     //(array) - use taxonomy parameters (available with Version 3.1).
									    'relation' => 'AND',                      //(string) - Possible values are 'AND' or 'OR' and is the equivalent of running a JOIN for each taxonomy
									      array(
									        'taxonomy' => 'clients-type',                //(string) - Taxonomy.
									        'field' => 'slug',                    //(string) - Select taxonomy term by ('id' or 'slug')
									        'terms' => array( 'public' ),    //(int/string/array) - Taxonomy term(s).
									        'include_children' => true,           //(bool) - Whether or not to include children for hierarchical taxonomies. Defaults to true.
									        'operator' => 'IN'                    //(string) - Operator to test. Possible values are 'IN', 'NOT IN', 'AND'.
									      )
									    )
							);
							
							$post_query = new WP_Query($args);
							if ($post_query->have_posts()):
							    while ($post_query->have_posts()):
							       $post_query->the_post();
						?>
						
						<div class="col-md-3 item-client col-6">
							<div class="item-client--box"><img src="<?php the_post_thumbnail_url(); ?>" alt=""></div>
						</div>
						
					<?php
		                                    endwhile;
		                                endif;
		
		             ?>
		            		       
		            		       
		            		             
		             

		             		   </div>	  
								
								
							</div>
						</div>
						<div class="col-lg-4 last d-flex align-items__center" style="height: 300px;">
							 <?php
                            if (have_posts()):
                                while (have_posts()):
                                    the_post();
         ?>
         
							<div class="item-cta__simple text-center">
								<h2 class="h2 font-light text-red">
									<?php echo types_render_field( "right-hand-text",array( "output"=> "html")); ?>
									
								</h2>
								<div class="space space-15"></div><a class="btn btn--primary btp-2" href="<?php echo get_page_link(31); ?>">Contact Us</a>
							</div>
								<?php
		                                    endwhile;
		                                endif;
		
		             ?>
		            		
						</div>
					</div>
				</div>
				<div class="space-section"></div>
			</div>
			
					
					
			<div class="section-client__list">
				<div class="space-section"></div>
		
				<div class="space-section"></div>
			</div>
		</article>


<?php get_footer(); ?>