<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Another Wordpress Theme</title>
    
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- fichier CSS appelé via le header, désactivé pour l'appeler dans functions.php -->
    <!-- <link href="<?php echo get_bloginfo('template_directory'); ?>/css/main.css" rel="stylesheet"> -->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>

<body>

    <!-- Main navbar -->
    <div class="blog-masthead">
        <div class="container">
            <nav class="blog-nav">
                <a class="blog-nav-item active" href="#">Home</a>
                <?php wp_list_pages('&title_li='); ?>
            </nav>
        </div>
    </div>

    <div class="container">
        <!-- Website Name & main description -->
        <div class="blog-header">
            <h1 class="blog-title"><a href="<?php echo get_bloginfo('wpurl'); ?>"><?php echo get_bloginfo('name'); ?></a></h1>
            <p class="lead blog-description"><?php echo get_bloginfo('description'); ?></p>
        </div>