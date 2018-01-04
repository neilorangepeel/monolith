<?php /* Template Name: Blog */ ?>

<?php get_header(); ?>

    <main class="main pageBlog" id="main" role="main">

        <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(
                    'category_name' => 'blog',
                    'paged'         => $paged 
            );
            $wp_query = new WP_Query();
            $wp_query->query($args);
        ?>
        
        <?php 
            if ( $wp_query->have_posts() ) : 
            while ( $wp_query->have_posts() ) : 
            $wp_query->the_post(); 
        ?>
        
        <article class="blogPost">

            <?php if (has_post_thumbnail( $post->ID ) ): ?>
            <div class="featuredImage"
                <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), '5x5' ); ?>
                style="background-image: url('<?php echo $image[0]; ?>');">
            </div>
            <?php endif; ?>
            
            <div class="postInfo">
                <h1 class="postTitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                <h2 class="dateTitle"><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('jS F Y'); ?></time></h2>
                <?php the_excerpt(); ?>
                <p class="theTags"><?php the_tags(' ', ' × ', ''); ?></p>
            </div>
            
        </article>

        <?php endwhile; ?>
        
        <?php include (TEMPLATEPATH . '/_/parts/pagination.php' ); ?> 
        
        <?php wp_reset_postdata(); ?>

        <?php else: endif; ?>

    </main>

<?php get_footer(); ?>