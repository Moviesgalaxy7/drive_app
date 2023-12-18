<?php

// GET CONFIG 
include 'db.php';

// SESSION START
session_start();

// ==============================================================================================
// REDIRECT IF CODE IS NOT EXITES IN URL
// ==============================================================================================
if (!isset($_GET['code'])) {

	$params = [
		'response_type' => 'code',
		'client_id' => CLIENT_ID,
		'redirect_uri' => CLIENT_REDIRECT_URL,
		'scope' => CLIENT_SCOPE,
		'access_type' => 'offline',
		'response_type' => 'code'
	];

	// REDIRECT TO VERIFY ACCOUNT AND GENRATE CODE
	header("Location: " . CLIENT_AUTH_URL . "?" . http_build_query($params));
	exit();
}

// ==============================================================================================
// COPY FILE INTO DRIVE
// ==============================================================================================
if (isset($_GET['id'])) {

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

    // echo "<pre>";
	// print_r($result);
	// exit();
}


// ==============================================================================================
// IF CODE IS AVALIBLE THEN PROCESS CODE AND GENRATE TOKEN
// ==============================================================================================
$c = isset($_GET['code']) ? $_GET['code'] : 1 ;
$access_params = [
	'code' => $c,
	'client_id' => CLIENT_ID,
	'client_secret' => CLIENT_SECRET,
	'redirect_uri' => CLIENT_REDIRECT_URL,
	'grant_type' => 'authorization_code',
	'access_type' => 'offline',
	'response_type' => 'code'
];

// GENRATE ACCESS TOKEN
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, CLIENT_ACCESS_TOKEN_URL);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($access_params));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$responses = curl_exec($ch);
curl_close($ch);

$access_tokendata = json_decode($responses,true);

if (!isset($access_tokendata['error'])) {

	// connection to databse
	OpenCon();

	// save in DB
	save_token($access_tokendata);

	// database connection closed
	CloseCon();
	
}

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





