// Clock Skew Software Solutions - Main JS
$(document).ready(function(){

  // === Preloader ===
  $(window).on('load', function(){
    setTimeout(function(){ $('#cs-preloader').addClass('hidden'); }, 400);
  });

  // === Navbar scroll effect ===
  $(window).on('scroll', function(){
    if($(window).scrollTop() > 40){ $('.cs-navbar').addClass('scrolled'); }
    else { $('.cs-navbar').removeClass('scrolled'); }
  });

  // Close mobile menu on link click
  $('.navbar-nav .nav-link').on('click', function(){
    if($('.navbar-collapse').hasClass('show')){
      $('.navbar-toggler').click();
    }
  });

  // === Welcome Popup ===
  setTimeout(function(){
    if(!sessionStorage.getItem('cs_popup_shown')){
      $('#cs-popup').addClass('show');
    }
  }, 1500);

  $('#cs-popup .close, #cs-popup-close').on('click', function(){
    $('#cs-popup').removeClass('show');
    sessionStorage.setItem('cs_popup_shown', '1');
  });

  $('#cs-popup').on('click', function(e){
    if(e.target === this){
      $(this).removeClass('show');
      sessionStorage.setItem('cs_popup_shown', '1');
    }
  });

  // === Scroll Reveal ===
  function revealOnScroll(){
    $('.reveal, .reveal-l, .reveal-r').each(function(){
      var top = $(this).offset().top;
      var bottom = $(window).scrollTop() + $(window).height() - 80;
      if(top < bottom){ $(this).addClass('in'); }
    });
  }
  revealOnScroll();
  $(window).on('scroll', revealOnScroll);

  // === Counter animation ===
  function animateCounter($el){
    var target = parseInt($el.data('count'));
    var current = 0;
    var step = Math.max(1, Math.ceil(target/60));
    var t = setInterval(function(){
      current += step;
      if(current >= target){ current = target; clearInterval(t); }
      $el.text(current + ($el.data('suffix')||''));
    }, 20);
  }
  var counterDone = false;
  $(window).on('scroll', function(){
    if(counterDone) return;
    var $stats = $('.cs-stat-num');
    if($stats.length && $(window).scrollTop() + $(window).height() > $stats.first().offset().top){
      counterDone = true;
      $stats.each(function(){ animateCounter($(this)); });
    }
  });

  // === Smooth in-page anchor (for legal pages etc) ===
  $('a[href^="#"]:not([href="#"])').on('click', function(e){
    var target = $(this.hash);
    if(target.length){
      e.preventDefault();
      $('html,body').animate({scrollTop: target.offset().top - 80}, 600);
    }
  });

});
