$(document).ready(function () {

    function loadScripts(urls, path) {
        return new Promise(function(resolve) {

            urls.forEach(function(src, i) {

                let script = document.createElement('script');
                script.type = 'text/javascript';
                script.src = (path || "") + src;
                script.async = false;
                if(i == urls.length-1) {
                    script.onreadystatechange = resolve;
                    script.onload = resolve;
                }
                document.body.appendChild(script);
            });
        });
    }


    let JSDependencies = [
        'https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.3/jquery.mCustomScrollbar.concat.min.js',
        location.origin+'/js/AliceChatBot/js/alisa.js',
        location.origin+"/js/AliceChatBot/js/voice-assistant.js"
    ];

    loadScripts(JSDependencies)

})
