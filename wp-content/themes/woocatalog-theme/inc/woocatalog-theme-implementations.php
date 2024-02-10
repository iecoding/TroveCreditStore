<?php 
/**
 * Adapting theme to Woocommerce Markup
 *
 * @package woocatalog
 */

    add_filter( 'woocommerce_gallery_thumbnail_size', function( $size ) {
        return 'thumbnail';
    } );

    /**
     * Main Wrapper
     *  */ 
    add_action('woocommerce_before_main_content','nogaliav2_wrapper_archive_products', 1);
    function nogaliav2_wrapper_archive_products() {
        echo '    
        <!-- Product Section Start -->
        <div class="container mx-auto px-5">
            <div class="pt-20">';
    }

    add_action('woocommerce_after_main_content','nogaliav2_end_wrapper_archive_products', 11);
    function nogaliav2_end_wrapper_archive_products() {
        echo '
            </div>
        </div>
        <!-- Product Section End -->';
    } 

    /**
     * Moving product description tabs to 
     */
    remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );
    add_action('woocommerce_product_meta_end', 'woocommerce_output_product_data_tabs');

    /**
     * Hide sidebar on woocommerce
     */
    remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );


    /**
     * Hide button add to cart if product is in category antibiotics
     */
    add_action( 'woocommerce_single_product_summary', 'avicena_hide_if_is_antibiotic' );
 
    function avicena_hide_if_is_antibiotic() {
        global $product;
        $product_id = $product->get_id();
        if ( has_term( 'antibiotico', 'product_cat', $product_id ) ) {
            //remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart');
            remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );

            //Add button surtir receta instead
            echo '<h4 class="bg-slate-300 py-2 px-2"><b>Nota:</b> Este producto es un antibiótico y necesita receta.</h4>';
            echo '<button style="background-color:#7f54b3; color:#fff;" class="my-2 content-center px-3 py-1 text-base font-bold border border-gray-200 rounded hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700" onclick="location.href=/receta-medica/" role="link" type="button">Surte tu receta</button>';
        }
    }

    add_filter('woocommerce_is_purchasable', 'hide_add_to_cart_category', 99 );

    function hide_add_to_cart_category ($hide) {

        if ( is_product_category('antibiotico') ) {
            $hide = false;
        } else {
            $hide = true;
        }

        return $hide;
    }

/**
 * Cart fragments
 */
function ajaxify_cart_count_fragments( $fragments ) {

    // Get the cart count
    $cart_count = WC()->cart->get_cart_contents_count();

    // Update the content of the span element with the cart count
    $fragments['.cart-count span'] = '<span class="inline-flex -ml-3 h-1 w-1 items-center justify-center rounded-full bg-red-500 p-2 text-xs text-white">' . $cart_count . '</span>';

    return $fragments;
}
add_filter( 'woocommerce_add_to_cart_fragments', 'ajaxify_cart_count_fragments', 10, 1 );