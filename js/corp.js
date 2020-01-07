 jQuery(function($) {

   var scrollTo = $("#scrollTo").offset().top;

   $('#scroll-icon').click(function(){

    $("html,body").animate(
      {scrollTop : scrollTo},
      {queue : false}
    );

   })

  $('.navbar-toggle').click(function() {

      $('.modal-overlay').fadeIn(300);

      $('.navbar-modal').slideDown(500);

      $(this).hide();

   })

  $('.modal-overlay, #close').click(function() {

     $('.modal-overlay').fadeOut(200);

     $('.navbar-modal').fadeOut(200);

     $('.navbar-toggle').fadeIn(200);

  })

});
