  $(document).ready(function() {
  $('.text_dropdown').slideUp();
  $('.content-question').removeClass  ('background-green')
  $('.content-question').click(function() {
      $('.text_dropdown').stop().slideToggle(700);
      $('.up-bar').toggleClass('hide');
      $('.down-bar').toggleClass('hide');
      $('.content-question').toggleClass('background-green')
    })
    
    $('.toggle-menu').click(function() {   
      $('.menu').toggleClass('hide');
      $('.close').toggleClass('hide');
      $('.close').css('z-index', 5)
      $('.header-menu-dropdown').stop().slideToggle(300);
    });
  
  var owl = jQuery('#slider');
  var owl4 = jQuery('#slider4');
    $("#slider").owlCarousel({
    lazyLoad:true,
    nav: false,
    navText:
    loop: true,
    dots: false,
    margin:0,
    touchDrag: true,
    mouseDrag: true,
    autoplay: true,
    autoplayTimeout:8000,
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    smartSpeed:1000,
    responsiveClass:true,
    responsive:{
      0:{
        items:1
      },
      856: {
        items: 2
      },
      1000:{
        items: 5, 
        margin: 20
      }
    },
  });

  $("#slider4").owlCarousel({
    lazyLoad:true,
    nav: false,
    loop: false,
    dots: false,
    margin:0,
    touchDrag: false,
    mouseDrag: false,
    autoplay: true,
    autoplayTimeout:5000,
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    smartSpeed:500,
    responsiveClass:true,
    responsive:{
      0:{
          items: 1
      }
    },
  });
      
  

  Fancybox.bind('[data-fancybox="gallery"]', {
    caption: function (fancybox, carousel, slide) {
      return (
        `${slide.index + 1} / ${carousel.slides.length} <br />` + slide.caption
      );
    },
  });

  $("a[href*='#']:not([href='#])").click(function() {
    let target = $(this).attr("href");
    $('html,body').stop().animate({
      scrollTop: $(target).offset().top
    }, 500);
    event.preventDefault();
  });

 })
