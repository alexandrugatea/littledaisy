jQuery(document).ready(function ($) {

    // auto calc page height

    var header = $('header').outerHeight(),
        main = 0,
        footer = $('footer').outerHeight(),
        wH = $(window).height();
    
    main = wH - header - footer;
    
    $('main').css('min-height', main);

});
