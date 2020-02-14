// Dynamic top menu positioning

var num = 0; //number of pixels before modifying styles

// $(window).bind('scroll', function () {
//     if ($(window).scrollTop() > num) {
//         $('.menufluid').addClass('fixed');
//     } else {
//         $('.menufluid').removeClass('fixed');
//     }
// });

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("navbar").style.top = "0";
    } else {
        document.getElementById("navbar").style.top = "-60px";
    }
}

//USE SCROLL WHEEL FOR THIS FIDDLE DEMO
