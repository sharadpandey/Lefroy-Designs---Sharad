<?php
/*Getting  our_work_background_image */
$our_work_background_image=get_post_meta(7,"our_work_background_image",true);
$our_work_background = wp_get_attachment_image_src($our_work_background_image, 'full');	

if(!empty($our_work_background))
{
?>
	<section class="work_sec" style="background:url(<?php echo $our_work_background[0];?>) no-repeat;">
<?php 
}
else
{
?>	
	<section class="work_sec" style="background:url('http://placehold.it/1920x566&amp;text=No image found') no-repeat;">
<?php	
}
?>
	<div class="container">
		<div class="heading">
			<h2><?php the_field('our_work_heading',7);?></h2> 
		</div>
		<div id="work-demo" class="owl-carousel owl-theme">
			<?php 
			$i=1;
			if( have_rows('our_work_gallery_repeater', 7) ):

				while ( have_rows('our_work_gallery_repeater', 7) ) : the_row();
				//getting all field from repeater
			  
					$gallery_image = get_sub_field('gallery_image',7);
			?>
					<div class="item">
						<figure>
							<a href="<?php echo $gallery_image;?>" class="fancybox" rel="group" title=""><img src="<?php echo $gallery_image;?>" alt="<?php echo 'gallery-'.$i;?>"></a>
						</figure>
					</div>
			<?php 
				$i++;
				endwhile;
			wp_reset_query();
			endif;
			?>		
		</div> 
		<a href="<?php the_permalink(19);?>" title="" class="med_btn white_btn">Contact</a> 
	</div>
</section>
<!-- work_sec end -->