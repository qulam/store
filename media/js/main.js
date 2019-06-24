$(document).ready(function () {
    /**Header Category Items**/
    $('.main__banner_slider').slick({
        dots: true,
        infinite: true,
        dots: false,
        speed: 700,
        slidesToShow: 1,
        slidesToScroll: 1,
        adaptiveHeight: true,
        arrows: false
    });

    $(document).on('click', '.slide_right', function (e) {
        $('.main__banner_slider').slick('slickNext');
    });

    $(document).on('click', '.slide_left', function (e) {
        $('.main__banner_slider').slick('slickPrev');
    });

    /** /Header Category Items**/

    /** General Event Function**/
    function eventCommand(selector, eventType, options = {}) {
        $(document).on(eventType, selector, function (e) {
            var data = $(this).data('event');
            var eventElement = $(this).parents('div').find("div[data-event='" + data + "']");
            if (eventType == 'click') {
                eventElement.toggleClass('clickEventCommand');
            } else {
                eventElement.css(options);
            }
        });
    }

    /*Open and Close */
    eventCommand('.header__category_span', 'click', {});

    /*Open and Close Card ...*/
    eventCommand('#toggle-card', 'click', {});

    /*Open and Close Login And Registration ...*/
    eventCommand('#toggle-log__reg', 'click', {});


    /** Header category open and close list items **/
    $(document).on('click', '.open-list', function (e) {
        e.preventDefault();

        var allListItems = $(this).parents('.header__category_inner').find('.menu-item');
        var eventElem = $(this).closest('li').find('ul');
        var isFirst = true;
        var closeSelf = false;

        $.each(allListItems, function(index, item){
            if($(item).find('.open-list').hasClass('rotate-45')){
                isFirst = false;
            }
        });

        if($(this).hasClass('rotate-45')){
            closeSelf = true;
        }

        if(isFirst){ 
            $(this).toggleClass('rotate-45');
            eventElem.stop().slideToggle();
        }else{
            if(closeSelf){
                $(this).toggleClass('rotate-45');
                eventElem.stop().slideToggle();
            }else{
                console.log('baskasini baglayarken');
                $.each(allListItems, function(index, item){
                    var checkedElem = $(item).find('ul');
                    if(checkedElem.css('display') === 'block'){
                        checkedElem.closest('li').find('.open-list').toggleClass('rotate-45');
                        checkedElem.stop().slideToggle();
                    }
                });
                $(this).toggleClass('rotate-45');
                eventElem.stop().slideToggle();
            }
        }
    });
});


//Best sales carousel
$(document).ready(function () {
    // Slick slider the best sales area right button
    $('#main_best__inner').find('.right_arrow').click(function (e) {
        $('#main_best').slick('slickNext');
    });
    // Slick slider the best sales area left button
    $('#main_best__inner').find('.left_arrow').click(function (e) {
        $('#main_best').slick('slickPrev');
    });

    $('#main_best').slick({
        infinite: false,
        speed: 500,
        slidesToShow: 8,
        slidesToScroll: 8,
        adaptiveHeight: false,
    }).mCustomScrollbar({
        autoHideScrollbar: false,
        theme: 'dark',
        advanced: {
            updateOnContentResize: false
        },
        axis: 'x',
        scrollInertia: 100
    });
});

//New Products carousel
$(document).ready(function () {
    // Slick slider the best sales area right button
    $('#main_new__inner').find('.right_arrow').click(function (e) {
        $('#main_new').slick('slickNext');
    });
    // Slick slider the best sales area left button
    $('#main_new__inner').find('.left_arrow').click(function (e) {
        $('#main_new').slick('slickPrev');
    });

    $('#main_new').slick({
        infinite: false,
        speed: 500,
        slidesToShow: 8,
        slidesToScroll: 8,
        adaptiveHeight: false,
    }).mCustomScrollbar({
        autoHideScrollbar: false,
        theme: 'dark',
        advanced: {
            updateOnContentResize: false
        },
        axis: 'x',
        scrollInertia: 100
    });
});

//Our Offers Products carousel
$(document).ready(function () {
    // Slick slider the best sales area right button
    $('#main_offers_inner').find('.right_arrow').click(function (e) {
        $('#main_offers').slick('slickNext');
    });
    // Slick slider the best sales area left button
    $('#main_offers_inner').find('.left_arrow').click(function (e) {
        $('#main_offers').slick('slickPrev');
    });

    $('#main_offers').slick({
        infinite: false,
        speed: 500,
        slidesToShow: 8,
        slidesToScroll: 8,
        adaptiveHeight: false,
    }).mCustomScrollbar({
        autoHideScrollbar: false,
        theme: 'dark',
        advanced: {
            updateOnContentResize: false
        },
        axis: 'x',
        scrollInertia: 100
    });
});

/**Compaign Slick Slider**/

$(document).ready(function () {
    var right = $('#compaign_arrows').find('.slide_right');
    var left = $('#compaign_arrows').find('.slide_left');

    $('.compaign').slick({
        arrows: false,
    });

    right.click(function (e) {
        $('.compaign').slick('slickNext');
    });
    left.click(function (e) {
        $('.compaign').slick('slickPrev');
    });
});
/** /Compaign Slick Slider**/

/** Purchased by your frineds **/
$(document).ready(function () {

    /**Friends list carousel**/
    var friendRight = $('.pbf').find('.slide_right');
    var friendLeft = $('.pbf').find('.slide_left');

    $('.pbf_inner').slick({
        arrows: false,
        infinite: false,
        speed: 500,
        slidesToShow: 1,
        slidesToScroll: 1,
        adaptiveHeight: true,
        draggable: false,
    });

    friendLeft.click(function (e) {
        $('.pbf_inner').slick('slickPrev');
    });
    friendRight.click(function (e) {
        $('.pbf_inner').slick('slickNext');
    });

    /** /Friends list carousel**/

    /**Purchased by friends carusel**/
    $('.pbf_firend__fav___products').slick({
        arrows: false,
        infinite: false,
        speed: 500,
        slidesToShow: 4,
        slidesToScroll: 4,
        adaptiveHeight: true,
    });

    $(document).on('click', '.friend-left, .friend-right', function (e) {
        var eClassName = e.currentTarget.className;
        var position;
        if (eClassName === 'friend-right') {
            position = 'slickNext';
        } else if (eClassName === 'friend-left') {
            position = 'slickPrev';
        }
        $('.pbf_firend__fav___products').slick(position);
    });
    /**Purchased by friends carusel**/

});
/** /Purchased by your frineds **/

/**Blogs**/
//Some codes ..
/** /Blogs**/

/**Brands && Partners**/
$(document).ready(function(){
    $('.brands').slick({
        arrows: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
    });

    $('.partners').slick({
        arrows: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
    });
});
/** /Brands && Partners**/

/**Back To Top**/
$(document).ready(function(){
    $(document).on('click', '.back-to-top', function(e){
        $('html, body').animate({
            'scrollTop' : 0,
        }, 600);
    });
});
/** /Back To Top**/

/**Clear Console**/

$(document).ready(function(){
    setTimeout(function(){
        console.clear();
    },2000)
});

/** /Clear Console**/
