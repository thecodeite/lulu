<?php

// hook
add_action( 'customize_register', 'refinery_customize_register' );

// register customizer
function refinery_customize_register( $wp_customize )
{
    // custom classes extending WP_Customize_Control
    class Refinery_Customize_Textarea_Control extends WP_Customize_Control {
        public $type = 'textarea';
     
        public function render_content() 
        {
            ?>
            <label>
                <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
                <textarea rows="5" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
            </label>
            <?php
        }
    }


    /************************************************
     ***************** logo section *****************
     ************************************************/
    $wp_customize->add_section(
        'refinery_logo',

        array(
            'title'    => __( 'Logo', 'refinery' ),
            'priority' => 130,
        )
    );
    $wp_customize->add_setting( 
        'refinery_logo[image]', 
        
        array(
            'default'    => '',
            'type'       => 'option',
            'capability' => 'edit_theme_options',
            'transport'  => 'refresh',
        ) 
    );
    $wp_customize->add_control( 
        new WP_Customize_Image_Control( 
            $wp_customize, 
            'logo', 
            
            array(
                'label'    => __( 'Logo', 'refinery'),
                'section'  => 'refinery_logo',
                'settings' => 'refinery_logo[image]',
            ) 
        ) 
    );
    
    /************************************************
     ************** styling section *****************
     ************************************************/
    $wp_customize->add_section(
        'refinery_styling',

        array(
            'title'    => __( 'Styling', 'refinery' ),
            'priority' => 131,
        )
    );
    // abstract background
    $wp_customize->add_setting( 
        'refinery_styling[background]', 
        
        array(
            'default'    => 'On',
            'type'       => 'option',
            'capability' => 'edit_theme_options',
            'transport'  => 'refresh',
        ) 
    );
    $wp_customize->add_control(
        'background', 
        
        array(
            'label'      => __('Abstract Background', 'refinery'),
            'section'    => 'refinery_styling',
            'settings'   => 'refinery_styling[background]',
            'type'       => 'radio',
            'choices'    => 
                array(
                    'abstracton'    => 'On',
                    'abstractoff'   => 'Off',
            ),
            'priority' => 10,
        )
    );
    // accent color
    $wp_customize->add_setting(
        'refinery_styling[accent_color]',

        array(
            'default'    => '#FFFFFF',
            'type'       => 'option',
            'capability' => 'edit_theme_options',
            'transport'  => 'postMessage',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'background_color',

            array(
                'label'    => __( 'Accent Color', 'refinery' ),
                'section'  => 'refinery_styling',
                'settings' => 'refinery_styling[accent_color]',
                'priority' => 11,
            )
        )
    );
    
    
    
    
    /************************************************
     **************** social section ****************
     ************************************************/
    $wp_customize->add_section(
        'refinery_social',

        array(
            'title'    => __( 'Social', 'refinery' ),
            'priority' => 135,
        )
    );
    // facebook
    $wp_customize->add_setting( 
        'refinery_social[facebook]', 
        
        array(
            'default'    => '',
            'type'       => 'option',
            'capability' => 'edit_theme_options',
            'transport'  => 'refresh',
        ) 
    );
    $wp_customize->add_control(
        'facebook', 
        
        array(
            'label'      => __('Facebook', 'refinery'),
            'section'    => 'refinery_social',
            'settings'   => 'refinery_social[facebook]',
            'priority'   => 11,
    ));
    // twitter
    $wp_customize->add_setting( 
        'refinery_social[twitter]', 
        
        array(
            'default'    => '',
            'type'       => 'option',
            'capability' => 'edit_theme_options',
            'transport'  => 'refresh',
        ) 
    );
    $wp_customize->add_control(
        'twitter', 
        
        array(
            'label'      => __('Twitter', 'refinery'),
            'section'    => 'refinery_social',
            'settings'   => 'refinery_social[twitter]',
            'priority'   => 11,
    ));
    // gplus
    $wp_customize->add_setting( 
        'refinery_social[gplus]', 
        
        array(
            'default'    => '',
            'type'       => 'option',
            'capability' => 'edit_theme_options',
            'transport'  => 'refresh',
        ) 
    );
    $wp_customize->add_control(
        'gplus', 
        
        array(
            'label'      => __('Google+', 'refinery'),
            'section'    => 'refinery_social',
            'settings'   => 'refinery_social[gplus]',
            'priority'   => 13,
    ));
    // linkedin
    $wp_customize->add_setting( 
        'refinery_social[linkedin]', 
        
        array(
            'default'    => '',
            'type'       => 'option',
            'capability' => 'edit_theme_options',
            'transport'  => 'refresh',
        ) 
    );
    $wp_customize->add_control(
        'linkedin', 
        
        array(
            'label'      => __('LinkedIn', 'refinery'),
            'section'    => 'refinery_social',
            'settings'   => 'refinery_social[linkedin]',
            'priority'   => 14,
    ));
    // dribbble
    $wp_customize->add_setting( 
        'refinery_social[dribbble]', 
        
        array(
            'default'    => '',
            'type'       => 'option',
            'capability' => 'edit_theme_options',
            'transport'  => 'refresh',
        ) 
    );
    $wp_customize->add_control(
        'dribbble', 
        
        array(
            'label'      => __('Dribbble', 'refinery'),
            'section'    => 'refinery_social',
            'settings'   => 'refinery_social[dribbble]',
            'priority'   => 15,
    ));
    // pinterest
    $wp_customize->add_setting( 
        'refinery_social[pinterest]', 
        
        array(
            'default'    => '',
            'type'       => 'option',
            'capability' => 'edit_theme_options',
            'transport'  => 'refresh',
        ) 
    );
    $wp_customize->add_control(
        'pinterest', 
        
        array(
            'label'      => __('Pinterest', 'refinery'),
            'section'    => 'refinery_social',
            'settings'   => 'refinery_social[pinterest]',
            'priority'   => 16,
    ));
    // youtube
    $wp_customize->add_setting( 
        'refinery_social[youtube]', 
        
        array(
            'default'    => '',
            'type'       => 'option',
            'capability' => 'edit_theme_options',
            'transport'  => 'refresh',
        ) 
    );
    $wp_customize->add_control(
        'youtube', 
        
        array(
            'label'      => __('Youtube', 'refinery'),
            'section'    => 'refinery_social',
            'settings'   => 'refinery_social[youtube]',
            'priority'   => 17,
    ));
    // vimeo
    $wp_customize->add_setting( 
        'refinery_social[vimeo]', 
        
        array(
            'default'    => '',
            'type'       => 'option',
            'capability' => 'edit_theme_options',
            'transport'  => 'refresh',
        ) 
    );
    $wp_customize->add_control(
        'vimeo', 
        
        array(
            'label'      => __('Vimeo', 'refinery'),
            'section'    => 'refinery_social',
            'settings'   => 'refinery_social[vimeo]',
            'priority'   => 18,
    ));
    // skype
    $wp_customize->add_setting( 
        'refinery_social[skype]', 
        
        array(
            'default'    => '',
            'type'       => 'option',
            'capability' => 'edit_theme_options',
            'transport'  => 'refresh',
        ) 
    );
    $wp_customize->add_control(
        'skype', 
        
        array(
            'label'      => __('Skype', 'refinery'),
            'section'    => 'refinery_social',
            'settings'   => 'refinery_social[skype]',
            'priority'   => 19,
    ));
    
    
    
    
    /************************************************
     ******************* live js ********************
     ************************************************/
    $wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';

    // preview js
    function refinery_customize_preview()
    {
        ?>
        <script type="text/javascript">
            ( function( $ )
            {

                // background color
                wp.customize( 'refinery_styling[accent_color]', function( value ) {
                    value.bind( function( newval ) {
                        $('[class^="fancy icon-"]:before, [class*=" fancy icon-"]:before').css('background', newval );
                    });
                });

                // site title
                wp.customize( 'blogname', function( value ) {
                    value.bind( function( newval ) {
                        $( '#logo h1' ).html( newval );
                    });
                });

            })( jQuery )
        </script>
        <?php
    }

    // load only in preview and not frontend
    if ( $wp_customize->is_preview() && ! is_admin() )
    {
        add_action( 'wp_footer', 'refinery_customize_preview', 21);
    }
}

// load refinery css into wp_head
function refinery_css()
{
    $styling = get_option( 'refinery_styling' );
    $modules = get_option( 'refinery_modules' );
?>

    <!-- options css -->
    <style type="text/css">
        html
        {
            border-top: 0px solid <?php esc_html_e( $styling['accent_color'] ); ?>;
        }
        
        #page a,
        nav#primary ul li a:hover,
        nav#primary ul li.current_page_item a,
        #aside a:hover,
        #social li i:hover
        {
            color: <?php esc_html_e( $styling['accent_color'] ); ?>;
        }
        
        .post h4 a:hover
        {
            color: <?php esc_html_e( $styling['accent_color'] ); ?>!important;
        }
        
        [class^="fancy icon-"], [class*=" fancy icon-"],
        .button,
        #respond input[type="submit"],
        #contact_form input[type="submit"],
        aside .tagcloud a:hover,
        aside #searchform input[type="submit"]:hover,
        .format-link,
        ul#comments .reply a:hover,
        .pagination a:hover,
        .postnavi ul li a:hover,
        .progressbar > div,
        .content .button,
        .jp-play-bar
        {
            background: <?php esc_html_e( $styling['accent_color'] ); ?>;

        }
        
        #background-box
        {
            background: /*<?php esc_html_e( $styling['accent_color'] ); ?>*/ url("<?php echo get_template_directory_uri(); ?>/assets/img/abstract.png") repeat;
        }
    </style>
    <!-- options css -->
    
<?php
}
add_action( 'wp_head', 'refinery_css', 21);