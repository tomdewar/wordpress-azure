<?php
	

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	remove_filter( 'home-banner-text', 'wpautop' );
    remove_filter( 'company-content', 'wpautop' );
remove_filter( 'p-service-plan-section', 'wpautop' );
remove_filter( 'p-service-optimise-section', 'wpautop' );
remove_filter( 'p-service-measure-section', 'wpautop' );

if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'footer_one'
  )
);
if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'footer_london'
  )
);
if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'footer_hk'
  )
);

if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'subscribe_text'
  )
);

if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'footer_link'
  )
);



if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'header_menu'
  )
);

if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'footer_menu'
  )
);

if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'subscribe-botton-text'
  )
);
if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'subscribe-under-text'
  )
);
if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'signup-text'
  )
);
if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'single-signup-text'
  )
);
if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'resource-form-text'
  )
);
if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'category-header-text'
  )
);
function tn_custom_excerpt_length( $length ) {
return 20;
}
add_filter( 'excerpt_length', 'tn_custom_excerpt_length', 999 );

add_action( 'wp_ajax_my_ajax_action', 'ajax_action_stuff' ); // 針對已登入的使用者
add_action( 'wp_ajax_nopriv_my_ajax_ action', 'ajax_action_stuff' ); // 針對未登入的使用者


    function ajax_action_stuff() {



        $jemail = $_POST['jemail'];

      //  echo $jemail;

	 //mailchimp
    $api_key = '6d1ab130452ca35c6b8aa9507d7fc29b-us5';
    
    	$data = array(
		'apikey'        => $api_key,
    	'email_address' => $jemail,
		'status'        => 'subscribed'
		
	);
	
	$list_id = '67c37f13ec';
	$mch_api = curl_init(); // initialize cURL connection
 
	curl_setopt($mch_api, CURLOPT_URL, 'https://' . substr($api_key,strpos($api_key,'-')+1) . '.api.mailchimp.com/3.0/lists/' . $list_id . '/members/' . md5(strtolower($data['email_address'])));
	curl_setopt($mch_api, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Authorization: Basic '.base64_encode( 'user:'.$api_key )));
	curl_setopt($mch_api, CURLOPT_USERAGENT, 'PHP-MCAPI/2.0');
	curl_setopt($mch_api, CURLOPT_RETURNTRANSFER, true); // return the API response
	curl_setopt($mch_api, CURLOPT_CUSTOMREQUEST, 'PUT'); // method PUT
	curl_setopt($mch_api, CURLOPT_TIMEOUT, 10);
	curl_setopt($mch_api, CURLOPT_POST, true);
	curl_setopt($mch_api, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($mch_api, CURLOPT_POSTFIELDS, json_encode($data) ); // send data in json
 
	$result = curl_exec($mch_api);
	
    // echo $result;

        die(); // 一定要加這行，才會完整的處理ajax請求



    }
    
    
add_action( 'wp_ajax_my_ajax_action2', 'ajax_action_stuff2' ); // 針對已登入的使用者
add_action( 'wp_ajax_nopriv_my_ajax_ action2', 'ajax_action_stuff2' ); // 針對未登入的使用者


    function ajax_action_stuff2() {



        $jemail = $_POST['jemail'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $company = $_POST['company'];
        $phone = $_POST['phone'];
        $subject = $_POST['subject'];
        $jmessage = $_POST['jmessage'];

		 $to = 'contact@hmcm.com.hk';
		
		 $subject = 'New website contact: '.$subject;
		
		 $body = 'First Name: '.$fname.'<br>'.'Last Name: '.$lname.'<br>'.'Company: '.$company.'<br>'.'Phone: '.$phone.'<br>'.'Message: '.$jmessage.'<br>';
		
		 $headers = array('Content-Type: text/html; charset=UTF-8');
		
	
		 wp_mail( $to, $subject, $body, $headers );
		
        die(); // 一定要加這行，才會完整的處理ajax請求



    }
    
    
    function wpsites_query( $query ) {
if ( $query->is_archive() && $query->is_main_query() && !is_admin() ) {
        $query->set( 'posts_per_page', 3 );
    }
}
add_action( 'pre_get_posts', 'wpsites_query' );


?>