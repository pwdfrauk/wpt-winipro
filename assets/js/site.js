// General sitewide settings and stuff
$(document).ready(function() {
    $(window).scroll(function() {
        if ($(this).scrollTop() > 50) {
            $('#back-to-top').fadeIn();
        } else {
            $('#back-to-top').fadeOut();
        }
    });
    //Custom Design Format
    $("#page table, #single table, .faculty-detail table").addClass("table table-bordered table-responsive");
    $("#subscribe-email input").addClass("form-control");
    $("#subscribe-submit input[type=submit]").addClass("btn btn-primary");

    //ImageZoom
    $('.img-zoom').hover(function() {
        $(this).addClass('transition');

    }, function() {
        $(this).removeClass('transition');
    });

    //popup image oncick
    jQuery('.popup-img').magnificPopup({ type: 'image' });
    jQuery('.popup-gallery, .the-content').magnificPopup({
        delegate: 'img',
        type: 'image',
        gallery: { enabled: true },
        callbacks: {
            elementParse: function(item) {
                item.src = item.el.attr('src');
            }
        }
    });
    // scroll body to 0px on click
    $('#back-to-top').click(function() {
        $('#back-to-top').tooltip('hide');
        $('body,html').animate({
            scrollTop: 0
        }, 800);
        return false;
    });

    $('#back-to-top').tooltip('show');

    // Remove img width and height from http://wpwizard.net/jquery/remove-img-height-and-width-with-jquery/	
    $('img').each(function() {
        $(this).removeAttr('width');
        $(this).removeAttr('height');
    });

    //InitSlider();
    // InitTopMenu();
    //SetMultiColumnHeight();
    //SetHeightHomePersonMessage();


    // jQuery('.mobile-menu-toggle').click(function(e) {
    //     jQuery('body').toggleClass('enable-mobile-menu');
    //     jQuery('body').removeClass('scroll-mobile-menu');
    // });

});

$(function() {
    $('.navbar-toggler').on('click', function(event) {
        event.preventDefault();
        $(this).closest('.navbar-minimal').toggleClass('open');
    })
});

function InitTopMenu(parameters) {
    ddsmoothmenu.init({
        mainmenuid: "ddsTopMenu", //menu DIV id
        orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
        classname: 'ddsTopMenu', //class added to menu's outer DIV
        //customtheme: ["#1c5a80", "#18374a"],
        contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
    });
}

function InitSlider() {
    var time = 5000;
    $('#myCarousel').carousel({
        interval: time
    });
    $('.item>.carousel-caption').css({ "bottom": "100px", "opacity": "0" });
    $('.item.active>.carousel-caption').animate({ "top": "-15px", "opacity": "0.9" }, "slow");

    $("#myCarousel > div > div.item > div.fill").css({ "height": "100%", "width": "100%" });
    $("#myCarousel > div > div.item.active > div.fill").animate({ "height": "130%", "width": "130%" }, time / 2);

    $('#myCarousel').on('slid', function() {
        $('.item>.carousel-caption').css({ "bottom": "100px", "opacity": "0" });
        $('.item.active>.carousel-caption').animate({ "top": "-15px", "opacity": "0.9" }, "slow");
        $("#myCarousel > div > div.item > div.fill").css({ "height": "100%", "width": "100%" });
        $("#myCarousel > div > div.item.active > div.fill").animate({ "height": "130%", "width": "130%" }, time / 2);
    });

    jQuery(".loading").fadeOut(200);
    /*jQuery("div.fill").lazy({
        afterLoad: function (element) {
            jQuery(".loading").fadeOut(200);
        },
        onError: function (element) {
            jQuery(".loading").fadeOut(200);
        }
    });*/

    $('.carousel .item').each(function() {
        var next = $(this).next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));

        if (next.next().length > 0) {
            next.next().children(':first-child').clone().appendTo($(this)).addClass('rightest');
        } else {
            $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
        }
    });
}

function SetHeightHomePersonMessage() {

    var messageBox = $(".person-message .message-text");

    if (messageBox[0]) {
        var maxHeight = 50;
        messageBox.each(function(i, obj) {

            var height = $(obj).height();
            if (height > maxHeight) {
                maxHeight = height;
            }

        });
        $(messageBox).height(maxHeight);
    }
}