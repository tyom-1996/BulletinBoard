$(document).on('click','.link-category',function () {
    
    $('.link-category svg').each(function () {
        $(this).removeClass('active-category');
    })
    $(this).find('svg').toggleClass('active-category')
   console.log('test')
})
