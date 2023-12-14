<?php

// =====================================================================================
//									Initialize VALUE 							
// =====================================================================================



// =====================================================================================

/*
	Get Google Drive ID from Drive URL.
*/
function drive_id($url)
{
    preg_match('~/d/\K[^/]+(?=/)~', $url, $result);
    return $result[0];
}

/*
	get configration from json file
*/
function config($key)
{
    $file = file_get_contents("config.json");
    $deco = json_decode($file, true);
    $conf = $deco[$key];
    return $conf;
}

/*
	Set Page Title
*/
function set_title($val = '') {
	return $val . ' - MG Drive' ?? config("site.title");
}

function token($k)
{
    $file = json_decode(file_get_contents("token.json"), true);
    $token = $file[$k];
    return $token;
}

?>