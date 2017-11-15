<?php 
	/* Template Name: About 
	*/ 
	get_header();
?>	
<section class="banner portfolio_banner">
	<div id="banner_slider" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<div class="carousel-inner" role="listbox">
		<?php 
			/*Getting  About Banner Image */
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
<section class="home_bio">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				
				<figure>
				<?php
				/*Getting  suzanne_lefroy_image */
					$suzanne_lefroy_image=get_post_meta($post->ID,"suzanne_lefroy_image",true);
					$suzanne_lefroy = wp_get_attachment_image_src($suzanne_lefroy_image, 'full');	
				
					if(!empty($suzanne_lefroy))
					{
				?>
						<img src="<?php echo $suzanne_lefroy[0];?>" alt="suzanne">
				<?php 
					}
					else
					{
				?>		
						<img src="http://placehold.it/382x382&amp;text=No image found" alt="suzanne">
				<?php	
					}
				?>
				</figure>
				
				<div class="home_bio_cntnt">
				<?php the_field('suzanne_lefroy_descriptions',$post->ID);
					/*Getting  Home Banner Image */
					$suzanne_lefroy_signature_image=get_post_meta($post->ID,"suzanne_lefroy_signature_image",true);
					$suzanne_lefroy_signature = wp_get_attachment_image_src($suzanne_lefroy_signature_image, 'full');
				?>
					<div class="signature"><img src="<?php echo $suzanne_lefroy_signature[0];?>" alt="signature"></div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- home_bio end -->
<!--<section class="insta_sec">
	<div class="container">
		<div class="row">
			<div class="col-sm-12"> </div>
		</div>
	</div>
</section>-->
<!-- insta_sec end  -->

<?php
/*Getting  suzanne_lefroy_image */
$our_process_background_image=get_post_meta($post->ID,"our_process_background_image",true);
$our_process_background = wp_get_attachment_image_src($our_process_background_image, 'full');	

if(!empty($our_process_background))
{
?>
	<section class="about_process" style="background:url(<?php echo $our_process_background[0];?>) no-repeat;">
<?php 
}
else
{
?>		
	<section class="about_process" style="background:url(http://placehold.it/1920x1637&amp;text=No image found) no-repeat;">
<?php	
}
?>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="heading">
				<h2><?php the_field('our_process_heading',$post->ID);?></h2> </div>
				<ul>
				<?php 
				$i=1;
				if( have_rows('our_process_repeater', $post->ID) ):
					
					$my_fields = get_field_object('our_process_repeater');
					$count = (count($my_fields['value']));
					
					while ( have_rows('our_process_repeater', $post->ID) ) : the_row();
					//getting all field from repeater
				  
						$process_svg_icon = get_sub_field('process_svg_icon',$post->ID);
						$process_name = get_sub_field('process_name',$post->ID);
						$process_description = get_sub_field('process_description',$post->ID);
				?>
						<li>
							<figure>
								<?php echo $process_svg_icon;?>
							</figure>
							<h4><?php echo $process_name;?></h4>
								
								<?php 
								if($count!=$i)
								{
									echo $process_description;
								}
								else
								{
								?>
									<a href="<?php the_permalink(19);?>" title="" class="med_btn light_green">Contact</a>
								<?php
								}
								?>
						</li>
						
				<?php 
					$i++;
					endwhile;
				wp_reset_query();
				endif;
				?>
				</ul>
			</div>
		</div>
	</div>
</section>
<?php 
get_sidebar('gallery');
get_footer();
?>