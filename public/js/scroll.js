$( window ).scroll(function() {

    if ($(window).scrollTop() <= 5 ){
        $('#footer').css({
            'height':'46px',
            'top':'-46px'
        })
        $('.section-2-open-btn-bl').fadeIn()
        $('#footer .footer-link a').fadeIn()

    }else{
        $('#footer').css({
            'height':'16px',
            'top':'-16px'
        })

        $('.section-2-open-btn-bl').fadeOut()
        $('#footer .footer-link a').fadeOut()

    }
});

$(document).on('click','.section-2-open-btn-bl',function(){
    $('html, body').animate({
        scrollTop: $('.section-2').offset().top
    },1000);
})

