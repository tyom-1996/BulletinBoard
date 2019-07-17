{{--ORIGINAL PAGE https://obyava.ua/--}}

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{asset('/css/registerStyle/main.css')}}">
    <link rel="stylesheet" href="{{asset('/css/registerStyle/register.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="{{asset('js/header.js')}}"></script>
    <script src="{{asset('js/global.js')}}"></script>
    <title>Регистрация</title>
</head>
<body class="register-page">
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
                <form action="/">
                    <div class="search-field">
                        <input class="input-text" placeholder="Что ищем?" maxlength="80" autocomplete="off" value="" id="search-query">
                    </div>

                    <div class="select-category  select-menu">
                        <div class="separator"></div>
                        <div class="label " data-open="category-results" data-nextmenu="location-results">
                            <span>Все рубрики</span>
                            <i style="transform: rotate(180deg);font-size: 10px" class="fas fa-chevron-up"></i>
                        </div>
                    </div>
                    <div class="select-location select-menu">
                        <div class="separator"></div>
                        <div class="label " data-open="location-results" data-nextmenu="category-results">
                            <span>Вся страна</span>
                            <i style="transform: rotate(180deg);font-size: 10px" class="fas fa-chevron-up"></i>
                        </div>
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
                        ua
                    </a>
                </div>

            </div>
        </div>
    </div>
</header>




<section class="main-section">

    <div class="padding-block">
        <div class="center-register-block">
            <div class="login-register-container">
                <div id="auth-register">
                    {{-- BLOCK 1 START--}}


                        <form id="register-form" method="POST" action="/register">
                            {{ csrf_field() }}
                            <p class="reg-form-title">
                                <span class="icon-block"><i class="fas fa-key"></i></span>
                                <span class="title-text">Регистрация</span>
                            </p>

                            <p class="reg-form-desc">
                                Введите свой e-mail, который можно использовать для входа и корреспонденции. А так же придумайте надежный пароль
                            </p>

                            <div class="register-form-input-bl">
                                @php
                                    $show_error_border_full_name = $errors->has('fullname') ? 'error-border' : '' ;
                                    $show_error_border_gender = $errors->has('gender') ? 'error-color' : '' ;
                                    $show_error_border_email = $errors->has('email') ? 'error-border' : '' ;
                                    $show_error_border_password = $errors->has('password') ? 'error-border' : '' ;
                                    $show_error_border_password_confirmation = $errors->has('password_confirmation') ? 'error-border' : '' ;
                                @endphp
                                <input placeholder="Ваше имя" name="fullname" class="{{$show_error_border_full_name}} register-form-input" type="text"  value="{{ old('fullname') }}">
                            </div>


                            <div class="register-form-input-bl radio-wr-bl">

                                <div class="radio-bl">
                                    <input  name="gender" value="man"  type="radio">
                                    <label class="{{ $show_error_border_gender }}" style="color: #929292;" for="">Мужской пол</label>
                                </div>

                                <div class="radio-bl">
                                    <input  name="gender" value="woman"  type="radio">
                                    <label class="{{ $show_error_border_gender }}" style="color: #929292;" for="">Женский пол</label>
                                </div>

                            </div>


                            <div class="register-form-input-bl">
                                <input id="register-email" placeholder="E-mail" class="{{$show_error_border_email}} register-form-input" name="email" type="text" value="{{ old('email') }}">
                            </div>

                            <div class="register-form-input-bl">
                                <input class="{{$show_error_border_password}} {{$show_error_border_password_confirmation}} register-form-input"  placeholder="Придуманный пароль" name="password" type="password" value="">
                            </div>

                            <div class="register-form-input-bl">
                                <input class="{{$show_error_border_password_confirmation}} register-form-input" placeholder="Повторите пароль" name="password_confirmation" type="password" value="">
                            </div>


                            <div class="button-block">
                                <input class="register-sbm-btn" tabindex="3" type="submit" value="Войти">
                            </div>

                            <p class="link-login-bl">
                                Уже зарегистрированы?
                                <a href="/login" class="link-login">
                                    Войти
                                </a>
                            </p>

                        </form>


                    {{-- BLOCK 1 END--}}



                    {{-- BLOCK 2 START--}}

                        <div id="soc-login-block">

                            <div class="sing-in-with">
                                Войдите на сайт в один клик как пользователь
                            </div>
                            <div class="register-social">
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
