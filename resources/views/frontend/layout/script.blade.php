<!-- Footer Scripts
============================================= -->
<script type="text/javascript" src="{{ asset('frontend_assets/assets/js/functions.js') }}"></script>
<link rel="stylesheet" href="{{ asset('frontend_assets/assets/slide_news/feed_slide.css') }}"/>

<script src="{{ asset("frontend_assets/assets/slide_news/misc.js") }}"></script>
<script src="{{ asset('frontend_assets/assets/slide_news/sudo.js') }}"></script>
<script src="{{ asset('frontend_assets/assets/js/custom.js') }}"></script>



<script>
    ( function( $ ) {
        $( document ).ready(function() {
            $('#cssmenu > ul > li > a').click(function() {
                $('#cssmenu li').removeClass('active');
                $(this).closest('li').addClass('active');
                var checkElement = $(this).next();
                if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
                    $(this).closest('li').removeClass('active');
                    checkElement.slideUp('normal');
                }
                if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
                    $('#cssmenu ul ul:visible').slideUp('normal');
                    checkElement.slideDown('normal');
                }
                if($(this).closest('li').find('ul').children().length == 0) {
                    return true;
                } else {
                    return false;
                }
            });
        });
    } )( jQuery );
</script>

