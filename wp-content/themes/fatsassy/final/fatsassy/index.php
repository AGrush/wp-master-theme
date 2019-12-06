<?php get_header("myheader") ?>

<?php if(have_posts()) { ?>
    <?php while(have_posts()) { ?>
        <?php the_post(); ?>
        <h2>
            <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title() ?></a>
        </h2>
        <div>
            <?php fatsassy_post_meta(); ?>
        </div>
        <div>
            <?php the_excerpt(); ?>
        </div>
        <?php fatsassy_readmore_link(); ?>
    <?php } ?>
    <?php the_posts_pagination(); ?>
<?php } else { ?>
    <!-- translate & echo the string with _e or including escape with esc_html_e-->
    <p><?php esc_html_e('Sorry, no posts matched your query.', 'fatsassy'); ?></p>
<?php } ?>

<?php 
// $comments = 10;

// $city = 'London';


//wrong: echo esc_html__('Your city is', 'fatsassy') . $city;

//allow to place the city in different postions for different languages, (printf includes echo)

// printf(  /* translators: $s is the city name */
//     esc_html__( 'Your city is %s', 'fatsassy'), $city
// );

//plurals _n
//printf(_n('One comment', '%s comments', $comments, 'fatsassy'), $comments);

// dont use these as they are not escaped:
// translate
// _x('Post', 'noun', 'fatsassy');
// echo & translate
// _ex('Post', 'noun', 'fatsassy');
?>
<?php get_footer() ?>
