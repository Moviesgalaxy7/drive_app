<?php
/*
=====================================================================================
								GLOBLE VALUES
===================================================================================== */

define('IS_PRODUCTION', ($_SERVER['REMOTE_ADDR'] == '103.250.161.134') ? true : false);
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
} else {
	define('DB_HOST', 'localhost');
	define('DB_USER', 'root');
	define('DB_PASS', '');
	define('DB_NAME', 'mgdrive');
}


/*
=====================================================================================
							GOOGLE AUTHENTICATION VALUES						
===================================================================================== */
define('CLIENT_ID', 'mgdrive');
define('CLIENT_SECRET', 'mgdrive');
define('CLIENT_REDIRECT_URL', 'http://localhost/google-drive-dev/oauth.php');
define('CLIENT_AUTH', 'https://accounts.google.com/o/oauth2/v2/auth');