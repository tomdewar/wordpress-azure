<?php
/**
 * Template Name: Insights
 */
?>
<?php get_header(); ?>

		<article class="single-page nospace-bottom rwd74 insightpage" style="padding-top: 125px;">
			<header class="single-page__header single-page__header-box nospace-bottom">
				<div class="container">
					<div class="row">
						<div class="col-8 fullwidth-1024">
							<h1 class="single-page__header-title single-page__header-title-smallest clear-br--1024">
								<?php echo types_render_field( "insight-title",array( "output"=> "raw")); ?>
							</h1><span class="space space-30"></span><span class="space space-15 invisible-1024"></span>
							<p class="text-14">
								<?php echo types_render_field( "insight-text",array( "output"=> "raw")); ?>
							</p>
						</div>
						<div class="col-4 fullwidth-1024">
							<div class="space space-20"></div>
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("signup-text") ) : ?>
										<?php endif;?>
						</div>
						<div class="col-12">
							<div class="single-page__header-box-sep"></div>
						</div>
						<div class="col-12">
							<!-- <ul class="single-page__header-box-categories invisible-768"> -->
							
							<div class="visible-768 vvv">
								<h4 class="sidebar-widget--title sidebar-widget--title-collapse vbvb" data-sidebar--collapse="collapse-sidebar--one">Topic <i class="arrow-down"></i></h4>	
								<div class="sidebar-widget--content" id="collapse-sidebar--one">
									
									<p class="newcheck active">
										<a href="<?php echo get_page_link(21); ?>">All</a>
									</p>

									
								<?php
								
								$categories = get_categories();

								
								foreach($categories as $category){
									
								?>
									
									<p class="newcheck">
										
										<?php  echo '<a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>'; ?>
									</p>
								
								<?php	
								}
									
								?>
									
									
													
								</div>
							</div>
							
							
							<ul class="single-page__header-box-categories invisible-768 invvv">
								<li class="active"><a href="<?php echo get_page_link(21); ?>">All</a></li>
							<?php
							$categories = get_categories();
							foreach($categories as $category) {
							   echo '<li><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
							}	
								
							?>
								
							</ul>
							<!-- .single-page__header-box-categories-->
							

							
							<!--
							<div class="single-page__header-box-categories-rwd visible-768">
								<div class="sidebar-widget">
									<h4 class="sidebar-widget--title sidebar-widget--title-collapse" data-sidebar--collapse="collapse-box--categories">Insight <i class="arrow-down"></i></h4>
									<div class="sidebar-widget--content" id="collapse-box--categories">
										<p class="form-field form-field__radio">
											<input type="radio" id="all" name="categories-articles">
											<label for="all">All</label>
										</p>
										<p class="form-field form-field__radio">
											<input type="radio" id="data-analysis_statistics" name="categories-articles">
											<label for="data-analysis_statistics">Data analysis & statistics</label>
										</p>
										<p class="form-field form-field__radio">
											<input type="radio" id="data-sciense" name="categories-articles">
											<label for="data-sciense">Data sciense</label>
										</p>
										<p class="form-field form-field__radio">
											<input type="radio" id="technical-tips" name="categories-articles">
											<label for="technical-tips">Technical Tips</label>
										</p>
										<p class="form-field form-field__radio">
											<input type="radio" id="data-leadership" name="categories-articles">
											<label for="data-leadership">Data leadership</label>
										</p>
									
									</div>
								</div>
							</div>
							-->
							
							
						</div>
					</div>
				</div>
			</header>
			<!-- .single-page__header-box-->
		</article>
		<div class="section-article__list">
			<!--<div class="space-section invisible-768"></div>-->
			<!-- <div class="space space-30"></div> -->
			<div class="container">
				<div class="row">
					<?php
$args = array(
    'post_type' => 'post',
    'posts_per_page' => '1'
);

$post_query = new WP_Query($args);
if ($post_query->have_posts()):
    while ($post_query->have_posts()):
        $post_query->the_post();
?>
					
					
					<div class="col-md-12 item-article item-article---featured">
						<a class='colorblack' href='<?php  echo get_permalink(); ?>'>
						<div class="row">
						
							<div class="col-md-5">
								<figure><img src="<?php the_post_thumbnail_url(); ?>" srcset="<?php the_post_thumbnail_url(); ?>" alt=""></figure>
							</div>
							<div class="col-md-7">
								<div class="item-article--content">
									<h3><?php the_title(); ?></h3>
									<?php echo types_render_field( "bespoke-excerpt",array( "output"=> "html")); ?><br class="rwdnono"><span class="lalamove text-link text-link--primary text-link--has-icon font-bold">More<i class="arrow-right"></i></span>
								</div>
							</div>
							
						</div>
						</a>
						<div class="space space-30"></div>
					</div>
					
					
<?php
    endwhile;
endif;

?>
					
					<?php
						$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
						  $per_page = 9;
  $default_offset = 1;

  if ($paged == 1) {
    $offset = $default_offset;
  } else {
    $offset = (($paged - 1) * $per_page) + $default_offset;
    echo '
    
    <script>
    
    	$(".item-article---featured").hide();
    	
    </script>
    
    ';
  }
						
						
$args = array(
    'post_type' => 'post',
    'posts_per_page' => '9',
	'offset' => $offset,
    'paged' => $paged
      
);

$post_query = new WP_Query($args);
if ($post_query->have_posts()):
    while ($post_query->have_posts()):
        $post_query->the_post();
?>
					
					
					<div class="col-md-4 item-article">
						<div class="item-article--box">
							<a class='colorblack' href='<?php  echo get_permalink(); ?>'>
								<figure><img src="<?php the_post_thumbnail_url(); ?>" srcset="<?php the_post_thumbnail_url(); ?>" alt=""></figure>
								<div class="item-article--content">
									<h3>
										<?php the_title(); ?>
									</h3>
									<?php the_excerpt(); ?><span class="text-link text-link--primary text-link--has-icon font-bold">More<i class="arrow-right"></i></span>
								</div>
							</a>
						</div>
						<div class="space space-30"></div>
					</div>
					
					
<?php
    endwhile;
endif;

?>


<div class="col-md-12" id='pagination' style='    text-align: center;'>
<?php

/* pagination */

$big = 999999999; // need an unlikely integer
$paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
echo paginate_links(array(
'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big) )),
'format' => '?paged=%#%',
'current' => max(1, get_query_var('paged')),
'total' => $post_query->max_num_pages
));

?>
</div>

				</div>
			</div>
			<div class="space-section"></div>
		</div>



<?php get_footer(); ?>


		       <script>


            $(document).ready(function(){


                $('#thesubmit2').click(function (e) {
	                
	          
                    e.preventDefault();
                    $.post('<?php echo admin_url( 'admin-ajax.php' );?>', {

                        action: 'my_ajax_action', 
                        jemail: $('#jemail2').val(),

                    }, function(data) {

					   $('#form-subscribe2').html('<p class="hkhk">Thank you for your subscribe!</p>');

                    });


                   

                });


            });


        </script>