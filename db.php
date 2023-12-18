<?php

include "config.php";

$con = '';

/*
	ESTABLISH DATABASE CONNECTION
*/
function OpenCon()
{
	global $con;
	$con = new mysqli(DB_HOST, DB_USER, DB_PASS,DB_NAME) or die("Connect failed: %s\n". $conn -> error);
}

/*
	CLOSED DATABASE CONNECTION
*/
function CloseCon()
{
	$con = $GLOBALS['con'];
	$con -> close();
}

/*
	INSERT TOKEN INTO TABLE
*/
function save_token($arr,$obj)
{
	// save in token table
	$q = "INSERT INTO `token` (`token`, `expires_in`, `refresh_token`, `scope`, `token_type`) VALUES ('".$arr['access_token']."', '".$arr['expires_in']."', '".$arr['refresh_token']."', '".$arr['scope']."', '".$arr['token_type']."')";

	if ($obj->query($q) === TRUE) {
	  // echo "New record created successfully";
	} else {
	  echo "Error: " . $q . "<br>" . $conn->error;
	}
}

/*
	GET ACCESS TOKEN FOR API CALLS
*/
function getToken($obj)
{
	$q = 'SELECT token FROM token ORDER BY id DESC LIMIT 1';

	$db_token = $obj->query($q);
	$token = $db_token->fetch_assoc();
	return $token['token'];
}
function getrefCode($obj)
{
	$q = 'SELECT refresh_token FROM token ORDER BY id DESC LIMIT 1';

	$db_ref_code = $obj->query($q);
	$ref_code = $db_ref_code->fetch_assoc();
	return $ref_code['refresh_token'];
}

function saveFiledb($arr,$obj)
{
	$q = "INSERT INTO `files` (`gid`, `name`) VALUES ('".$arr['id']."', '".$arr['name']."')";
	if ($obj->query($q) === TRUE) {
	  // echo "New record created successfully";
	} else {
	  echo "Error: " . $q . "<br>" . $conn->error;
	}
}

function getFile($id , $obj)
{
	$q = "SELECT * FROM `files` WHERE `gid` = '$id'";

	$db_token = $obj->query($q);
	$data = $db_token->fetch_assoc();
	return $data;
}