{{--ORIGINAL PAGE https://obyava.ua/--}}
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('/css/myclassifieds/main.css')}}">
    <link rel="stylesheet" href="{{asset('/css/myclassifieds/myclassifieds.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Oxygen|Slabo+27px&display=swap" rel="stylesheet">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{asset('js/header.js')}}"></script>
    <script src="{{asset('js/global.js')}}"></script>
    <script src="{{asset('js/uploadAndDeleteUserImage.js')}}"></script>
    <title>Мои объявления</title>
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



                 @include('includes.left-menu')

                <div class="content-right-menu">

                    {{-----------START content right HEADER--------------}}
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
                                    <div id="delete_photo"  action="delete_photo" method="post" class="image" >

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


                    {{-----------START right  BODY--------------}}

                        <div class="content-right-body">
                            <div class="user-service-buttons_bl">

{{--                                <div class="user-service-active-classifieds">--}}

{{--                                    <div class="active-classifieds-bl">--}}
{{--                                        <span>--}}
{{--                                          Активных объявлений: <span class="active-classifieds-count">0</span>--}}
{{--                                        </span>--}}
{{--                                    </div>--}}

{{--                                    <div class="active-classifieds-bl">--}}
{{--                                        <span>--}}
{{--                                          На модерации: <span class="classifieds-on-moderation-count">0</span>--}}
{{--                                        </span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

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

                                    </div>


                                </div>


                            </div>
                            <div class="content-scrolling-top">

                                <div class="user-service-active-classifieds" >

                                    <div class="active-classifieds-bl active-btn">
                                        <span>
                                          Активные: <span class="active-classifieds-count">0</span>
                                        </span>
                                    </div>

                                    <div class="active-classifieds-bl">
                                        <span>
                                          На модерации: <span class="classifieds-on-moderation-count">0</span>
                                        </span>
                                    </div>

                                    <div class="active-classifieds-bl">
                                        <span>
                                          Отклонено: <span class="classifieds-on-moderation-count">0</span>
                                        </span>
                                    </div>

                                </div>

                                <div class="content-scrolling-top-item ">

                                    <div class="classified-item">

                                        <div class="image-block"
                                             style="background: url(https://obyava.ua/img/classified/0/410/7996/200-uxuhjnfz49uawa0d.jpg);
                                            background-size: cover;
                                            background-position: center;">
                                        </div>

                                        <div class="info-block">
                                            <div class="fl-100 classified-summary">
                                                <div class="name">
                                                    <h4>
                                                        <a href="https://obyava.ua/ru/uslugi-ekskavatora-pogruzchika-samosvala-4107996.html" title="Объявление Услуги экскаватора, погрузчика, доставка стройматериалов">
                                                            Услуги экскаватора, погрузчика, доставка стройматериалов
                                                        </a>
                                                    </h4>
                                                </div>

                                                <div class="classified-price">
                                                    <span>1.00<sup>ГРН</sup></span>

                                                </div>

                                                <p class="parameters one-line">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam architecto deleniti
                                                </p>

                                                <div class="action-btn-block">
                                                    <button>Удалить</button>
                                                    <button>Редактировать</button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>





                                <div class="content-scrolling-top-item">


                                    <div class="classified-item">

                                        <div class="image-block"
                                             style="background: url(https://obyava.ua/img/classified/0/410/7996/200-uxuhjnfz49uawa0d.jpg);
                                            background-size: cover;
                                            background-position: center;">
                                        </div>

                                        <div class="info-block">
                                            <div class="fl-100 classified-summary">
                                                <div class="name">
                                                    <h4>
                                                        <a href="https://obyava.ua/ru/uslugi-ekskavatora-pogruzchika-samosvala-4107996.html" title="Объявление Услуги экскаватора, погрузчика, доставка стройматериалов">
                                                            Услуги экскаватора, погрузчика, доставка стройматериалов
                                                        </a>
                                                    </h4>
                                                </div>

                                                <div class="classified-price">
                                                    <span>1.00<sup>ГРН</sup></span>

                                                </div>


                                                <p class="parameters one-line">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam architecto deleniti
                                                </p>

                                                <div class="action-btn-block">
                                                    <button>Удалить</button>
                                                    <button>Редактировать</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>





                                <div class="content-scrolling-top-item">


                                    <div class="classified-item">

                                        <div class="image-block"
                                             style="background: url(https://obyava.ua/img/classified/0/410/7996/200-uxuhjnfz49uawa0d.jpg);
                                            background-size: cover;
                                            background-position: center;">
                                        </div>

                                        <div class="info-block">
                                            <div class="fl-100 classified-summary">
                                                <div class="name">
                                                    <h4>
                                                        <a href="https://obyava.ua/ru/uslugi-ekskavatora-pogruzchika-samosvala-4107996.html" title="Объявление Услуги экскаватора, погрузчика, доставка стройматериалов">
                                                            Услуги экскаватора, погрузчика, доставка стройматериалов
                                                        </a>
                                                    </h4>
                                                </div>

                                                <div class="classified-price">
                                                    <span>1.00<sup>ГРН</sup></span>

                                                </div>

                                                <p class="parameters one-line">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam architecto deleniti
                                                </p>

                                                <div class="action-btn-block">
                                                    <button>Удалить</button>
                                                    <button>Редактировать</button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>





                                <div class="content-scrolling-top-item">



                                    <div class="classified-item">

                                        <div class="image-block"
                                             style="background: url(https://obyava.ua/img/classified/0/410/7996/200-uxuhjnfz49uawa0d.jpg);
                                            background-size: cover;
                                            background-position: center;">
                                        </div>

                                        <div class="info-block">
                                            <div class="fl-100 classified-summary">
                                                <div class="name">
                                                    <h4>
                                                        <a href="https://obyava.ua/ru/uslugi-ekskavatora-pogruzchika-samosvala-4107996.html" title="Объявление Услуги экскаватора, погрузчика, доставка стройматериалов">
                                                            Услуги экскаватора, погрузчика, доставка стройматериалов
                                                        </a>
                                                    </h4>
                                                </div>

                                                <div class="classified-price">
                                                    <span>1.00<sup>ГРН</sup></span>

                                                </div>


                                                <p class="parameters one-line">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam architecto deleniti
                                                </p>

                                                <div class="action-btn-block">
                                                    <button>Удалить</button>
                                                    <button>Редактировать</button>
                                                </div>


                                            </div>
                                        </div>
                                    </div>

                                </div>






                                <div class="content-scrolling-top-item">



                                    <div class="classified-item">

                                        <div class="image-block"
                                             style="background: url(https://obyava.ua/img/classified/0/410/7996/200-uxuhjnfz49uawa0d.jpg);
                                            background-size: cover;
                                            background-position: center;">
                                        </div>

                                        <div class="info-block">
                                            <div class="fl-100 classified-summary">
                                                <div class="name">
                                                    <h4>
                                                        <a href="https://obyava.ua/ru/uslugi-ekskavatora-pogruzchika-samosvala-4107996.html" title="Объявление Услуги экскаватора, погрузчика, доставка стройматериалов">
                                                            Услуги экскаватора, погрузчика, доставка стройматериалов
                                                        </a>
                                                    </h4>
                                                </div>

                                                <div class="classified-price">
                                                    <span>1.00<sup>ГРН</sup></span>

                                                </div>


                                                <p class="parameters one-line">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam architecto deleniti
                                                </p>

                                                <div class="action-btn-block">
                                                    <button>Удалить</button>
                                                    <button>Редактировать</button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>





                                <div class="content-scrolling-top-item">

                                    <div class="classified-item">

                                        <div class="image-block"
                                             style="background: url(https://obyava.ua/img/classified/0/410/7996/200-uxuhjnfz49uawa0d.jpg);
                                            background-size: cover;
                                            background-position: center;">
                                        </div>

                                        <div class="info-block">
                                            <div class="fl-100 classified-summary">
                                                <div class="name">
                                                    <h4>
                                                        <a href="https://obyava.ua/ru/uslugi-ekskavatora-pogruzchika-samosvala-4107996.html" title="Объявление Услуги экскаватора, погрузчика, доставка стройматериалов">
                                                            Услуги экскаватора, погрузчика, доставка стройматериалов
                                                        </a>
                                                    </h4>
                                                </div>

                                                <div class="classified-price">
                                                    <span>1.00<sup>ГРН</sup></span>

                                                </div>


                                                <p class="parameters one-line">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam architecto deleniti
                                                </p>

                                                <div class="action-btn-block">
                                                    <button>Удалить</button>
                                                    <button>Редактировать</button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>




                            </div>
                        </div>
                    {{-------------END right BODY------------}}



                    {{-----------START footer--------------}}
                        <div class="content-right-footer">
                            <div class="classifieds-list-empty">Разместите свое объявление
                                <br>
                                <br>
                                <a href="/new-post-part-1" rel="follow" target="_blank">
                                     <img width="235" height="46" border="0" alt="Подать объявления бесплатно" src="{{asset('img/sendads_ru.gif')}}">
                                </a>
                            </div>
                        </div>
                    {{-------------END footer------------}}


                </div>


        </div>
    </div>

</section>


@include('includes.footer');


</body>
</html>
