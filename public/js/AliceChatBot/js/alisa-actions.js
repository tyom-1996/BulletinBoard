$(document).ready(function() {

    $(document).on('click', '.alisa-box-actions-close', function() {
        console.log('close')
        $('#box1').fadeOut()
    })

    $(document).on('click', '.alisa-box-actions-expand', function() {
        $('#box1').toggleClass('beeg_box')
        $('#box1').removeAttr("style")
        $('#voice_wave_left,#voice_wave_right,#animation-wrapper').toggle()

        if ($('#box1').hasClass('beeg_box')) {
            $('.coordinates,.alisa_img,.microfon_icon_bl_mini,.alisa_text_bl,.phone-style').hide();
            $('.alisa-box-actions').addClass('alisa-box-actions-beeg-bl')
            $('.setting-bl').show();
        } else {
            $('.coordinates,.alisa_img,.microfon_icon_bl_mini,.alisa_text_bl,.phone-style').show();
            $('.setting-bl').hide();
            $('#box2').remove()
            $('.alisa-box-actions').removeClass('alisa-box-actions-beeg-bl')

        }

    })




    $(document).on('click','.alisa-box-actions-rollup',function(){

        $('#box1').toggleClass('rollup-box')

        if ($('#box1').hasClass('rollup-box')){

            $('body').append(`
                <div class="rollup-alisa-bl"> 
                    <img class="alisa_img alisa_rollup_img" src="http://smartimes.ru/wp-content/uploads/2014/09/assistant.png" style="width: 55px;position: absolute;left: 0;right: 0;margin: auto;">
                </div>
            `)
        }else{
            $('.rollup-actions-bl').remove()
        }


    })

})
