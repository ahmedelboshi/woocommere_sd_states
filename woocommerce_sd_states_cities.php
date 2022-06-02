<?php
/**
 * Plugin Name: Sudanes States and cities for Woocommerce
 * Plugin URI: hhttps://github.com/ahmedelboshi/woocommere_sd_states
 * Author: ahmed elboshi
 * Author URI: https://github.com/ahmedelboshi
 * Description: Adds a thrid level city to state of sudan
 * Version: 0.1.0
 * License: GPL2 or later
 * License URL: http://www.gnu.org/licenses/gpl-2.0.txt
 * text-domain: sudan-states-and-cities-for-woocommerce
*/

defined( 'ABSPATH') or die('Please get proper access');

/**
 * Add cities to Woocommerce. Needs WC City Select (https://wordpress.org/plugins/wc-city-select/) plugin installed.
 * Replace XX with the country code. Instead of YYY, ZZZ use actual state codes.
 * Pick countried from https://github.com/woocommerce/woocommerce/blob/master/i18n/countries.php
 * Pick states from https://github.com/woocommerce/woocommerce/blob/master/i18n/states.php
 */ 

// Add aplugin notice to check for WC city Select as active plugin.
add_action( 'plugins_loaded', 'check_for_wc_city_select_active' );



function notice_wc_city_select_activate() {
    $message = sprintf( __( 'States and cities for Woocommerce requires the <a href="%s">WC City Select</a> plugin to be active', 'states-and-cities-for-woocommerce' ), 'https://wordpress.org/plugins/wc-city-select/' );
    printf( '<div class="error notice-error notice is-dismissible"><p>%s</p></div>', $message );
}


function add_sd_states($states){
  $states['SD']= array(
  
  )
  return $states;
}

function add_sd_cities( $cities ) {

    $cities['UG'] = array(
        'UG314' => array(
            'Sakodi',
            'Bluetag'
        ),
        'UG102' => array(
            'Nakawa',
            'Makindye'
        )
    );
    return $cities;
}

function check_for_wc_city_select_active() {
    if( ! class_exists( 'WC_City_Select' ) ) {
        add_action( 'admin_notices', 'notice_wc_city_select_activate' );
        return;
    }
    add_filter('woocommerce_states');
    add_filter( 'wc_city_select_cities', 'techiepress_my_cities' );
}
