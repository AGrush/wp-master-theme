<?php

//REGISTER PRIMARY SIDEBAR for index page
function _themename_sidebar_widgets() {
    register_sidebar( array(
        'id' => 'primary-sidebar',
        'name' => esc_html__( 'Primary Sidebar', '_themename' ),
        'description' => esc_html__( 'This sidebar appears in the blog posts page.', '_themename' ),
        'before_widget' => '<section id="%1$s" class="c-sidebar-widget u-margin-bottom-20 %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h5>',
        'after_title' => '</h5>'
    ) );
}


//REGISTER 4 SEPARATE SIDEBARS for widgets in the footer (user can change in theme settings)
$footer_layout = '3,3,3,3';
//explode is php function to separate above string with , into an an array
$columns = explode(',', $footer_layout);

//footer dark mode (user can change in settings)
$footer_bg = 'dark';
$widget_theme = '';
if($footer_bg == 'light'){
    $widget_theme = 'c-footer-widget--dark';
} else {
    $widget_theme = 'c-footer-widget--light';
}


// for each column, register a non primary sidebar(footer) with an array of arguments, a unique id, 
foreach ($columns as $i => $column) {
    register_sidebar( array(
        'id' => 'footer-sidebar-' . ($i + 1),
        //printf is for escaping variables into a string that is translateable (sprintf without echo)
        'name' => sprintf(esc_html__( 'Footer Widgets Column %s', '_themename' ), $i + 1),
        'description' => esc_html__( 'Footer widgets', '_themename' ),
        'before_widget' => '<section id="%1$s" class="c-footer-widget ' . $widget_theme . ' %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h5>',
        'after_title' => '</h5>'
    ));
}

add_action('widgets_init', '_themename_sidebar_widgets');

?>