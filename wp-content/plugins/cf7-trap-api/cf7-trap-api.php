<?php
/**
* Plugin Name: CF7 Form Trap
* Plugin URI: https://github.com/yttechiepress/cf7-trap-api
* Author: Techiepress
* Author URI: https://github.com/yttechiepress/cf7-trap-api
* Description: Get CF7 Data and send to API
* Version: 0.1.0
* License: GPL2
* License URL: http://www.gnu.org/licenses/gpl-2.0.txt
* text-domain: cf7-trap-api
*/

   

defined( 'ABSPATH' ) or die( 'Unauthorized access!' );



add_action( 'cfdb7_before_save', 'techiepress_cf7_data' );



function techiepress_cf7_data( $form_data ) {

    $upload_dir = home_url( 'wp-content/uploads/cfdb7_uploads/' );




$data = [
'full_name' => $form_data['full_name'],
'email' => $form_data['email'],
'job_opening_id' => $form_data['job_opening_id'],
'cover_letter' => $form_data['cover_letter'],
'resume' => $upload_dir . $form_data['file-22cfdb7_file'],




];



$url = 'https://jsonplaceholder.typicode.com/users';



$args = [
'method' => 'POST',
'body' => $data,
'headers' => array(
        'Authorization' => 'token 4304264045dd115:e413d23aac1d12e' )

];



$response = wp_remote_post( $url, $args );

// error check
if ( is_wp_error( $response ) ) {
   $error_message = $response->get_error_message();
   echo "Something went wrong: $error_message";
}
else {
   echo 'Response: <pre>';
   print_r( $response );
   echo '</pre>';
}


    
}