<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    

   
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>"

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <?php wp_head();
        global $redux_demo;
    ?>

</head>

<body <?php body_class(); ?>>


    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#">
                    <img src="<?php echo $redux_demo['logo']['url'] ?>" class="img-responsive">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                
                <?php
                    wp_nav_menu(array(
                        'theme_location'=>'header-menu',
                        'menu_class'=>'nav navbar-nav navbar-right',/* add class in ul*/
                        'container'=>'', /* when you no need class  id or div before ul  */
                        'container_class'=>'', /* add div with class before ul*/
                        'container_ud'=>'', /* add div with id before ul */
                        'fallback_cb'=>'default_menu', /* when menu not selected it will work from default_menu functon functions.php */
                        'walker'=>new WP_Bootstrap_Navwalker(), 
                    ));
                ?>
                
               
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->