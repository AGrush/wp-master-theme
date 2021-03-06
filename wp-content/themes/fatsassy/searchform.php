<form role="search" method="get" class="c-search-form" action="<?php echo esc_url( home_url('/') ) ?>">
    <label class="c-search-form__label">
        <span class="screen-reader-text">
            <?php echo esc_html_x( 'Search for:', 'label', '_themename' ) ?>
        </span>
        <!-- name="s" important for wp / value = what has been searched. Esc_attr_x gives context to the translator string-->
        <input type="search" class="c-search-form__field" name="s" placeholder="<?php echo esc_attr_x('Search', 'placeholder', '_themename' ) ?>" value="<?php echo esc_attr(get_search_query()) ?>" />
    </label>
    <button class="c-search-form__button" type="submit"><span class="u-screen-reader-text"><?php echo esc_html_x( 'Search', 'submit button', '_themename' ); ?></span><i class="fas fa-search" aria-hidden="true"></i></button>
</form> 