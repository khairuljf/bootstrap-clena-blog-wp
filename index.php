<?php
get_header();

/*
template name: front
*/
?>
<header class="intro-header" style="background-image: url('<?php header_image(); ?>')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="site-heading">
                    <h1><?php 
                        bloginfo('title');
                     ?></h1>
                    <hr class="small">
                    <span class="subheading"><?php bloginfo('description') ?></span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <?php
            $pcontent = new WP_Query(array(
                'post_type' => 'post',
                
            ));
            ?>
            <?php while ($pcontent->have_posts()): $pcontent->the_post(); ?>
                <div class="post-preview">
                    <a href="<?php the_permalink(); ?>">
                        <h2 class="post-title">
                            <?php the_title(); ?>
                        </h2>
                        <h3 class="post-subtitle">
                            <?php the_content(); ?>
                        </h3>
                    </a>
                    <p class="post-meta">Posted by <a href="#"><?php the_author(); ?></a> on <?php the_time('M d, Y') ?></p>
                </div>

                <hr>
            <?php endwhile; ?>


            
            <!-- Pager -->
            <ul class="pager">
                <li class="next">
                   <?php posts_nav_link() ?>
                    
                    
         
                </li>
            </ul>
        </div>
    </div>
</div>

<hr>

<!-- Footer -->
<?php get_footer(); ?>