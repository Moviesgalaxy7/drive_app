<?php

/*
	ESTABLISH DATABASE CONNECTION
*/
function OpenCon()
{
	$conn = new mysqli(DB_HOST, DB_USER, DB_PASS,DB_NAME) or die("Connect failed: %s\n". $conn -> error);
	return $conn;
}

/*
	CLOSED DATABASE CONNECTION
*/
function CloseCon($conn)
{
	$conn -> close();
}

/*
	INSERT TOKEN INTO TABLE
*/
function save_token($arr,$obj)
{
	// save in token table
	$q = "INSERT INTO `token` (`token`, `expires_in`, `scope`, `token_type`) VALUES ('".$arr['access_token']."', '".$arr['expires_in']."', '".$arr['scope']."', '".$arr['token_type']."')";

	if ($obj->query($q) === TRUE) {
	  echo "New record created successfully";
	} else {
	  echo "Error: " . $q . "<br>" . $conn->error;
	}
}