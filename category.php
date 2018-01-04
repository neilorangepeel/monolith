<?php get_header(); ?>

    <main class="main contain pageCategory" id="main" role="main">

        <div class="portfolio group" id="portfolio">


            <?php 
            $cat_id = get_cat_ID( single_cat_title(null, false) );
            query_posts( "cat=$cat_id&posts_per_page=-1" ); ?>

            <?php if (have_posts()) : ?>
            <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
            <?php while (have_posts()) : the_post(); ?>

            <div class="tile">
                <?php the_post_thumbnail('6x5'); ?>
                <a href="<?php the_permalink(); ?>">
                    <h1><?php the_title(); ?></h1>
                </a>
            </div>

            <?php endwhile; ?>
                        
            <?php else: endif; ?>
            
        </div>

    </main>

<?php get_footer(); ?>