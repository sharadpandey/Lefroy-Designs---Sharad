<?php 
	/* Template Name: Home 
	*/ 
	get_header();
	
?>
<section class="banner">
	<div id="banner_slider" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<div class="carousel-inner" role="listbox">
			<?php 
			$i=1;
			if( have_rows('banner_slider_repeater', $post->ID) ):

				while ( have_rows('banner_slider_repeater', $post->ID) ) : the_row();
					//getting all field from repeater
			  
					$slider_image = get_sub_field('slider_image',$post->ID);
			   
					$slider_text = get_sub_field('slider_text',$post->ID);
			?>
					<div class="item <?php if($i==1){ echo 'active';}?>" style="background:url(<?php echo $slider_image;?>) no-repeat;">
						<div class="banner_caption">
							<?php echo $slider_text;?>
							<a href="<?php the_permalink(9);?>" title="" class="med_btn">About Us</a> 
							<a href="<?php the_permalink(19);?>" title="" class="med_btn light_green">Contact</a> 
						</div>
					</div>	
			<?php 
				$i++;
				endwhile;
			wp_reset_query();
			endif;
			?>
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
				<?php the_field('suzanne_lefroy_description',$post->ID);
					/*Getting  Home Banner Image */
					$suzanne_lefroy_signature=get_post_meta($post->ID,"suzanne_lefroy_signature",true);
					$suzanne_lefroy = wp_get_attachment_image_src($suzanne_lefroy_signature, 'full');
				?>
					<div class="signature"><img src="<?php echo $suzanne_lefroy[0];?>" alt="signature"></div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--home_bio end -->
<section class="home_design">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="heading">
				<h2>I am looking for...</h2> </div>
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
					</ul> <a href="<?php the_permalink(19);?>" title="" class="med_btn">Contact Us</a> </div>
			</div>
		</div>
	</div>
</section>
<!--home_design end -->
<section class="home_abt">
	<div class="container">
		<div class="heading">
			<h2><?php the_field('want_to_know_more_heading',$post->ID);?></h2> 
		</div>
		<div class="row home_abt_main">
			<div class="col-sm-12">
				<?php 
				$i=1;
				if( have_rows('want_to_know_page_repeater', $post->ID) ):

					while ( have_rows('want_to_know_page_repeater', $post->ID) ) : the_row();
					//getting all field from repeater
				  
						$page_name = get_sub_field('page_name',$post->ID);
						
						$page_link = get_sub_field('page_link',$post->ID);

						$page_image = get_sub_field('page_image',$post->ID);
						if($i==1)
						{
						?>
							<div class="home_abt_lft">
								<a href="<?php echo $page_link;?>" title="">
									<figure style="background:url(<?php echo $page_image;?>) no-repeat;">
										<div class="display-table">
											<div class="display-table-cell">
												<h3><?php echo $page_name;?></h3>
											</div>
										</div>
									</figure>
								</a>
							</div>
						
						<?php 
						}//main else close
						else
						{
							// add div on loop count is 2 //
							if($i>=2 && $i<=4)
							{
								if($i==2)
								{
									echo '<div class="home_abt_rght home_abt_lft"> <div class="home_abt_top">';	
								}
								?>
									<div class="home_abt_med">
										<a href="<?php echo $page_link;?>" title="">
											<figure style="background:url(<?php echo $page_image;?>) no-repeat;">
												<div class="display-table">
													<div class="display-table-cell">
														<h3><?php echo $page_name;?></h3>
													</div>
												</div>
											</figure>
										</a>
									</div>
								
								<?php 
								if($i==4)
								{
									echo '</div>';
								}
							}//inner if close
							else
							{
								if($i>=5 && $i<=6)
								{
									if($i==5)
									{
										echo '<div class="home_abt_btm">';
									}
									?>
									<div class="<?php if($i==5){ echo 'home_abt_med';}else{ echo 'home_abt_large';}?>">
										<a href="<?php echo $page_link;?>" title="">
											<figure style="background:url(<?php echo $page_image;?>) no-repeat;">
												<div class="display-table">
													<div class="display-table-cell">
														<h3><?php echo $page_name;?></h3>
													</div>
												</div>
											</figure>
										</a>
									</div>	
									<?php
									if($i==6)
									{
										echo '</div>';
										echo '</div>'; //home_abt_btm end //
									}
								}
							
							}//inner else close//
						}//main else close//
					$i++;
					endwhile;
				wp_reset_query();
				endif;
				?>
			</div>
		</div>
	</div>
</section>
<!--home_abt end-->
<section class="testimonial_sec" style="background:url(<?php echo esc_url(get_template_directory_uri());?>/assets/images/testimonial_bg.jpg) no-repeat;">
	<div class="container">
		<h2><?php the_field('testimonials_heading',$post->ID);?></h2>
		<div id="testimonial-demo" class="owl-carousel owl-theme">
			<?php 
			$i=0;
			if( have_rows('testimonials_repeater', $post->ID) ):

				while ( have_rows('testimonials_repeater', $post->ID) ) : the_row();
					//getting all field from repeater
			  
					$testimonials_description = get_sub_field('testimonials_description',$post->ID);
			   
					$posted_by = get_sub_field('posted_by',$post->ID);
			
					$person_designation = get_sub_field('person_designation',$post->ID);
			?>
					<div class="item">
						<?php echo $testimonials_description;?>
						<div class="authr_info">
							<h3><?php echo $posted_by;?></h3>
							<h6><?php echo $person_designation;?></h6> 
						</div>
						<!--author_info end -->
					</div>
			<?php 
				$i++;
				endwhile;
			wp_reset_query();
			endif;
			?>
		</div>
	</div>
</section>
<!--testimonial_sec end -->

<?php 
get_sidebar('gallery');
get_footer();
?>