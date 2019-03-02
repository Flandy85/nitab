
/*Change background on header on scroll*/
$(function() {
   console.log('Activate fixed header.');
   $(window).scroll(function () {
      var width  = $(window).width();
      if (width >= 1601 && width <= 5120)
      {

         if ($(this).scrollTop() > 1090) {
            $("header").addClass("header-fixed-background")
         }
         
         if ($(this).scrollTop() < 1090) {
            $("header").removeClass("header-fixed-background")
         }
      }
      else {
         if ($(this).scrollTop() > 615) {
            $("header").addClass("header-fixed-background")
         }
         
         if ($(this).scrollTop() < 615) {
            $("header").removeClass("header-fixed-background")
         }
      }
   });
});