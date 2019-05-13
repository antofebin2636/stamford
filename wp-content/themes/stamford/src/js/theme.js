
// @prepros-prepend ../../node_modules/jquery/dist/jquery.js;
// @prepros-prepend ../../node_modules/flickity/dist/flickity.pkgd.js;

// @prepros-prepend ../../node_modules/jquery-parallax.js/parallax.js;


/* **********************************************************************
Animation - GSAP
 ********************************************************************** */
// @prepros-prepend "../../node_modules/greensock/dist/TweenMax.js";
// @prepros-prepend "../../node_modules/greensock/dist/plugins/AttrPlugin.js";

/* **********************************************************************
// Animate when scrolled into view - ScrollReveal
//  ********************************************************************** */
// @prepros-prepend "../../node_modules/scrollreveal/dist/scrollreveal.js";

// @prepros-prepend "../../node_modules/headroom.js/dist/headroom.js";


// @prepros-prepend helpers/carousel.js
// @prepros-prepend helpers/header.js
// @prepros-prepend helpers/scroll-reveal.js

// var $ = require("jquery");
// window.jQuery = $;
// window.$ = $;

jQuery(document).ready(function($) {
    box = $("#why_stamford");
    stagger = $(".stagger");

    $paths = $("svg rect");
    $border = $('.title-line');


    var tl = new TimelineMax();

    tl.staggerFromTo($paths, 1, {height: 0, drawSVG:"0% 0%"}, {height: '100%', drawSVG:"0% 0%", onComplete:''}, 0.1)
       // .staggerFromTo('.flex-content', 0.5, { autoAlpha: 0, y: 25 }, { autoAlpha: 1, y: 0, ease: Power4.easeInOut }, 0.3, 0)
       // .staggerFromTo('.flickity-page-dots, 0.5, { autoAlpha: 0, y: 25 }, { autoAlpha: 1, y: 0, ease: Power4.easeInOut }, 0.3, 0)
        .staggerFromTo($border,2, { autoAlpha: 0, x: 20 }, { autoAlpha: 1, x: 25, ease: Power4.easeInOut }, 0.3, 0)
    ;


    var eLeft = $('.hero-slider .flex-content').offset().left;
    $('.hero-slider .flickity-page-dots').css('left',eLeft + 25);

    var eTop = $('.hero-slider .flickity-page-dots').offset().top;
    $('.hero-slider .flickity-button').css('top',eTop + 10 );
    $('.hero-slider .flickity-button.previous').css('left',eLeft - 10);
    $('.hero-slider .flickity-button.next').css('left',eLeft + 175);


    $('.burger').click(function () {
        if($('body').hasClass('menu')){
            $('body').removeClass('menu');
        }else{
            $('body').addClass('menu');
        }
    });

    var lineLft = $('.flex-content svg').offset().left;
    $('.title-lines').css('left',lineLft + 20);


    // var eBlogDots = $('.home-blog-slider .flickity-page-dots .dot').offset().left;
    // console.log(eBlogDots);
    // $('.home-blog-slider .flickity-button.previous').css('left',eBlogDots) ;
    // $('.home-blog-slider .flickity-button.next').css('left',eBlogDots);


    var maxHeight =0;
    $('.v-float').each(function () {

        maxHeight = Math.max(maxHeight, $(this).height());
    })
     $('.v-box').css('height', maxHeight *3 - 500) ;

});

$(window).on('resize',function () {
    var eLeft = $('.hero-slider .flex-content').offset().left;
    $('.hero-slider .flickity-page-dots').css('left',eLeft + 25);

    var eTop = $('.hero-slider .flickity-page-dots').offset().top;
    $('.hero-slider .flickity-button').css('top',eTop + 10 );
    $('.hero-slider .flickity-button.previous').css('left',eLeft - 10);
    $('.hero-slider .flickity-button.next').css('left',eLeft + 175);


    // var eBlogDots = $('.home-blog-slider .flickity-page-dots').offset().left;
    // $('.home-blog-slider .flickity-button.previous').css('left',eBlogDots + 250) ;
    // $('.home-blog-slider .flickity-button.next').css('left',eBlogDots + 460 );

    var lineLft = $('.flex-content svg').offset().left;
    $('.title-lines').css('left',lineLft + 20);



});