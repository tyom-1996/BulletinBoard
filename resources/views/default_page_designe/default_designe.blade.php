{{--ORIGINAL PAGE https://obyava.ua/--}}
        <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('/css/default_designe_styles/main.css')}}">
    <link rel="stylesheet" href="{{asset('/css/default_designe_styles/style.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Oxygen|Slabo+27px&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{asset('js/header.js')}}"></script>
    <script src="{{asset('js/global.js')}}"></script>
    <title>Регистрация</title>
</head>
<body class="my-messages">

<script>

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

</script>

@php
    # $fullname = $user_data[0]->fullname;
    # $profile_photo = $user_data[0]->profile_image;
@endphp

<style>
    #profile-photo-block .image{
    {{--background-image: url('{{$profile_photo}}');"--}}
}
</style>


@include('includes.header')



<section class="main-section">

    <div class="padding-block">

        <div class="center-my-messages-block">

            @include('includes.left-menu')


            <div class="content-right-menu">

            </div>


        </div>
    </div>

</section>


@include('includes.footer');


</body>
</html>
