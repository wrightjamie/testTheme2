<?php

namespace testTheme;

class main
{
    public $helper;
    private $admin;

    function __construct()
    {
        require get_template_directory() . '/inc/helper_class.php';
        $this->helper = new helper;

        if(is_admin()) $this->run_admin();

        $this->hooks();
    }

    private function run_admin()
    {
        $this->check_version();
        $this->admin_hooks();
    }

    private function hooks()
    {

        add_action('init', array($this, 'register_menus'));

        add_action('widgets_init', array($this, 'register_sidebars'));

        add_action('wp_enqueue_scripts', array($this, 'scripts'));

        add_action('after_setup_theme', array($this, 'features'));

        add_action('customize_register', array($this, 'customizer'));
    }

    private function admin_hooks()
    {

    }

    function features()
    {
        add_theme_support('post-thumbnails');

        $args = array(
            'width' => 1400,
            'height' => 400,
            'default-image' => 'http://placehold.it/1400x400',
        );
        add_theme_support('custom-header', $args);
    }

    function scripts()
    {
        wp_enqueue_style('themetest-style', get_stylesheet_uri());

        //wp_enqueue_script( 'themetest-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

        if (is_singular() && comments_open() && get_option('thread_comments')) {
            wp_enqueue_script('comment-reply');
        }
    }

    function register_menus()
    {
        register_nav_menu('main-menu', 'Main Menu');
    }

    function register_sidebars()
    {
        $args = array(
            'name'          => __('Sidebar'),
            'id'            => 'sidebar',
            'description'   => '',
            'class'         => '',
            'before_widget' => '<li id="%1$s" class="widget %2$s">',
            'after_widget'  => '</li>',
            'before_title'  => '<h2 class="widgettitle">',
            'after_title'   => '</h2>' );

        switch(get_theme_mod('sidebar-position', 0))
        {
            case 'one-left':
            case 'one-right':
                register_sidebar($args );
                break;
            default:
                break;
        }
    }


    public function sidebar_position_class()
    {
        switch(get_theme_mod('sidebar-position', 0))
        {
            case 'one-left':
                echo 'sidebar-content';
                break;
            case 'one-right':
                echo 'content-sidebar';
                break;
            default:
                echo 'content-only';
                break;
        }
        return;
    }


    private function check_version()
    {
        $database_version = get_theme_mod('version', 0);
        if ($database_version < $this->helper->get_version()) {
            $theme_slug = get_option('stylesheet');
            switch ($database_version) {
                case 0:
                    delete_option("mods_{$this->helper->get_name()}");
                    set_theme_mod('copyright', 'Copyright ' . date('Y'));

                case 1:
                    set_theme_mod('version', 1);
            }
        }
    }


    public function customizer($wp_customize)
    {
        $description = "<p>Set options specific to the layout and content of this theme.</p>";
        $wp_customize->add_panel('testTheme-options', array(
            'title' => __('Theme Options'),
            'description' => $description, // Include html tags such as <p>.
            'priority' => 160, // Mixed with top-level-section hierarchy.
        ));

        $wp_customize->add_section(
            'layout',
            array(
                'panel' => 'testTheme-options',
                'title' => 'Layout Settings',
                'description' => 'Choose how the blog will be laid out.',
                'priority' => 35
            )
        );
        $wp_customize->add_setting(
            'sidebar-position',
            array(
                'sanitize_callback' => array($this->helper, 'sanitize_choices'),
                'default' => 'one-right'
            )
        );

        $wp_customize->add_control(
            'sidebar-position',
            array(
                'label' => 'What should we do with sidebars?',
                'section' => 'layout',
                'type' => 'select',
                'choices' => array(
                    //'two-left' => 'Two on the left', //TODO sort CSS to add two left
                    'one-left' => 'One on the left',
                    'no-sidebar' => 'No Sidebar',
                    'one-right' => 'One on the right',
                    //'one-right' => 'Two on the right', //TODO sort CSS to add two right
                    //'both' => 'One on each side'
                )
            )
        );

        $wp_customize->add_setting(
            'show-breadcrumbs',
            array(
                //TODO add sanitization
                //'sanitize_callback' => array($this->helper, 'sanitize_choices'),
                'default' => true
            )
        );

        $wp_customize->add_control(
            'show-breadcrumbs',
            array(
                'label' => 'Should Breadcrumbs be shown?',
                'section' => 'layout',
                'type' => 'checkbox'
            )
        );


        $wp_customize->add_section(
            'example_section_one',
            array(
                'panel' => 'testTheme-options',
                'title' => 'Example Settings',
                'description' => 'This is a settings section.',
                'priority' => 35
            )
        );


        $wp_customize->add_setting(
            'copyright',
            array(
                'default' => 'Copyright ' . date('Y')
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


        $wp_customize->add_section(
            'learn_more',
            array(
                'panel' => 'testTheme-options',
                'title' => 'Learn More Pages',
                'description' => 'Choose the 3 pages that will be shown in the Learn More.',
                'priority' => 35
            )
        );


        for ($x = 0; $x <= 2; $x++) {
            $wp_customize->add_setting(
                'front-page-learn-more[' . $x . ']',
                array(
                    'sanitize_callback' => array($this->helper, 'sanitize_integer')
                )
            );

            $wp_customize->add_control(
                'front-page-learn-more[' . $x . ']',
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
                'panel' => 'testTheme-options',
                'title' => 'Activities',
                'description' => 'Choose the 4 pages that will be shown in the What We Do section.',
                'priority' => 35
            )
        );


        for ($x = 0; $x <= 3; $x++) {
            $wp_customize->add_setting(
                'front-page-activities[' . $x . ']',
                array(
                    'sanitize_callback' => array($this->helper, 'sanitize_integer')
                )
            );

            $wp_customize->add_control(
                'front-page-activities[' . $x . ']',
                array(
                    'type' => 'dropdown-pages',
                    'label' => 'Choose a page:',
                    'section' => 'activities'
                )
            );
        }
    }
}

?>

