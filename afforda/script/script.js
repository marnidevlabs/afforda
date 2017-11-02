'use strict';

$(window).scroll(function() {
    if($(this).scrollTop() > 50)  /*height in pixels when the navbar becomes non opaque*/ 
    {
        $('.opaque-navbar').addClass('opaque');
    } else {
        $('.opaque-navbar').removeClass('opaque');
    }
});

$('#bannerSlick').slick({
  autoplay:true,
  infinite: true,
  speed: 500,
  fade: true,
  cssEase: 'linear'
});

$('#bannerCakeSlick').slick({
  autoplay:true,
  autoplaySpeed: 5000,  
  infinite: true,
  speed: 500,
  fade: true,
  cssEase: 'linear',
  arrows: false
});



$('#productSlick').slick({
  infinite: true,
  slidesToShow: 3,
  slidesToScroll: 1
});

$('#productSlick2').slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1
});

 $('.slider-for').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  asNavFor: '.slider-for',
  dots: true,
  autoplay: true,
  centerMode: false,
  focusOnSelect: true
});

$('.single-item').slick();



$('a.scroll-nav').click(function(e){
  // prevent default action
  e.preventDefault();
  
  // get id of target div (placed in href attribute of anchor element)
  // and pass it to the scrollToElement function
      // also, use 2000 as an argument for the scroll speed (2 seconds, 2000 milliseconds)
  scrollToElement( $(this).attr('href'), 1000 );
  });

  var scrollToElement = function(el, ms){
      var speed = (ms) ? ms : 600;
      $('html,body').animate({
          scrollTop: $(el).offset().top
      }, speed);
  };

 $('.text-for-phone').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.for-phone'
});
$('.for-phone').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  asNavFor: '.text-for-phone',
  dots: true,
  autoplay: true,
  centerMode: false,
  focusOnSelect: true
});

 $('.text-for-tablet').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.for-tablet'
});
$('.for-tablet').slick({
  slidesToShow: 2,
  slidesToScroll: 1,
  asNavFor: '.text-for-tablet',
  dots: true,
  autoplay: true,
  centerMode: false,
  focusOnSelect: true
});

$('.product-carousel').slick({
  slidesToShow: 4,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
})

// function openCity(evt, cityName) {
//       // Declare all variables
//       var i, tabcontent, tablinks;

//       // Get all elements with class="tabcontent" and hide them
//       tabcontent = document.getElementsByClassName("tabcontent");
//       for (i = 0; i < tabcontent.length; i++) {
//           tabcontent[i].style.display = "none";
//       }

//       // Get all elements with class="tablinks" and remove the class "active"
//       tablinks = document.getElementsByClassName("tablinks");
//       for (i = 0; i < tablinks.length; i++) {
//           tablinks[i].className = tablinks[i].className.replace(" active", "");
//       }

//       // Show the current tab, and add an "active" class to the button that opened the tab
//       document.getElementById(cityName).style.display = "block";
//       evt.currentTarget.className += " active";
//   }
    // Get the element with id="defaultOpen" and click on it
    // document.getElementById("defaultOpen").click();

      