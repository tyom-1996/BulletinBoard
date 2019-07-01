{{--ORIGINAL PAGE https://obyava.ua/--}}

        <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    {{--CHAT BOT START--}}
    <link rel="stylesheet" href="{{asset('css/chat-mini/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.3/jquery.mCustomScrollbar.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.3/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    {{--CHAT BOT END--}}



    {{--ALISA START--}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('/js/AliceChatBot/css/alisa.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script src="{{asset('/js/AliceChatBot/js/alisa.js')}}"></script>
    <script src="{{asset('/js/AliceChatBot/js/voice-assistant.js')}}"></script>
    <script class="alisa_action" src="{{asset('/js/AliceChatBot/js/alisa-actions.js')}}"></script>
    {{--ALISA END--}}



    <title>Регистрация</title>
</head>
<body class="my-messages">

    <div style="bottom: 56px;right: 10px;" class="chat">
        <div class="chat-title">
            <div class="action_bl">
                <i class="fas fa-compress-arrows-alt close-mini-chat modal-open"></i>
            </div>
            <h1>Fabio Ottaviani</h1>
            <h2>Admin</h2>
            <figure class="avatar">
                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/156381/profile/profile-80.jpg" />
            </figure>
        </div>
        <div class="messages">
            <div class="messages-content"></div>
        </div>
        <div class="message-box">
            <textarea type="text" class="message-input" placeholder="Type message..."></textarea>
            <button type="submit" class="message-submit">Send</button>
        </div>

    </div>

    <script>
        $(document).ready(function () {
            $('body').append(`
                    <script src="${location.origin}/js/chat-mini/chat-mini.js">
             `)
        })
    </script>



</body>
</html>
