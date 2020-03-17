jQuery(document).ready(function(){
    var mItem1 = jQuery('.faq1-answr');
    var mItem2 = jQuery('.faq2-answr');
    var mItem3 = jQuery('.faq3-answr');
    var mItem4 = jQuery('.faq4-answr');

    var ArrRot1 = jQuery('.faq1-btn1');
    var ArrRot2 = jQuery('.faq1-btn2');
    var ArrRot3 = jQuery('.faq1-btn3');
    var ArrRot4 = jQuery('.faq1-btn4');

    jQuery('.faq1-btn1').on('click', function(){
        if (mItem2.css('display') === 'block'){
          mItem2.toggleClass('open');
          ArrRot2.toggleClass('Rott');
        }
        if (mItem3.css('display') === 'block'){
          mItem3.toggleClass('open');
          ArrRot3.toggleClass('Rott');
        }
        if (mItem4.css('display') === 'block'){
          mItem4.toggleClass('open');
          ArrRot4.toggleClass('Rott');
        }
      mItem1.toggleClass('open');
      ArrRot1.toggleClass('Rott');
    });
    jQuery('.faq1-btn2').on('click', function(){
        if (mItem1.css('display') === 'block'){
          mItem1.toggleClass('open');
          ArrRot1.toggleClass('Rott');
        }
        if (mItem3.css('display') === 'block'){
          mItem3.toggleClass('open');
          ArrRot3.toggleClass('Rott');
        }
        if (mItem4.css('display') === 'block'){
          mItem4.toggleClass('open');
          ArrRot4.toggleClass('Rott');
        }
      mItem2.toggleClass('open');
      ArrRot2.toggleClass('Rott');
    });
    jQuery('.faq1-btn3').on('click', function(){
        if (mItem1.css('display') === 'block'){
          mItem1.toggleClass('open');
          ArrRot1.toggleClass('Rott');
        }
        if (mItem2.css('display') === 'block'){
          mItem2.toggleClass('open');
          ArrRot2.toggleClass('Rott');
        }
        if (mItem4.css('display') === 'block'){
          mItem4.toggleClass('open');
          ArrRot4.toggleClass('Rott');
        }
      mItem3.toggleClass('open');
      ArrRot3.toggleClass('Rott');
    });
    jQuery('.faq1-btn4').on('click', function(){
        if (mItem1.css('display') === 'block'){
          mItem1.toggleClass('open');
          ArrRot1.toggleClass('Rott');
        }
        if (mItem2.css('display') === 'block'){
          mItem2.toggleClass('open');
          ArrRot2.toggleClass('Rott');
        }
        if (mItem3.css('display') === 'block'){
          mItem3.toggleClass('open');
          ArrRot3.toggleClass('Rott');
        }
      mItem4.toggleClass('open');
      ArrRot4.toggleClass('Rott');
    });

    // popup close
    $('#close-btn-zayava').on('click', function(){
      $('.block-alertComplict-zayava').toggleClass('block-alertComplict-zayava-open');
    });
    $('#close-btn-comunic').on('click', function(){
      $('.block-alertComplict-comunic').toggleClass('block-alertComplict-comunic-open');
    });
    $('#communication-btn-fos').on('click', function(){
      $('.block-communication-fos').toggleClass('block-communication-fos-open');
    });
    $('#block-call').on('click', function(){
      $('.block-call-fos').toggleClass('block-call-fos-open');
    });
});

$(document).ready(function() {
  //change the integers below to match the height of your upper div, which I called
  //banner.  Just add a 1 to the last number.  console.log($(window).scrollTop())
  //to figure out what the scroll position is when exactly you want to fix the nav
  //bar or div or whatever.  I stuck in the console.log for you.  Just remove when
  //you know the position.
  var headerHeight = 100;
  var $nav = $(".block-nav");
  $(window).scroll(function () {
    if ($(window).scrollTop() > headerHeight) {
      // $("body").addClass('nav-fixed-top');
      $nav.addClass('nav-fixed-top');
    } else {
      // $("body").removeClass('nav-fixed-top');
      $nav.removeClass('nav-fixed-top');
    }
  });

  $('.block-nav-burgerBtn').on('click', function(){
    $('.block-nav-page').toggleClass('menu-header-open');
  });
});

// Slider block-lastProject
var swiper = new Swiper('.swiper-container-lastProject', {
	lazyLoading: true,
	slidesPerView: 'auto',
	slidesPerView: 3,
	spaceBetween: 30,
	loop: true,
	navigation: {
		nextEl: '.swiper-button-next2',
		prevEl: '.swiper-button-prev2',
	},
	breakpoints: {
	991: {
		slidesPerView: 2,
	},
	767: {
		slidesPerView: 1,
	},
},
});
var swiper = new Swiper('.swiper-container-stock', {
	lazyLoading: true,
	slidesPerView: 'auto',
	slidesPerView: 3,
	spaceBetween: 30,
	loop: true,
	navigation: {
		nextEl: '.swiper-button-next3',
		prevEl: '.swiper-button-prev3',
	},
	breakpoints: {
	991: {
		slidesPerView: 2,
	},
	767: {
		slidesPerView: 1,
	},
},
});

var swiper = new Swiper('.swiper-container', {
	lazyLoading: true,
	slidesPerView: 'auto',
	slidesPerView: 3,
	spaceBetween: 31,
	loop: true,
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
	breakpoints: {
	991: {
		slidesPerView: 2,
	},
	767: {
		slidesPerView: 1,
		spaceBetween: 10,
	},
},
});

document.addEventListener( 'wpcf7mailsent', function( event ) {
 if(event.detail.contactFormId=="79"){ //  id формы для отслеживания
   document.querySelector('.block-alertComplict-comunic').classList.add('block-alertComplict-comunic-open');
   document.querySelector('.block-communication-fos').classList.remove('block-communication-fos-open');
 }
}, false );
