$(document).on('click','.select-menu .label',function(e){
    let open_bl_class = $(this).data('open');
    let close_bl_class = $(this).data('nextmenu');

    if (!$(`.${open_bl_class}`).hasClass('active-menu-block')){
        $(`.${open_bl_class}`).addClass('active-menu-block');
    }else{
        $(`.${open_bl_class}`).removeClass('active-menu-block');
    }

    $(`.${close_bl_class}`).removeClass('active-menu-block');
})

$(document).mouseup(function (event){

    toggleBLock(".category-results",'active-menu-block',event);
    toggleBLock(".location-results",'active-menu-block',event);

});

function toggleBLock(element,removeClass,event){
    var div = $(element);
    if (!div.is(event.target) && div.has(event.target).length === 0) {
        div.removeClass(removeClass);
    }
}

$(document).mouseover(function (event){

    var div = $('.user-header');

    if (!div.is(event.target) && div.has(event.target).length === 0) {
        $('.nav-header-user').hide();
    }else{
        $('.nav-header-user').show();
        $('.category-results').removeClass('active-menu-block');
        $('.location-results').removeClass('active-menu-block');
    }

})




$(document).mouseover(function (e){
    if (e.target.className == 'switch-lang-link'){
        $(e.target).addClass('hidden-before');
        $(e.target).addClass('hidden-after');
    }else{
        if ($('.switch-lang-link').hasClass('hidden-before') && $('.switch-lang-link').hasClass('hidden-after') ){
            $('.switch-lang-link').removeClass('hidden-before');
            $('.switch-lang-link').removeClass('hidden-after');
        }
    }
})
