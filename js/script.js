 $(window).scroll(function() {
        if ($(this).scrollTop() > 200) {
        $('.go-top').fadeIn(200);
        } else {
          $('.go-top').fadeOut(200);
        }
        });   
        // Animate the scroll to top
      $('.go-top').click(function(event) {
        event.preventDefault();
      $('html, body').animate({scrollTop: 0}, 300);
      })


/*Menu*/
        $(function(){   
          
          var superbg = $('.super');  
          var nav = $('.menusuper');
 					
					nav.hide();
					
          $(window).scroll(function () { 
            if ($(this).scrollTop() >= 300) {
							nav.show();
							
            } else {  
                nav.hide();
                superbg.show();
            } 
          });  
          
        });
/*Menu*/