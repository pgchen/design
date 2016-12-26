<?php
// 策略模式
@header('Content-Type: text/html; charset=utf8');

abstract class calc
{	
	abstract function compute($num1, $num2);
}

class Add extends calc
{
	public function compute($num1, $num2)
	{
		return $num1 + $num2;
	}
}

class Subtraction extends calc
{
	public function compute($num1, $num2)
	{
		return $num1 - $num2;
	}
}


class Multiplication extends calc
{
	public function compute($num1, $num2)
	{
		return $num1 * $num2;
	}
}

class context
{
	
	function __construct($class)
	{
		$this->class = $class;
	}

	public function run($num1='', $num2 = '')
	{
		return $this->class->compute($num1, $num2);
	}
}

$add = new context(new Add());
echo $add->run(100,200);


