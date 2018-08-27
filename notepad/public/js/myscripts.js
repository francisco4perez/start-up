// Smooth Scroll on clicking nav items
$('nav a').click(function () {
  var $href = $(this).attr('href');
  $('body').stop().animate({
    scrollTop: $($href).offset().top
  }, 1000);
  return false;
});

// back to top
$('#toTop a').click(function () {
  $('body').animate({
    scrollTop: 0
  }, 1000);
  return false;
});

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



});