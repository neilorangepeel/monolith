<section class="site-search">

    <form action="<?php bloginfo('siteurl'); ?>" class="searchform group" method="get">
        <label for="s" class="visuallyhidden">Search...</label>
        <input type="search" class="s-input" name="s" value="<?php echo get_search_query(); ?>" placeholder="Type and hit enter"  x-webkit-speech speech />
    </form>

</section>