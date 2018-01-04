(function($){

    /* trigger when page is ready */
    $(document).ready(function (){
    
      

        //--------------------------------- NAV
        var $menu = $( '#offScreenMenu' ),
            $menuToggle = $( '#menuToggle, #closeNav' ),
            $wrapper = $( '#wrapper' );

        $menuToggle.click(function() {
            $wrapper.toggleClass( 'moveOver' );
            $menuToggle.toggleClass( 'opened' );
            $menu.toggleClass( 'OpenOffScreenMenu' );
            return false;
        });


        //--------------------------------- FITVIDS
        $("#main").fitVids();


        //--------------------------------- PORTFOLIO
        var $selectedClass = "",
            $categoryFilter = $( 'a.categoryFilter' ),
            $portfolio = $( '#portfolio' ),
            $portfolioItem = $( '#portfolio .tile' );
            

            $categoryFilter.click(function(){
                
                // ADD CLASS ACTIVE
                $categoryFilter.removeClass('active');    
                $(this).addClass('active');

                // FILTER & FADE OUT PORTFOLIO+ITEMS
                $selectedClass = $(this).attr("data-rel");
                
                // FADE OUT NOT SELECTED
                $portfolio.fadeTo();
                $portfolioItem.not("."+$selectedClass).fadeOut();
                
                // FADE IN SELECTED
                $("."+$selectedClass).fadeIn();
                $portfolio.fadeTo();
                
                return false;
        });
    



    });
})(window.jQuery);