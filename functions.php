<?php

/* Basic Function for development */


add_theme_support('title-tag');
add_theme_support('custom-background');


$args = array(
	'default-image' => get_template_directory_uri() . '/img/home-bg.jpg',
);
add_theme_support( 'custom-header', $args );
add_theme_support('post-thumbnail');




/* Menu Register */

register_nav_menus(array(
    'header-menu' => 'Header Menu',
));



/* default menu when menu not register  */

function default_menu() {

    echo '<ul class="nav navbar-nav navbar-right">';
    if (is_user_logged_in()) {
        echo '<li><a href="' . home_url() . '/wp-admin/nav-menus.php">Create a menu</a></li>';
    } else {
        echo '<li><a href="' . home_url() . '">Home</a></li>';
    }
    echo '</ul>';
}

/* Register style & script */

function boostrap_started_script() {
    wp_register_style('bootstrap', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css');
    wp_register_style('clean-blog', get_template_directory_uri() . '/css/clean-blog.min.css');
    wp_register_style('awesome', get_template_directory_uri() . '/vendor/font-awesome/css/font-awesome.min.css');
    wp_register_style('googleapis1', 'https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic');
    wp_register_style('googleapis2', 'https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800');
    wp_register_style('awesome', get_template_directory_uri() . '/vendor/font-awesome/css/font-awesome.min.css');
    
    
    
    
    
    wp_register_script('bootstrap', get_template_directory_uri().'/vendor/bootstrap/js/bootstrap.min.js');
    wp_register_script('jqBootstrapValidation', get_template_directory_uri().'/js/jqBootstrapValidation.js');
    wp_register_script('contact_me', get_template_directory_uri().'/js/contact_me.js');
    wp_register_script('clean', get_template_directory_uri().'/js/clean-blog.min.js');
    
    
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap');
    wp_enqueue_script('jqBootstrapValidation');
    wp_enqueue_script('contact_me');
    wp_enqueue_script('clean');
    
    
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('clean-blog');
    wp_enqueue_style('awesome');
    wp_enqueue_style('googleapis1');
    wp_enqueue_style('googleapis2');
}

add_action('wp_enqueue_scripts', 'boostrap_started_script');


/* Inlcule another file */

include 'navwalker.php';
include 'library/ReduxCore/framework.php';
include 'library/sample/sample-config.php';




/* meta box add */




function cd_meta_box_add()
{
    add_meta_box( 'my-title-id', 'Title meta box', 'cd_meta_box_cb', 'page', 'normal', 'high' );
     add_meta_box( 'my-desc-id', 'Description Meta Box', 'cd_meta_box_desc_cb', 'page', 'normal', 'high' );
      add_meta_box( 'my-img-id', 'Images Meta Box', 'cd_meta_box_img_cb', 'page', 'normal', 'high' );
}
add_action( 'add_meta_boxes', 'cd_meta_box_add' );

/*outpur value*/

function cd_meta_box_cb($post)
{ 
    ?>

<label for="title">Page Title</label>
<input type="text" name="page_title" class="widefat" id="title" value="<?php echo get_post_meta($post->ID,'page_title',true) ?>"  >
<?php
}


/*Update value*/

function  title_update($post_id){
    update_post_meta($post_id,'page_title',$_POST['page_title']);
}

add_action('save_post','title_update');







function cd_meta_box_desc_cb($post)
{
    ?>

<label for="desc"></label>
<input type="text" name="desc" class="widefat" value="<?php echo get_post_meta($post->ID,'desc', true) ?>"  >
     
<?php
}

function des_output($post_id){
    update_post_meta($post_id,'desc',$_POST['desc']);
}

add_action('save_post','des_output');



function cd_meta_box_img_cb()
{ ?>

<label>Upload Header image</label>



    <?php
}


?>
