<?php
// 桥接模式
@header('Content-Type: text/html; charset=utf8');
interface phoneApi{
	public function run();
}

class game implements phoneApi
{
	public function run()
	{
		echo '手机游戏运行';
	}
}

class wechat implements phoneApi
{
	public function run()
	{
		echo '手机微信运行';
	}
}

abstract class phoneBrand{
	protected $class;

	public function setClass($class = '')
	{
		$this->class = $class;
	}

	abstract public function useSoft();
}

class iphone extends phoneBrand
{
	public function useSoft()
	{
		$this->class->run();
	}
}

class huawei extends phoneBrand
{
	public function useSoft()
	{
		$this->class->run();
	}
}
echo 'iphone:';
$iphone = new iphone();
$iphone->setClass(new game());
$iphone->useSoft();
echo '<br />';
echo 'iphone:';
$iphone->setClass(new wechat());
$iphone->useSoft();
echo '<br />';
echo '<br />';

echo 'huawei:';
$huawei = new huawei();
$huawei->setClass(new game());
$huawei->useSoft();
echo '<br />';
echo 'huawei:';
$huawei->setClass(new wechat());
$huawei->useSoft();