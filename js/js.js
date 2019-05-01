$('.carousel').carousel({
    interval: 200000
});


if ($(window).width() > 767) {
    $(".regular").slick({
        lazyLoad: 'ondemand',
        slidesToShow: 3,
        slidesToScroll: 1
    });

    $(".regular2").slick({
        lazyLoad: 'ondemand',
        slidesToShow: 3,
        slidesToScroll: 1
    });
}

if ($(window).width() < 767 && $(window).width() > 400) {
    $(".regular").slick({
        lazyLoad: 'ondemand',
        slidesToShow: 2,
        slidesToScroll: 1
    });

    $(".regular2").slick({
        lazyLoad: 'ondemand',
        slidesToShow: 2,
        slidesToScroll: 1
    });
}

if ($(window).width() < 400) {
    $(".regular").slick({
        lazyLoad: 'ondemand',
        slidesToShow: 1,
        slidesToScroll: 1
    });

    $(".regular2").slick({
        lazyLoad: 'ondemand',
        slidesToShow: 1,
        slidesToScroll: 1
    });
}


function cssChange(obj, param, val) {
    obj.css(param, val);
};

function closePopup(p) {
    p.css("opacity", "0");
    setTimeout(cssChange, 200, p, "display","none");
    $("body").removeAttr("style");
    p.find(".popup_close").off('click');
    p.off('click');
}

function showPopup(selector) {
    var p = $(selector);
    if (p.length == 1 && p.hasClass("popup")) {
        $("body").css("overflow", "hidden");
        p.css("display","flex");
        setTimeout(cssChange, 10, p, "opacity", "1");
        p.find(".popup_close").on('click', function(e) {
            closePopup($(this).parents(".popup"));
        });
        p.on('click', function(e) {
            var c = $(this).find(".popup_content");
            if(!c.is(e.target) && c.has(e.target).length === 0) {
                closePopup($(this));
            }
        });
    }
}


