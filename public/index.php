<?php

function getLang($default)
{
	return
		!empty($_GET['lang']) ? $_GET['lang'] :
			(!empty($_COOKIE['lang'])) ? $_COOKIE['lang'] :
				(!empty($_SESSION['lang'])) ? $_SESSION['lang'] :
					(!empty($_SERVER['HTTP_ACCEPT_LANGUAGE'])) ? substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2) :
		$default;
}

$name = $_GET['name'] ?? 'Guest';

header('X-Developer: list5066');
echo 'Hello, ', $name,'!';