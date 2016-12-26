<?php
// 单例模式
@header('Content-Type: text/html; charset=utf8');

class singleton
{
	public static $instance;

	private function singleton(){}

	public static function getInstance()
	{
	    if (empty(self::$instance)) {
	        self::$instance = new Singleton();
	    }  
	    return self::$instance;
	}

	public function showLog()
	{
		echo 'This is singleton';
	}
}

$singleton = singleton::getInstance();
$singleton->showLog();
