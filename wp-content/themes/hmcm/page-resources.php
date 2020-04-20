<?php
/**
 * Template Name: Resources
 */
?>
<?php get_header(); ?>

		<article class="single-page single-page__resources">
			<header class="single-page__header-separator">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="single-page__header-title single-page__header-title-smallest clear-br--1024"><?php the_title() ?></h1>
							<div class="separator"></div>
						</div>
					</div>
				</div>
			</header>
			<div class="single-page__content single-page__content-with-sidebar">
				<div class="container">
					<div class="row">
						
						
						
						
						<div class="col-md-3 sidebar-controller">
							<aside class="sidebar-widget">
								<h4 class="sidebar-widget--title sidebar-widget--title-collapse" data-sidebar--collapse="collapse-sidebar--one">Topic <i class="arrow-down"></i></h4>
							
								<div class="sidebar-widget--content" id="collapse-sidebar--one">
									
								<?php
								
								$terms = get_terms([
								    'taxonomy' => 'topic',
								    'hide_empty' => false,
								]);	
								
								foreach($terms as $term){
									
								?>
									
									<p class="form-field form-field__checkbox">
										<input class='topic' type="checkbox" id="<?php echo $term->slug; ?>2">
										<label for="<?php echo $term->slug; ?>2"><?php echo $term->name; ?></label>
									</p>
								
								<?php	
								}
									
								?>
									
									
													
								</div>
							</aside>
							<aside class="sidebar-widget">
								<h4 class="sidebar-widget--title sidebar-widget--title-collapse" data-sidebar--collapse="collapse-sidebar--two">Content Type <i class="arrow-down"></i></h4>
								<div class="sidebar-widget--content" id="collapse-sidebar--two">
								<?php
								
								$terms = get_terms([
								    'taxonomy' => 'content-types',
								    'hide_empty' => false,
								]);	
								
								foreach($terms as $term){
									
								?>
									
									<p class="form-field form-field__checkbox">
										<input class='content' type="checkbox" id="<?php echo $term->slug; ?>2">
										<label for="<?php echo $term->slug; ?>2"><?php echo $term->name; ?></label>
									</p>
								
								<?php	
								}
									
								?>
								</div>
							</aside>
							<!--	<p class="text-left"><span class="space space-30"></span><button type="submit" class="btn btn--primary btp-2" href="<?php echo get_page_link(38); ?>">Filter</button></p> -->
						</div>
						<div class="col-md-9 results-controller">
							<div class="results-controller--heading bg-gradient text-center">
								<h2><?php the_content(); ?></h2>
							</div>
							<div class="space space-30 invisible-1024"></div>
							<div class="space space-15"></div>
							<div class="space space-10 visible-1024"></div>
							<div class="row">
							
									<?php
$args = array(
    'post_type' => 'resource',
    'posts_per_page' => '9999999'
);

$post_query = new WP_Query($args);
if ($post_query->have_posts()):
    while ($post_query->have_posts()):
       $post_query->the_post();
       
       
     
?>

<?php
	  if (!types_render_field( "hide")):
	?>
								
								<div class="col-md-4 item-downloadebook 
									
												<?php
								
						$id = get_the_ID();
		
										
$terms =  get_the_terms( $id , 'content-types' );

foreach ($terms as $term){
	echo $term->slug.'2 ';
}

											
										?>
											
												<?php
								
						$id = get_the_ID();
		
										
$terms =  get_the_terms( $id , 'topic' );

foreach ($terms as $term){
	echo $term->slug.'2 ';
}

											
										?>
										
											">
									<div class="item-downloadebook--content">
										<figure>
											<a class='colorblack' style='border:none' href='<?php  echo get_permalink(); ?>'>
												<?php if (has_post_thumbnail() ): ?>
												<img src="<?php the_post_thumbnail_url(); ?>" alt="">
											
										<?php elseif (types_render_field( "thumbnail",array( "output"=> "html"))): ?>
												<?php echo types_render_field( "thumbnail"); ?>
										<?php endif; ?>


											</a>		
										</figure>
										<div class="item-downloadebook--content-text">
											
											<a class='colorblack'  style='border:none'  href='<?php  echo get_permalink(); ?>'>
											<h3>
												
												
			<?php
								
						$id = get_the_ID();
		
										
$terms =  get_the_terms( $id , 'content-types' );

foreach ($terms as $term){
	echo $term->name.' ';
}

											
										?>
												
												
											</h3>
											</a>
											<p><a class='colorblack'  style='border:none'  href='<?php  echo get_permalink(); ?>'><?php the_title(); ?></a></p>
											
											<!--
											<span class="space space-15 visible-1024"></span><a class="text-link text-link--primary text-link--has-icon" href="<?php  echo get_permalink(); ?>"><span class="font-bold">More</span><i class="arrow-right"></i></a>
											-->
											
											
										</div>
									</div>
									<div class="space space-30 invisible-1024"></div>
								</div>
								<!-- .item-downloadebook-->

					
		<?php
			
			endif;
    endwhile;
endif;

?>
						
							</div>
						</div>
					</div>
				</div>
			</div>
		</article>

<script>
	
	$(document).ready(function(){
		
		var term = [];
		var termtopic = [];
		
		$(".content").click(function(){
			
			var id = $(this).attr('id');
			
			
			$(this).each(function(){
				if ($(this).is(":checked")){
					term.push(id);
				}
				else{
					var index = term.indexOf(id);
					if (index !== -1) term.splice(index, 1)
				}
			});
			
			// alert(term);
			refresh();
				
			
			
		});
		
		$(".topic").click(function(){
			
		
			
			var id = $(this).attr('id');
			
			
			$(this).each(function(){
				if ($(this).is(":checked")){
					termtopic.push(id);
				}
				else{
					var index = termtopic.indexOf(id);
					if (index !== -1) termtopic.splice(index, 1)
				}
			});
			
			refresh();
				
			
			
		});
		
		function refresh(){
			$('.results-controller .col-md-4').each(function(){
				
				var current = $(this);
						
					if (term==''){
				
				  		if (current.is(termtopic.map(function(className) {return '.'+ className;}).join(',')) ){
					  		
					  		
							current.show();
					
						
						}
						else{
							
							if (termtopic!='' )
							current.fadeOut();
						}
						
			    	    if (termtopic=='' ){
							
							current.show();
						} 
					}
					
					else if (termtopic==''){
				
				  		if (current.is(term.map(function(className) {return '.'+ className;}).join(',')) ){
					  		
					  		
							current.show();
					
						
						}
						else{
							
							if (term!='' )
							current.fadeOut();
						}
						
			    	    if (term=='' ){
							
							current.show();
						} 
					}
				
					else{
					
						if (current.is(termtopic.map(function(className) {return '.'+ className;}).join(',')) && current.is(term.map(function(className) {return '.'+ className;}).join(','))){
					  		
					  		
							current.show();
					
						
						}
						else{
							if (termtopic!='' &&  term != '')
							current.fadeOut();
						}
						
						if (termtopic=='' && term == ''){
							current.show();
						} 
						
			    	   
						
					} 
					
				  
				

			});
		}
		 
	});
	
</script>

<?php get_footer(); ?>