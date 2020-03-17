$('.Slider-item1').mouseover( function() {
  $('.block-header').addClass('chang-bg');
});
$('.Slider-item1').mouseleave( function() {
  $('.block-header').removeClass('chang-bg');
});

$('.Slider-item2').mouseover( function() {
  $('.block-header').addClass('chang-bg');
});
$('.Slider-item2').mouseleave( function() {
  $('.block-header').removeClass('chang-bg');
});

$('.Slider-item3').mouseover( function() {
  $('.block-header').addClass('chang-bg');
});
$('.Slider-item3').mouseleave( function() {
  $('.block-header').removeClass('chang-bg');
});

$('.Slider-item4').mouseover( function() {
  $('.block-header').addClass('chang-bg');
});
$('.Slider-item4').mouseleave( function() {
  $('.block-header').removeClass('chang-bg');
});

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
});
