$(document).ready(function()
  {
      $('#searchbtn').click(function(e){
          $("#searchbox").toggle();
      });

      $('ul.nav li.dropdown').hover(function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
      }, function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
      });

      var w = $(window).width();
      $('.dropdown-menu').css('width', w);
      $('.navbar-right').find('.dropdown-menu').css('width', 'auto');

  });