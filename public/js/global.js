
$(document).mouseover(function (event){

    var div = $('.button-new-announcement');

    if (!div.is(event.target) && div.has(event.target).length === 0) {

        $('#svg-id-arrow-rounded').css({
            'transform':'rotate(0deg)'
        })
        $('.button-new-announcement.logged').css('backgroundColor','#4cda64')
        $('.button-new-announcement.logged svg').css('fill','white')
        $('.button-new-announcement.logged .label').css('color','white')


    }else{
        $('#svg-id-arrow-rounded').css({
            'transform':'rotate(90deg)'
        })
        $('.button-new-announcement.logged').css('backgroundColor','white')
        $('.button-new-announcement.logged svg').css('fill','#4cda64')
        $('.button-new-announcement.logged .label').css('color','#4cda64')

    }

})
