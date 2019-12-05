(function($){
    // // Sticky menu 
    // $(document).on("scroll", function(){
    //     // var widthScreen = $( window ).width();
    //     if($(document).scrollTop() > 1){
    //         $(".header").addClass("sticky");
    //     }else{
    //         $(".header").removeClass("sticky");
    //     }
    // });
    
    
    // menu mobile
    $('#main-nav').hcOffcanvasNav({
        insertClose: false,
        labelBack: 'Back' // back buton
    });

    // slide header
    $('.carousel-header').slick({
      dots: true,
      arrows: false,
      infinite: true,
      speed: 500,
      cssEase: 'linear'
    });

    // slide sidebar
    $('.slideService').slick({
        dots: false,
        arrows: true,
        infinite: true,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 4,
        centerPadding: '0px',
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
              infinite: true,
              dots: false
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
    });
    
    var valMsg = $('textarea.form-control').val();
    $('textarea.form-control').on('focus', function(){
        $('textarea.form-control').css('height', '150px');
    }), 1000;
    
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });

})(jQuery);