<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <!-- meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=9,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale = 1.0,maximum-scale=1.0,user-scalable=no" />
    <meta name="author" content="iKreativ">
    <meta name="description" content="Clean and classy premium Wordpress themes by iKreativ">
    <meta name="keywords" content="premium, wordpress, theme, ikreativ">
    
    <!-- title -->
    <title><?php echo bloginfo('name'); ?> <?php wp_title(); ?></title>

    <!-- wp head, loads styles functions.php -->
    <?php if ( is_singular() ) { wp_enqueue_script('comment-reply'); } wp_head(); ?>
</head>
<!-- /head -->

<body id="index" <?php body_class(); ?>>
    
    <!-- wrapper -->
    <div id="wrapper">
    
        <!-- setup vars -->
        <?php 
            if ( ! is_404() && ! is_search() ) { $featured_image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' ); }
            $abstract = get_option( 'refinery_styling' ); 
        ?>
        <!-- /setup vars --> 
        
        <?php if ( $abstract['background'] == "abstracton" ) : ?>
            <!-- background -->
            <div id="background-box"></div>
            <!-- /background -->
        <?php endif; ?>
    
        <!-- nav -->
    	<nav id="primary" class="animated bounceInLeft">
    	
            <!-- logo -->
    		<div id="logo">
    		    <?php $logo = get_option( 'refinery_logo' ); if ( $logo['image'] ) : ?>
    		        <a href="<?php echo home_url(); ?>">
    		            <img src="<?php echo $logo['image']; ?>" alt="<?php esc_html_e( bloginfo( 'name' ) . bloginfo( 'description' ) ); ?>" />
    		        </a>
    		    <?php else : ?>
        			<a href="<?php echo home_url(); ?>">
        				<h1><?php esc_html_e( bloginfo('name') ); ?></h1>
        			</a>
                <?php endif; ?>
    		</div>
    		<!-- /logo -->
    		
    		<!-- menu -->
            <?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'container_class' => 'nav', 'theme_location' => 'primary_menu' ) ); ?>
            <!-- /menu -->
            
            <!-- filters -->
            <?php if ( is_page_template( 'template-portfolio.php' ) ) : ?>
                <div id="filters">
            		<?php  
                		$terms = get_terms("filter");
                        $count = count($terms);
                        echo '<nav id="filter"><ul class="nolist"><li class="filter"><a href="#">';
                        _e('Filter', 'refinery');
                        echo '</a><ul class="nolist"><li><a href="#" data-filter-value="*">All</a></li>';
                            if ( $count > 0 )
                            {
                                foreach ( $terms as $term ) 
                                {
                				    $termname = strtolower($term->name);
                				    $termname = str_replace(' ', '-', $termname);
                				    echo '<li><a href="#" data-filter-value=".'.$termname.'">'.$term->name.'</a></li>';
                				}
                			 }
                        echo '</ul></li></ul></nav>';
             		 ?>
            	</div>
            <?php endif; ?>
            <!-- /filters -->
            
        </nav>
        <!-- /nav -->
        
        <!-- social -->
        <?php get_template_part('inc/social'); ?>
        <!-- /social -->
        
        <!-- content -->
        <div id="content">
            
            <!-- description -->
            <div id="description">
               <p><?php echo bloginfo('description'); ?></p>
            </div>
            <!-- /description -->
            
            <?php 
                if ( ! is_page_template('template-portfolio.php') && ! is_home() ) :
                    get_template_part('inc/title-tagline'); 
                endif;
            ?>