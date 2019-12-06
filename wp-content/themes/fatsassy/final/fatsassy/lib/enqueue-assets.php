<?php 

//load main website css/js assets
function fatsassy_assets(){
    wp_enqueue_style('fatsassy-stylesheet', get_template_directory_uri() . '/dist/assets/css/bundle.css', array(), '1.0.0', 'all');
    wp_enqueue_script( 'fatsassy-scripts', get_template_directory_uri() . '/dist/assets/js/bundle.js', array('jquery'), '1.0.0', true );

    //native to wp
    //wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'fatsassy_assets');

//load admin page css/js assets
function fatsassy_admin_assets(){
    wp_enqueue_style('fatsassy-admin-stylesheet', get_template_directory_uri() . '/dist/assets/css/admin.css', array(), '1.0.0', 'all');
    wp_enqueue_script( 'fatsassy-admin-scripts', get_template_directory_uri() . '/dist/assets/js/admin.js', array(), '1.0.0', true );
};
add_action('admin_enqueue_scripts', 'fatsassy_admin_assets');


// load login page css/js assets
function fatsassy_login_assets() {
    wp_enqueue_style( 'fatsassy-login-stylesheet', get_template_directory_uri() . '/dist/assets/css/login.css', array(), '1.0.0', 'all');
    wp_enqueue_script( 'fatsassy-login-scripts', get_template_directory_uri() . '/dist/assets/js/login.js', array(), '1.0.0', true );
}
add_action( 'login_enqueue_scripts', 'fatsassy_login_assets' );

?>