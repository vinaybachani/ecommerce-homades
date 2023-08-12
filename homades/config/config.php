<?php
    ini_set('session.gc_maxlifetime', '315360000');
	ini_set('session.use_cookies', '1');
	ini_set('session.cookie_lifetime', '315360000');
	ini_set('memory_limit', '-1');
	ini_set('allow_url_fopen', '1');
	error_reporting(E_ALL);
	session_start();
	
	date_default_timezone_set("Asia/Kolkata");

	define("PROJECT_NAME", 'homades');
	define("PROJECT_TITLE", 'homades');
	define("DIR", "flosun");
	define("CONFIG_DIR", "config");
	$protocol=strpos(strtolower($_SERVER['SERVER_PROTOCOL']),'https') 
                === FALSE ? 'http:' : 'https:';
    /*$protocol='https:';*/
	define("HOST_PROTOCOL", $protocol);
	define("ROOT_DIR", $_SERVER['DOCUMENT_ROOT']."/".DIR."/");
	define("HOST", $_SERVER['HTTP_HOST']);

	/* Direcotry Variables start */
	define("IMG_DIR", "images");
	define("ADMIN_DIR", "admin");
	define("DOM_PDF_DIR", "dompdf");
	define("PHP_MAILER_DIR", "Phpmailer");
	define("FROM_EMAIL", "contact@ubminfotech.in");
	define('CC_EMAIL_ADDRESS', 'contact@ubminfotech.in');
	define('FROM_NAME', 'ubm infotech');
	define('TO_EMAIL_ADDRESS', 'ubminfotech@gmail.com');
	/* Direcotry Variables end */

	/* URL Variables start */
	define("LINK_URL", HOST_PROTOCOL.'//'.HOST.'/'.DIR.'/');
	define("AJAX_URL", LINK_URL.CONFIG_DIR.'/ajax.php');
	define("IMG_URL", LINK_URL.IMG_DIR.'/');
	define("LOGO_URL", LINK_URL.IMG_DIR.'/'.'climax-logo.png');
	define("ADMIN_URL", HOST_PROTOCOL.'//'.HOST.'/'.DIR.'/'.ADMIN_DIR.'/');
	
	define("BUSINESS_IMAGE_DIR", "business_logo");
	define("BUSINESS_IMAGE_PATH", ROOT_DIR.IMG_DIR.'/'.BUSINESS_IMAGE_DIR.'/');
	define("BUSINESS_IMAGE_URL", IMG_URL.BUSINESS_IMAGE_DIR.'/');


	define("ANDROID_APP_LINK", "https://play.google.com/store/apps/details?id=u.pjci");

	define('FIREBASE_API_KEY', 'AAAAHXbDSSs:APA91bGshYrvNVJD6YtFUi0O4RES4pyFF6ofjZ4r5kqSra_Uan3UGoRmFe_e1lCelJMgSRBgmBzroSC2pHi0KpgOX5GfqhF8lSKdkLx0IP_WB_0R8wfwTaU2urrXjzUW8ZzxkbLisxF_');

	/* Database configuration start */
	define('DB_TYPE', 'mysql');
	define("MAIN_DB_HOST", 'localhost');
	define("MAIN_DB_USER", 'root');
	define("MAIN_DB_PASSWORD", '');
	//define("MAIN_DB_DATABSE", 'demopanel');
	define("MAIN_DB_DATABASE", 'homades');
	define('DB_CHARSET', 'utf8');
	/* Database configuration end */
?>