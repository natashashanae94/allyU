
// on document ready
$(document).ready(function() {

    // show/hide the mobile menu based on class added to container
    $('.menu-icon').click(function() {
        $(this).parent().toggleClass('is-tapped');
        $('#hamburger').toggleClass('open');
    });

    // handle touch device events on drop down, first tap adds class, second navigates
    $('.touch .sitenavigation li.menu-item > a').on('touchend',
        function(e) {
            if ($('.menu-icon').is(':hidden')) {
                var parent = $(this).parent();
                $(this).find('.clicked').removeClass('clicked');
                if (parent.hasClass('clicked')) {
                    window.location.href = $(this).attr('href');
                } else {
                    $(this).addClass('linkclicked');

                    // close other open menus at this level
                    $(this).parent().parent().find('.clicked').removeClass('clicked');

                    parent.addClass('clicked');
                    e.preventDefault();
                }
            }
        });

    // handle the expansion of mobile menu drop down nesting
    $('.sitenavigation li.menu-item').click(
        function(event) {
            if (event.stopPropagation) {
                event.stopPropagation();
            } else {
                event.cancelBubble = true;
            }

            if ($('.menu-icon').is(':visible')) {
                $(this).find('> ul').toggle();
                $(this).toggleClass('expanded');
            }
        }
    );

    // prevent links for propagating click/tap events that may trigger hiding/unhiding
    $('.sitenavigation a.menu-item, .sitenavigation li.menu-item a').click(
        function(event) {
            if (event.stopPropagation) {
                event.stopPropagation();
            } else {
                event.cancelBubble = true;
            }
        }
    );

    // javascript fade in and out of dropdown menu
    $('.no-touch .sitenavigation li').hover(
        function() {
            if (!$('.menu-icon').is(':visible')) {
                $(this).find('> ul').fadeIn(100);
            }
        },
        function() {
            if (!$('.menu-icon').is(':visible')) {
                $(this).find('> ul').fadeOut(100);
            }
        }
    );
});