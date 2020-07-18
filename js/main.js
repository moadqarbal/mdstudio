$(document).on('click', '[data-toggle="lightbox"]', function(event){
    event.preventDefault();
    $(this).ekkoLightbox();
});

$('.slider').slick({
    infinite: true,
    slideToShow:1,
    slideToScroll:1
});

$(document).ready(function (){


    // Caching the scroll top element
    var scrollButton = $('#scroll-top');

    $(window).scroll(function ()
    {

        // console.log( $(this).scrollTop() );

        if( $(this).scrollTop() >= 700 ){
            scrollButton.show();
        }else{
            scrollButton.hide();
        }

    });


    $('.arrow-to-bottom').on("click", function () {
        $(this).fadeOut();
        //$(window).scrollTop(555);
        $("html,body").animate({ scrollTop : '555px' }, 1000);
    });


    // click on button scroll to top
    scrollButton.click(function (){
        $("html,body").animate({ scrollTop : 0 }, 1000);
    });


    $('.close-s-m').on("click", function () {
        $(this).fadeOut();
        $(this).parents('div').fadeOut();
    });

});