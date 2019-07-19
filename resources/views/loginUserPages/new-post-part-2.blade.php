{{--ORIGINAL PAGE https://obyava.ua/--}}
        <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('/css/addNewPostStyle/main.css')}}">
    <link rel="stylesheet" href="{{asset('/css/addNewPostStyle/add-new-post-part-2.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Oxygen|Slabo+27px&display=swap" rel="stylesheet">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{asset('js/header.js')}}"></script>
    <script src="{{asset('js/global.js')}}"></script>
    <title>Новое объявление</title>
</head>
<body >
@include('includes.header')
@php
    $show_error_border_name = $errors->has('name') ? 'error-border' : '' ;
    $show_error_border_price = $errors->has('price') ? 'error-border' : '' ;
    $show_error_border_description = $errors->has('description') ? 'error-border' : '' ;
@endphp

<section class="main-section ">

    <div class="padding-block">
        <div class="center-my-classifieds-block">

            <div  id="new-classified-form" enctype="multipart/form-data">

                <div class="new-classified-steps">
                    <div class="steps-content">

                        <div class="step-item ">
                            <div class="number">1</div>
                            <div class="desc">Ввод <br> информации</div>
                        </div>
                        <div class="step-separator icon arrow7-right"></div>
                        <div class="step-item active">
                            <div class="number">2</div>
                            <div class="desc">Размещение <br> объявления</div>
                        </div>
                    </div>
                </div>




                <div>
                    <h1 class="final_message"
                        style="min-height: 100px;display: flex;align-items: center;justify-content: center;color: #bbbbbb;font-size: 23px;">
                        Объявление отправлено администратору на проверку
                    </h1>

                </div>

            </div>
        </div>
    </div>

</section>


@include('includes.footer')


</body>
</html>
