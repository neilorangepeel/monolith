<?php get_header(); ?>


    <main class="main pageBlog pageArchive" id="main" role="main">
       
        <?php if (have_posts()) : ?>
            
            <div class="archive-title contain">

                <p>Search results</p>

                <?php get_search_form(); ?>

            </div>
            
        <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
        <?php while (have_posts()) : the_post(); ?>


       
        <article class="blogPost">
            <?php if (has_post_thumbnail( $post->ID ) ): ?>
            <div class="featuredImage"
                <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
                style="background-image: url('<?php echo $image[0]; ?>');">
            </div>
            <?php endif; ?>
            <div class="postInfo">
                <h1 class="postTitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                <h2 class="date"><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('jS F Y'); ?></time></h2>
                <?php the_excerpt(); ?>
                <p class="theTags"><?php the_tags(' ', ' × ', ''); ?></p>
            </div>
        </article>

        <?php endwhile; ?>

        <?php include (TEMPLATEPATH . '/_/parts/pagination.php' ); ?> 

        <?php else: ?>

        <div class="archive-title contain">

            <p>No results found for &lsquo;<?php echo get_search_query(); ?>&rsquo;</p>

            <?php get_search_form(); ?>

        </div>

        <?php endif ?>

    </main>


<?php get_footer(); ?>