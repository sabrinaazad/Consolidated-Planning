/************************************************************************/
/**************************** GLOBAL SCRIPTS ****************************/
/************************************************************************/

// VARIABLES
var body = $("body");
var win = $(window);
var mobileMenuIcon = $("#hamburgerButton");
var mobileMenu = $(".main-nav__drawer");
var stickyWrap = $(".sticky-wrapper");
var mainNav = $("#mainNav");
var mainNavOffset = $("#mainNav")[0].offsetTop;


$(function () {
  mobileMenuIcon.click(function () {
    mobileMenuToggle();
  });

  win.on("resize", function () {
    if (win.width() >= 768) {
      mobileMenuReset();
    }
  });

  $(document).scroll(function () {
    if (win.innerWidth < 767) {
      stickyWrap.addClass("sticky");
      mainNav.addClass("sticky-margin");
    }
    var topval = $(document).scrollTop();
    if (topval >= mainNavOffset) {
      stickyWrap.addClass("sticky");
      mainNav.addClass("sticky-margin");
    } else {
      stickyWrap.removeClass("sticky");
      mainNav.removeClass("sticky-margin");
    }
  });

  $('.secondary-nav').slick({
    arrows: true,
    dots: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    mobileFirst: true,
    autoplay: true,
    autoplaySpeed: 3000,
    responsive: [
       {
          breakpoint: 767,
          settings: "unslick"
       }
    ]
  });

  $('.featured_slider').slick({
    infinite: true,
    arrows: false,
    dots: true,
    centerMode: true,
    centerPadding: '40px',
    slidesToShow: 5,
    cssEase: 'linear',
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          infinite: true,
          arrows: false,
          dots: true,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 3,
          cssEase: 'linear'
        }
      },
      {
        breakpoint: 768,
        settings: {
          infinite: true,
          arrows: true,
          dots: true,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1,
          cssEase: 'linear'
        }
      }
    ]
  });

  $('.featured_slider_alt').slick({
    infinite: true,
    arrows: true,
    dots: true,
    centerMode: true,
    centerPadding: '40px',
    slidesToShow: 1,
    cssEase: 'linear',
    mobileFirst: true,
    responsive: [
      {
         breakpoint: 767,
         settings: "unslick"
      }
   ]
  });

  $('.featured_slider_condensed').slick({
    infinite: true,
    arrows: true,
    dots: true,
    centerMode: true,
    centerPadding: '40px',
    slidesToShow: 1,
    cssEase: 'linear',
    mobileFirst: true,
    responsive: [
      {
         breakpoint: 767,
         settings: "unslick"
      }
   ]
  });

  $('.featured_blogs').slick({
    arrows: true,
    dots: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    mobileFirst: true,
    responsive: [
       {
          breakpoint: 767,
          settings: "unslick"
       }
    ]
  });

  $('.four_panels').slick({
    arrows: true,
    dots: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    mobileFirst: true,
    responsive: [
       {
          breakpoint: 767,
          settings: "unslick"
       }
    ]
  });

  $('.team_slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: false,
    fade: true,
    asNavFor: '.team_slider_2',
  });

  $('.team_slider_2').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    asNavFor: '.team_slider',
    arrows: false,
    dots: false,
    centerMode: false,
    focusOnSelect: true
  });

  $('.leadership').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: false,
    fade: true,
    asNavFor: '.leadership_2',
  });

  $('.leadership_2').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    asNavFor: '.leadership',
    arrows: false,
    dots: false,
    centerMode: true,
    focusOnSelect: true
  });

  $('.brokerage').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: false,
    fade: true,
    asNavFor: '.brokerage_2',
  });

  $('.brokerage_2').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.brokerage',
    arrows: false,
    dots: false,
    centerMode: true,
    focusOnSelect: true
  });

  $('.advisory').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: false,
    fade: true,
    asNavFor: '.advisory_2',
  });

  $('.advisory_2').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    asNavFor: '.advisory',
    arrows: false,
    dots: false,
    centerMode: true,
    focusOnSelect: true
  });

});

function mobileMenuToggle() {
  mobileMenuIcon.toggleClass("is-open");
  mobileMenu.toggleClass("is-open");
}

function mobileMenuReset() {
  mobileMenuIcon.removeClass("is-open");
  mobileMenu.removeClass("is-open");
}


