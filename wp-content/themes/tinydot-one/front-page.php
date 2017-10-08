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
                <h4 class="front-headline">Check Out More Projects</h4>
                <p>Some of our projects are still in progress and we encourage you to check them out and follow me during my journey of the design and development process! Feel free to contact us about any of these designs and we can get in touch with you to see if we will be a good fit. </p>
                <div class="continue-reading">
                    
                    <a href="/featured-work" rel="bookmark">
                        <?php
                                printf(
                                        wp_kses( __( 'Projects List %s', 'tinydotone' ), array( 'span' => array( 'class' => array() ) ) ),
                                        the_title( '<span class="screen-reader-text">"', '"</span>', false )
                                );
                        ?>
                    </a>
                </div>
            </div>
<!--            <div id="skip-to-contact" class="contact-section">
                <h4 class="front-headline">Contact</h4>
              
                <p>Let's begin the process of getting your website live and out in the wild! Since my skillset is varied, I am flexible to create many types of full-scale websites, one-page layouts or even blog sites. What this means for you is that I can accommodate the many different needs a small business or freelancer needs to get their business <span id="noticed">noticed</span> without spending a fortune in valuable time and money. </p>
                    

                <div class="continue-reading">
                    
                    <a href="mailto:hello@www.tinydot-llc.dev?subject=Hey, Meg! What's the next step?">
                        <?php
                                printf(
                                        wp_kses( __( 'Get Started', 'tinydotone' ), array( 'span' => array( 'class' => array() ) ) ),
                                        the_title( '<span class="screen-reader-text">"', '"</span>', false )
                                );
                        ?>
                    </a>
                </div>
            </div>-->
             <div class="blog-button">
                <h4 class="front-headline">Read Our Blog</h4>
                <p>While I love to write blogs and short articles, I find myself coding up designs much more often than I find myself blogging these days. Nonetheless, you are always welcome to check out my blog where I share experiences in starting and running a very small home business, staying sane in a small world of doing <strong>ALL</strong> the jobs, all the time, and my fiancee even chimes in with a perspective that only Joe can offer. Click the button below to check it out!</p>
                <div class="continue-reading  front-blog">
                    
                    <a href="/blog" rel="bookmark">
                        <?php
                                printf(
                                        wp_kses( __( 'Read Our Blog %s', 'tinydotone' ), array( 'span' => array( 'class' => array() ) ) ),
                                        the_title( '<span class="screen-reader-text">"', '"</span>', false )
                                );
                        ?>
                    </a>
                </div>
            </div>

    </main><!-- #main -->
</div><!-- #primary -->
<?php
get_sidebar();
get_footer();


