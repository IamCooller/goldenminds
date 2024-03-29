$(function() {




    // AOS
    AOS.init({
        once: true,
        duration: 1000,
        offset: 0,
    })

    $(window).on('resize load', function() {
        AOS.refreshHard()
    })

    $(window).on('scroll load', function() {
            AOS.refresh()
        })
        // eof

    $('.magnific-popup').magnificPopup({
        fixedContentPos: false,
        callbacks: {
            open: function() {
                $('body').addClass('scroll_disabled')
            },
            close: function() {
                $('body').removeClass('scroll_disabled')
            },
        },
    })

    $('.searchOpen').on('click', () => {
        $('#myOverlay').show()
    })
    $('.searchClose').on('click', () => {
        $('#myOverlay').hide()
    })

    $(function() {
        $('.popup-modal').magnificPopup({
            type: 'inline',
            modal: true,
            callbacks: {
                open: function() {
                    $('body').addClass('scroll_disabled')
                },
                close: function() {
                    $('body').removeClass('scroll_disabled')
                },
            },
        });
        $('.popup-gallery').magnificPopup({
            delegate: 'a',
            type: 'image',
            tLoading: 'Loading image #%curr%...',
            mainClass: 'mfp-img-mobile',
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
            },
            callbacks: {
                open: function() {
                    $('body').addClass('scroll_disabled')
                },
                close: function() {
                    $('body').removeClass('scroll_disabled')
                },
            },
            image: {
                markup: '<div class="mfp-figure mfp-figure-costumer">' +
                    '<div class="mfp-close"></div>' +
                    '<div class="mfp-img"></div>' +
                    '</div>',
                tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',

            }
        });
    });




    let header = $('.header')
    let hederHeight = header.height() // вычисляем высоту шапки

    $(window).scroll(function() {
        if ($(this).scrollTop() > 1) {
            header.addClass('header_fixed')
            $('body').css({
                paddingTop: hederHeight + 'px', // делаем отступ у body, равный высоте шапки
            })
        } else {
            header.removeClass('header_fixed')
            $('body').css({
                paddingTop: 0, // удаляю отступ у body, равный высоте шапки
            })
        }
    })

    function ibg() {
        let ibg = document.querySelectorAll('.ibg')
        for (var i = 0; i < ibg.length; i++) {
            if (ibg[i].querySelector('img')) {
                ibg[i].style.backgroundImage =
                    'url(' + ibg[i].querySelector('img').getAttribute('src') + ')'
            }
        }
    }
    ibg()

    if ($(window).width() < 992) {
        $('.hamburger-menu__dropdown-heading').on('click', function() {
            $(this).toggleClass('active').next().slideToggle()
            $('.hamburger-menu__dropdown-heading')
                .not(this)
                .removeClass('active')
                .next()
                .slideUp()
        })
    }

    const swiper = new Swiper('.slaider__body', {
        loop: true,
        //slidesPerView: 3,
        spaceBetween: 30,

        navigation: {
            nextEl: '.reght-buttons__button-next',
            prevEl: '.reght-buttons__button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            type: 'fraction',
        },

        breakpoints: {
            320: {
                slidesPerView: 1,
            },
            992: {
                slidesPerView: 3,
            },
        },
    })

    const Gallery = new Swiper('.gallery-swiper', {
        loop: true,
        slidesPerView: 1,
        navigation: {
            nextEl: '.reght-buttons__button-next',
            prevEl: '.reght-buttons__button-prev',
        },

    })

    const guidanceDirections = new Swiper('.guidanceDirections-gallery', {
        loop: true,
        spaceBetween: 30,
        navigation: {
            nextEl: '.reght-buttons__button-next',
            prevEl: '.reght-buttons__button-prev',
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
                spaceBetween: 0,
                navigation: false,
                pagination: {
                    el: '.swiper-pagination',
                    type: 'bullets',
                },
            },
            992: {
                slidesPerView: 3,
            },
        },

    })

    const departamentsList = new Swiper('.departaments__list', {
        loop: true,
        spaceBetween: 30,
        navigation: {
            nextEl: '.reght-buttons__button-next',
            prevEl: '.reght-buttons__button-prev',
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
                spaceBetween: 0,
                navigation: false,
                pagination: {
                    el: '.swiper-pagination',
                    type: 'bullets',
                },
            },
            992: {
                slidesPerView: 4,
            },
        },

    })

    const projectsSingle = new Swiper('.projectsSingle__gallery_list', {
        loop: true,
        spaceBetween: 15,
        navigation: {
            nextEl: '.reght-buttons__button-next',
            prevEl: '.reght-buttons__button-prev',
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
                spaceBetween: 0,
                navigation: false,
                pagination: {
                    el: '.swiper-pagination',
                    type: 'bullets',
                },
            },
            992: {
                slidesPerView: 2,
            },
        },

    })
    const projectsDone = new Swiper('.projectsDone__list-gallery', {
        loop: true,
        spaceBetween: 30,
        breakpoints: {
            320: {
                slidesPerView: 1,
                spaceBetween: 0,
                navigation: false,
                pagination: {
                    el: '.swiper-pagination-projects',
                    type: 'bullets',
                },
            },
            992: {
                slidesPerView: 3,
            },
        },

    })

    const tendersMoreList = new Swiper('.tendersMore__list', {
        loop: true,
        spaceBetween: 15,
        breakpoints: {
            320: {
                slidesPerView: 1,
                spaceBetween: 0,
                navigation: false,
                pagination: {
                    el: '.swiper-pagination',
                    type: 'bullets',
                },
            },
            992: {
                slidesPerView: 2,
            },
        },

    })

    const PressCenterGallery = new Swiper('.PressCenter__gallery', {
        loop: true,
        navigation: {
            nextEl: '.reght-buttons__button-next',
            prevEl: '.reght-buttons__button-prev',
        },
        slidesPerView: 1,
        breakpoints: {
            320: {

                pagination: {
                    el: '.swiper-pagination',
                    type: 'bullets',
                },
            },
            992: {
                pagination: false,
            }
        },

    })

    const PressCenterMoreList = new Swiper('.PressCenterMore__list', {
        loop: true,
        navigation: {
            nextEl: '.reght-buttons__button-next-more',
            prevEl: '.reght-buttons__button-prev-more',
        },
        spaceBetween: 15,
        breakpoints: {
            320: {
                slidesPerView: 1,
                spaceBetween: 0,
                navigation: false,
                pagination: {
                    el: '.swiper-pagination-more',
                    type: 'bullets',
                },
            },
            992: {
                slidesPerView: 3,
            },
        },

    })

    var PressCenterSingle_photo_small = new Swiper(".PressCenterSingle_photo_small", {

        watchSlidesProgress: true,
        breakpoints: {
            320: {
                slidesPerView: 3,
                spaceBetween: 15,
            },
            992: {
                slidesPerView: false,
            },
        },
    });
    var PressCenterSingle_photo_big = new Swiper(".PressCenterSingle_photo_big", {

        navigation: {
            nextEl: '.reght-buttons__button-next',
            prevEl: '.reght-buttons__button-prev',
        },
        thumbs: {
            swiper: PressCenterSingle_photo_small,
        },
    });





    $('.right-header__minu-icon, .hamburger-menu__close').on('click', function() {
        $('.hamburger-menu').fadeToggle()
        $('body').toggleClass('scroll_disabled')
    })
})

$('.labgvidg-header__text').on('click', function() {
        $(this).toggleClass('active').next().slideToggle()
    })
    /* $('.institutTabs__nav-link').on('click', function() {
        $(this).parent().find('.tab-active').removeClass('tab-active');
        $(this).toggleClass('tab-active');
    })
     */
$(function() {
    var tab = $('#tabs .tabs-items > div');
    tab.hide().filter(':first').show();

    // Клики по вкладкам.
    $('#tabs .tabs-nav a').click(function() {
        tab.hide();
        tab.filter(this.hash).show();
        $('#tabs .tabs-nav a').removeClass('tab-active');
        $(this).addClass('tab-active');
        return false;
    }).filter(':first').click();

    // Клики по якорным ссылкам.
    $('.tabs-target').click(function() {
        $('#tabs .tabs-nav a[href=' + $(this).attr('href') + ']').click();
    });

    // Отрытие вкладки из хеша URL
    if (window.location.hash) {
        $('#tabs-nav a[href=' + window.location.hash + ']').click();
        window.scrollTo(0, $("#".window.location.hash).offset().top);
    }
});

$(function() {
    var tab = $('.history__body > div');
    tab.hide().filter(':first').show();

    // Клики по вкладкам.
    $('.history__timeLaps a').click(function() {
        tab.hide();
        tab.filter(this.hash).show();
        $('.history__timeLaps li').removeClass('timeLaps-active');
        $(this).parent().addClass('timeLaps-active');
        return false;
    }).filter(':first').click();



    // Отрытие вкладки из хеша URL
    if (window.location.hash) {
        $('.history__timeLaps a[href=' + window.location.hash + ']').click();
        window.scrollTo(0, $("#".window.location.hash).offset().top);
    }
});

$(function() {
    var tab = $('.sidebar__right > div');
    tab.hide().filter(':first').show();

    // Клики по вкладкам.
    $('.sidebar__left a').click(function() {
        tab.hide();
        tab.filter(this.hash).show();
        $('.sidebar__left a').removeClass('active');
        $(this).addClass('active');
        return false;
    }).filter(':first').click();



    // Отрытие вкладки из хеша URL
    if (window.location.hash) {
        $('.history__timeLaps a[href=' + window.location.hash + ']').click();
        window.scrollTo(0, $("#".window.location.hash).offset().top);
    }
});

$('.top-header__colour-heading').on('click', function() {
    $('.top-header__colour-dropdown').slideToggle()
})

$('body').on('click', '.link_move', function(event) {
    event.preventDefault()
    var id = $(this).attr('href'),
        top = $(id).offset().top
    $('body,html').animate({ scrollTop: top }, 1500)
})


$(document).mouseup(function(e) {
    let container = $(".top-header__colour-dropdown");
    if (container.has(e.target).length === 0) {
        container.slideUp();
    }
});


$(document).mouseup(function(e) {
    let container = $(".labgvidg-header__dropdown");
    if (container.has(e.target).length === 0) {
        container.slideUp();
    }
});

///
///
///

// Карта стран

// Kz
$('.kz-link').on('mouseover', function() {
    $('.projects__info.kz').show()
    $('.projects__map a.kz').addClass('active')
})

$('.kz-link').on('mouseleave', function() {
    $('.projects__info.kz').hide()
    $('.projects__map a.kz').removeClass('active')
})

// Tj
$('.tj-link').on('mouseover', function() {
    $('.projects__info.tj').show()
    $('.projects__map a.tj').addClass('active')
})

$('.tj-link').on('mouseleave', function() {
    $('.projects__info.tj').hide()
    $('.projects__map a.tj').removeClass('active')
})

// Uz
$('.uz-link').on('mouseover', function() {
    $('.projects__info.uz').show()
    $('.projects__map a.uz').addClass('active')
})

$('.uz-link').on('mouseleave', function() {
    $('.projects__info.uz').hide()
    $('.projects__map a.uz').removeClass('active')
})

// Tk
$('.tk-link').on('mouseover', function() {
    $('.projects__info.tk').show()
    $('.projects__map a.tk').addClass('active')
})

$('.tk-link').on('mouseleave', function() {
    $('.projects__info.tk').hide()
    $('.projects__map a.tk').removeClass('active')
})

// Af
$('.af-link').on('mouseover', function() {
    $('.projects__info.af').show()
    $('.projects__map a.af').addClass('active')
})

$('.af-link').on('mouseleave', function() {
    $('.projects__info.af').hide()
    $('.projects__map a.af').removeClass('active')
})

// Krgz
$('.krgz-link').on('mouseover', function() {
    $('.projects__info.krgz').show()
    $('.projects__map a.krgz').addClass('active')
})

$('.krgz-link').on('mouseleave', function() {
    $('.projects__info.krgz').hide()
    $('.projects__map a.krgz').removeClass('active')
})

// Viet
$('.viet-link').on('mouseover', function() {
    $('.projects__info.viet').show()
    $('.projects__map a.viet').addClass('active')
})

$('.viet-link').on('mouseleave', function() {
        $('.projects__info.viet').hide()
        $('.projects__map a.viet').removeClass('active')
    })
    // eof

$('.custom-scroll').mCustomScrollbar()

if ($(window).width() < 992) {
    $('.custom-scroll').mCustomScrollbar('destroy')
    $('.custom-scroll').css('overflow-y', 'auto')
}

$('.popup__list-item').hover(function() {
    $(this).closest('.popup').find('.popup__map-info').hide().eq($(this).index()).show()
})


// Cookie start


function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toGMTString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}


// Cookie ends


////Скрипт для слабовидящих////

$("input#colour__site-Off").on('click', function() {
    $("body").css("filter", "grayscale(100%) invert(100%)");
});
$("input#colour__site-On").on('click', function() {
    $("body").css("filter", "grayscale(0%)");
});


$("button#fontsSite-plus").on('click', function() {
    var zoom_site = $(this).css("zoom") / 1;
    var z = zoom_site + 0.1;
    $("button, a, p, h1, h2, h3, h4, h5, li, span").css("zoom", z);
});
$("button#fontsSite-minus").on('click', function() {
    var zoom_site = $(this).css("zoom");
    var z = zoom_site - 0.1;
    $("button, a, p, h1, h2, h3, h4, h5, li, span").css("zoom", z);
});

$("button#fontsSite-normal").on('click', function() {
    $("button, a, p, h1, h2, h3, h4, h5, li, span").css("zoom", 1);
});


var voice = getCookie("voice");
if (voice == "yes") {
    $("button#siteVoice").removeClass("filter-none");
} else {
    $("button#siteVoice").addClass("filter-none");
}
$("button#siteVoice").on('click', function() {
    var clases = $("button#siteVoice").attr('class');
    if (clases.indexOf("filter-none") > 0) {
        $("button#siteVoice").removeClass("filter-none");
        setCookie("voice", "yes");
        location.reload();

    } else {
        $("button#siteVoice").addClass("filter-none");
        setCookie("voice", "not");
        location.reload();
    }
});

$("a").on('mouseenter', function() {
    if (voice == "yes") {
        var text = $(this).text();
        var range = String(text);

        responsiveVoice.setDefaultVoice("Russian Female");
        responsiveVoice.speak(range);
    }

});

$("p").on('mouseenter', function() {
    if (voice == "yes") {
        var text = $(this).text();
        var range = String(text);

        responsiveVoice.setDefaultVoice("Russian Female");
        responsiveVoice.speak(range);
    }

});
$("div").on('mouseenter', function() {
    if (voice == "yes") {
        var text = $(this).text();
        var range = String(text);

        responsiveVoice.setDefaultVoice("Russian Female");
        responsiveVoice.speak(range);
    }

});
$('body').on('mouseup', function(e) {
    if (voice == "yes") {

        var selectedText = window.getSelection().toString();
        artyom.say(selectedText)
            /*    responsiveVoice.setDefaultVoice("Russian Female");
               responsiveVoice.speak(selectedText); */
    }
});



var acc = document.getElementsByClassName("accordion");
for (let i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.maxHeight) {
            panel.style.maxHeight = null;
        } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
            panel.style.marginTop = '-1px';
        }
    });
}

jQuery(($) => {
    $('.select').on('click', '.select__head', function() {
        if ($(this).hasClass('open')) {
            $(this).removeClass('open');
            $(this).next().fadeOut();
        } else {
            $('.select__head').removeClass('open');
            $('.select__list').fadeOut();
            $(this).addClass('open');
            $(this).next().fadeIn();
        }
    });

    $('.select').on('click', '.select__item', function() {
        $('.select__head').removeClass('open');
        $(this).parent().fadeOut();
        $(this).parent().prev().text($(this).text());
        $(this).parent().prev().prev().val($(this).text());
    });

    $(document).click(function(e) {
        if (!$(e.target).closest('.select').length) {
            $('.select__head').removeClass('open');
            $('.select__list').fadeOut();
        }
    });
});


$(function() {
    var wrapper = $(".file_upload"),
        inp = wrapper.find("input"),
        btn = wrapper.find("button"),
        lbl = wrapper.find("div");

    btn.focus(function() {
        inp.focus()
    });
    // Crutches for the :focus style:
    inp.focus(function() {
        wrapper.addClass("focus");
    }).blur(function() {
        wrapper.removeClass("focus");
    });

    var file_api = (window.File && window.FileReader && window.FileList && window.Blob) ? true : false;

    inp.change(function() {
        var file_name;
        if (file_api && inp[0].files[0])
            file_name = inp[0].files[0].name;
        else
            file_name = inp.val().replace("C:\\fakepath\\", '');

        if (!file_name.length)
            return;

        if (lbl.is(":visible")) {
            lbl.text(file_name);
            /* btn.text("Выбрать"); */
        } else
            btn.text(file_name);
    }).change();

});
$(window).resize(function() {
    $(".file_upload input").triggerHandler("change");
});