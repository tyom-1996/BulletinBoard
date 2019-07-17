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
        'https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js',
        location.origin+'/js/alisa-3.1/js/alisa.js',
        location.origin+"/js/alisa-3.1/js/voice-assistant.js"
    ];

    loadScripts(JSDependencies)

})


