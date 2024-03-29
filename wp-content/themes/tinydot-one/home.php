<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) :
                        
			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
                    
			<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post();
                                // Is this this first post of the front page?
                                $first_post = $wp_query->current_post == 0 && !is_paged() && is_front_page();
				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
                                
                               if ( $first_post == true ) {
					get_template_part( 'template-parts/content', 'single' );
				} else {
					get_template_part( 'template-parts/content', get_post_format() );
				}
                               ?>
			<?php endwhile;

//			tinydotone_paging_nav();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
