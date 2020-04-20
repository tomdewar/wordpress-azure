<?php get_header(); ?>

		<?php
			
				$obj_id = get_queried_object_id();
$current_url = get_permalink( $obj_id );
                            if (have_posts()):
                                while (have_posts()):
                                    the_post();
                                  

         ?>
         <?php if(types_render_field( "with-featured-image") == 1): ?>
		<section class="section section-divide sd_2 sd_3 sd_4 home-divide-one" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
			<div class="container">
				<div class="row">
					<div class="col-5">
						<div class="section-divide__content bg-white__rgb neg74">
 							<header class="section-header clear-br--1024">	
								<h1 class="single-page__header-title single-page__header-title-smallest clear-br--1024"><?php 
									
									
									the_title();  ?></h1>
									<h4 class='mmt'><?php the_date(); ?><span class='theline'></span><span class='jauthor'></span></h4>
							</header>
						</div>
					</div>
				</div>
			</div>
		</section>
		<?php endif; ?>
		<article class="single-page rwd1
			
				 <?php if(types_render_field( "with-featured-image") == 1): ?>
					 nopad
				 <?php endif; ?>
				
					
						">
			<header class="single-page__header">
				<div class="container">
					<div class="row">
						<?php if(types_render_field( "with-featured-image") == 0): ?>			
							<div class="col-12">
								<div class="row">
									<div class="col-12">
										<h1 class="single-page__header-title single-page__header-title2 clear-br--1024"><?php the_title(); ?></h1> 
										<h4 class='mmt'><?php the_date(); ?><span class='theline'></span><span class='jauthor'></span></h4>
									</div>
								</div>
							</div>
						<?php endif; ?>
					</div>
				</div>
			</header>
			<div class="single-page__content">
				<div class="container">
					<div class="row">
						<div class="col-12">
						
							<?php the_content();
								
								$categories = get_the_category();
                                  //  var_dump($categories);
                                    if ( ! empty( $categories ) ) {
									   $jcat =  $categories[0]->slug ;   
									   
									   
									   
									}
									$jid = get_the_ID();
									
									
		 							   $tagarray = [];
                                  $post_tags = get_the_tags();
                                  
                                   foreach( $post_tags as $tag ) {
								    	$tagarray[] =  $tag->slug; 
								    }
									          
									    //  echo $jcat;    
									          
									            ?>
									            
						
						
						 						<div class="single-page__footer">
							<div class="single-page__share">
								<h5 class="single-page__share_title">Share this</h5>
								<ul class="single-page__share_list" style="    padding-left: 0px;">
									<li><a style='border:none' href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $current_url; ?>" target="_blank">
													<svg class="svg-sprite">
														<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#linkedin"></use>
													</svg></a></li>
									<li><a style='border:none' href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $current_url; ?>" target="_blank">
													<svg class="svg-sprite">
														<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#facebook"></use>
													</svg></a></li>
									<li><a style='border:none' href="https://twitter.com/share?url=<?php echo $current_url; ?>&text=<?php the_title(); ?> via @HartleyMcMaster" target="_blank">
													<svg class="svg-sprite">
														<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#twitter"></use>
													</svg></a></li>
								</ul>
							</div>
						</div>
								
								
								
							
						</div>
					</div>
				</div>
			</div>
		</article>
		
		<?php
										
$id = get_the_ID();	

			
$args = array(
    'post_type' => 'team',
    'posts_per_page' => '1',
    'toolset_relationships' => array(
            'role' => 'parent',
            'related_to' => $id, // ID of starting post
            'relationship' =>'team-post',
        ),
);
									
$parent_id  = 0;

$post_query = new WP_Query($args);
if ($post_query->have_posts()):
    while ($post_query->have_posts()):
        $post_query->the_post();
			$parent_id = get_the_ID();

									
?>

							<div class="post-author">
								<div class="container">
								<div class="row">
									

	<div class="col-md-8">
		<a href="<?php  echo get_permalink(); ?>">
		<div class="row">
			<div class="col-md-4">	
				<img src="<?php the_post_thumbnail_url(); ?>">
			</div>
			<div class="col-md-8">	
				<h5 class="text-red">
					<?php the_title(); ?>	
					<script>
						$(document).ready(function(){
							$('.jauthor').html('<?php the_title(); ?>');
							$('.theline').html(' | ');
						});
					</script>
					
				</h5>
				<p class="text-red">
					<?php echo types_render_field( "job-title2"); ?>
				</p>
				<p style="color:black;">
					<?php echo types_render_field( "author-info"); ?>
				</p>
				<p>
					
					<span class="text-link text-link--primary text-link--has-icon font-bold ">More<i class="arrow-right"></i></span>
				</p>

			</div>
		</div>
		</a>
	</div>
	<div class="col-md-4">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("single-signup-text") ) : ?><?php endif;?>
	</div>

    

									
								</div>											
								</div>
							</div>
							
							<?php

    endwhile;
endif;


?>
						<div class="space space-20 bg-gradient" style="margin-bottom: 25px;"></div>

<?php

					
                            	 							
		 						
			
$args = array(
    'post_type' => 'post',
    'posts_per_page' => '3',
/*	'category_name' => $jcat, */
'tag_slug__in' => $tagarray,
	'post__not_in' => array($jid)
);

$post_query = new WP_Query($args);
if ($post_query->have_posts()):

?>

<div class="space space-30"></div>



<div class="container">
	<div class="row">
		<h2 class="h2-small font-bold text-red nospace-bottom pl15">
			
			
			Related articles :</h2><span class="space space-15"></span><span class="space space-15 invisible-1024"></span>
		
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
									<?php the_excerpt(); ?><span class="text-link text-link--primary text-link--has-icon font-bold ">More<i class="arrow-right"></i></span>
								</div>
							</a>
						</div>
					</div>
				

<?php

    endwhile;
    ?>
    	<div class="space space-30"></div>
<div class="space space-30"></div>
    <?
endif;


?>
	</div>
</div>

		
		     <?php
                                    endwhile;
                                endif;

             ?>
             
            


<?php get_footer(); ?>