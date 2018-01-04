<div class="offScreenMenu" id="offScreenMenu">

        <nav id="nav" class="nav" role="nagigation">
            <a href="#" class="closeNav" id="closeNav" title="Close navigation">╳</a>
            <?php wp_nav_menu(array('menu' => 'main_nav')); ?>
        </nav>

        <?php include (TEMPLATEPATH . '/_/parts/socialmedia.php' ); ?>

        <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Menu Widgets')) : else : ?><?php endif; ?>        

</div>