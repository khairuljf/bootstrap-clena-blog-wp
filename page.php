<?php

/*

template name: about

*/

get_header();

?>
    <header class="intro-header" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/about-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1><?php echo get_post_meta($post->ID,'page_title',true) ?></h1>
                        <hr class="small">
                        <span class="subheading"><?php echo get_post_meta($post->ID,'desc', true) ?></span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
              <?php while (have_posts()): the_post(); ?>
                
                    
                        
                 

                       
                            <?php the_content(); ?>
                       

                  
               

                <hr>
            <?php endwhile; ?>
            </div>
        </div>
    </div>

    <hr>

    <!-- Footer -->
    <?php get_footer(); ?>