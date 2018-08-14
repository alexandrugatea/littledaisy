jQuery(document).ready(function ($) {

    // auto calc page height

    var header = $('header').outerHeight(),
        main = 0,
        footer = $('footer').outerHeight(),
        wH = $(window).height();
    
    main = wH - header - footer;
    
    $('main').css('min-height', main);


    // navbar toggler mobile

    var toggler = $('header .toggler');
    var nav = $('header .nvbar-links-wrapper');

    toggler.on('click', function(){
        nav.toggleClass('opened');
        $(this).find('.fa').toggleClass('fa-bars fa-times');
        $('body').toggleClass('lock');
    });


    // add current nav active
    var path = window.location.pathname.split("/").pop();
    
    // Account for home page with empty path
    if ( path == '/' ) {
        path = 'index.php';
    }
        
    var target = $('.nvbar-links-wrapper a[href="/'+path+'"]');
    // Add active class to target link
    target.parents('.nl').addClass('active');


    // create nice efect for footer
    $('main').css('margin-bottom', footer);
    
    $(window).on('resize', function(){
        footer = $('footer').outerHeight();
        $('main').css('margin-bottom', footer);
    });


    // show filters on mobile

    $('.list-type').on('click', function(){
        $(this).siblings('.list').toggleClass('opened');
    });

    $(document).on('click','.list.opened', function(){
        $(this).toggleClass('opened');
    });


});
