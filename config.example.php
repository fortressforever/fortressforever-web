<?php

if ($_SERVER["SERVER_NAME"] === "localhost")
{
	define( 'FF_URI_BASE', "/fortress-forever" );
	define( 'FF_IS_LOCAL', true );
}
else
{
	define( 'FF_URI_BASE', "" );
	define( 'FF_IS_LOCAL', false );
}
define( 'FF_URI', FF_URI_BASE );
$isHTTPS = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on';
define( 'FF_DOMAIN', ($isHTTPS ? "https" : "http")."://".$_SERVER["SERVER_NAME"] );
define( 'FF_HOST_BASE', FF_DOMAIN.FF_URI_BASE );
define( 'FF_HOST', FF_DOMAIN.FF_URI );

$config = array();

try {
	$dsn = 'mysql:host=' . (FF_IS_LOCAL ? "localhost" : "sql.fortress-forever.com") .
	       ';dbname='    . "database_name" .
	       ';connect_timeout=15';
	$user = "username";
	$password = "password";

	$config["site_db"] = new PDO(
		$dsn, $user, $password, 
		array(
			PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''
		)
	);
	$config["site_db"]->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}
catch(PDOException $e) {  
	echo $e->getMessage();
}

require_once __DIR__ . "/inc/functions.php";
require_once __DIR__ . "/inc/sqkPaginator.php";
