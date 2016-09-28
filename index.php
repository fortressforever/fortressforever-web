<?php
require_once __DIR__ . "/config.php";
$page = isset($_GET["page"]) ? $_GET["page"] : "home";
$paramstring = isset($_GET["rest"]) ? $_GET["rest"] : "";
$parameters = explode('/', $paramstring);
$DB = $config["site_db"];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Fortress Forever - A Source Mod inspired by Team Fortress</title>
	<base href="<?=FF_HOST?>/" />
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
	<meta name="description" content="" />
	<meta name="author" content="">
	<meta name="keywords" content="" />

	<!-- Optimized mobile viewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href='http://fonts.googleapis.com/css?family=Cabin:400,500,600,700' rel='stylesheet' type='text/css'>
	<link href="css/style.css" rel="stylesheet" />
	<link rel="alternate" type="application/rss+xml" href="<?=GetLink("rss")?>" />
</head>

<body>
	<div class="top cf z-depth-1">
		<header class="cf page-margined">
			<nav class="cf g3">
				<h1 class="pull-left"><a href="<?=GetLink("");?>"><img src="images/ff-mid.png" class="logo" /> Fortress Forever</a></h1>
				<ul class="pull-right">
					<li><a href="<?=GetLink("about");?>" class="<?=in_array($page, array("about", "changelogs")) ? "current-page" : ""?>">About</a></li>
					<li><a href="<?=GetLink("development");?>" class="<?=in_array($page, array("development", "activity", "dev-journals", "contribute")) ? "current-page" : ""?>">Development</a></li>
					<!--<li><a href="<?=GetLink("community");?>" class="<?=$page === "community" ? "current-page" : ""?>">Community</a></li>-->
					<li><a href="<?=GetForumLink("");?>">Forums</a></li>
					<li><a href="<?=GetLink("wiki");?>">Wiki</a></li>
				</ul>
			</nav>
		</header>
	</div>
<?
if (file_exists("pages/".$page.".php"))
{
	require_once( "pages/".$page.".php" );
}
else
{
	require_once( "pages/404.php" );
}
?>
	<footer class="cf">
		<div class="page-margined">
			<div class="g3">
				<nav class="cf">
					<ul>
						<li><a href="https://github.com/fortressforever/" class="simple-icon-link"><img style="background-color: rgb(65,131,196);" class="simple-icon" src="images/github-32.png" />GitHub</a></li>
						<li><a href="https://youtube.com/user/fortressforever/" class="simple-icon-link"><img style="background-color: rgb(205,51,45);" class="simple-icon" src="images/youtube-32.png" />YouTube</a></li>
						<li><a href="https://twitter.com/fortressforever/" class="simple-icon-link"><img style="background-color: rgb(0,172,237);" class="simple-icon" src="images/twitter-32.png" />Twitter</a></li>
						<li><a href="https://facebook.com/fortressforever/" class="simple-icon-link"><img style="background-color: rgb(59,89,152);" class="simple-icon" src="images/facebook-32.png" />Facebook</a></li>
						<li><a href="https://steamcommunity.com/groups/fortressforever/" class="simple-icon-link"><img style="background-color: rgb(0,0,0);" class="simple-icon" src="images/steam-32.png" />Steam</a></li>
						<li><a href="http://moddb.com/mods/fortress-forever/" class="simple-icon-link"><img style="background-color: rgb(186,0,0);" class="simple-icon" src="images/moddb-32.png" />ModDB</a></li>
						<li><a href="https://reddit.com/r/fortressforever/" class="simple-icon-link"><img style="background-color: #72AEEB;" class="simple-icon" src="images/reddit-32.png" />Reddit</a></li>
					</ul>
					<ul class="pull-right">
						<li><a href="<?=GetLink("rss")?>" class="simple-icon-link"><img style="background-color: rgb(255,131,0);" class="simple-icon" src="images/rss-32.png" />RSS</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</footer>
</body></html>
