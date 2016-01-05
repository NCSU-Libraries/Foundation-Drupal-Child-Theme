var events = {
    init : function(){
        var oldId;
        jQuery('.view-upcoming-events .view-content .views-row').each(function(i){
            id = jQuery(this).find('.event-photo a').attr('href');
            if(id == oldId){
                jQuery(this).hide();
            }
            oldId = id;
        })
    }
}


jQuery(function(){
    events.init();
})
