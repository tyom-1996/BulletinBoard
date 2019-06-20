{{--ORIGINAL PAGE https://obyava.ua/--}}

        <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{asset('/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('/css/header_from_login.css')}}">
    <link rel="stylesheet" href="{{asset('/css/myclassifieds.css')}}">


    {{--ALISA START--}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/js/alisa-3.1/css/alisa.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script src="{{asset('/js/alisa-3.1/js/alisa.js')}}"></script>
    <script src="{{asset('/js/alisa-3.1/js/voice-assistant.js')}}"></script>
    <script class="alisa_action" src="{{asset('/js/alisa-3.1/js/alisa-actions.js')}}"></script>
    {{--ALISA END--}}

    <script src="{{asset('js/header.js')}}"></script>
    <script src="{{asset('js/global.js')}}"></script>
    <title>Регистрация</title>
</head>
<body class="my-classifieds">
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


</script>
<header>
    <div class="center-block">
        <a href="#" class="logo-block">

        </a>
        <div class="header-action">

            <div class="main-search left-header-menu-bl">
                <button class="button-new-announcement logged" href="#">
                    <svg id="svg-id-arrow-rounded" viewBox="0 0 32 32" style="transform: rotate(0deg);">
                        <path d="M16,0C7.163,0,0,7.163,0,16c0,8.836,7.163,16,16,16s16-7.164,16-16C32,7.163,24.837,0,16,0z M16,30 C8.28,30,1.969,23.72,1.969,16S8.28,2,16,2s14,6.28,14,14S23.72,30,16,30z M15.979,8.043l-6.062,5.906 c-0.195,0.195-0.293,0.451-0.293,0.707s0.098,0.512,0.293,0.707c0.391,0.391,1.023,0.391,1.414,0l3.68-3.68V23.01 c0,0.553,0.448,1,1,1s1-0.447,1-1V11.746l3.618,3.617c0.391,0.391,1.023,0.391,1.414,0s0.391-1.023,0-1.414L15.979,8.043z"></path>
                    </svg>
                    <span class="label">Разместить объявление</span>
                </button>

            </div>


            <div class="right-header-menu-bl">

                <div class="user-header">
                    <span style="position: relative;left: 3px;">
                        <img src="{{asset('/img/default-user.png')}}" alt="">
                    </span>
                    <span style="font-size: 14px;"> Профиль</span>
                    <span><i style="transform: rotate(180deg);font-size: 10px" class="fas fa-chevron-up"></i></span>

                    <div class="nav-header-user">
                        <a href="#">
                            <span class="nav-header-icon"><i class="far fa-user"></i></span>
                            <span class="label">Мои объявления</span>
                        </a>

                        <a href="">
                            <span class="nav-header-icon"><i class="far fa-envelope"></i></span>
                            <span class="label">Сообщения</span>
                        </a>

                        <a href="/register">
                            <span class="nav-header-icon">
                                <i class="far fa-heart"></i>
                            </span>
                            <span class="label">Избранные объявления</span>
                        </a>


                        <a href="/register">
                            <span class="nav-header-icon">
                                <i class="far fa-star"></i>
                            </span>
                            <span class="label">Списки желаний</span>
                        </a>


                        <a href="/setting">
                            <span class="nav-header-icon">
                               <i class="fas fa-cogs"></i>
                            </span>
                            <span class="label">Настройки</span>
                        </a>

                        <a href="/logout">
                            <span class="nav-header-icon">
                             <i class="fas fa-sign-out-alt"></i>
                            </span>
                            <span class="label">Выход</span>
                        </a>
                    </div>

                </div>

                <div class="language-header">
                    <a class="switch-lang-link" href="#">
                        RU
                    </a>
                </div>

            </div>
        </div>
    </div>
</header>




<section class="main-section">

    <div class="padding-block">
        <div class="center-my-classifieds-block ">


        </div>
    </div>

</section>



<section class="section-2">
    <footer id="footer">

        <div class="center-block footer-link">

            <a class="default" href="https://obyava.ua/ru/pages/obratnaja-svjaz">
                Обратная связь
            </a>
            <a class="default" href="https://obyava.ua/ru/pages/faq">
                Типичные вопросы и ответы
            </a>
            <a class="default" href="https://obyava.ua/ru/pages/pomoshch">
                Помощь
            </a>
            <a class="default" href="https://obyava.ua/ru/pages/platnye-servisy">
                Платные сервисы
            </a>
            <a class="default" href="https://obyava.ua/ru/pages/polzovatelskoe-soglashenie">
                Пользовательское соглашение
            </a>
            <a class="default" href="https://obyava.ua/ru/pages/pravila-podachi-obyavleniy">
                Правила подачи объявлений
            </a>
        </div>

    </footer>


</section>
</body>
</html>
