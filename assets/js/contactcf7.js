jQuery(document).ready(function($) {
  
  document.addEventListener('wpcf7mailsent', function(event) {
    window.location.href = 'http://pas-pol.local/thankspage/';
}, false);
  

$('h1').css('color','red');

});