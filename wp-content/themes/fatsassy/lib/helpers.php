<?php

//allow child theme to override this function
if(!function_exists('_themename_post_meta')){
function _themename_post_meta() {

    /* translators: $s is the post date */
    printf(
        esc_html__('Posted on %s','_themename'),
        '<a href="' . esc_url(get_permalink( )) . '"><time datetime="' . esc_attr(get_the_date('c')) . 
        '">' . esc_html(get_the_date()) . '</time></a>'
    );

    /* translators: $s is the post author */
    printf(
        esc_html__(' By %s', '_themename'),
        ' By <a href=" ' . esc_url(get_author_posts_url( get_the_author_meta( 'ID' ) )) . '">'
        . esc_html(get_the_author()) . '</a>'
    );
}
}

//allow child theme to override this function
if(!function_exists('_themename_readmore_link')){
function _themename_readmore_link(){

    echo '<a class="c-post__readmore" href="' . esc_url(get_permalink()) . '" title="' . the_title_attribute(['echo' => false]) .'">';

    /* translators: $s is the post title */
    printf(
        wp_kses(
            __( 'Read more <span class="u-screen-reader-text">About %s </span>', '_themename'),
            [
                'span' => [
                    'class' => []
                ]
            ]
        ),
        get_the_title()
    );
    echo '</a>';
}
}

?>