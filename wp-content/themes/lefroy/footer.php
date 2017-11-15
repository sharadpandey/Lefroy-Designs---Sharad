<?php
	/**
		* The template for displaying the footer
		*
		* Contains the closing of the #content div and all content after.
		*
		* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
		*
		* @package WordPress
		* @subpackage Twenty_Seventeen
		* @since 1.0
		* @version 1.2
	*/
	
?>
<footer>
	<div class="top_ftr">
		<div class="container">
			<div class="row">
				<div class="col-sm-5 ftr_bx1 pd_rght">
					<figure>
						<a href="<?php echo site_url();?>" title=""><img src="<?php echo $logo=get_field('footer_logo','options');?>" alt="ftr_logo"></a>
					</figure>
					<?php the_field('footer_about_text','options');?>
					<div class="ftr_social">
						<h4>connect with us</h4>
						<ul>
							<li><a href="<?php the_field('facebook','options');?>" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="<?php the_field('twitter','options');?>" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="<?php the_field('linkedin','options');?>" title="linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
							<li><a href="<?php the_field('googleplus','options');?>" title="googleplus"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-4 ftr_bx1">
					<h4>quick links</h4>
					<ul>
						<!--START CODE USE FOR GETTING HEADER MENU-->
							<?php

								$defaults = array(
								'theme_location'  => '',
								'menu'            => 'Header_menu',
								'container'       => '',
								'container_class' => '',
								'container_id'    => '',
								'menu_class'      => 'menu',
								'menu_id'         => '',
								'echo'            => true,
								'fallback_cb'     => 'wp_page_menu',
								'before'          => '',
								'after'           => '',
								'link_before'     => '',
								'link_after'      => '',
								'items_wrap'      => '%3$s',
								'depth'           => 0,
								'walker'          => ''
								);

								wp_nav_menu( $defaults );
							?>
							<!--END OF CODE USE FOR GETTING HEADER MENU-->
					</ul>
				</div>
				<div class="col-sm-3 ftr_bx1 ftr_bx2">
					<h4>contact us</h4>
					<p><i class="fa fa-phone" aria-hidden="true"></i> <strong>
					<label>Phone Number</label><a href="tel:<?php $string=get_field('header_phone','options'); echo $string = str_replace(['(', '+', ' ',')'], '', $string);?>"><?php the_field('header_phone','options');?></a></strong></p>
					<p><i class="fa fa-envelope-o" aria-hidden="true"></i> <strong><label>Email</label><a href="mailto:<?php the_field('header_email','options');?>" title=""><?php the_field('header_email','options');?></a></strong></p>
					<p><i class="fa fa-map-marker" aria-hidden="true"></i> <strong><label>Address</label><span><?php the_field('footer_address','options');?><br></span> <a href="tel:<?php $string=get_field('footer_address_phone_number','options'); echo $string = str_replace(['(', '+', ' ',')'], '', $string);?>"><?php the_field('footer_address_phone_number','options');?></a></strong></p>
				</div>
			</div>
		</div>
	</div>
	<!--top_ftr end -->
	<div class="btm_ftr">
		<div class="container">
			<p>Copyright © 2017 lefroydesign. All Rights Reserved.</p>
			<p class="pull-right">Website By - <a href="http://tradesignaus.com.au/" title="" target="_blank">Tradesign</a></p>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>

</body>
</html>
