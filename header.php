<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="PHP Full Stack Developer">
    <meta name="author" content="PHP Full Stack Developer">
    <title>TEAMBuktoo | PHP Full Stack Developer, Wordpress, Drupal expert</title>
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="http://teambuktoo.com/wp-content/themes/teambuktoo/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://teambuktoo.com/wp-content/themes/teambuktoo/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://teambuktoo.com/wp-content/themes/teambuktoo/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://teambuktoo.com/wp-content/themes/teambuktoo/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="http://teambuktoo.com/wp-content/themes/teambuktoo/images/ico/apple-touch-icon-57-precomposed.png">
    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
</head>

<body data-spy="scroll" data-target="#navbar" data-offset="0">

    <?php //$url = content_url(); $url_portfolio = $url."/themes/teambuktoo/images/portfolio/";?>
    <?php //echo $url_portfolio.'thumb/item1.jpg'; die();?>

    <header id="header" role="banner">
        <div class="container">
            <div id="navbar" class="navbar navbar-default">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="./"></a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#main-slider"><i class="icon-home"></i></a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#portfolio">Clients</a></li>
                        <li><a href="#pricing">My code</a></li>
                        <li><a href="#about-me">About Me</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>


