<script>
    $(document).on('click','.link-category',function () {
        if ($(this).closest('.default-row ').hasClass('error-categories')){
            $(this).closest('.default-row ').removeClass('error-categories')
        }
        $('.link-category svg').each(function () {
            $(this).parent().removeClass('active-category');
        })
        $(this).find('svg').parent().addClass('active-category')
    })

</script>


<link rel="stylesheet" href="{{asset('/css/includes/categories.css')}}">

<ul class="categories-list ">

    @php
        $categories = App\Categories::getAllCategories();

        $post_id = \Request::segment(2);
        $current_cotegory_id = $post_id != null ?  App\Categories::getPostCategoryByPostID($post_id) : '';

    @endphp

    @foreach($categories as $key => $value)
        <li class="cat-item" data-id="{{$value['id']}}" >

            <label for="{{$value['short_name']}}" class="link-category">

                @if($current_cotegory_id != '' )

                    @if($value['id'] == $current_cotegory_id)

                        <div class="svg-bl active-category">
                            {!! $value['svg_content'] !!}
                        </div>

                    @else
                        <div class="svg-bl">
                            {!! $value['svg_content'] !!}
                        </div>
                    @endif

                @else
                    <div class="svg-bl">
                        {!! $value['svg_content'] !!}
                    </div>
                @endif

                <div class="name"> {{$value['category_name']}} </div>
                <div class="count">({{App\Categories::getCategoryCountByID($value['id'])}})</div>
            </label>

            @if($current_cotegory_id != '' )

                @if($value['id'] == $current_cotegory_id)
                    <input type="radio" name="category" id="{{$value['short_name']}}" value="{{$value['id']}}" class="hidden" checked>
                @else
                    <input type="radio" name="category" id="{{$value['short_name']}}" value="{{$value['id']}}" class="hidden">
                @endif

            @else
                <input type="radio" name="category" id="{{$value['short_name']}}" value="{{$value['id']}}" class="hidden">
            @endif

        </li>
    @endforeach

</ul>
