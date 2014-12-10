<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <!-- meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=9,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale = 1.0,maximum-scale=1.0,user-scalable=no" />
    <meta name="author" content="luluplews">
    <meta name="description" content="luluplews">
    <meta name="keywords" content="luluplews">
    
    <!-- title -->
    <title><?php echo bloginfo('name'); ?> <?php wp_title(); ?></title>

    <!-- wp head, loads styles functions.php -->
    <?php if ( is_singular() ) { wp_enqueue_script('comment-reply'); } wp_head(); ?>

</head>
<!-- /head -->

<body id="index" <?php body_class(); ?>>
    
    <!-- wrapper -->
    <div id="wrapper">

        <!-- content -->
        <div id="content">
            
            