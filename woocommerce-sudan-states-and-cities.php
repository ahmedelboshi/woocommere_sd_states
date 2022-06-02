<?php
/**
 * woocommerce sudan states and cities
 *
 * @package       WOOCOMMERC
 * @author        ahmed elboshi
 * @license       gplv2
 * @version       1.0.0
 *
 * @wordpress-plugin
 * Plugin Name:   woocommerce sudan states and cities
 * Plugin URI:    https://github.com/ahmedelboshi/woocommere_sd_states
 * Description:   This is some demo short description...
 * Version:       1.0.0
 * Author:        ahmed elboshi
 * Author URI:    https://github.com/ahmedelboshi/
 * Text Domain:   woocommerce-sudan-states-and-cities
 * Domain Path:   /languages
 * License:       GPLv2
 * License URI:   https://www.gnu.org/licenses/gpl-2.0.html
 *
 * You should have received a copy of the GNU General Public License
 * along with woocommerce sudan states and cities. If not, see <https://www.gnu.org/licenses/gpl-2.0.html/>.
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) exit;

// Include your custom code here.


    add_filter( 'woocommerce_states', 'custom_woocommerce_states' );

    function custom_woocommerce_states( $states ) {
    $states['SD'] = array(
        
 'SD_BlueNile' => 'BlueNile',
 'SD_SouthDarfur' => 'SouthDarfur',
 'SD_AlGazira' => 'AlGazira',
 'SD_WhiteNile' => 'WhiteNile',
 'SD_NorthKordofan' => 'NorthKordofan',
 'SD_WestDarfur' => 'WestDarfur',
 'SD_Sennar' => 'Sennar',
 'SD_WesternKordofan' => 'WesternKordofan',
 'SD_CentralDarfur' => 'CentralDarfur',
 'SD_AlGedaref' => 'AlGedaref',
 'SD_EastDarfur' => 'EastDarfur',
 'SD_Khartoum' => 'Khartoum',
 'SD_RiverNile' => 'RiverNile',
 'SD_SouthKordofan' => 'SouthKordofan',
 'SD_Northern' => 'Northern',
 'SD_NorthDarfur' => 'NorthDarfur',
 'SD_RedSea' => 'RedSea',
 'SD_Kassala' => 'Kassala',

    );

    return $states;
    }
     
 
    add_filter( 'wc_city_select_cities', 'custom_cites' );

    function custom_cites( $cities ) {
        $cities['SD'] = array(
            
 'SD_Khartoum' => array( 
    'Khartoum',
    'Omdurman',
    'Khartoum North',
  ),
 'SD_Kassala' => array( 
    'Kassala',
  ),
 'SD_RedSea' => array( 
    'Port Sudan',
    'Tokār',
    'Sawākin',
  ),
 'SD_NorthKordofan' => array( 
    'El Obeid',
    'Umm Ruwaba',
  ),
 'SD_AlGedaref' => array( 
    'Gedaref',
  ),
 'SD_WhiteNile' => array( 
    'Kūstī',
    'Ad Diwem',
    'Rabak',
  ),
 'SD_AlGazira' => array( 
    'Wad Medani',
    'Al Manāqil',
  ),
 'SD_NorthDarfur' => array( 
    'El Fasher',
  ),
 'SD_BlueNile' => array( 
    'Kurmuk',
    'Ed Damazin',
  ),
 'SD_SouthDarfur' => array( 
    'Nyala',
  ),
 'SD_RiverNile' => array( 
    'Shendi',
    'Atbara',
    'EdDamer',
    'Abū Ḩamad',
    'Berber',
  ),
 'SD_SouthKordofan' => array( 
    'Kadugli',
  ),
 'SD_WestDarfur' => array( 
    'El Geneina',
  ),
 'SD_Sennar' => array( 
    'Sannār',
    'Singa',
  ),
 'SD_WesternKordofan' => array( 
    'An Nuhūd',
    'El Fula',
  ),
 'SD_Northern' => array( 
    'Dongola',
  ),
 'SD_EastDarfur' => array( 
    'Ed Daein',
  ),
 'SD_CentralDarfur' => array( 
    'Zalingei',
  ),
        );
    return $cities;
    }
    
