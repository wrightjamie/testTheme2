<?php

class testTheme{

    private $theme_version = 1;
    private $theme_name = "testTheme";

    function __construct(){
        $this->check_version();

        $this->hooks();
    }

    function hooks(){

        add_action( 'init', array( $this, 'register_menus' ));

        add_action( 'wp_enqueue_scripts', array( $this, 'scripts' ));

        add_action( 'customize_register', array ($this, 'customizer' ));

    }

    function check_version(){
        $database_version = get_theme_mod('version',0);
        if($database_version < $this->theme_version){
            $theme_slug = get_option( 'stylesheet' );
            switch($database_version){
                case 0:
                    delete_option( "mods_{$this->theme_name}" );
                    set_theme_mod('copyright', 'Copyright '.date('Y'));

                case 1:
                    set_theme_mod('version',1);
            }
        }
    }

    function scripts() {
        wp_enqueue_style( 'themetest-style', get_stylesheet_uri() );

        //wp_enqueue_script( 'themetest-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

        if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
            wp_enqueue_script( 'comment-reply' );
        }
    }

    function register_menus() {
        register_nav_menu('main-menu','Main Menu');
    }

    function customizer( $wp_customize )
    {
        $wp_customize->add_section(
            'example_section_one',
            array(
                'title' => 'Example Settings',
                'description' => 'This is a settings section.',
                'priority' => 35
            )
        );


        $wp_customize->add_setting(
            'copyright',
            array(
                'default' => 'Copyright '.date('Y')
            )
        );

        $wp_customize->add_control(
            'copyright',
            array(
                'label' => 'Copyright Text',
                'section' => 'example_section_one',
                'type' => 'text'
                //TODO sanitize copyright test
            )
        );

        $description = "<p>Set which pages are going to shown on the front page.</p>";
        $wp_customize->add_panel( 'front-page', array(
            'active_callback' => 'is_front_page',
            'title' => __( 'Front Page Settings' ),
            'description' => $description, // Include html tags such as <p>.
            'priority' => 160, // Mixed with top-level-section hierarchy.
        ) );

        $wp_customize->add_section(
            'learn_more',
            array(
                'title' => 'Learn More Pages',
                'panel' => 'front-page',
                'description' => 'Choose the 3 pages that will be shown in the Learn More.',
                'priority' => 35
            )
        );


        for ($x = 0; $x <= 2; $x++) {
            $wp_customize->add_setting(
                'front-page-learn-more['.$x.']',
                array(
                    'sanitize_callback' => array($this, 'sanitize_integer')
                )
            );

            $wp_customize->add_control(
                'front-page-learn-more['.$x.']',
                array(
                    'type' => 'dropdown-pages',
                    'label' => 'Choose a page:',
                    'section' => 'learn_more'
                )
            );
        }

        $wp_customize->add_section(
            'activities',
            array(
                'title' => 'Activities',
                'description' => 'Choose the 4 pages that will be shown in the What We Do section.',
                'panel' => 'front-page',
                'priority' => 35
            )
        );


        for ($x = 0; $x <= 3; $x++) {
            $wp_customize->add_setting(
                'front-page-activities['.$x.']',
                array(
                    'sanitize_callback' => 'themetest_sanitize_integer'
                )
            );

            $wp_customize->add_control(
                'front-page-activities['.$x.']',
                array(
                    'type' => 'dropdown-pages',
                    'label' => 'Choose a page:',
                    'section' => 'what_we_do'
                )
            );
        }
    }

    function sanitize_integer( $input ) {
        if( is_numeric( $input ) ) {
            return intval( $input );
        }
    }

}
?>

