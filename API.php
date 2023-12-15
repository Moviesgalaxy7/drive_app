<?php

// define('FOOTER_CONTENT', 'Hello I\'m an awesome footer!');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


/*
	CLONE FILE TO OTHER DRIVE
*/
function clone_file($id,$token)
{

	// Init curl
	$ch = curl_init();

	// Init values
	$URL = "https://www.googleapis.com/drive/v3/files/" . $id . "/copy?access_token=" . $token;

	// set token into json
	$data = json_encode($token);                                                                                                                                                                 

	// SET CURL URL AND VALUE
	curl_setopt($ch, CURLOPT_URL, $URL);

	// ENABLE RETURN TRANSFER
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	
	// SET METHOD POST
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
        'Content-Type: application/json',                                                                                
        'Content-Length: ' . strlen($data))                                                                       
    ); 

	// RECIVED CURL EXECUTION DATA
	$result = curl_exec($ch);


	if (curl_errno($ch)) {
		echo 'Error:' . curl_error($ch);
	}

	// CLOSE CURL CALL
	curl_close($ch);

	// convert into array
	$data = (array) $result;

	return $data[0];
}

function get_access_token()
{
	// Init curl
	$ch = curl_init();

	// Init values
	$URL = "https://accounts.google.com/o/oauth2/auth?client_id=1054573111976-djj127ntcidmla6g8rsefg0or65uciv6.apps.googleusercontent.com&redirect_uri=http://localhost/google-drive-dev/download.php&response_type=code&scope=https://www.googleapis.com/auth/drive&access_type=offline";

	// SET CURL URL AND VALUE
	curl_setopt($ch, CURLOPT_URL, $URL);

	// ENABLE RETURN TRANSFER
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	
	// SET METHOD POST
	curl_setopt($ch, CURLOPT_POST, 1);

	// RECIVED CURL EXECUTION DATA
	$result = curl_exec($ch);

	if (curl_errno($ch)) {
		echo 'Error:' . curl_error($ch);
	}

	// CLOSE CURL CALL
	curl_close($ch);

	// convert into array
	$data = (array) $result;

	return $data[0];
}


