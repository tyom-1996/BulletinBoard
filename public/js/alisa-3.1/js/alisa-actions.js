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

    if (!$('#box1').hasClass('beeg_box')) {
        $(".box").draggable({
            drag: function() {
                var offset = $(this).offset();
                var xPos = offset.left;
                var yPos = offset.top;
                let screen_width = screen.width - 350;
                let screen_height = screen.height - 200;
                $('.boxX').text('X : ' + parseInt(xPos));
                $('.boxY').text('Y : ' + parseInt(yPos));
            },
            stop: function() {
                var offset = $(this).offset();
                var xPos = offset.left;
                var yPos = offset.top;
                var screen_width = screen.width - 350;
                var screen_height = screen.height - 200;

                if (xPos <= 0) {
                    $('.box').css('left', '')
                }

                if (xPos >= screen_width) {
                    $('.box').css('left', '').css('right', '')
                }
            }
        });
    }



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
