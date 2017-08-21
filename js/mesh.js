jQuery(document).ready(function($){
   $("#menuButton").click(function(){
      $('#mainNav').toggleClass('open');
   });

   $('#scrollArrow').click(function(){
      document.querySelector('#intro-panel').scrollIntoView({ 
        behavior: 'smooth'
      });
   });
});
