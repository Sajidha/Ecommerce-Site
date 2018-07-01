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
     
      // var w = $(window).width();
      // console.log (w);
      // $('.dropdown-menu').css('width', w);
      // $('.navbar-right').find('.dropdown-menu').css('width', 'auto');

      var boxWidth = $(".box").width();
        $(".slide-left.1").click(function(){
            $(".box.1").css('left', '0');
        });
        $(".slide-right.1").click(function(){
          $(".box.1").css('left', '100%');
        });

        $(".slide-left.2").click(function(){
          $(".box.2").css('left', '0');
      });
      $(".slide-right.2").click(function(){
        $(".box.2").css('left', '100%');
      });

  });