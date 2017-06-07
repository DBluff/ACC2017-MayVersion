function carouselFix(){
    //Get height of each element
    var elementHeights = jQuery('.cardHeight').map(function () {
        return jQuery(this).height();
    }).get();
    var cardHeights = jQuery('.row.eventUnit').map(function () {
        return jQuery(this).height();
    }).get();
    //Save the largest height from search
    var minHeight = Math.max.apply(null, elementHeights);
    var minHeightA = Math.max.apply(null, cardHeights);
    //set the height to a pixel value
    var height = minHeight + 'px';
    var heightA = minHeightA + 'px';
    //set target for resizing
    var targetDiv = jQuery('.carousel', '#spotCar');
    var targetDivA = jQuery('.carousel', '#hapCar');
    //resize target
    jQuery(targetDiv).css('height', height);
    jQuery(targetDivA).css('height', heightA);
}

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

//on a delay so that materialize can finish loading the images and content prior to size calculation
window.onresize = carouselFix();
jQuery(document).ready(function() {
    setTimeout(function() {
        jQuery('.carousel.carousel-slider').carousel({fullWidth: true});
        carouselFix();
    }, 1000);
    setTimeout(function() {
        contentFix();
    }, 2000);
});