$(document).ready(function() {
  var headerHeight = 100;
  var $nav = $(".block-nav");

 //  $('body').click($nav, function(){
 //    $("html, body").animate({ scrollTop: 0 }, 600);
 //    return false;
 // });

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
// NEWS style
  $('#btn-news-table').on('click', function(){
    $('.post').toggleClass('news-list-stile');
    $('.block-post').toggleClass('block-post-stile');
    $('.entry-footer-time1').toggleClass('entry-footer-time-toggle');
    $('.entry-content').toggleClass('entry-content-toggle');
    $('.block-timeBtn-blocks').toggleClass('block-timeBtn-blocks-toggle');
  });
  $('#btn-news-list').on('click', function(){
    $('.post').toggleClass('news-list-stile');
    $('.block-post').toggleClass('block-post-stile');
    $('.entry-footer-time1').toggleClass('entry-footer-time-toggle');
    $('.entry-content').toggleClass('entry-content-toggle');
    $('.block-timeBtn-blocks').toggleClass('block-timeBtn-blocks-toggle');
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

document.addEventListener( 'wpcf7mailsent', function( event ) {
 if(event.detail.contactFormId=="80"){ //  id формы для отслеживания
   document.querySelector('.block-alertComplict-zayava').classList.add('block-alertComplict-zayava-open');
   document.querySelector('.block-call-fos').classList.remove('block-call-fos-open');
 }
}, false );
document.addEventListener( 'wpcf7mailsent', function( event ) {
 if(event.detail.contactFormId=="79"){ //  id формы для отслеживания
   document.querySelector('.block-alertComplict-comunic').classList.add('block-alertComplict-comunic-open');
   document.querySelector('.block-communication-fos').classList.remove('block-communication-fos-open');
 }
}, false );
