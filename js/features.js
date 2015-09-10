(function (jQuery) {
    //alert('hallo');
    
    
    var item = jQuery("#features .rnr-column");
        for (var i = 0; i < item.length; i += 5) {
            item.slice(i, i + 5).wrapAll("<div id='features-wrap'></div>");
            item.addClass('feature-item');
            item.children('[class*="-desc"]').addClass('feature-caption');
            item.children('[class*="-thumb"]').children('img').wrap('<div class="img-container"></div>');
        }
        
   jQuery('.feature-item .overlay-content a').wrapInner('<span></span>');
     

})(jQuery);


