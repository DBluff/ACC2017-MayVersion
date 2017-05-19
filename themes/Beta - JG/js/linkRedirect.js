window.onload = function () {
    jQuery('a').each(function () {
        if (jQuery(this).attr('href') == '/campus-life') {
            console.log('countem')
        }
    });
}