// var $messages = $('.messages-content'),
//     d, h, m
//
// $(window).load(function() {
//     $messages.mCustomScrollbar();
//     setTimeout(function() {
//         fakeMessage();
//     }, 100);
// });
//
// function updateScrollbar() {
//     $messages.mCustomScrollbar("update").mCustomScrollbar('scrollTo', 'bottom', {
//         scrollInertia: 5,
//         timeout: 0
//     });
// }
//
// function setDate(){
//     d = new Date()
//     if (m != d.getMinutes()) {
//         m = d.getMinutes();
//         $('<div class="timestamp">' + d.getHours() + ':' + m + '</div>').appendTo($('.message:last'));
//     }
// }
//
// function insertMessage() {
//     msg = $('.message-input').val();
//     if ($.trim(msg) == '') {
//         return false;
//     }
//     $('<div class="message message-personal">' + msg + '</div>').appendTo($('.mCSB_container')).addClass('new');
//     setDate();
//     updateScrollbar();
//     setTimeout(function() {
//         fakeMessage();
//     }, 1000 + (Math.random() * 20) * 100);
// }
//
// $('.message-submit').click(function() {
//     insertMessage();
// });
//
// $(window).on('keydown', function(e) {
//     if (e.which == 13) {
//         insertMessage();
//         return false;
//     }
// })
//
//
// function fakeMessage(text = '') {
//     if ( text != '' ){
//
//         $('<div class="message loading new"><figure class="avatar"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/156381/profile/profile-80.jpg" /></figure><span></span></div>').appendTo($('.mCSB_container'));
//         updateScrollbar();
//
//         $('.message.loading').remove();
//         $('<div class="message new"><figure class="avatar"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/156381/profile/profile-80.jpg" /></figure>' + text + '</div>').appendTo($('.mCSB_container')).addClass('new');
//         setDate();
//         updateScrollbar();
//
//     } else{
//
//         if ($('.message-input').val() != '') {
//             return false;
//         }
//
//     }
//
// }


var style = ''

$(document).on('click','.close-mini-chat',function(){
    $(this).removeClass('fa-compress').addClass(' fa-compress-arrows-alt')

    $_parent = $(this).parent().parent().parent();
    $(this).toggleClass('modal-open')

    if ($(this).hasClass('modal-open')){
        $_parent.attr('style',style)
        $_parent.css('height','324px')
        $_parent.find('.messages').show()
        $_parent.find('.message-box').show()
    }else{

        $(this).removeClass('fa-compress-arrows-alt').addClass('fa-compress')

        style = $(this).parent().parent().parent().attr('style')

        $_parent.css('height','46px')
        $_parent.find('.messages').hide()
        $_parent.find('.message-box').hide()

        $(this).parent().parent().parent().css({
            'bottom': '46px',
            'right' : '10px',
            'top':'unset',
            'left':'unset'
        })

    }

})




$(document).on('dblclick','div.chat',function(){

    if( !$(this).hasClass('modal-open') ){

        $('.close-mini-chat').addClass('modal-open')
        $('.close-mini-chat').removeClass('fa-compress').addClass(' fa-compress-arrows-alt')

        $(this).attr('style',style)
        $(this).css('height','324px')
        $(this).find('.messages').show()
        $(this).find('.message-box').show()
    }

})
