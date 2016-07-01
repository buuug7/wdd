<?php
/**
 * @version    1.0
 * @package    Material Lite
 * @author     Ghuwad Team <contact@ghuwad.com>
 * @license    GNU/GPL v2 or later http://www.gnu.org/licenses/gpl-2.0.html
 *
 * Websites: http://www.ghuwad.com
 *
 * You can find common theme function at ghuwad/inc/common-functions.php
 */

if ( ! isset( $content_width ) ) $content_width = 900;

// Initialize theme
include_once get_template_directory() . '/ghuwad/theme.php';


function add_menuclass($ulclass) {

   return preg_replace('/<a /', '<a class="mdl-layout__tab"', $ulclass);
   
}
add_filter('wp_nav_menu','add_menuclass');