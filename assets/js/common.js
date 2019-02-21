(function($){
    $(document).on('mouseenter','#gnb-nav > ul > li',function(){
        $(this).addClass('active');
    });
    $(document).on('mouseleave','#gnb-nav > ul > li',function(){
        $(this).removeClass('active');
    });
})(jQuery);