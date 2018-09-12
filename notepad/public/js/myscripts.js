// Parallaxing + add class active on scroll
$(document).scroll(function () {
  
  // parallaxing
  var $movebg = $(window).scrollTop() * -0.3;
  $('.portion').css('background-positionY', ($movebg) + 'px');

  // add class active to nav a on scroll
  var scrollPos = $(document).scrollTop() + 100;
  $('nav a').each(function () {
    var currLink = $(this);
    var refElement = $(currLink.attr("href"));
    if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
      $('nav a').removeClass("active");
      currLink.addClass("active");
    }
  });
  
  // changing padding of nav a on scroll
    if (scrollPos > 250) {
      $('nav a').addClass('small');
      $('nav img').removeClass('logo');
      $('nav img').addClass('small_logo');
    } else {
      $('nav a').removeClass('small');
      $('nav img').addClass('logo');
      $('nav img').removeClass('small_logo');
    }
  
});

// My edits --------------

$( document ).ready(function() {
  var cliked_menu = false;

  function screenLessThan(x) {
      if (x.matches && cliked_menu == true) { $(".menu").click(); }
  }

  $('.menu').click(function () {
    if(!cliked_menu){
      $("#hamburger-input").prop("checked", true);
      $("label ul").css("opacity",0);
      $("label ul").css("display","block");
      setTimeout( function(){ $("label ul").css("opacity",1); }, 300);
      cliked_menu = true;
    }
    else if(cliked_menu){
      $("#hamburger-input").prop("checked", false);
      $("label ul").css("display","none");
      cliked_menu = false;
    }
  });

  $("ul > li > a").click(function(){
    $(".menu").click();
  });

  var x = window.matchMedia("(min-width: 1000px)");
  screenLessThan(x);
  x.addListener(screenLessThan);

  // My scrolling ----------------------------------

  $('a[href*="#"]').not('[href="#"]').not('[href="#0"]').click(function(event) {
      if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && 
        location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        if (target.length) {
          event.preventDefault();
          $('html, body').animate({
            scrollTop: target.offset().top
          }, 1000);
        }
      }
    });
  // My title button -------------------------------
  const body = document.body;
  const btn = document.querySelectorAll('.fancy-btn')[0];

  btn.addEventListener('mouseenter', () => { body.classList.add('show'); });
  btn.addEventListener('mouseleave', () => { body.classList.remove('show');
  });

  // My video presentation -------------------------

  $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
      type: 'iframe',
      mainClass: 'mfp-fade',
      removalDelay: 160,
      preloader: false,
      fixedContentPos: true
  });

  // Fake input for textarea ------------------------

  var $fake = $("#fake");
  $fake.val( "Deja Aquí tus comentarios!" );

  $("#textarea").keyup(function() {
      $fake.val( this.value );
  });


});