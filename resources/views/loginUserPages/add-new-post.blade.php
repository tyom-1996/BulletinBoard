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
    <link rel="stylesheet" href="{{asset('/css/addNewPostStyle/add-new-post.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Oxygen|Slabo+27px&display=swap" rel="stylesheet">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{asset('js/header.js')}}"></script>
    <script src="{{asset('js/global.js')}}"></script>
    <script src="{{asset('js/upload-post-photo.js')}}"></script>
    <title>Новое объявление</title>
</head>
<body >

@include('includes.header')

<section class="main-section">

    <div class="padding-block">
        <div class="center-my-classifieds-block">

            <form action="" method="post" id="new-classified-form">
                {{csrf_field()}}
                <div class="new-classified-steps">
                    <div class="steps-content">

                        <div class="step-item active">
                            <div class="number">1</div>
                            <div class="desc">Ввод <br> информации</div>
                        </div>
                        <div class="step-separator icon arrow7-right"></div>
                        <div class="step-item ">
                            <div class="number">2</div>
                            <div class="desc">Размещение <br> объявления</div>
                        </div>
                    </div>
                </div>


                {{--Title input --}}

                <div class="default-row">
                    <label for="name" class="input-label required">Заголовок</label>
                    <input id="classified-name-input" class="input-text" maxlength="80" name="name" type="text" data-tooltip="Заполните поле &quot;Заголовок&quot;">

                    <div class="name-input-countdown">
                        Осталось символов:
                        <span class="name-input-length">
                            80
                        </span>
                    </div>

                </div>

                {{--Price input--}}

                <div class="default-row ">
                    <label for="price" class="input-label required">Цена</label>
                    <div class="price-inp-block">
                        <input id="classified-price-input" class="input-text" maxlength="12" name="price" type="text">

                    </div>
                    <div class="select-inp-bl">
                        <select class="input-select style-1  select2-initialized" name="currency" tabindex="-1" title="" style="/* display: none; */">
                            <option value="uah" selected="selected">RU</option>
                            <option value="usd">USD</option>
                            <option value="eur">EUR</option>
                        </select>
                    </div>

                </div>



                {{--Upload images--}}

                <div class="default-row " id="classified-photos">

                    <div class="upload-img-item">
                        <div class="photo-main">
                            <span>Главная</span>
                        </div>




                        <label class="upload-photo-btn"  for="image1">
                            <svg class="svg-id-plus" viewBox="0 0 32 32">
                                <path d="M16,0C7.164,0,0,7.163,0,16s7.164,16,16,16c8.837,0,16-7.163,16-16S24.837,0,16,0z M16,30.031 C8.28,30.031,2,23.72,2,16S8.28,2,16,2s14,6.28,14,14S23.72,30.031,16,30.031z M23,15h-6V9c0-0.553-0.448-1-1-1s-1,0.447-1,1v6H9 c-0.552,0-1,0.447-1,1c0,0.552,0.448,1,1,1h6v6c0,0.553,0.448,1,1,1s1-0.447,1-1v-6h6c0.552,0,1-0.448,1-1 C24,15.447,23.552,15,23,15z"></path>
                            </svg>
                        </label>
                        <input style="display: none" type='file' id="image1" class="files" name="image"  />
                        <div class='previewImg'></div>
                    </div>

                    <div class="upload-img-item">
                        <label class="upload-photo-btn"  for="image2">
                            <svg class="svg-id-plus" viewBox="0 0 32 32">
                                <path d="M16,0C7.164,0,0,7.163,0,16s7.164,16,16,16c8.837,0,16-7.163,16-16S24.837,0,16,0z M16,30.031 C8.28,30.031,2,23.72,2,16S8.28,2,16,2s14,6.28,14,14S23.72,30.031,16,30.031z M23,15h-6V9c0-0.553-0.448-1-1-1s-1,0.447-1,1v6H9 c-0.552,0-1,0.447-1,1c0,0.552,0.448,1,1,1h6v6c0,0.553,0.448,1,1,1s1-0.447,1-1v-6h6c0.552,0,1-0.448,1-1 C24,15.447,23.552,15,23,15z"></path>
                            </svg>
                        </label>
                        <input style="display: none" type='file' id="image2" class="files" name="image"  />
                        <div class='previewImg'></div>
                    </div>

                    <div class="upload-img-item">
                        <label class="upload-photo-btn"  for="image3">
                            <svg class="svg-id-plus" viewBox="0 0 32 32">
                                <path d="M16,0C7.164,0,0,7.163,0,16s7.164,16,16,16c8.837,0,16-7.163,16-16S24.837,0,16,0z M16,30.031 C8.28,30.031,2,23.72,2,16S8.28,2,16,2s14,6.28,14,14S23.72,30.031,16,30.031z M23,15h-6V9c0-0.553-0.448-1-1-1s-1,0.447-1,1v6H9 c-0.552,0-1,0.447-1,1c0,0.552,0.448,1,1,1h6v6c0,0.553,0.448,1,1,1s1-0.447,1-1v-6h6c0.552,0,1-0.448,1-1 C24,15.447,23.552,15,23,15z"></path>
                            </svg>
                        </label>
                        <input style="display: none" type='file' id="image3" class="files" name="image"  />
                        <div class='previewImg'></div>
                    </div>




                </div>

                <div class="show-more-inputs">загрузить больше фотографий </div>



                {{--Description --}}
                <div class="default-row ">
                    <label for="description" class="input-label required">Описание</label>
                    <textarea class="input-textarea" maxlength="4000" name="description" cols="50" rows="10" id="description"></textarea>
                </div>

                <div class="default-row" style="font-size: 10px; line-height: 20px;margin-top: 5px;">
                    Использовано
                    <span style="margin: 0 3px;" id="descr-length">0</span>
                    символа (-ов) из 4000
                </div>

            </form>
        </div>
    </div>

</section>



<style>
    .thumb {
        border: 1px solid #000000;
        height: 75px;
        margin: 10px 5px 0 0;
    }
</style>

@include('includes.footer')


</body>
</html>
