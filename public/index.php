<?php
// some comment here, and link to memorize url of lessons https://youtu.be/w4iqxN0nfTs
// Eliseev Dmitrii lesson about psr7 framework making

/**
 * @param array $request
 * @param $default
 * @return bool|string
 */
function getLang(Request $request, $default)
{
	$get = $request->getQueryParams();
	$cookie = $request->getCookies();
	$session = $request->getSession();
	$server = $request->getServer();

	return
		!empty($get['lang']) ? $get['lang'] :
			(!empty($cookie['lang'])) ? $cookie['lang'] :
				(!empty($session['lang'])) ? $session['lang'] :
					(!empty($server['HTTP_ACCEPT_LANGUAGE'])) ? substr($server['HTTP_ACCEPT_LANGUAGE'], 0, 2) :
		$default;
}

session_start();

class Request
{
	public function getQueryParams(): array
	{
		return $_GET;
	}
	
	public function getCookies(): array
	{
		return $_COOKIE;
	}
	
	public function getSession(): array
	{
		return $_SESSION;
	}
	
	public function getServer(): array
	{
		return $_SERVER;
	}
}

$request = new Request();

$name = $_GET['name'] ?? 'Guest';
$lang = getLang($request, 'en');

header('X-Developer: list5066');
echo 'Hello, ', $name,'!';
