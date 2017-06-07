function contentFix() {
    var cardContents = jQuery('.card-content').map(function () {
        return jQuery(this).height();
    }).get();
    var minHeightB = Math.max.apply(null, cardContents);
    var heightB = minHeightB + 48 + 'px';
    jQuery('.card-content').each(function () {
        jQuery('.card-content').css('height', heightB);
    })
}

function carouselFix(){
    var slickTrack = jQuery('.slick-track','#spotCar').map(function () {
        return jQuery(this).height();
    }).get();
    var trackHeight = Math.max.apply(null, slickTrack);
    var height = trackHeight + 50 + 'px';
    var targetDiv = jQuery('#spotCar');
    jQuery(targetDiv).css('height', height);
}

//on a delay so that materialize can finish loading the images and content prior to size calculation
window.onresize = carouselFix();
jQuery(document).ready(function() {
    setTimeout(function() {
        jQuery('.carousel.carousel-slider').carousel({fullWidth: true});
        carouselFix();
        contentFix();
    }, 1000);
});