<?php

// SET VALUES
$client_id = "1054573111976-t6lf58ai1gc0l6phathdlisju3ut7v81.apps.googleusercontent.com";
$client_secret = "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";
$redirect_uri = "http://localhost/google-drive-dev/oauth.php";
// $tokenrevocationURL = "https://oauth2.googleapis.com/revoke";

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


	// connection to databse
    $conn = OpenCon();

	// database connection closed
	CloseCon($conn);

// IF CODE IS AVALIBLE THEN PROCESS THIS CODE
$accessTokenUrl = "https://oauth2.googleapis.com/token";

$access_params = [
	'code' => $_GET['code'],
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

// echo "<pre>";
// print_r($access_tokendata);


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


