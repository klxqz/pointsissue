jQuery(function($) {
    $('.pointsissue_link').click(function(e) {


        $(this).closest('.pointsissue_item').find('.y_map').dialog({
            height: 140,
            modal: true
        });
    });
});