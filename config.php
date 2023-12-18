<?php
/*
=====================================================================================
								GLOBLE VALUES
===================================================================================== */

define('IS_PRODUCTION', ($_SERVER['SERVER_ADDR'] === '78.40.143.21') ? true : false);
define('DOCUMENT_ROOT', $_SERVER['DOCUMENT_ROOT'] . '/');
define('BASE_URL', (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]");
define('PAGES_URL', BASE_URL . '/views/');
define('CSS_PATH', '../ui/');
define('JS_PATH', '../ui/');

/*
=====================================================================================
								DATABASE VALUES
===================================================================================== */

if (IS_PRODUCTION) {
	define('DB_HOST', 'localhost');
	define('DB_USER', 'moviesga_mg_admin');
	define('DB_PASS', 'D@9s:EX3n;keM`&/x4=)');
	define('DB_NAME', 'moviesga_mgdrive');

	// ini_set('display_errors', 1);
	// ini_set('display_startup_errors', 1);
	// error_reporting(E_ALL);

} else {
	define('DB_HOST', 'localhost');
	define('DB_USER', 'root');
	define('DB_PASS', '');
	define('DB_NAME', 'mgdrive');

	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
}


/*
=====================================================================================
							GOOGLE AUTHENTICATION VALUES						
===================================================================================== */
define('CLIENT_ID', '744396488200-tesel6d8oq9v7at4u0dhs7kets058q8f.apps.googleusercontent.com');
define('CLIENT_SECRET', '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');
define('CLIENT_SCOPE', 'https://www.googleapis.com/auth/drive https://www.googleapis.com/auth/drive.file');
define('CLIENT_REDIRECT_URL', 'https://dev.mgjoin.xyz/oauth.php');
define('CLIENT_AUTH_URL', 'https://accounts.google.com/o/oauth2/v2/auth');
define('CLIENT_ACCESS_TOKEN_URL', 'https://oauth2.googleapis.com/token');