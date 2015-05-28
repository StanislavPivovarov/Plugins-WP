
(function($){
    $(document).on('click','a',function(event) {
        var $ul = $(this).siblings('ul .sub-menu');
        event.stopPropagation();

        if ($ul.length > 0 && $ul.is(':visible')){
            event.preventDefault();
            if($(this).parent('li').siblings('li').length > 0){
                $(this).siblings('ul').slideUp();
                $(this).siblings('ul').find('ul').css("display","none");
            } else {
                $(this).siblings('ul').slideUp();
                $(this).siblings('ul').find('ul').css("display","none");
            }
        } else if ($ul.length > 0){
            event.preventDefault();
            $(this).siblings('ul').slideDown();
        }
    });
})(jQuery);