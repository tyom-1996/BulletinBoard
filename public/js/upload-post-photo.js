
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
                    <input style="display: none" type='file' id="image${count}" class="files" name="image"  />
                    <div class='previewImg'></div>
                </div>
            `
        count++
    }

    $(this).prev().append(`
            ${content}
        `)
})




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
                console.log(newimage)

                $this.parent().find('.upload-photo-btn').html(`
                        <span>${newimage}</span>
                    `)
            };
        })(f);
        reader.readAsDataURL(f);
    }
})
