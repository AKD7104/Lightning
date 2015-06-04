<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title(); ?></title>
<!-- Bootstrap -->
<link href="<?php echo get_template_directory_uri(); ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<?php wp_head();?>

</head>
<body <?php body_class(); ?>>
<?php // do_action('bvII_sns_body'); ?>
<header class="navbar navbar-fixed-top siteHeader">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand headLogo" href="<?php echo home_url(); ?>"><span>
            <?php bvII_print_headlogo(); ?>
            </span></a>
        </div>

        <div class="collapse navbar-collapse" id="navbar-ex-collapse">
        <?php wp_nav_menu( array(
            'theme_location'    => 'Header',
            'container'         => 'nav',
            'items_wrap'        => '<ul id="%1$s" class="%2$s nav navbar-nav navbar-right gMenu">%3$s</ul>',
            'fallback_cb'       => ''
        ) ); ?>
        </div>

    </div>
</header>
<?php if (is_front_page()) :?>
<?php get_template_part('module_slide'); ?>
<?php else : ?>
<?php get_template_part('module_pageTit'); ?>
<?php get_template_part('module_panList'); ?>
<?php endif;?>