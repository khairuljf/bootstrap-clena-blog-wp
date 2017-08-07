<?php



get_header();

?>

<?php

$prefix = 'clean_';
$header_img  = get_post_meta( get_the_ID(), $prefix . 'image', true );
 if($header_img==""){
	?>
	 <header class="intro-header" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/about-bg.jpg')">
	<?php }
else { ?>
	<header class="intro-header" style="background-image: url('<?php echo $header_img ?>')">
	
	<?php
}

 ?>

	
	
	
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1><?php 
						
						$title  = get_post_meta( get_the_ID(), $prefix . 'heading-text', true );
						$subtitle  = get_post_meta( get_the_ID(), $prefix . 'subtitle-text', true );
						
						echo $title ?></h1>
                        <hr class="small">
                        <span class="subheading"><?php echo $subtitle ?></span>
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