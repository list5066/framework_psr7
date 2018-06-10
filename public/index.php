<?php
// some comment here, and link to memorize url of lessons https://youtu.be/w4iqxN0nfTs
// Eliseev Dmitrii lesson about psr7 framework making

/**
 * @param array $request
 * @param $default
 * @return bool|string
 */
function getLang(array $request, $default)
{
	$get = $request['get'];
	$cookie = $request['cookie'];
	$session = $request['session'];
	$server = $request['server'];

	return
		!empty($get['lang']) ? $get['lang'] :
			(!empty($cookie['lang'])) ? $cookie['lang'] :
				(!empty($session['lang'])) ? $session['lang'] :
					(!empty($server['HTTP_ACCEPT_LANGUAGE'])) ? substr($server['HTTP_ACCEPT_LANGUAGE'], 0, 2) :
		$default;
}

session_start();

$request = [
	'get' => $_GET,
	'cookie' => $_COOKIE,
	'session' => $_SESSION,
	'server' => $_SERVER,
];

$name = $_GET['name'] ?? 'Guest';
$lang = getLang($request, 'en');

header('X-Developer: list5066');
echo 'Hello, ', $name,'!';
