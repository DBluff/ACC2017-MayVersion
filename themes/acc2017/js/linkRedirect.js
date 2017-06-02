window.onload = function () {
    jQuery('#navAud a').each(function () {
        var $this = jQuery(this),
            href = $this.attr('href');
        $this.attr('href', '#');
    });
    jQuery('#navPrim a').each(function () {
        if (jQuery(this).attr('href') != '/campus-life' && jQuery(this).attr('href') != '/learning-support') {
            var $this = jQuery(this),
                href = $this.attr('href');
            $this.attr('href', '#');
        }
    });
    jQuery('.footMenu a').each(function () {
        if (jQuery(this).attr('href') != '/campus-life' && jQuery(this).attr('href') != '/learning-support') {
            var $this = jQuery(this),
                href = $this.attr('href');
            $this.attr('href', '#');
        }
    });
    jQuery('.sideNav a').each(function () {
        if (jQuery(this).attr('href') != '/campus-life' && jQuery(this).attr('href') != '/learning-support') {
            var $this = jQuery(this),
                href = $this.attr('href');
            $this.attr('href', '#');
        }
    })
};