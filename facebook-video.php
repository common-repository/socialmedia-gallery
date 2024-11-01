<div class="gallery">
<?php
	/*
	 * Get access token using Facebook Graph API
	 */
	if(isset($_SESSION['facebook_access_token'])){
    	// Get access token from session
    	$access_token = $_SESSION['facebook_access_token'];
	}else{
   	
    	// Generate access token
    	$graphActLink = "https://graph.facebook.com/oauth/access_token?client_id={$fbappid}&client_secret={$fbappsecret}&grant_type=client_credentials";
    
	    // Retrieve access token
	    $accessTokenJson = file_get_contents($graphActLink);
	    $accessTokenObj = json_decode($accessTokenJson);
	    $access_token = $accessTokenObj->access_token;
	    
    	// Store access token in session
    	$_SESSION['facebook_access_token'] = $access_token;
	}

	// Get access token from session
	$access_token = $_SESSION['facebook_access_token'];

	// Get photos of Facebook page album using Facebook Graph API
	// set Limit = 0
	$graphPhoLink = "https://graph.facebook.com/v2.11/{$page_name}/videos?fields=source,embed_html&limit={$total_fb_video}&access_token={$access_token}";
	$jsonData = file_get_contents($graphPhoLink);
	$fbPhotoObj = json_decode($jsonData, true, 512, JSON_BIGINT_AS_STRING);


	// Facebook photos content
	$fbPhotoData = $fbPhotoObj['data'];

	foreach($fbPhotoData as $data){
		$imageUrl =  $data['embed_html'];
		echo "<div class='smGallery_fbVideoBox'>";
		echo $imageUrl;
		echo "</div>";
	}
?>

</div>