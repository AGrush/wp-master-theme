<?php 

function _themename_register_menus() {
    register_nav_menus( array(
        'main-menu' => esc_html__('Main Menu', '_themename'),
        'footer-menu' => esc_html__('Footer Menu', '_themename')
    ) );
}

add_action( 'init', '_themename_register_menus' );



//inserting aria attributes for dropdown menus
function _themename_aria_hasdropdown($atts, $item, $args) {
    if($args->theme_location == 'main-menu') {
        if(in_array('menu-item-has-children', $item->classes)){
            $atts['aria-haspopup'] = 'true';
            $atts['aria-expanded'] = 'false';
        }
    }
    
    return $atts;
}

add_filter( 'nav_menu_link_attributes', '_themename_aria_hasdropdown', 10, 3);



//Four args: 1. menu title that we need to filter, 2.every navigation $item is a post object containint its custom post info,
//           3. the args are passed from wp_nav_menu in header 4. depth is what level the menu is on 0,1,2..
function _themename_dropdown_icon($title, $item, $args, $depth) {

    //only run for specific menus (main-menu)
    if($args->theme_location == 'main-menu') {
        //does the class 'menu-item-has-children' exist in the array of classes inside the menu $item post object?
        if(in_array('menu-item-has-children', $item->classes)){
            if($depth == 0) {
                //if its the top menu $item add down arrow icon
                $title .= '<i class="fa fa-angle-down" aria-hidden="true"></i>';
            } else {
                //if 'no-arrow' is in the title classes of lower menus dont show arrow (meant for megamenu)
                if(!in_array('no-arrow', $item->classes)){
                //if any other menu $item add right arrow icon
                    $title .= '<i class="fa fa-angle-right" aria-hidden="true"></i>';
                }
            }
        }
    }

    //returned the filtered title
    return $title;
}

//hook the filter to 'nav_menu_item_title', priority 10 and 4 arguments.
add_filter( 'nav_menu_item_title', '_themename_dropdown_icon', 10, 4);