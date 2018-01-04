<?php get_header(); the_post(); ?>

    <main class="main pageSingle contain" id="main" role="main">

        <?php the_post_thumbnail( 'fullWidth', array('class' => 'featImage') ); ?>
        
        <article class="singleArticle">
            <h1 class="postTitle"><?php the_title(); ?></h1>
            <?php if (in_category('blog')): ?>
            <h2 class="date"><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('jS F Y'); ?></time></h2>
            <?php endif; ?>

            <?php the_content(); ?>
            
            <?php if (in_category('blog')): ?>
            <p class="theTags"><?php the_tags(' ', ' × ', ''); ?></p>
            <?php comments_template(); ?>
            <?php endif; ?>
        </article>

    </main>

<?php get_footer(); ?>