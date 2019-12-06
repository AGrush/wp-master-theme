<?php


function fatsassy_post_meta() {

    /* translators: $s is the post date */
    printf(
        esc_html__('Posted on %s','fatsassy'),
        '<a href="' . esc_url(get_permalink( )) . '"><time datetime="' . esc_attr(get_the_date('c')) . 
        '">' . esc_html(get_the_date()) . '</time></a>'
    );

    /* translators: $s is the post author */
    printf(
        esc_html__(' By %s', 'fatsassy'),
        ' By <a href=" ' . esc_url(get_author_posts_url( get_the_author_meta( 'ID' ) )) . '">'
        . esc_html(get_the_author()) . '</a>'
    );
}



function fatsassy_readmore_link(){

    echo '<a href="' . esc_url(get_permalink()) . '" title="' . the_title_attribute(['echo' => false]) .'">';

    /* translators: $s is the post title */
    printf(
        wp_kses(
            __( 'Read more <span class="u-screen-reader-text">About %s </span>', 'fatsassy'),
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

?>