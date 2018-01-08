jQuery(document).ready(function($){
	//Responsive menu button js
	$("#menuButton").click(function(){
	  $('#mainNav').toggleClass('open');
	});	

	//Scroll animation for homepage 'down arrow'
	$(function() {
		$('a[href*=#]:not([href=#])').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		  var target = $(this.hash);
		  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		  if (target.length) {
		    //alert("BAMM!");
		    $('html,body').animate({
		      //'top-50' is custom.  limits the offset to top of window plus 50px
		      scrollTop: (target.offset().top-50)
		    }, 800);
		    return false;
		  }
		}
		});
	});

	var windowW = $(window).width();
	
	if (windowW > 1070){
    $('.panel').each(function(i){
        i = i++;
        $(this).parallax("50%", .05);
      });   

    $('.has-parallax').parallax("50%",.5);
  }

});
