<?php 

function sfa_no_products_found_redirect() {
    
    global $wp_query;

    if ( !is_admin() && $wp_query->is_search && !have_posts() ){

        if(isset($_GET['post_type'])) {
            $type = $_GET['post_type'];

            if($type == 'product') {
                wp_redirect ( home_url( '/niet-gevonden/' ) );
                exit;
            }

        }

    }

}
add_action( 'template_redirect', 'sfa_no_products_found_redirect' );
