/* Two functions from parent theme (in themes/houzez/framework/functions/helper_functions.php) that insert land area value and unit area value onto individual property pages.  These are modified here to ensure all numbers are displayed with comma separators.*/
function houzez_property_land_area( $position ) {//Land area function.
    $propID = get_the_ID();
    $land_area_unit = get_post_meta( $propID, 'fave_property_land_postfix', true);
    $land_area = get_post_meta( $propID, 'fave_property_land', true);

    if( $position == 'before' ) {
        // $prop_size = houzez_get_land_size_unit( $propID ).' '.houzez_get_land_area_size( $propID );
        $prop_size = houzez_get_land_size_unit( $propID ).' '.number_format(houzez_get_land_area_size( $propID ));
    } else {
        // $prop_size = houzez_get_land_area_size( $propID ).' '.houzez_get_land_size_unit( $propID );
        $prop_size = number_format(houzez_get_land_area_size( $propID )).' '.houzez_get_land_size_unit( $propID );
    }
    return  $prop_size;
}
function houzez_property_size( $position ) {//Unit area function.
    $propID = get_the_ID();
    if( $position == 'before' ) {
        // $prop_size = houzez_get_listing_size_unit( $propID ).' '.houzez_get_listing_area_size( $propID );
        $prop_size = houzez_get_listing_size_unit( $propID ).' '.number_format(houzez_get_listing_area_size( $propID ));
    } else {
        // $prop_size = houzez_get_listing_area_size( $propID ).' '.houzez_get_listing_size_unit( $propID );
        $prop_size = number_format(houzez_get_listing_area_size( $propID )).' '.houzez_get_listing_size_unit( $propID );
    }
    return  $prop_size;
}

