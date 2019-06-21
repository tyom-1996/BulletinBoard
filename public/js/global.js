
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

    //
    //
    // var business_button1 = $('.service-business-button-bl-1 a')
    //
    // if (!business_button1.is(event.target) && business_button1.has(event.target).length === 0) {
    //     business_button1.css('color','#4cda64')
    //     business_button1.find('svg').css('fill','#4cda64')
    //     business_button1.css('background','#FFF')
    //
    //
    // }else{
    //     business_button1.css('color','#FFF')
    //     business_button1.find('svg').css('fill','#FFF')
    //     business_button1.css('background','#4cda64')
    //
    // }
    //
    //
    // var business_button2 = $('.service-business-button-bl-2 a')
    //
    // if (!business_button2.is(event.target) && business_button2.has(event.target).length === 0) {
    //     business_button2.css('color','#4cda64')
    //     business_button2.find('svg').css('fill','#4cda64')
    //     business_button2.css('background','#FFF')
    //
    // }else{
    //     business_button2.css('color','#FFF')
    //     business_button2.find('svg').css('fill','#FFF')
    //     business_button2.css('background','#4cda64')
    //
    //
    // }




})



