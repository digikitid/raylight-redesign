$(document).ready(function(){
    $(".ray-menu-button").click(function(){
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

    $(".ray-search-button").click(function(){
        $(".ray-search-wrapper").fadeIn(400);
    });
    $(".ray-search-close").click(function(){
        $(".ray-search-wrapper").fadeOut(400);
    });

    $(".menu-item-has-children").hover(function(){
        $("> ul", this).first().slideToggle(200);
    });
});