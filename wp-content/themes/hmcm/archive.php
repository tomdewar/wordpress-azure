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
							<h1 class="single-page__header-title single-page__header-title-smallest jgjg clear-br--1024">
								
								
								<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("category-header-text") ) : ?><?php endif;?>
								 <?php echo single_cat_title(""); ?>
								
							</h1><span class="space space-30"></span><span class="space space-15 invisible-1024"></span>
							<p class="text-14"><?php $category = get_queried_object();
								      echo $category->description; 
								?></p>
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
										<div class="visible-768 vvv">
								<h4 class="sidebar-widget--title sidebar-widget--title-collapse vbvb" data-sidebar--collapse="collapse-sidebar--one">Topic <i class="arrow-down"></i></h4>	
								<div class="sidebar-widget--content" id="collapse-sidebar--one">
									
									<p class="newcheck">
										<a href="<?php echo get_page_link(21); ?>">All</a>
									</p>

									
								<?php
								
								$categories = get_categories();

								
								foreach($categories as $category){
									$active = is_category($category->slug) ? "active" : "";
								?>
									
									<p class="newcheck">
										
										<?php  echo '<a class="'.$active.'" href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>'; ?>
									</p>
								
								<?php	
								}
									
								?>
									
									
													
								</div>
							</div>
							
							<ul class="single-page__header-box-categories invisible-768 invvv">
								<li><a href="<?php echo get_page_link(21); ?>">All</a></li>
								<?php
								$categories = get_categories();
								foreach($categories as $category) {
								   $active = is_category($category->slug) ? "active" : "";
								   echo '<li class="'.$active.'"><a class="'.$category->slug.'"href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
								}	
									
								?>
								
							</ul>
						
						</div>
					</div>
				</div>
			</header>
			<!-- .single-page__header-box-->
		</article>
		<div class="section-article__list">
			
			<div class="container">
				<div class="row">
			
					
								<?php
									
$category = get_queried_object();
$catid =  $category->term_id;

$args = array(
    'post_type' => 'post',
    'posts_per_page' => '12',
    'cat' => $catid,
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
									<h3><?php the_title(); ?></h3>
									<?php the_excerpt(); ?>
									<span class="text-link text-link--primary text-link--has-icon font-bold">More<i class="arrow-right"></i></span>
	
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