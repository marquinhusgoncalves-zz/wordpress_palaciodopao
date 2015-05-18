$(document).ready(function() {  
var stickyNavTop = $('#stickyribbon').offset().top;  
  
var stickyNav = function(){  
var scrollTop = $(window).scrollTop();  
       
if (scrollTop > stickyNavTop) {   
    $('#stickyribbon').addClass('fixed', 'container');  
} else {  
    $('#stickyribbon').removeClass('fixed', 'container');   
}  
};  
  
stickyNav();  
  
$(window).scroll(function() {  
    stickyNav();  
});  
});  