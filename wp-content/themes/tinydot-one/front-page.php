<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



get_header(); ?>

<div id="primary" class="content-area">
    <main id="front" class="site-main" role="main">
        <div id="skip-to-course-section" class="course-section">
            <div class="">
            <h4 class="course-head">Learn with TiNYDoT</h4>
            <h5 class="course-sub-head">Build Your Business &AMP; Keep Your Sanity</h5>
            <p class="course-intro">Our new course will help you get your business branded and on the web in a few short weeks. If you are ready to take the next step from freelance side-hustle to fully legit business, you&apos;ve come to the right place. </p>
            
            <ul class="frontpage-course-head frontpage-flexbox-featured">
                
                <?php query_posts('posts_per_page=3&post_type=course_info'); ?>
                    <?php while ( have_posts() ): the_post();
                        $faicon = get_field("font_awesome");
                        $icon = get_field("icon");
                        $benefit = get_field("benefit_title");
                        $description = get_field("description");
                        $size = "small";
                    ?>

                    <li class="individual-course-info">
<!--                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>-->
                        <h6><?php echo $benefit; ?></h6>
                        <figure class="awesome-icon"><?php echo $faicon; ?></figure>
                        
                        <p><?php echo $description; ?></p>
                    </li>

                    <?php endwhile; //end of the loop. ?>
                    <?php wp_reset_query(); //resets the altered query back to original. ?>

            </ul>
            </div>
            <div class="continue-reading">
                    
                    <a href="https://tinydot.teachable.com/" target="_blank" rel="bookmark">
                        <?php
                                printf(
                                        wp_kses( __( 'Learn More', 'tinydotone' ), array( 'span' => array( 'class' => array() ) ) ),
                                        the_title( '<span class="screen-reader-text">"', '"</span>', false )
                                );
                        ?>
                    </a>
                </div>
        
        
        
    <h4 id="skip-to-featured" class="front-headline">Featured Work</h4> 
        <ul class="frontpage-flexbox-featured">
            <?php query_posts('posts_per_page=3&post_type=featured_work'); ?>
                <?php while ( have_posts() ): the_post();
                    $image_1 = get_field("image_1");
                    $size = "medium";
                    $project = get_field('project');
                    $client = get_field('client');
                    $link = get_field('live_site_link');
                   
                ?>
            
                <li class="individual-frontpage-featured">
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <figure><a href="<?php the_permalink(); ?>"><?php echo wp_get_attachment_image($image_1, $size); ?></a></figure>
                    
                   
                </li>
                
                <?php endwhile; //end of the loop. ?>
                <?php wp_reset_query(); //resets the altered query back to original. ?>
                
        </ul>
    
            <div class="all-work">
                <h4 class="front-headline"><a href="/featured-work" rel="bookmark">Check Out More Projects</a></h4>
                
                    <div class="continue-reading">

                    </div>

            </div>
    <div id="skip-to-contact" class="about-artist"><!-- Begin Artist About Section-->
                <h4 class="front-headline">About TiNYDoT</h4>
                <ul class="social-links-container">
                    <li class="single-social-links"><h6 class="social-head">Follow Us: </h6></li>
                    <?php query_posts('post_type=social_links'); ?>
                        <?php while ( have_posts() ): the_post();
                        
                            $socialicon = get_field("social_icon");
                            $medialink = get_field("media_link");
                        ?>
                    
                        <li class="single-social-links">
                            <figure class="social-icon"><a target="_blank" href=" <?php echo $medialink ?>"<?php echo $socialicon; ?></a></figure>
                            
                        </li>
                        
                        <?php endwhile; //end of the loop. ?>
                        <?php wp_reset_query(); //resets the altered query back to original. ?>
                       
                </ul>
                <div class="artist"><!-- Begin Artist Container -->
                    <div class="artist-bottom">
                    <p>After struggling to start our business as a web design and development company, we 
                        decided it was time to come up with a better solution. We came up with a list
                        of simple steps that anyone can follow, to get their own business started from the
                        ground up. After months of work and countless hours of testing, we have developed a
                        step by step system for business owners to eliminate the insanity of wading though numerous
                        articles and infinitely flowing advice on how to start a business.</p>
                    <p>TiNYDoT also offers full service branding, design and development options for small business
                        owners who would like to step it up and get more professional with their online presence. If
                        you are looking to drastically improve your website, logo or company brand, we can help!
                    </p>
                    </div>
                    <div class="box-artist-image">
                        <img src="wp-content/uploads/2017/10/headshot-meg-two.jpg" class="artist-img">
                    </div>
                    <div class="box-artist-desc">
                    <p class="artist-desc">Meg Miller is a web developer... Turkey hamburger pork chop short loin 
                        meatball jerky venison kevin. Filet mignon pork t-bone pig ham hock bacon shankle beef beef
                        ribs tri-tip frankfurter. Rump jerky sausage, meatloaf short loin ball tip spare ribs. 
                        Jowl shoulder short ribs fatback chuck, drumstick turducken sausage landjaeger t-bone rump alcatra. </p>
                    </div>
                    
                    <div class="artist-bottom">
                                            
                        <blockquote>Coding is my Zen place. It's where I live. If the keyboard's a rockin' don't come a knockin'.</blockquote>
                        
                    </div>
                    <div class="artist"><!-- Begin Artist Container -->
                    <div class="box-artist-image">
                        <img src="wp-content/uploads/2017/10/headshot-meg-two.jpg" class="artist-img">
                    </div>
                    <div class="box-artist-desc">
                    <p class="artist-desc">Joe Passarelli is a designer and brand specialist Turkey hamburger pork chop 
                        short loin meatball jerky venison kevin. Filet mignon pork t-bone pig ham hock bacon shankle beef 
                        beef ribs tri-tip frankfurter. Rump jerky sausage, meatloaf short loin ball tip spare ribs. 
                        Jowl shoulder short ribs fatback chuck, drumstick turducken sausage landjaeger t-bone rump alcatra. </p>
                    </div>
                    
                    <div class="artist-bottom">
                        
                        <blockquote>Design is the transformation of ideas into reality. I love to help others turn their visions
                        into fully realized brands and designs.</blockquote>
                        
                    </div>
                        
                    </div>
                </div><!-- End Artist Container -->
                <ul class="social-links-container">
                    <h6 class="social-head">Follow Us: </h6>
                    <?php query_posts('post_type=social_links'); ?>
                        <?php while ( have_posts() ): the_post();
                        
                            $socialicon = get_field("social_icon");
                            $medialink = get_field("media_link");
                        ?>
                    
                        <li class="single-social-links">
                            <figure class="social-icon"><a target="_blank" href=" <?php echo $medialink ?>  " </a><?php echo $socialicon; ?></figure>
                            
                        </li>
                        
                        <?php endwhile; //end of the loop. ?>
                        <?php wp_reset_query(); //resets the altered query back to original. ?>
                       
                </ul>

    </main><!-- #main -->
</div><!-- #primary -->
<?php
get_sidebar();
get_footer();


