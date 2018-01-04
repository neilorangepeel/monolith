<?php /* Template Name: Portfolio */ ?>

<?php get_header(); ?>

    <main class="main contain pageCategory" id="main" role="main">

        <?php include (TEMPLATEPATH . '/_/parts/categorylist.php' ); ?>        

        <div class="portfolio group" id="portfolio">
 
            <?php
                $exclude  = get_cat_id('blog');
                $args     = array(
                            'category__not_in' => $exclude,
                            'posts_per_page'    => '-1'
                );
                $wp_query = new WP_Query();
                $wp_query->query($args);
            ?>
            
            <?php 
                if ( $wp_query->have_posts() ) : 
                while ( $wp_query->have_posts() ) : 
                $wp_query->the_post(); 
            ?>

            <div class="tile all-cat <?php foreach( get_the_category() as $cat ) { echo $cat->slug.'-cat ' ; } ?>">
                <?php the_post_thumbnail('6x5'); ?>
                <a href="<?php the_permalink(); ?>">
                    <h1><?php the_title(); ?></h1>
                </a>
            </div>

            <?php endwhile; ?>
            
            <?php wp_reset_postdata(); ?>
            
            <?php else: endif; ?>
            
        </div>

    </main>

<?php get_footer(); ?>