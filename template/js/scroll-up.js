// ScrollToTop button toggle
jQuery(window).scroll(function () {
    if (jQuery(window).scrollTop() > jQuery(window).height()) {
        jQuery('.scrollToTop').toggleClass('showScrollTop', true);
      }
    else { jQuery('.scrollToTop').removeClass('showScrollTop');}
});
