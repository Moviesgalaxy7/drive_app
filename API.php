<?php

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);


/*
	CLONE FILE TO OTHER DRIVE
*/
function clone_file($id,$token)
{

	// Init curl
	$ch = curl_init();

	// SET URL
	$URL = "https://www.googleapis.com/drive/v3/files/" . $id . "/copy?access_token=" . $token;

	// encode Token Data in Json Format
	$tokenData = json_encode($token);                                                                                                     

	// Set CURL Data  
	curl_setopt($ch, CURLOPT_URL, $URL);                                                                              
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
    curl_setopt($ch, CURLOPT_POSTFIELDS, $tokenData);                                                                  
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
        'Content-Type: application/json',                                                                                
        'Content-Length: ' . strlen($tokenData))                                                                       
    );                                                                                                                   

    // RECIVED CURL EXECUTION DATA
	$result = curl_exec($ch);


	if (curl_errno($ch)) {
		echo 'Error:' . curl_error($ch);
	}

	// CLOSE CURL CALL
	curl_close($ch);

	// convert into array
	$data = json_decode($result, true);
	
	return $data;
}

function get_access_token()
{
	$ref_token = getrefCode($con);

	// Set Paramters for get new Access token
	$arg = [
	  'client_id' => CLIENT_ID,
	  'client_secret' => CLIENT_SECRET,
	  'refresh_token' => $ref_token,
	  'grant_type' => 'refresh_token',
	  'access_type' => 'offline',
	  'response_type' => 'code'
	];

	// Init curl
	$ch = curl_init();

	// Set CURL Data  
	curl_setopt($ch, CURLOPT_URL, CLIENT_ACCESS_TOKEN_URL);
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($arg));
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

	// RECIVED CURL EXECUTION DATA
	$data = curl_exec($ch);

	// IF CURL got error it show here
	if (curl_errno($ch)) {
	  echo 'Error:' . curl_error($ch);
	  exit();
	}

	// CLOSE CURL CALL
	curl_close($ch);

	// convert into array
	$data = json_decode($data, true);

	return $data[0];
}


