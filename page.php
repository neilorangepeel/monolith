<?php get_header(); the_post(); ?>

    <main class="main pageSingle contain" id="main" role="main">
        
        <?php the_post_thumbnail( 'fullWidth', array('class' => 'featImage') ); ?>

        <article class="singleArticle">
            <h1 class="postTitle"><?php the_title(); ?></h1>
            <?php the_content(); ?>
        </article>

    </main>

<?php get_footer(); ?>