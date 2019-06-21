$(document).ready(function(){
    $(document).on('change','.upload-image-file',function(){
        $('.upload-photo-form').submit();
    })

    //DELETE BUTTON HOVER AND DELETE FUNCTION

    $(document).mouseover(function (event){


        var delete_profile_photo = $('#profile-photo-block .image');

        if (!delete_profile_photo.is(event.target) && delete_profile_photo.has(event.target).length === 0) {

            $('#profile-photo-block .image').css({
                'boxShadow':'unset'
            })
            $('.delete-profile-photo').hide()

        }else{

            $('#profile-photo-block .image').css({
                'boxShadow':'inset 0 0 55px 40px #4cda64'
            })

            $('.delete-profile-photo').show()
        }
    })





    $(document).on('click','.delete-profile-photo',function(){

        $.ajax({
            type: "POST",
            url: 'delete_photo',
            success:function(r){
                $('#profile-photo-block .image').css("background-image", `url(${r})`);
            }
        })
    })

})
