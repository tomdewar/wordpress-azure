
							<!--
							<h1 class="single-page__header-title single-page__header-title-smallest clear-br--1024">Your download is ready</h1><span class="space space-10"></span>
							
							<?php
								$firstname = $_POST['firstname'];
								$lastname = $_POST['lastname'];
								$email = $_POST['jemail'];
								$phone = $_POST['phone'];
								$company = $_POST['company'];
								$postid = $_POST['jpostid'];
							
							
							 //mailchimp
    $api_key = '6d1ab130452ca35c6b8aa9507d7fc29b-us5';
    
    	$data = array(
		'apikey'        => $api_key,
    	'email_address' => $email,
		'status'        => 'subscribed',
		'merge_fields'  => ["LNAME"=>$lastname,
		
				"FNAME"=>$firstname,
				"PHONE"=>$phone,
				"MMERGE6"=>$company
				
					
		
		]
		
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
							
							
							
							
							
$args = array(
    'p' => $postid, // ID of a page, post, or custom type
  'post_type' => 'any'
    
);

$post_query = new WP_Query($args);
if ($post_query->have_posts()):
    while ($post_query->have_posts()):
       $post_query->the_post();
?>
								
							<p class="text-16">Thank you for your interest in "<?php the_title(); ?>" <br>To download please <a target='_blank' href="<?php echo types_render_field( "external-link"); ?>" class="font-bold text-link text-link--primary">click here</a></p>
							
							-->
