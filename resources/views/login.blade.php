{{--ORIGINAL PAGE https://obyava.ua/--}}

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{asset('/css/loginStyle/main.css')}}">
    <link rel="stylesheet" href="{{asset('/css/loginStyle/login.css')}}">
    <link rel="stylesheet" href="{{asset('/css/header_from_login.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


    <script src="{{asset('js/header.js')}}"></script>
    <script src="{{asset('js/global.js')}}"></script>
    <script src="{{asset('js/login.js')}}"></script>
    <title>Вход</title>
</head>
<body class="login-page">

<header>
    <div class="center-block">
        <a href="{{url('/')}}" class="logo-block">

        </a>
        <div class="header-action">

            <div class="main-search left-header-menu-bl">
                <form action="/">
                    <div class="search-field">
                        <input class="input-text" placeholder="Что ищем?" maxlength="80" autocomplete="off" value="" id="search-query">
                    </div>

                    <div class="search-btn">
                        <button style="cursor:pointer;" class="search" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>

                <div class="category-results">CATEGORY</div>
                <div class="location-results">COUNTRY</div>
            </div>


            <div class="right-header-menu-bl">

                <div class="user-header">
                    <span style="position: relative;left: 3px;"><i style="font-size: 17px;" class="far fa-user"></i></span>
                    <span style="font-size: 14px;"> Вход</span>
                    <span><i style="transform: rotate(180deg);font-size: 10px" class="fas fa-chevron-up"></i></span>

                    <div class="nav-header-user">
                        <a href="/login">
                            <span class="nav-header-icon"><i class="fas fa-sign-out-alt"></i></span>
                            <span class="label">Вход</span>
                        </a>

                        <a href="">
                            <span class="nav-header-icon"><i class="far fa-heart"></i></span>
                            <span class="label">Избранные объявления</span>
                        </a>

                        <a href="/register">
                            <span class="nav-header-icon"><i class="fas fa-key"></i></span>
                            <span class="label">Регистрация</span>
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
        <div class="center-login-block">
            <div class="login-register-container">
                <div id="auth-login">



                    {{-- BLOCK 1 START--}}

                    <form id="login-form" action="/login" method="POST">
                        {{ csrf_field() }}
                        <p class="form-title"> <i class="fas fa-sign-out-alt"></i> <span>Вход</span></p>

                        <div class="login-form-input-bl">
                            @php
                                $show_error_border_email = $errors->has('email') ? 'error-border' : '' ;
                                $show_error_border_password = $errors->has('password') ? 'error-border' : '' ;
                            @endphp
                            <input id="email_inp" name="email" class="{{$show_error_border_email}} login-form-input" type="text" placeholder="Телефон или e-mail" value="{{old('email')}}">
                        </div>

                        <div class="login-form-input-bl">
                            <input id="password_inp" class="{{$show_error_border_password}} login-form-input" placeholder="Пароль" name="password" type="password">
                            <i class="far fa-eye change-psw-type" data-type="text"></i>
                            <i class="fas fa-eye-slash change-psw-type  " data-type="password" style="display: none"></i>
                        </div>

                        <div class="reset-psw-bl">
                            <a href="/reset-password" class="reset-psw">Забыли пароль?</a>
                        </div>

                        <div class="button-block">
                            <input class="login-sbm-btn" tabindex="3" type="submit" value="Войти">
                        </div>

                        <p class="link-register-bl">
                            Еще не зарегистрированы?&nbsp;&nbsp;&nbsp;
                            <a href="/register" class="link-register">
                                Регистрация
                            </a>
                        </p>
                    </form>
                    
                    {{-- BLOCK 1 END--}}



                    {{-- BLOCK 2 START--}}

                    <div id="soc-login-block">

                        <div class="sing-in-with">
                            Войдите на сайт в один клик как пользователь
                        </div>
                        <div class="login-social">
                            <a class="btn-social button-google" href="https://obyava.ua/login/oauth/google">
                                <i class="fab fa-google"></i>
                                Google
                            </a>
                            <a class="btn-social button-facebook" href="https://obyava.ua/login/oauth/facebook">
                                <i class="fab fa-facebook-f"></i>
                                Facebook
                            </a>
                        </div>
                    </div>


                    {{-- BLOCK 2 END--}}



                </div>
            </div>
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

@include('includes.mini-chat');

</body>
</html>
