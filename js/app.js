(function($){
    // loading
    jQuery('#chargement')
        .hide() // cache la division au départ
        .ajaxStart(function() {
            $(this).show();
        })
        .ajaxStop(function() {
            $(this).hide();
        });

  // Sticky menu 
  $(window).scroll(function(){        
      $(".navbar li > a.active").each(function(){
          var currentItemTitle = $(this).attr('title');
          var currentItem = $(this).text().toLowerCase();  
          // edit url anchor (# to \)  
          window.history.replaceState(currentItem, "", "/" + currentItem.replace(/\s/g,'-')); 
          // change section tittle 
          document.title =  currentItem             
          // change section meta description 
          var metaDescription = document.getElementsByTagName("META");
          if(document.title === currentItem){
              metaDescription[4].setAttribute("content", currentItemTitle);
          }            
      })
  });
  
  $('a[href*="#"]')
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
          // On-page links
          if (
          location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
          && 
          location.hostname == this.hostname
          ) {
          // Figure out element to scroll to
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
          // Does a scroll target exist?
          if (target.length) {
              // Only prevent default if animation is actually gonna happen
              event.preventDefault();
              $('html, body').animate({
                  scrollTop: target.offset().top
                  }, 1000, function() {
                  // Callback after animation
                  // Must change focus!
                  var $target = $(target);
                  $target.focus();
                  if ($target.is(":focus")) { // Checking if the target was focused
                      return false;
                  } else {
                      $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                      $target.focus(); // Set focus again
                  };
              });
          }
      }
  });   
  
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

  $('[data-fancybox="images"]').fancybox({
    afterLoad : function(instance, current) {
        var pixelRatio = window.devicePixelRatio || 1;

        if ( pixelRatio > 1.5 ) {
            current.width  = current.width  / pixelRatio;
            current.height = current.height / pixelRatio;
        }
    }
});
  
  // $(function () {
  //     $('[data-toggle="tooltip"]').tooltip()
  // });

  // $( ".modal" ).each(function() {
  //   for (let idM = 0; idM < $(this).length; idM++) {        
  //     console.log($(this)[idM]);      
  //   }
  // });  
  $(document).on("scroll", function(){
    if($(document).scrollTop() > 80){
        $("#nav-desk").addClass("hBlock");
    }else{
        $("#nav-desk").removeClass("hBlock");
    }     
}); 

})(jQuery);