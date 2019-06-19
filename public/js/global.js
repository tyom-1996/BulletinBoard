
$(document).mouseover(function (event){

    var div = $('.button-new-announcement');

    if (!div.is(event.target) && div.has(event.target).length === 0) {
        $('#svg-id-arrow-rounded').css({
            'transform':'rotate(0deg)'
        })
        console.log('test')
    }else{
        $('#svg-id-arrow-rounded').css({
            'transform':'rotate(90deg)'
        })

    }

})
