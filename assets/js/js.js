$(document).ready(function(){
    $(".ray-menu-button, .ray-navbar-mobile-menu-button span").click(function(){
        $(".ray-navbar-menu-wrapper").css({ "display" : "block" }).hide().fadeIn(300);
        $(".ray-navbar-menu").animate({ "margin-left" : "0" });
    });
    $(".ray-navbar-menu-close").click(function(){
        $(".ray-navbar-menu-wrapper").css({ "display" : "none" }).show().fadeOut(300);
        $(".ray-navbar-menu").animate({ "margin-left" : "-100%" });
    });

    $(".ray-network-button").hover(function(){
        $(".ray-network-menu").slideToggle(200)
    })

    $(".ray-search-button, .ray-navbar-mobile-search-button span").click(function(){
        $(".ray-search-wrapper").fadeIn(400);
    });
    $(".ray-search-close").click(function(){
        $(".ray-search-wrapper").fadeOut(400);
    });

    $(".menu-item-has-children").hover(function(){
        $("> ul", this).first().slideToggle(200);
    });

    $(".ray-floating-ads-close").click(function(){
        $(".ray-floating-ads-container").fadeOut();
    });

    $("body").niceScroll({cursorcolor:"#ddd"});
    $(".ray-navbar-menu").niceScroll({cursorcolor:"#ddd"});
});