<form role="search" method="get" class="search-form" action="<?php esc_url( home_url( '/' ) ) ?>">
    <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Знайти &hellip;', 'wptuts' ) ?>" value="<?php get_search_query() ?>" name="s" />

    <span class="search-submit-wrap">
    	<input type="submit" class="search-submit" value="" />
    	
    </span>
</form>