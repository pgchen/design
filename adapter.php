<?php
// 适配器模式

@header('Content-Type: text/html; charset=utf8');
interface players{

	public function attack();

	public function defensive();
}

// 外国队友
class foreign implements players
{
	private $name;
	function __construct($name)
	{
		$this->name = $name;
	}

	public function attack()
	{
		echo $this->name.'attack';
	}


	public function defensive()
	{
		echo $this->name.'defensive';
		
	}
}

// 中国队友
class china
{
	private $name;
	function __construct($name)
	{
		$this->name = $name;
	}

	public function 攻击()
	{
		echo $this->name.'攻击';
	}


	public function 防守()
	{
		echo $this->name.'防守';
	}
}

class adapter implements players
{
	private $china;
	private $name;
	function __construct($name)
	{
		$this->china = new china($name);
	}

	public function attack($value='')
	{
		$this->china->攻击();
	}

	public function defensive($value='')
	{
		$this->china->防守();
	}
}

echo '正常：';
$adapter = new adapter('cpq');
$adapter->attack();
echo '<br />';
echo '适配器：';
$foreign = new foreign('外国cpq');
$foreign->attack();


