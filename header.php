<?php
/**
*
* Header
*
**/
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"> <!--<![endif]-->
<head>

    <!-- Character Set -->
    <meta charset="<?php bloginfo('charset'); ?>">
        
    <!-- Page Title -->
    <title><?php echo (is_front_page())? bloginfo('name') : wp_title(''); ?></title>
    
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
   
    <meta name="format-detection" content="telephone=no">

    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
    <!-- Fav Icons -->
    <link rel="apple-touch-icon" sizes="57x57" href="<?php esc_url('template_directory'); ?>/images/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php esc_url('template_directory'); ?>/images/favicons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php esc_url('template_directory'); ?>/images/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php esc_url('template_directory'); ?>/images/favicons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php esc_url('template_directory'); ?>/images/favicons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php esc_url('template_directory'); ?>/images/favicons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php esc_url('template_directory'); ?>/images/favicons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php esc_url('template_directory'); ?>/images/favicons/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php esc_url('template_directory'); ?>/images/favicons/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="<?php esc_url('template_directory'); ?>/images/favicons/favicon-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="<?php esc_url('template_directory'); ?>/images/favicons/favicon-160x160.png" sizes="160x160">
    <link rel="icon" type="image/png" href="<?php esc_url('template_directory'); ?>/images/favicons/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="<?php esc_url('template_directory'); ?>/images/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="<?php esc_url('template_directory'); ?>/images/favicons/favicon-32x32.png" sizes="32x32">
    <meta name="msapplication-TileColor" content="#00a300">
    <meta name="msapplication-TileImage" content="<?php esc_url('template_directory'); ?>/images/favicons/mstile-144x144.png">    

    <script type="text/javascript">
        var html = document.getElementsByTagName('html')[0];
        html.className = html.className.replace(new RegExp('(^|\\b)' + 'no-js' + '(\\b|$)', 'gi'), '');
    </script>

    <?php wp_head(); ?>
    
</head>

<body class="body ">
 <?php $shortname = 'starter-theme'; ?>

 <header class="main-header">
        <div class="container">
           <h1>Header</h1>
        </div>
    </header>

    <!-- ======================================================================================== -->
    <!-- Navigation -->
    <!-- ======================================================================================== -->
    
    <nav class="header-navigation">
        <div class="container">
            <h1>Navigation</h1>
            <?php 
                wp_nav_menu( array(
                    'theme_location'    => 'header-navigation',
                    'container'         => 'div',
                    'container_id'      => '',
                    'container_class'   => '',
                    'items_wrap'        => '<ul class="plain">%3$s</ul>',
                    'link_after'        => '<span data-parent></span>'
                )); 
            ?>             
        </div>       
    </nav>           