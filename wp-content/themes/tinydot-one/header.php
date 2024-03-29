<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TINYDoT One
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site <?php echo get_theme_mod( 'layout_setting', 'no-sidebar'); ?>">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'tinydotone' ); ?></a>

            <?php if ( get_header_image() ) { ?>
                <header id="masthead" class="site-header" style="background-image: url(<?php header_image(); ?>)" role="banner">
            <?php } else { ?>
                <header id="masthead" class="site-header" role="banner">
            <?php } ?>
            
            <?php // Display site icon or first letter as logo ?>	
                         <div class="site-logo">
                                 <?php $site_title = get_bloginfo( 'name' ); ?>
                                 <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                                         <div class="screen-reader-text">
                                                 <?php printf( esc_html__('Go to the home page of %1$s', 'tinydotone'), $site_title ); ?>	
                                         </div>
                                         <?php
                                         if ( has_custom_logo() ) {
                                                 the_custom_logo();
                                         } else { ?>
                                                 <div class="site-firstletter" aria-hidden="true">
                                                         <?php echo substr($site_title, 0, 1); ?>
                                                 </div>
                                         <?php } ?>
                                 </a>
                         </div><!-- .site-logo -->                       


			<?php
			if ( is_front_page()) : ?>
                        <div class="site-branding">
                            <div class="header-container">
                            <div class="full-header"><!-- .full-header -->

                                <h1 id="hero-text">We Are TiNYDoT</h1>
                                <p id="full-hero-text">Our mission is to provide comfort, confidence and concise steps for a new business owner to get from being an individual to a fully realized brand and a legitimized company. </p> 

                                <div class="flex-container-nav">
                                    <a id="button-one" href="#skip-to-featured" class="nav-button" >Projects</a>
                                    <a id="button-two" href="#skip-to-contact" class="nav-button" >About</a>
                                    
                                </div>
                            </div> 
                            </div>
                        </div><!--end full header section--> <!-- .site-branding -->
                        
                     <?php else : ?>
                           <div class="reduced-header">
                             <h1 id="reduced-hero-text">We Are TiNYDoT</h1>
                    <?php endif; ?><!--end reduced header section-->
		
                        
           
	</header><!-- #masthead -->

	<div id="content" class="site-content">
