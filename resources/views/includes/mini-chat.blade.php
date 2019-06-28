
<link rel="stylesheet" href="{{asset('css/chat-mini/style.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.3/jquery.mCustomScrollbar.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.3/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

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
<script src="{{asset('js/chat-mini/chat-mini.js')}}"></script>

