<?php
/**
 * Created by PhpStorm.
 * Date: 10.06.2018
 * Time: 21:44
 */

namespace Framework\Http;

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