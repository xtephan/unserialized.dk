<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till div.blog-main
 *
 * @package unserialized.dk
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta whomadethis="Build with love by Stefan Fodor @ 2014" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
    <meta name="format-detection" content="telephone=no">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">


    <title>unserialize("<?php echo get_the_title(); ?>")</title>

    <!-- FaveIcon -->
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/favicon.png">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/favicon.png" type="image/png">

    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/assets/favicon_apple.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/assets/favicon_apple_72x72.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/assets/favicon_apple_114x114.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/assets/favicon_apple_144x144.png" />

    <!-- Bootstrap styles -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/vendor/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/vendor/bootstrap/bootstrap-theme.css">

    <!-- Font-Awesome -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/vendor/font-awesome/font-awesome.css">

    <!-- Google Webfonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600|PT+Serif:400,400italic' rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/styles.css" id="theme-styles">

    <!--[if lt IE 9]>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/ie8.css">
    <script src="<?php echo get_template_directory_uri(); ?>/js/vendor/google/html5-3.6-respond-1.1.0.min.js"></script>
    <![endif]-->

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<?php do_action( 'before' ); ?>
<header>
    <div class="widewrapper masthead">
        <div class="container">
            <a href="index.html" id="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/tales-logo.png" alt="Tales Blog">
            </a>

            <div id="mobile-nav-toggle" class="pull-right">
                <a href="#" data-toggle="collapse" data-target=".tales-nav .navbar-collapse">
                    <i class="icon-reorder"></i>
                </a>
            </div>

            <nav class="pull-right tales-nav">
                <div class="collapse navbar-collapse">
                    <ul class="nav nav-pills navbar-nav">

                        <li class="dropdown active">
                            <a class="dropdown-toggle"
                               data-toggle="dropdown"
                               href="#">
                                Blog
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="index.html">Blog</a></li>
                                <li><a href="blog-detail.html">Blog Detail</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="about.html">About</a>
                        </li>
                        <li>
                            <a href="credits.html">Credits</a>
                        </li>
                    </ul>
                </div>
            </nav>

        </div>
    </div>

    <div class="widewrapper subheader">
        <div class="container">
            <div class="tales-breadcrumb">
                <a href="#">Blog</a>
            </div>

            <div class="tales-searchbox">
                <form action="#" method="get" accept-charset="utf-8">
                    <button class="searchbutton" type="submit">
                        <i class="icon-search"></i>
                    </button>
                    <input class="searchfield" id="searchbox" type="text" placeholder="Search">
                </form>
            </div>
        </div>
    </div>
</header>

<div class="widewrapper main">
    <div class="container">
        <div class="row">
            <div class="col-md-8 blog-main">
