/*Controls the Front Page Scroll Button. When button is clicked,
 * the page scrolls down 500px
 */



$(document).ready(function() {

    $('#scroll-btn').click(function(e) {
      $('html,body').animate({
        scrollTop: $(".mission-statement").offset().top},
        'slow');
    });
});