<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<link rel="icon" href="<?php echo esc_url(get_template_directory_uri());?>/assets/images/favicon.png" type="image/x-icon">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
 <header>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="logo">
                        <a href="<?php echo site_url();?>" title=""><img src="<?php $logo=get_field('header_logo','options'); echo $logo[url];?>" alt="logo"></a>
                    </div>
                    <nav>
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
                    </nav>
                    <div class="header_contact">
                        <p><i class="fa fa-mobile" aria-hidden="true"></i><a href="tel:<?php $string=get_field('header_phone','options'); echo $string = str_replace(['(', '+', ' ',')'], '', $string);?>"><?php the_field('header_phone','options');?></a></p>
                        <p><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:<?php the_field('header_email','options');?>" title=""><?php the_field('header_email','options');?></a></p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--header end-->
