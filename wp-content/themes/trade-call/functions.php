<?php
//addd theme support

add_theme_support('post-thumbnails');
set_post_thumbnail_size(1200, 9999);

// This theme uses wp_nav_menu() in two locations.
register_nav_menus(array(
    'primary' => __('Primary Menu', 'twentysixteen'),
    'social' => __('Social Links Menu', 'twentysixteen'),
));

//<-------------- custom logo----------------->

add_action('customize_register', 'themeslug_theme_customizer');
function themeslug_theme_customizer($wp_customize)
{
    $wp_customize->add_section('themeslug_logo_section', array(
        'title' => __('Logo', 'themeslug'),
        'priority' => 30,
        'description' => 'Upload a logo to replace the default site name and description in the header',
    ));
    $wp_customize->add_setting('themeslug_logo');
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'themeslug_logo', array(
        'label' => __('Logo', 'themeslug'),
        'section' => 'themeslug_logo_section',
        'settings' => 'themeslug_logo',
    )));
}

//<-------------- custom logo----------------->

/*add action for member registration.............start..............*/
add_action('wp_ajax_create_user', 'it_create_user');
add_action('wp_ajax_nopriv_create_user', 'it_create_user');
function it_create_user()
{
    global $wpdb;

    // Handle request then generate response using WP_Ajax_Response
    $name = $_POST['name1'];
    $email = $_POST['email1'];
    $phone = $_POST['phone1'];
    $password = $_POST['password1'];

    //Add a zero at begining of phone number
    if (email_exists($email)) {
        $save_value = 'email_exists';
    } else if (username_exists($name)) {
        $save_value = 'username_exists';
    } else {
//        $password =  wp_generate_password( 10, true, true );

        $user_id = wp_create_user($name, $password, $email);

//        $user_name=  sanitize_title_with_dashes($name);

        add_user_meta($user_id, 'name', $name);
        add_user_meta($user_id, 'email', $email);
        add_user_meta($user_id, 'phone', $phone);
        add_user_meta($user_id, 'password', $password);


        $save_value = "Registration Successful";
    }
    echo $save_value;
    //echo "success==============".$user_id;
    die;

}


/**
 * Register Post Type slider
 */
add_action('init', 'codex_slider_init');
function codex_slider_init()
{
    $labels = array(
        'name' => _x('sliders', 'post type general name', 'your-plugin-textdomain'),
        'singular_name' => _x('slider', 'post type singular name', 'your-plugin-textdomain'),
        'add_new' => 'Add slider',
        'all_items' => 'All slider',
        'edit_item' => 'Edit slider',
    );
    $args = array(
        'labels' => $labels,
        'description' => __('Description.', 'your-plugin-textdomain'),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'slider'),
        'capability_type' => 'post',
        'has_archive' => true,
        'menu_position' => 5,
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'comments')
    );
    register_post_type('slider', $args);
}

/**
 * Register Post Type Testimonial
 */
add_action('init', 'codex_Testimonial_init');
function codex_Testimonial_init()
{
    $labels = array(
        'name' => _x('Testimonials', 'post type general name', 'your-plugin-textdomain'),
        'singular_name' => _x('Testimonial', 'post type singular name', 'your-plugin-textdomain'),
        'add_new' => 'Add Testimonial',
        'all_items' => 'All Testimonial',
        'edit_item' => 'Edit Testimonial',
    );
    $args = array(
        'labels' => $labels,
        'description' => __('Description.', 'your-plugin-textdomain'),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'Testimonial'),
        'capability_type' => 'post',
        'has_archive' => true,
        'menu_position' => 5,
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'comments', 'custom-fields')
    );
    register_post_type('Testimonial', $args);
}

/**
 * Register Post Type Livewebiners
 */
add_action('init', 'codex_Livewebiners_init');
function codex_Livewebiners_init()
{
    $labels = array(
        'name' => _x('Live webinerss', 'post type general name', 'your-plugin-textdomain'),
        'singular_name' => _x('Live webiners', 'post type singular name', 'your-plugin-textdomain'),
        'add_new' => 'Add Live webiners',
        'all_items' => 'All Live webiners',
        'edit_item' => 'Edit Live webiners',
    );
    $args = array(
        'labels' => $labels,
        'description' => __('Description.', 'your-plugin-textdomain'),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'Livewebiners'),
        'capability_type' => 'post',
        'has_archive' => true,
        'menu_position' => 5,
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'comments', 'custom-fields')
    );
    register_post_type('Livewebiners', $args);
}


/**
 * Register Post Type Tradereducation
 */
add_action('init', 'codex_Tradereducation_init');
function codex_Tradereducation_init()
{
    $labels = array(
        'name' => _x('Trader educations', 'post type general name', 'your-plugin-textdomain'),
        'singular_name' => _x('Trader education', 'post type singular name', 'your-plugin-textdomain'),
        'add_new' => 'Add Trader education',
        'all_items' => 'All Trader education',
        'edit_item' => 'Edit Trader education',
    );
    $args = array(
        'labels' => $labels,
        'description' => __('Description.', 'your-plugin-textdomain'),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'Tradereducation'),
        'capability_type' => 'post',
        'has_archive' => true,
        'menu_position' => 5,
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'comments')
    );
    register_post_type('Tradereducation', $args);
}


/**
 * Register Post Type Algorithmictrending
 */
add_action('init', 'codex_algo_init');
function codex_algo_init()
{
    $labels = array(
        'name' => _x('Algorithmic trendings', 'post type general name', 'your-plugin-textdomain'),
        'singular_name' => _x('Algorithmic trending', 'post type singular name', 'your-plugin-textdomain'),
        'add_new' => 'Add Algorithmic trending',
        'all_items' => 'All Algorithmic trending',
        'edit_item' => 'Edit Algorithmic trending',
    );
    $args = array(
        'labels' => $labels,
        'description' => __('Description.', 'your-plugin-textdomain'),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'algo'),
        'capability_type' => 'post',
        'has_archive' => true,
        'menu_position' => 5,
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'comments', 'excerpt')
    );
    register_post_type('algo', $args);
}

/**
 * Register Post Type Tradealert
 */
add_action('init', 'codex_Tradealert_init');
function codex_Tradealert_init()
{
    $labels = array(
        'name' => _x('Trade alerts', 'post type general name', 'your-plugin-textdomain'),
        'singular_name' => _x('Trade alert', 'post type singular name', 'your-plugin-textdomain'),
        'add_new' => 'Add Trade alert',
        'all_items' => 'All Trade alert',
        'edit_item' => 'Edit Trade alert',
    );
    $args = array(
        'labels' => $labels,
        'description' => __('Description.', 'your-plugin-textdomain'),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'Tradealert'),
        'capability_type' => 'post',
        'has_archive' => true,
        'menu_position' => 5,
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'comments','custom-fields')
    );
    register_post_type('Tradealert', $args);
}

?>