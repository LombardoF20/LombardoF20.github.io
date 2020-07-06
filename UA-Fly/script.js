$(document).ready(function() {
   $('.faq-head').click(function(){
     $(this).toggleClass('in').next().slideToggle();
     $('.faq-head').not(this).removeClass('in').next().slideUp();
   });
});
