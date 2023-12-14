<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// SET VALUES

$client_id = "744396488200-tesel6d8oq9v7at4u0dhs7kets058q8f.apps.googleusercontent.com";

$client_secret = "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";

$redirect_uri = "https://dev.mgjoin.xyz/oauth.php";

// $tokenrevocationURL = "https://oauth2.googleapis.com/revoke";

session_start();

// REDIRECT IF CODE IS NOT EXITES IN URL

if (!isset($_GET['code'])) {



	$authorizationURL = "https://accounts.google.com/o/oauth2/v2/auth";

	

	$params = [

		'response_type' => 'code',

		'client_id' => $client_id,

		'redirect_uri' => $redirect_uri,

		'scope' => 'https://www.googleapis.com/auth/drive https://www.googleapis.com/auth/drive.file'

	];



	header("Location: " . $authorizationURL . "?" . http_build_query($params));

	exit();

}

if (isset($_SESSION['access_token'])) {

	$token =  $_SESSION['access_token'];
	
	$URL = "https://www.googleapis.com/drive/v3/files/" . $_GET['id'] . "/copy?access_token=" . $token;

	$arrayName = array('access_token' => $token );

	$data_string = json_encode($token);                                                                                                                                                                                                                   
    $ch = curl_init($URL);                                                                      
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
        'Content-Type: application/json',                                                                                
        'Content-Length: ' . strlen($data_string))                                                                       
    );                                                                                                                   

    $result = curl_exec($ch);   


	print_r($result);
	
	echo $token;
	exit();
}

// echo "end";
// exit();





	// connection to databse

    // $conn = OpenCon();



	// // database connection closed

	// CloseCon($conn);





// IF CODE IS AVALIBLE THEN PROCESS THIS CODE

$accessTokenUrl = "https://oauth2.googleapis.com/token";

$c = isset($_GET['code']) ? $_GET['code'] : 1 ;

$access_params = [

	'code' => $c,

	'client_id' => $client_id,

	'client_secret' => $client_secret,

	'redirect_uri' => $redirect_uri,

	'grant_type' => 'authorization_code'

];



// GENRATE ACCESS TOKEN

$ch = curl_init();



curl_setopt($ch, CURLOPT_URL, $accessTokenUrl);

curl_setopt($ch, CURLOPT_POST, true);

curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($access_params));

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);



$responses = curl_exec($ch);



curl_close($ch);



$access_tokendata = json_decode($responses,true);



echo "<pre>";
echo "response<br><br>";
print_r($responses);
echo "access<br><br>";
print_r($access_tokendata);





// IF ACCESS TOKEN AVALIBLE THEN SET IN SESSION AND RUN APIS WITH SENDING TOKEN

if (isset($access_tokendata['access_token']) ) {

	$_SESSION['access_token'] = $access_tokendata['access_token'];



	$url = "https://www.googleapis.com/drive/v3/files?access_token=" . $_SESSION['access_token'];



	$ch = curl_init();



	curl_setopt($ch, CURLOPT_URL, $url);

	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);



	$r1 = curl_exec($ch);



	curl_close($ch);



	echo "<pre>";

	print_r($r1);

}





