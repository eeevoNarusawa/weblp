jQuery(function(){
  jQuery('a[href^=#]').click(function(){
    var speed = 700;
    var href= jQuery(this).attr("href");
    var target = jQuery(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top;
    jQuery("html, body").animate({scrollTop:position}, speed, "swing");
    return false;
  });

  jQuery('.menu-trigger').on('click',function(){
    if(jQuery(this).hasClass('active')){
      jQuery(this).removeClass('active');
      jQuery('main').removeClass('open');
      jQuery('nav').removeClass('open');
      jQuery('.overlay').removeClass('open');
    } else {
      jQuery(this).addClass('active');
      jQuery('main').addClass('open');
      jQuery('nav').addClass('open');
      jQuery('.overlay').addClass('open');
    }
  });
  jQuery('.overlay').on('click',function(){
    if(jQuery(this).hasClass('open')){
      jQuery(this).removeClass('open');
      jQuery('.menu-trigger').removeClass('active');
      jQuery('main').removeClass('open');
      jQuery('nav').removeClass('open');
    }
  });
  jQuery('nav ul li a').on('click',function(){
    if(jQuery('.overlay').hasClass('open')){
      jQuery('.overlay').removeClass('open');
      jQuery('.menu-trigger').removeClass('active');
      jQuery('main').removeClass('open');
      jQuery('nav').removeClass('open');
    }
  });
});

jQuery(function(){
  jQuery('.faq-item').click(function(){
    var jQueryanswer = jQuery(this).find('.answer');
    if (jQueryanswer.hasClass('open')){
      jQueryanswer.removeClass('open');
      jQueryanswer.slideUp();
      jQuery(this).find('span').text('+');
    } else {
      jQueryanswer.addClass('open');
      jQueryanswer.slideDown();
      jQuery(this).find('span').text('-');
    }
  });
});


AOS.init();
