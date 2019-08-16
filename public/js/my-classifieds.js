$(document).ready(function() {
    var hide_class = 'hide-classifieds',
        $active = $('.active_classifieds'),
        on_maderation = $('.on_maderation_classifieds'),
        canceled = $('.canceled_by_moderator'),
        classifieds = $('.classifieds-wrap'),
        active_btn = $('.open-classifieds-btn');


    loadActiveTabAndClassifieds(classifieds,active_btn);

    $(document).on('click', '.open-classifieds-btn', function() {
        OpenContentBlockAfterPressingTheButton(classifieds,active_btn,$(this));
    })

    $(document).on('click','.delete-classified',function(){
        openDeleteModal($(this));
    });

    openActionBlock();

})


function openActionBlock()
{
    $(".content-scrolling-top-item")
        .mouseenter(function() {
            $(this).find('.classifieds-action-block').removeClass('hidden')
        })
        .mouseleave(function() {
            $(this).find('.classifieds-action-block').addClass('hidden')
        });
}

function deleteClassified($this,id)
{

    $.ajax({
        type:'POST',
        url:`http://localhost:8000/product/${id}`,
        data:{
            id:id,
            _method: 'DELETE'
        },
        success:function(r){
            if (r == 'deleted')
                $this.closest('.content-scrolling-top-item').remove()
        }
    });



}


function openDeleteModal($this)
{

    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#4cda64',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.value) {
            Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
            )

            deleteClassified($this,$this.data('id'))


        }else{
            console.log('no')
        }
    })

}



function loadActiveTabAndClassifieds(classifieds,active_btn)
{

    if (localStorage.getItem('open') !== null) {

        classifieds.each(function() {
            if (!$(this).hasClass(localStorage.getItem("open")))
            {
                $(this).addClass('hide-classifieds')
            } else {
                $(this).removeClass('hide-classifieds')
            }
        })

        active_btn.each(function() {
            if ($(this).data('open') == localStorage.getItem("open"))
            {
                $(this).addClass('active-btn')
            } else {
                $(this).removeClass('active-btn')
            }
        })
    }
}


function OpenContentBlockAfterPressingTheButton(classifieds,active_btn,$this)
{
    var open_classifieds = $this.data('open');

    localStorage.setItem('open', open_classifieds);


    active_btn.each(function() {
        $(this).removeClass('active-btn')
    })

    $(this).addClass('active-btn')

    classifieds.each(function() {

        if (!$(this).hasClass(open_classifieds)) {
            $(this).addClass('hide-classifieds')

        } else {
            $(this).removeClass('hide-classifieds')
        }

    })
}


function ajaxRequest(url,data,successFunction)
{
    $.ajax({
        type:'POST',
        url:url,
        data:data,
        success:function(r){
            successFunction(r)
        }
    });
}


//delete

