$(document).ready(function () {
    $(window).scroll(function () {
        $('.flexslider').flexslider({
            animation: "slide"
        });
        
        if ($(this).scrollTop() > 0) {
            $('header').addClass('header2');
        } else {
            $('header').removeClass('header2');
        }

        

    })
});