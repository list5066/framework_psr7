<?php
/**
 * Created by PhpStorm.
 * Date: 10.06.2018
 * Time: 21:44
 */

namespace Framework\Http;

class Request
{
	/**
	 * @return array
	 */
	public function getQueryParams(): array
	{
		return $_GET;
	}

	/**
	 * @return array
	 */
	public function getParsedBody(): array
	{
		return $_POST ?: null;
	}

	/**
	 * @return bool|string
	 */
	public function getBody()
	{
		return file_get_contents('php://input');
	}

	/**
	 * @return array
	 */
	public function getCookies(): array
	{
		return $_COOKIE;
	}

	/**
	 * @return array
	 */
	public function getSession(): array
	{
		return $_SESSION;
	}

	/**
	 * @return array
	 */
	public function getServer(): array
	{
		return $_SERVER;
	}
}