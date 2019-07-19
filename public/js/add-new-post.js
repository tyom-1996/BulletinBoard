

$(document).ready(function(){

    // add new image block

    let count = 4;

    $(document).on('click','.show-more-inputs',function(){

        let content = '';

        for (let i=0; i < 3; i++ ){
            content +=`
                    <div class="upload-img-item">
                        <label class="upload-photo-btn"  for="image${count}">
                          <svg class="svg-id-plus" viewBox="0 0 32 32">
                                <path d="M16,0C7.164,0,0,7.163,0,16s7.164,16,16,16c8.837,0,16-7.163,16-16S24.837,0,16,0z M16,30.031 C8.28,30.031,2,23.72,2,16S8.28,2,16,2s14,6.28,14,14S23.72,30.031,16,30.031z M23,15h-6V9c0-0.553-0.448-1-1-1s-1,0.447-1,1v6H9 c-0.552,0-1,0.447-1,1c0,0.552,0.448,1,1,1h6v6c0,0.553,0.448,1,1,1s1-0.447,1-1v-6h6c0.552,0,1-0.448,1-1 C24,15.447,23.552,15,23,15z"></path>
                          </svg>
                        </label>
                        <input style="display: none" type='file' id="image${count}" class="files" name="image${count}"  />
                        <div class='previewImg'></div>
                    </div>
                `
            count++
        }

        $(this).prev().append(` ${content} `)
    })



    //show image before upload
    $(document).on('change','.files',function (evt) {
        var files = evt.target.files; // FileList object
        $this = $(this)
        for (var i = 0, f; f = files[i]; i++) {
            if (!f.type.match('image.*')) {
                continue;
            }
            var reader = new FileReader();
            reader.onload = (function (theFile) {
                return function (e) {
                    var newimage = ['<img class="thumb" src="', e.target.result,'" title="', escape(theFile.name), '"/>'].join('');

                    let $for = $this.parent().find('.upload-photo-btn').attr('for')
                    $this.parent().find('.upload-photo-btn').attr('data-for',$for)
                    $this.parent().find('.upload-photo-btn').attr('for','')

                    console.log($for)

                    $this.parent().find('.upload-photo-btn').html(`
                            <svg id="svg-id-close" class="delete-upoad-photo-btn" viewBox="0 0 32 32">
                                <path d="M16,0C7.164,0,0,7.163,0,16s7.164,16,16,16c8.837,0,16-7.163,16-16S24.837,0,16,0z M16,30.031 C8.28,30.031,2,23.72,2,16S8.28,2,16,2s14,6.28,14,14S23.72,30.031,16,30.031z M21.657,10.343c-0.391-0.391-1.024-0.391-1.415,0 L16,14.585l-4.243-4.242c-0.391-0.391-1.024-0.391-1.414,0c-0.391,0.391-0.391,1.024,0,1.414L14.585,16l-4.242,4.243 c-0.391,0.391-0.391,1.024,0,1.415c0.39,0.39,1.023,0.39,1.414,0L16,17.415l4.242,4.243c0.391,0.39,1.024,0.39,1.415,0 c0.39-0.391,0.39-1.024,0-1.415L17.414,16l4.243-4.243C22.047,11.367,22.047,10.733,21.657,10.343z"></path>
                            </svg>
                            <span>${newimage}</span>
                    `)
                };
            })(f);
            reader.readAsDataURL(f);
        }
    })


    //delete photo before upload

    window.reset = function(e) {
        e.wrap('<form>').closest('form').get(0).reset();
        e.unwrap();
    }


    $(document).on('click','.delete-upoad-photo-btn',function () {

        $for = $(this).parent().attr('data-for')
        $(this).parent().attr('for',$for)
        $(this).parent().removeAttr('data-for')

        $(this).parent().html(`
            <svg class="svg-id-plus" viewBox="0 0 32 32">
                <path d="M16,0C7.164,0,0,7.163,0,16s7.164,16,16,16c8.837,0,16-7.163,16-16S24.837,0,16,0z M16,30.031 C8.28,30.031,2,23.72,2,16S8.28,2,16,2s14,6.28,14,14S23.72,30.031,16,30.031z M23,15h-6V9c0-0.553-0.448-1-1-1s-1,0.447-1,1v6H9 c-0.552,0-1,0.447-1,1c0,0.552,0.448,1,1,1h6v6c0,0.553,0.448,1,1,1s1-0.447,1-1v-6h6c0.552,0,1-0.448,1-1 C24,15.447,23.552,15,23,15z"></path>
            </svg>
        `)

        reset($(`#${$for}`))

        return false
    })



    $(document).on('input','#classified-name-input',function(){
        let count = $(this).val()
        let result = 80 - count.length
        $('.name-input-length').html(result)
    })


    $(document).on('input','.input-textarea',function(){
        $('#descr-length').html($(this).val().length)
    })




    $(document).on('input','.required-field',function () {

        if ( $(this).val() == '' ){
            if (!$(this).hasClass('error-border')){
                $(this).addClass('error-border')
            }
        }else{
            $(this).removeClass('error-border')
        }





    })





})
