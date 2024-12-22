<?php
/**
* Plugin Name: WP Debuger
* Plugin URI: https://github.com/mnstrz/wp-debuger
* Description: Debuger for developer.
* Version: 1.0.0
* Author: mnstrz
* Author URI: https://github.com/mnstrz
**/

require __DIR__ . '/vendor/autoload.php';

if(!function_exists('dd'))
{
	function dd($data)
	{
		Symfony\Component\VarDumper\VarDumper::dump($data);
		die();exit();
	}
}

if(!function_exists('dump'))
{
	function dump($data)
	{
		Symfony\Component\VarDumper\VarDumper::dump($data);
	}
}