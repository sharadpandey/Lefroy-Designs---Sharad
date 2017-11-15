<?php 
/* Template Name: Services 
*/ 
get_header();
	
?>
<section class="banner portfolio_banner">
	<div id="banner_slider" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<div class="carousel-inner" role="listbox">
		<?php 
			/*Getting  Services Banner Image */
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
<section class="home_design">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="heading">
					<h2><?php the_field('service_section_heading',$post->ID);?></h2> 
				</div>
				<div class="design_list">
					<ul>
						<?php 
						query_posts( array ( 'post_type' =>'service', 'posts_per_page' => -1, 'order' => 'DESC')  ); 

						while ( have_posts() ) : the_post();?>

							<li>
								<a href="<?php the_permalink();?>" title="">
									<figure>
										<?php 
										if ( has_post_thumbnail() ) 
										{
										$featureimage = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ),'full' );
										?>
											<img src="<?php echo $featureimage[0]; ?>" alt="<?php the_title(); ?>"/>
										<?php
										} 
										else 
										{
										?>
											<img src="http://placehold.it/266x266&amp;text=No image found" alt="<?php the_title(); ?>" 
											class="img-responsive" />
										<?php 
										} 
										?>
										<div class="design_overlay">
											<div class="display-table">
												<div class="display-table-cell">
													<h4><?php the_title();?></h4>
												</div>
											</div>
										</div>
									</figure>
								</a>
							</li>
						<?php  
						endwhile; 
						wp_reset_query();
						?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<!--home_design end -->
<?php 
get_sidebar('gallery');
get_footer();
?>