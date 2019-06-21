{{--ORIGINAL PAGE https://obyava.ua/--}}

        <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{asset('/css/myclassifieds/main.css')}}">
    <link rel="stylesheet" href="{{asset('/css/myclassifieds/myclassifieds.css')}}">


    <link href="https://fonts.googleapis.com/css?family=Oxygen|Slabo+27px&display=swap" rel="stylesheet">

    {{--ALISA START--}}
        @include('includes.alisa-links')
    {{--ALISA END--}}

    <script src="{{asset('js/header.js')}}"></script>
    <script src="{{asset('js/global.js')}}"></script>
    <script src="{{asset('js/uploadAndDeleteUserImage.js')}}"></script>
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

@php
    $fullname = $user_data[0]->fullname;
    $profile_photo = $user_data[0]->profile_image;
    $created_at_content = $user_data[0]->created_at_content;
@endphp

<style>
    #profile-photo-block .image{
        background-image: url('{{$profile_photo}}');"
    }
</style>


@include('includes.header')



<section class="main-section">

    <div class="padding-block">

        <div class="center-my-classifieds-block">


                <div class="content-left-menu">

                    <a class="menu-item selected first-child-icon" href="/my-classifieds" rel="nofollow" title="Мои объявления">
                        <span class="button-icon">
                            <svg id="svg-id-male" viewBox="0 0 31.983 31.983">
                                <path d="M29.984,24.985l-5.271-2.5l-2.076,1.229l6.513,3.088c0.067,0.031,0.834,0.16,0.834,1.229l0.001,1.952 L2,29.984v-2.028c0-0.794,0.597-1.044,0.835-1.154l8.782-4.146c0.63-0.288,1.063-0.885,1.147-1.571 c0.085-0.688-0.192-1.369-0.731-1.805c-2.078-1.668-3.047-5.334-3.047-7.286V6.996C8.987,4.906,12.625,2,15.991,2 c3.396,0,6.997,2.859,6.997,4.996v4.997c0,1.645-0.593,4.563-2.102,6.435c-0.082,0.096-0.186,0.211-0.308,0.34 c-0.168,0.177-0.334,0.356-0.521,0.506c-0.38,0.336-0.844,0.686-1.373,0.954l0.869,1.606c1.258-0.54,1.727-0.978,1.727-0.978 c2.771-2.18,3.708-6.463,3.708-8.863V6.996C24.989,3.686,20.407,0,15.991,0S6.987,3.686,6.987,6.996v4.997 c0,2.184,0.997,6.602,3.794,8.847l-8.782,4.146c0,0-1.998,0.891-1.998,1.998v3.001c0,1.104,0.895,1.999,1.998,1.999h27.985 c1.104,0,1.999-0.895,1.999-1.999v-3.001C31.983,25.809,29.984,24.985,29.984,24.985z"></path>
                            </svg>
                        </span>
                    </a>


                    <a class="menu-item messages-badge-wrapper" href="/my-messages"  title="Сообщения">
                        <span class="badge">0</span>
                        <span class="button-icon">
                            <svg id="svg-id-envelope" viewBox="0 0 32 22">
                                <path d="M27.212,3.834L16,12.771L4.788,3.835l-1.337,1.5l11.894,9.515c0.188,0.164,0.421,0.244,0.655,0.244 s0.467-0.08,0.654-0.244l11.803-9.442L27.212,3.834z"></path>
                                <path d="M31.98,2.225c0.023-0.171,0-0.341-0.066-0.505C31.673,0.585,30.87,0,29.5,0h-26 C2.291,0,0.991,0.454,0.372,1.341C0.33,1.375,0.281,1.397,0.244,1.439c-0.207,0.24-0.265,0.546-0.212,0.835 C0.023,2.351,0,2.42,0,2.5v16C0,20.156,1.843,22,3.5,22h26c1.657,0,2.5-1.844,2.5-3.5v-16C32,2.402,31.986,2.317,31.98,2.225z M29.5,20h-26C2.949,20,2,19.053,2,18.5V4.931V4.174V1.999h1.229L3.232,2C3.324,2,3.421,2,3.5,2h25.264l0.002-0.001h1.229v2.179 L30,4.174V18.5C30,19.053,30.053,20,29.5,20z"></path>
                            </svg>
                        </span>
                    </a>


                    <a class="menu-item favorites-badge-wrapper  " href="https://obyava.ua/ru/my-favorites" rel="nofollow" title="Избранные объявления">
                        <span class="badge badge-success">0</span>
                        <span class="button-icon">
                           <svg id="svg-id-heart-empty" viewBox="0 0 32.062 28.885">
                                <path d="M29.317,2.712C27.502,0.899,25.473,0,22.999,0c-2.363,0-5,1.885-6.969,3.885 c-2.031-2-4.586-3.875-7.031-3.875c-2.392,0-4.5,0.715-6.255,2.469c-3.659,3.649-3.659,9.566,0,13.218 c1.044,1.044,11.183,12.322,11.183,12.322c0.578,0.578,1.336,0.866,2.092,0.866s1.513-0.288,2.09-0.866 c0,0,11.09-11.969,11.208-12.089C32.976,12.278,32.976,6.36,29.317,2.712z M27.892,14.527 c-0.114,0.116-6.155,6.634-11.217,12.097c-0.238,0.227-0.511,0.261-0.655,0.261c-0.143,0-0.413-0.033-0.65-0.253 C14.136,25.26,5.196,15.319,4.156,14.28C2.765,12.893,2,11.048,2,9.086c0-1.961,0.766-3.805,2.158-5.192 C5.51,2.542,7.094,2.01,8.999,2.01c0.98,0,2.753,0.469,5.628,3.3l1.425,1.403l1.404-1.426C19.452,3.26,21.576,2,22.999,2 c1.919,0,3.432,0.656,4.906,2.128c1.39,1.387,2.155,3.229,2.155,5.19C30.062,11.28,29.296,13.126,27.892,14.527z"></path>
                           </svg>
                        </span>
                    </a>


                    <a class="menu-item wishlists-badge-wrapper" href="https://obyava.ua/ru/my-wishlists" rel="nofollow" title="Списки желаний">
                        <span class="badge">0</span>
                        <span class="button-icon">
                           <svg id="svg-id-star" viewBox="0 0 32.025 31.029">
                                <path d="M31.906,11.568c-0.275-0.801-0.986-1.386-1.843-1.513l-8.333-1.24l-3.623-7.521 C17.727,0.505,16.91,0,16.012,0c-0.895,0-1.712,0.505-2.093,1.296l-3.622,7.521l-8.334,1.24 c-0.855,0.127-1.566,0.712-1.843,1.513c-0.275,0.801-0.067,1.684,0.538,2.286l6.105,6.1l-1.417,8.458 c-0.143,0.854,0.226,1.707,0.949,2.206c0.397,0.272,0.865,0.411,1.332,0.411c0.385,0,0.77-0.094,1.119-0.28l7.265-3.912 l7.267,3.912c0.351,0.188,0.735,0.28,1.118,0.28c0.467,0,0.936-0.139,1.333-0.411c0.723-0.499,1.09-1.354,0.947-2.206 l-1.417-8.458l6.109-6.1C31.974,13.252,32.181,12.369,31.906,11.568z M24.02,18.339l-1.018,1.017l0.236,1.417l1.415,8.44 l-7.32-3.937l-1.323-0.712l-1.323,0.712l-7.32,3.938l1.416-8.442l0.236-1.417l-1.018-1.017l-6.056-6.042l8.308-1.233l1.461-0.218 l0.642-1.33l3.655-7.579l3.655,7.579l0.642,1.33l1.461,0.218l8.308,1.233L24.02,18.339z"></path>
                           </svg>
                        </span>
                    </a>


                    <a class="menu-item cart-button " id="cart-button" href="https://obyava.ua/ajax/user/cart" onclick="return Cart.show(this);dataLayer.push({'eventCategory':'button', 'eventAction':'cart-sidebar-click','eventLabel':'cart-button-sidebar','event':'cart-sidebar-event'})" rel="nofollow">
                        <span class="badge">0</span>
                        <span class="button-icon">
                            <svg id="svg-id-cart" viewBox="0 0 31.84 31.008">
                                <path d="M31.659,8.379c-0.187-0.265-0.489-0.422-0.812-0.422H12.889v1.986h16.547L25.391,22.01H13.343l-3-11.452 L9.308,6.866l0,0l-1.29-4.449C7.388,0.235,5.891,0,5.276,0H0.993C0.444,0,0,0.444,0,0.993c0,0.549,0.444,0.993,0.993,0.993h4.283 c0.136,0,0.549,0,0.831,0.975l5.526,20.311c0.12,0.43,0.511,0.726,0.956,0.726h13.499c0.419,0,0.793-0.263,0.936-0.657 l4.758-14.053C31.891,8.981,31.846,8.643,31.659,8.379z"></path>
                                <circle cx="14.42" cy="28.508" r="2.5"></circle>
                                <circle cx="23.42" cy="28.508" r="2.5"></circle>
                            </svg>
                         </span>
                    </a>

                </div>

                <div class="content-right-menu">

                    {{-----------START HEADER--------------}}
                        <div class="content-right-header">


                            <div class="content-right-header-left-bl profile-photo ">


                                <div id="profile-photo-block">

                                    <form method="POST" class="upload-photo-form" action="/upload_profile_photo" accept-charset="UTF-8" id="profile-photo" enctype="multipart/form-data" >
                                        {{ csrf_field() }}
                                        <div class="choose-photo-block">
                                            <input class="upload-image-file" name="image" type="file">
                                            <span class="icon absolute center pencil"></span>
                                        </div>
                                    </form>
                                    <div class="image" >
                                        <i style="display: none;" class="fas fa-times delete-profile-photo" ></i>
                                    </div>

                                </div>

                                <div class="profile-info">
                                    <div class="name">{{$fullname}}</div>
                                    <div class="registered-at">
                                        <span>{{$created_at_content}}</span>

                                    </div>
                                    <a class="link" href="/profile">Перейти в профиль</a>
                                </div>

                            </div>


                            <div class="content-right-header-right-bl">

                                <div class="budget-info-block">

                                    <div class="my-balance">
                                        <div class="balance-info">

                                            <div class="label">Баланс</div>

                                            <div class="money">
                                                <span class="money-count">0.00</span>
                                                <sup class="money-currency">$</sup>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="add-balance-block">
                                        <a class="add-balance-button " href="#" >Пополнить баланс</a>
                                    </div>
                                </div>

                            </div>
                        </div>

                    {{-------------END HEADER------------}}



                    {{-----------START BODY--------------}}

                        <div class="content-right-body">
                            <div class="user-service-buttons_bl">

                                <div class="user-service-active-classifieds">

                                    <div class="classifieds-counter">
                                        <span>
                                          Активных объявлений: 0
                                        </span>
                                    </div>
                                </div>



                                <div class="user-service-buttons-business">

                                    <div class="service-business-button-bl-1">
                                        <a class="" href="#" >
                                            <span class="icon-block">
                                               <svg id="svg-id-suitcase" viewBox="0 0 32.001 29.908">
                                                    <path d="M30.001,4.938h-7.987V3c0-1.654-1.346-3-3-3H13c-1.654,0-3,1.346-3,3v1.938H2.001 c-1.1,0-2,0.9-2,2v7.008H0v2h0.001v11.963c0,1.1,0.9,2,2,2h28c1.1,0,2-0.9,2-2V6.938C32.001,5.838,31.101,4.938,30.001,4.938z M12,3c0-0.552,0.448-1,1-1h6.014c0.552,0,1,0.448,1,1v1.938H12V3z M2.001,6.938h28v7.008H18.989v-1.023c0-1.103-0.897-2-2-2 h-1.992c-1.103,0-2,0.897-2,2v1.023H2.001V6.938z M16.991,17.958h-1.994v-5.036h1.992L16.991,17.958z M2.001,27.908V15.945 h10.996v2.013c0,1.103,0.897,2,2,2h1.992c1.103,0,2-0.897,2-2v-2.013h11.012v11.963H2.001z"></path>
                                               </svg>
                                            </span>
                                            Бизнес-пакет
                                        </a>
                                        <div class="time">Услуга не активирована</div>
                                    </div>



                                    <div class="service-business-button-bl-2">
                                        <a class="" href="#" >
                                            <span class="icon-block">
                                               <svg id="svg-id-diamond" viewBox="0 0 31.987 32.027">
                                                    <path d="M31.828,9.247L27.457,0.89c-0.254-0.487-0.914-0.886-1.463-0.886H15.918 C15.912,0.004,15.906,0,15.9,0c-0.005,0-0.01,0.004-0.015,0.004H5.994c-0.551,0-1.211,0.397-1.471,0.883L0.164,9.083 c-0.258,0.485-0.207,1.248,0.113,1.695l15.002,20.911c0.16,0.225,0.375,0.338,0.588,0.338s0.424-0.11,0.586-0.331l15.248-20.758 C32.025,10.495,32.084,9.734,31.828,9.247z M29.443,9.002h-5.359l2.146-6.144L29.443,9.002z M17.973,2.004h6.437l-1.996,5.715 L17.973,2.004z M20.877,9.002h-9.303l4.396-6.315L20.877,9.002z M9.803,8.047L7.798,2.004h6.213L9.803,8.047z M21.267,11.002 l-5.375,15.391l-5.108-15.391H21.267z M13.648,25.985L2.899,11.002h5.776L13.648,25.985z M23.386,11.002h5.787l-11.032,15.02 L23.386,11.002z M5.884,2.589l2.128,6.413h-5.54L5.884,2.589z"></path>
                                               </svg>
                                            </span>
                                            VIP статус
                                        </a>
                                        <div class="time">Услуга не активирована</div>
                                    </div>


                                </div>


                            </div>

                        </div>
                    {{-------------END BODY------------}}



                    {{-----------START BODY--------------}}
                        <div class="content-right-footer">
                            <div class="classifieds-list-empty">Разместите свое объявление
                                <br>
                                <br>
                                <a href="https://obyava.ua/ru/novoe-objavlenie" rel="follow" target="_blank">
                                     <img width="235" height="46" border="0" alt="Подать объявления бесплатно" src="{{asset('img/sendads_ru.gif')}}">
                                </a>
                            </div>
                        </div>
                    {{-------------END BODY------------}}


                </div>


        </div>
    </div>

</section>


@include('includes.footer');


</body>
</html>
