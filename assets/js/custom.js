$('.navas a[href^="#"]').on('click', function(e) {
  e.preventDefault();
  var id = $(this).attr('href');
      targetOffset = $(id).offset().top;
      
  $('html, body').animate({ 
    scrollTop: targetOffset - 100
  }, 500);
});

 $(window).scroll(function(){ 
      if ($(this).scrollTop()>=200) {
           $('.fixed-custom').fadeIn();
      } else {
           $('.fixed-custom').fadeOut();
      }
 });


 $('.fixed-custom,.back_top').click(function(){
      $("html, body").animate({scrollTop: 0 }, 600); 
      return false;
 });