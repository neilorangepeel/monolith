<?php get_header(); ?>

    <main class="main pageBlog pageArchive" id="main" role="main">

        <?php if (have_posts()) : ?>

        <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

        <?php /* If this is a category archive */ if (is_category()) { ?>
            <p class="archive-title contain">Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</p>

        <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
            <p class="archive-title contain">Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</p>

        <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
            <p class="archive-title contain">Archive for <?php the_time('F jS, Y'); ?></p>

        <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
            <p class="archive-title contain">Archive for <?php the_time('F, Y'); ?></p>

        <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
            <p class="archive-title contain">Archive for <?php the_time('Y'); ?></p>

        <?php /* If this is an author archive */ } elseif (is_author()) { ?>
            <p class="archive-title contain">Author Archive</p>

        <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
            <p class="archive-title contain">Blog Archives</p>
        
        <?php } ?>

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
                    <h2 class="dateTitle"><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('jS F Y'); ?></time></h2>
                    <?php the_excerpt(); ?>
                    <p class="theTags"><?php the_tags(' ', ' × ', ''); ?></p>
                </div>
            </article>

        <?php endwhile; ?>

        <?php include (TEMPLATEPATH . '/_/parts/pagination.php' ); ?> 

        <?php else: endif; ?>
        
    </main>


<?php get_footer(); ?>