        <footer class="footer" role="contentinfo">
            <div class="contain">            
            <?php if ( '' != get_theme_mod( 'tinktank_footer_copyright' ) ) { ?>
                <p id="copyright" class="alignleft">
                    <?php echo get_theme_mod( 'tinktank_footer_copyright' ); ?>
                </p>

            <?php } else { ?>
            
                <p id="copyright" class="alignleft">
                    &copy; <?php echo date("Y"); echo " "; bloginfo('name'); ?>
                </p>
            <?php } ?>

            <?php if ( true === get_theme_mod( 'tinktank_display_tinktank_link' ) ) { ?>
                <p id="tinktankCredit" class="tinktankCredit alignright">
                    Design by <a href="http://tinktank.in">Tink <span class="tinktank">⚒</span> Tank</a>
                </p>
            <?php } ?>
            </div>
        </footer>

    </div><?php # END of wrapper ?>

<?php wp_footer(); ?>

</body>

</html>