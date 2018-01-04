(function( $ ) {
    $(function() {

        wp.customize( 'tinktank_footer_copyright', function( value ) {
            value.bind( function( to ) {
                $('#copyright').text( to );
            });
        });

        wp.customize( 'tinktank_display_tinktank_link', function( value ) {
            value.bind( function( to ) {
                false === to ? $('#tinktankCredit').hide() : $('#tinktankCredit').show();
            });
        }); 

    });
}( jQuery ));