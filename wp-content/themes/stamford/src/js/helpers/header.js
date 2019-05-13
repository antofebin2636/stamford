// var options = {
// //     accessibility: true,
// //     prevNextButtons: true,
// //     pageDots: true,
// //     setGallerySize: false,
// //     // autoPlay: 4000,
// //     arrowShape: {
// //         x0: 10,
// //         x1: 60,
// //         y1: 50,
// //         x2: 60,
// //         y2: 45,
// //         x3: 15
// //     },
// //     on: {
// //         ready: function() {
// //             // ScrollReveal().reveal('.grid-col', { interval: 50 });
// //
// //
// //         },
// //         change: function( index ) {
// //         }
// //     }
// // };
// //
// // var carousel = document.querySelector('[data-carousel]');
// // var slides = document.getElementsByClassName('carousel-cell');
// // var flkty = new Flickity(carousel, options);
// //
// // flkty.on('scroll', function () {
// //     flkty.slides.forEach(function (slide, i) {
// //         var image = slides[i];
// //         var x = (slide.target + flkty.x) * -1/3;
// //         image.style.backgroundPosition = x + 'px';
// //     });
// // });


// grab an element
var myElement = document.querySelector("header");


var headroom = new Headroom(myElement, {
    "offset": 75,
    //"tolerance": 5,
    "classes": {
        "initial": "animated",
        "pinned": "slideDown",
        "unpinned": "slideUp"
    }
});
headroom.init();