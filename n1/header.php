<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>">
    <meta name="author" content="Luuk Mesker">

    <title><?php echo get_bloginfo( 'name' ); ?></title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php bloginfo( 'template_directory' );?>/style.css" rel="stylesheet">
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head();?>
</head>

<body>

<header>
    <div class="header">
        <div class="headerimage"></div>
    </div>
    <ul>
        <?php wp_list_pages( '&title_li=' ); ?>
    </ul>
    <a href="#home">
        <div class="logo">

        </div>
    </a>
</header>

<div class="container">

    <!--<div class="blog-header">
        <h1 class="blog-title"><a href="<?php bloginfo( 'wpurl' );?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>
        <p class="lead blog-description"><?php echo get_bloginfo( 'description' ); ?></p>
    </div>-->