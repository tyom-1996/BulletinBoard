$(document).on('click','.change-psw-type',function(){

    let type =  $(this).data('type')

    if(type == 'text'){
        $('.change-psw-type').show()
        $(this).hide()
        $(this).parent().children('#password_inp').attr('type',type)
    }else{
        $('.change-psw-type').show()
        $(this).hide()
        $(this).parent().children('#password_inp').attr('type',type)
    }

})



$(window).on('keydown', function(e) {
    if (e.which == 13) {
        $('#login-form').submit();
    }
})
