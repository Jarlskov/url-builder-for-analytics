jQuery( '#generate_analytics_url_submit' ).click( function(e) {
    var base_url = jQuery( "input[name='post_url']" ).val();
    var parameters = {};

    if ( jQuery("input[name='campaign_source']").val() !== '' ) {
        parameters.utm_source = jQuery( "input[name='campaign_source']" ).val();
    }
    if ( jQuery("input[name='campaign_medium']").val() !== '' ) {
        parameters.utm_medium = jQuery( "input[name='campaign_medium']" ).val();
    }
    if ( jQuery("input[name='campaign_term']").val() !== '' ) {
        parameters.utm_term = jQuery( "input[name='campaign_term']" ).val();
    }
    if ( jQuery("input[name='campaign_content']").val() !== '' ) {
        parameters.utm_content = jQuery( "input[name='campaign_content']" ).val();
    }
    if ( jQuery("input[name='campaign_name']").val() !== '' ) {
        parameters.utm_campaign = jQuery( "input[name='campaign_name']" ).val();
    }
    jQuery( '#final_url' ).val( base_url + '?' + jQuery.param(parameters));
});
