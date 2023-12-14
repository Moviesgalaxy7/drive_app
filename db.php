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