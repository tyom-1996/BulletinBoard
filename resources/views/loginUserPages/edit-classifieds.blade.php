{{--ORIGINAL PAGE https://obyava.ua/--}}
        <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('/css/EditPostStyle/main.css')}}">
    <link rel="stylesheet" href="{{asset('/css/EditPostStyle/edit-post-style.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Oxygen|Slabo+27px&display=swap" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{asset('js/header.js')}}"></script>
    <script src="{{asset('js/global.js')}}"></script>
    <script src="{{asset('js/edit-post.js')}}"></script>
    <title>Изменить объявление</title>
</head>

<body>

@include('includes.header')

<section class="main-section ">

    <div class="padding-block">
        <div class="center-my-classifieds-block">

            <form action="/product/{{$post_data['id']}}" method="post" id="new-classified-form" enctype="multipart/form-data">
                {{method_field('PUT')}}

                <input type="hidden" name="product_id" value="{{$post_data['id']}}" class="product_id">
                {{csrf_field()}}
                <div class="new-classified-steps">
                    <div class="steps-content">

                        <div class="step-item active">
                            <div class="desc">Изменить объявление</div>
                        </div>

                    </div>
                </div>

                {{-- Title input --}}

                <div class="default-row">
                    <label for="name" class="input-label required">Заголовок</label>
                    <input  id="classified-name-input"  value=" {{$post_data['title']}}" class="input-text required-field   " maxlength="80" name="name" type="text" data-tooltip="Заполните поле &quot;Заголовок&quot;">

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
                        <input id="classified-price-input"  value="{{$post_data['price']}}" class="input-text required-field " maxlength="12" name="price" type="number">

                    </div>
                    <div class="select-inp-bl">
                        <select class="input-select style-1  select2-initialized"  type="price-select" name="currency" tabindex="-1" title="" style="/* display: none; */">

                            @php
                                $currency = ['RU','USD','EUR'];
                            @endphp

                            @for($i = 0;$i<count($currency);$i++)
                                @if($currency[$i] == $post_data['currency'])
                                    <option style="text-transform: uppercase" value="{{$currency[$i]}}" selected="selected">{{$currency[$i]}}</option>
                                @else
                                    <option style="text-transform: uppercase" value="{{$currency[$i]}}">{{$currency[$i]}}</option>
                                @endif
                            @endfor

                        </select>
                    </div>

                </div>



                <div class="default-row ">
                    <label for="country" class="input-label required">Город</label>
                    <div class="country-inp-block" style="width: 100%;margin-right: 0;">
                        <input id="classified-country-input" value="{{$post_data['country']}}" class="input-text required-field " maxlength="12" name="country" id="country" type="text">
                    </div>
                </div>



                {{--Upload images--}}

                <div class="default-row " id="classified-photos">

                    <div class="exist_images" >

                        @php
                            $images = !empty($post_data['images']) ? json_decode($post_data['images']) : [];
                        @endphp

                        @foreach($images as $key => $value)
                            <div class="upload-img-item">
                                <label class="upload-photo-btn" for="" data-key="{{$key}}">
                                    <svg id="svg-id-close" class="delete-exist-photo" viewBox="0 0 32 32">
                                        <path d="M16,0C7.164,0,0,7.163,0,16s7.164,16,16,16c8.837,0,16-7.163,16-16S24.837,0,16,0z M16,30.031 C8.28,30.031,2,23.72,2,16S8.28,2,16,2s14,6.28,14,14S23.72,30.031,16,30.031z M21.657,10.343c-0.391-0.391-1.024-0.391-1.415,0 L16,14.585l-4.243-4.242c-0.391-0.391-1.024-0.391-1.414,0c-0.391,0.391-0.391,1.024,0,1.414L14.585,16l-4.242,4.243 c-0.391,0.391-0.391,1.024,0,1.415c0.39,0.39,1.023,0.39,1.414,0L16,17.415l4.242,4.243c0.391,0.39,1.024,0.39,1.415,0 c0.39-0.391,0.39-1.024,0-1.415L17.414,16l4.243-4.243C22.047,11.367,22.047,10.733,21.657,10.343z"></path>
                                    </svg>
                                    <span>
                                        <img class="thumb" src="{{$value}}">
                                    </span>
                                </label>
                                <div class="previewImg"></div>
                            </div>
                        @endforeach


                    </div>



                    <div class="upload-img-item">
                        <div class="photo-main">
                            <span>Главная</span>
                        </div>

                        <label class="upload-photo-btn"  for="image1">
                            <svg class="svg-id-plus" viewBox="0 0 32 32">
                                <path d="M16,0C7.164,0,0,7.163,0,16s7.164,16,16,16c8.837,0,16-7.163,16-16S24.837,0,16,0z M16,30.031 C8.28,30.031,2,23.72,2,16S8.28,2,16,2s14,6.28,14,14S23.72,30.031,16,30.031z M23,15h-6V9c0-0.553-0.448-1-1-1s-1,0.447-1,1v6H9 c-0.552,0-1,0.447-1,1c0,0.552,0.448,1,1,1h6v6c0,0.553,0.448,1,1,1s1-0.447,1-1v-6h6c0.552,0,1-0.448,1-1 C24,15.447,23.552,15,23,15z"></path>
                            </svg>
                        </label>
                        <input style="display: none" type='file' id="image1" class="files" name="image1"   />
                        <div class='previewImg'></div>
                    </div>

                    <div class="upload-img-item">
                        <label class="upload-photo-btn"  for="image2">
                            <svg class="svg-id-plus" viewBox="0 0 32 32">
                                <path d="M16,0C7.164,0,0,7.163,0,16s7.164,16,16,16c8.837,0,16-7.163,16-16S24.837,0,16,0z M16,30.031 C8.28,30.031,2,23.72,2,16S8.28,2,16,2s14,6.28,14,14S23.72,30.031,16,30.031z M23,15h-6V9c0-0.553-0.448-1-1-1s-1,0.447-1,1v6H9 c-0.552,0-1,0.447-1,1c0,0.552,0.448,1,1,1h6v6c0,0.553,0.448,1,1,1s1-0.447,1-1v-6h6c0.552,0,1-0.448,1-1 C24,15.447,23.552,15,23,15z"></path>
                            </svg>
                        </label>
                        <input style="display: none" type='file' id="image2" class="files" name="image2"  />
                        <div class='previewImg'></div>
                    </div>

                    <div class="upload-img-item">
                        <label class="upload-photo-btn"  for="image3">
                            <svg class="svg-id-plus" viewBox="0 0 32 32">
                                <path d="M16,0C7.164,0,0,7.163,0,16s7.164,16,16,16c8.837,0,16-7.163,16-16S24.837,0,16,0z M16,30.031 C8.28,30.031,2,23.72,2,16S8.28,2,16,2s14,6.28,14,14S23.72,30.031,16,30.031z M23,15h-6V9c0-0.553-0.448-1-1-1s-1,0.447-1,1v6H9 c-0.552,0-1,0.447-1,1c0,0.552,0.448,1,1,1h6v6c0,0.553,0.448,1,1,1s1-0.447,1-1v-6h6c0.552,0,1-0.448,1-1 C24,15.447,23.552,15,23,15z"></path>
                            </svg>
                        </label>
                        <input style="display: none" type='file' id="image3" class="files" name="image3"  />
                        <div class='previewImg'></div>
                    </div>

                </div>

                <div class="show-more-inputs">загрузить больше фотографий </div>

                <div class="default-row" style="font-size: 10px;line-height: 20px;margin-top: 24px;border-bottom: 1px solid #e0e0e0;color: #1c9a3d;padding-bottom: 9px;font-size: 15px;">Дополнительная информация</div>

                {{--Description --}}
                <div class="default-row ">
                    <label for="description" class="input-label required">Описание</label>
                    <textarea class="input-textarea required-field"  maxlength="4000" name="description" cols="50" rows="10" id="description">{{$post_data['description']}}</textarea>
                </div>

                <div class="default-row" style="font-size: 10px; line-height: 20px;margin-top: 5px;">
                    Использовано
                    <span style="margin: 0 3px;" id="descr-length">0</span>
                    символа (-ов) из 4000
                </div>


                <div class="default-row ">
                    <label for="classified-category-input" class="input-label required">Категории</label>
                    <div class="category-inp-block" style="width: 100%;margin-right: 0;">

                        @include('includes.categories')

                    </div>
                </div>




                <div class="default-row ">
                    <label for="classified-tags-input" class="input-label required">Ключевые слова</label>
                    <div class="tags-inp-block" style="width: 100%;margin-right: 0;">
                        <input id="classified-tags-input" value="{{old('tags')}}" class="input-text" name="tags" >

                        <div class="classified-tags-input-value">

                            <ul>
                                @php
                                     $tags = json_decode($post_data['tags']);
                                @endphp

                                @for($i=0;$i<count($tags);$i++)
                                    <li class="tags-item">
                                        <div> {{$tags[$i]}}</div>
                                        <div data-id="{{$i+1}}" class="classified-tag-delete-btn"></div>
                                    </li>
                                @endfor
                            </ul>

                            <div class="classified-tags-hiden-input">

                                @for($i=0;$i<count($tags);$i++)
                                    <input type="hidden" name="tags[]" data-id="{{$i+1}}" value="{{$tags[$i]}}" class="hidden-tags-input">
                                @endfor

                            </div>
                        </div>
                    </div>
                </div>

                <div class="default-row " style="    margin-top: 39px;">
                    <label class="classified-category-input">
                        <input checked="checked" name="allow_comments" type="checkbox" value="1">
                        <span class="label">
                            Разрешить комментарии к объявлению
                        </span>
                    </label>
                </div>

                <div class="default-row submit">
                    <button class="new-product-submit logged" href="#" style="background-color: rgb(76, 218, 100);">
                        <svg id="svg-id-arrow-rounded" viewBox="0 0 32 32" style="transform: rotate(0deg); fill: white;">
                            <path d="M16,0C7.163,0,0,7.163,0,16c0,8.836,7.163,16,16,16s16-7.164,16-16C32,7.163,24.837,0,16,0z M16,30 C8.28,30,1.969,23.72,1.969,16S8.28,2,16,2s14,6.28,14,14S23.72,30,16,30z M15.979,8.043l-6.062,5.906 c-0.195,0.195-0.293,0.451-0.293,0.707s0.098,0.512,0.293,0.707c0.391,0.391,1.023,0.391,1.414,0l3.68-3.68V23.01 c0,0.553,0.448,1,1,1s1-0.447,1-1V11.746l3.618,3.617c0.391,0.391,1.023,0.391,1.414,0s0.391-1.023,0-1.414L15.979,8.043z"></path>
                        </svg>
                        <span class="label" >Сохранить изменения</span>
                    </button>
                </div>

            </form>
        </div>
    </div>

</section>


@include('includes.footer')


</body>
</html>
