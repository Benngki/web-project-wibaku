/**
 * Scroll top button
 */
const scrollTop = document.querySelector('.scroll-top');
if (scrollTop) {
    const togglescrollTop = function() {
    window.scrollY > 0 ? scrollTop.classList.add('active') : scrollTop.classList.remove('active');
    }
    window.addEventListener('load', togglescrollTop);
    document.addEventListener('scroll', togglescrollTop);
    scrollTop.addEventListener('click', window.scrollTo({
    top: 0,
    behavior: 'smooth'
    }));
}

/* 
nav button
 */

$("body > header > nav > div > button").click(function (e) { 
    e.preventDefault();
    // $("body > header > nav > div > button").toggle();
    // $(this).toggleClass("position-absolute");
    
});



$screen_width = screen.width

$("#btn_daftar").hover(function () {
        // over
        $(this).addClass("bg-light text-primary");            
    }, function () {
        // out
        $(this).removeClass("bg-light text-primary");
    }
);

$(document).ready(function () {    
    var navHeight = Number($("nav").css("height").replace("px", ""));      
    
    // ketika elemen page_scroll diklik
    $("a.page_scroll").click(function (e) { 
        e.preventDefault();
        var offset_tujuan = $($(this).attr('href')).offset().top;
        $(window).scrollTop(offset_tujuan-navHeight);
    });
    // nav
    // $(".active").css("color", "#D1B280");      
    // $("#menu a").hover(function () {
    //         // over            
    //         $(this).addClass("active");
    //     }, function () {
    //         // out
    //         $(this).removeClass("active");
    //     }
    // );

    

    // audio button    
    $('button.btn_audio').click(function (e) { 
        $(this).replaceWith('\
        <audio controls autoplay>\
            <source src="'+$(this).attr("value")+'" type="audio/mpeg">\
           Your browser does not support the audio element.\
        </audio>\
        ');
        e.preventDefault();
    });



    // owl carousel init
    $('.owl-carousel').owlCarousel({
        loop: false,
        // autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        dots: true,
        nav: false,
        // stagePadding: -5,
        responsiveBaseElement: 'body',
        responsive: {
            0: {    
                items: 1,
            },
            750: {
                items:2,
                nav: true,
            },
            1220: {
                items: 3,
                nav: true,
            },
        },
    });
});

