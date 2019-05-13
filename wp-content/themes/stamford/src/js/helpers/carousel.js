var options = {
    accessibility: true,
    prevNextButtons: true,
    pageDots: true,
    setGallerySize: false,
};

var carousel = document.querySelector('[data-carousel]');
var slides = document.getElementsByClassName('carousel-cell');
var flkty = new Flickity(carousel, options);


flkty.on('scroll', function () {

    flkty.slides.forEach(function (slide, i) {
        var image = slides[i];
        var x = (slide.target + flkty.x) * -1/3;
        image.style.backgroundPosition = x + 'px';
    });


    $paths = $("svg rect");

    var tl = new TimelineMax();
    tl.staggerFromTo($paths, 1, {height: 0, drawSVG:"0% 0%"}, {height: '100%', drawSVG:"0% 0%", onComplete:''}, 0.1)
        //.staggerFromTo('.flex-content', 0.5, { autoAlpha: 0, y: 25 }, { autoAlpha: 1, y: 0, ease: Power4.easeInOut }, 0.3, 0)
        .staggerFromTo($border,2, { autoAlpha: 0, x: 20 }, { autoAlpha: 1, x: 25, ease: Power4.easeInOut }, 0.3, 0)
});





$('.accred-carousel').flickity({
    cellAlign: 'center',
    autoPlay: 5000,
    pauseAutoPlayOnHover: true,
    groupCells: true,
    pageDots: false,
    prevNextButtons: false,
});



$('.slider-testimonial').flickity({
    pauseAutoPlayOnHover: true,
    pageDots: true,
    prevNextButtons: true,
});

$('.blog-carousel').flickity({
    cellAlign: 'center',
   //autoPlay: 5000,
    pauseAutoPlayOnHover: true,
    groupCells: true,
    pageDots: true,
    prevNextButtons: true,
});