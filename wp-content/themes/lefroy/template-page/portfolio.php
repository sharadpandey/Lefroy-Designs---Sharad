<?php 
	/* Template Name: Portfolio 
	*/ 
	get_header();
	
?>
<section class="banner portfolio_banner">
	<div id="banner_slider" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<div class="carousel-inner" role="listbox">
		<?php 
			/*Getting  Portfolio Banner Image */
			$banner_image=get_post_meta($post->ID,"banner_image",true);
			$banner = wp_get_attachment_image_src($banner_image, 'full');	

			if(!empty($banner))
			{
		?>
				<div class="item active" style="background:url(<?php echo $banner[0];?>) no-repeat;">
		<?php 
			}
			else
			{
		?>		
				<div class="item active" style="background:url(http://placehold.it/1920x766&amp;text=No image found) no-repeat;">
		<?php	
			}
		?>
				<div class="banner_caption">
					<h1><?php the_field('banner_text',$post->ID);?></h1> 
				</div>
			</div>
		</div>
	</div>
</section>
<!--banner end -->
<section class="portfolio_sec">
	<div class="container">
		<div class="heading">
			<h2><?php the_field('portfolio_section_heading',$post->ID);?></h2>
		</div>
		<div class="row portfolio_main">
			<?php 
			query_posts( array ( 'post_type' =>'portfolio', 'posts_per_page' => -1, 'order' => 'DESC')  ); 

			while ( have_posts() ) : the_post();?>

				<div class="col-sm-4">
					<a href="<?php the_permalink();?>" title="">
						<figure>
						<?php if ( has_post_thumbnail() ) 
						{
						$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
						?>
							<img src="<?php echo $image[0]; ?>" alt="<?php the_title();?>" />
						<?php
						} 
						else
						{ 
						?>
							<img src="http://placehold.it/350x232&amp;text=No image found" alt="<?php the_title(); ?>" class="img-responsive" />
						<?php 
						}
						?>
							<div class="portfolio_info">
								<h5><?php the_title();?></h5>
								<p><?php the_excerpt();?></p>
							</div>
						</figure>
					</a>
				</div>
			<?php  
			endwhile; 
			wp_reset_query();
			?>
		</div>
	</div>
</section>
<!--portfolio_sec end -->
<?php 
get_sidebar('gallery');
get_footer();
?>