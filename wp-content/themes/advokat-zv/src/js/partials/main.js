var param = {
    windowWidth: 0,
    windowHeight: 0,
    minheaderHeight: 600
};
var block = {
    header: $('header'),
    dropdown: $('.dropdown'),
    whatFor: $('#what-for')
};

function setDynamicParams() {
    param.windowWidth = $(window).width();
    param.windowHeight = $(window).height();
}

function setHeaderSize() {
    block.header.width(param.windowWidth);
    if (param.windowWidth > 767) {
        if (param.windowHeight > param.minheaderHeight) {
            block.header.height(param.windowHeight);
        } else {
            block.header.height(param.minheaderHeight);
        }
    } else {
        block.header.height('auto');
    }
}

function setSlidingEffectToDropdowns() {
    var slidingSpeed = 200;
    if (param.windowWidth > 767) {
        block.dropdown.on('show.bs.dropdown', function (e) {
            $(this).find('.dropdown-menu').first().stop(true, true).slideDown(slidingSpeed);
        });
        block.dropdown.on('hide.bs.dropdown', function (e) {
            $(this).find('.dropdown-menu').first().stop(true, true).slideUp(slidingSpeed);
        });
    }
}

function setMap() {
    ymaps.ready(init);
    var myMap,
        placeMark;

    function init() {
        myMap = new ymaps.Map("map", {
            center: [55.74728413815523, 37.6090101269836],
            zoom: 18,
            controls: []
        });
        myMap.behaviors.disable('scrollZoom');
        placeMark = new ymaps.Placemark([55.74728413815523, 37.6090101269836], {
            hintContent: 'Logix',
            balloonContent: 'Создание сайтов'
        });
        myMap.geoObjects.add(placeMark);
    }
}

function setActiveMenuItem() {
    var activeLi = $('a[href="' + window.location + '"]');
    if (activeLi.parent().parent().is('.dropdown-menu')) {
        activeLi.parent().parent().parent().addClass('active');
    }
    else {
        activeLi.parent().addClass('active');
    }
}

function setWhatForCarousel() {
    function setArrowsPos() {
        var arrows = block.whatFor.find('.icon-arrow-left, .icon-arrow-right');
        var topOffset = parseInt(block.whatFor.css('padding-top'));
        topOffset += parseInt(block.whatFor.find('.title').height());
        topOffset += parseInt(block.whatFor.find('.content').css('margin-top'));
        topOffset += parseInt(parseInt(block.whatFor.find('.content').height()) / 2);
        topOffset -= parseInt(parseInt(arrows.height()) / 2);
        arrows.css('top', topOffset);
    }

    var whatForCarousel = block.whatFor.find('.owl-carousel').owlCarousel({
        loop: true,
        dots: true,
        items: 1,
        autoHeight: true
    });
    setArrowsPos();
    block.whatFor.find('.icon-arrow-left').bind('click', function () {
        whatForCarousel.trigger('prev.owl.carousel');
    });
    block.whatFor.find('.icon-arrow-right').bind('click', function () {
        whatForCarousel.trigger('next.owl.carousel');
    });
    whatForCarousel.on('changed.owl.carousel', function (event) {
        setTimeout(function () {
            setArrowsPos();
        }, 300);
    });
}

$(document).ready(function () {
    setDynamicParams();
    setSlidingEffectToDropdowns();
    setActiveMenuItem();
});

$(window).resize(function () {
    setDynamicParams();
});