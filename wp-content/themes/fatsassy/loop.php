<?php if(have_posts()) { ?>
    <?php while(have_posts()) { ?>
        <?php the_post(); ?>
            <!-- add second argument here to allow for different post formats -->
            <?php get_template_part( 'template-parts/post/content' ); ?>
        <?php } ?>
    <?php the_posts_pagination(); ?>
    <?php do_action('_themename_after_pagination'); ?>
<?php } else { ?>
    <!-- no posts found template -->
    <?php get_template_part( 'template-parts/post/content', 'none' ); ?>
<?php } ?>