function carouselFix(){
    var elementHeights = jQuery('.cardHeight').map(function () {
        return jQuery(this).height();
    }).get();
    var minHeight = Math.max.apply(null, elementHeights);
    var height = minHeight + 'px';
    var targetDiv = jQuery('.carousel', '#spotCar');
    jQuery(targetDiv).css('height', height);
    var cardHeights = jQuery('.row.eventUnit').map(function () {
        return jQuery(this).height();
    }).get();
    var minHeight = Math.max.apply(null, cardHeights);
    var heights = minHeight + 'px';
    var targetDivs = jQuery('.carousel', '#hapCar');
    jQuery(targetDivs).css('height', heights);
}
window.onresize = carouselFix();
jQuery(document).ready(function() {
    setTimeout(function() {
        jQuery('.carousel.carousel-slider').carousel({fullWidth: true});
        carouselFix();
    }, 1000);
});