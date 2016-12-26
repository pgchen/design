<?php
// 抽象工厂模式
@header('Content-Type: text/html; charset=utf8');


// 形状
abstract class abtractShape
{
	abstract function draw();
}

class square extends abtractShape
{
	public function draw()
	{
		echo 'This is square';
	}
}

class round extends abtractShape
{
	public function draw()
	{
		echo 'This is round';
	}
}

class rectangle extends abtractShape
{
	public function draw()
	{
		echo 'This is rectangle';
	}
}


// 颜色
abstract class abstractColor
{
	abstract function draw();
}

class red extends abstractColor
{
	public function draw()
	{
		echo 'This is red';
	}
}

class green extends abstractColor
{
	public function draw()
	{
		echo 'This is green';
	}
}

class white extends abstractColor
{
	public function draw()
	{
		echo 'This is white';
	}
}

// 抽象工厂
abstract class abstractFactory
{
	abstract function getData($type);
}

class shapeFactory extends abstractFactory
{
	public function getData($type)
	{
		if(class_exists($type)){
			$type = new $type();
			return $type;
		}else{
			echo 'error';
		}
	}
}

class colorFactory extends abstractFactory
{
	public function getData($type)
	{
		if(class_exists($type)){
			$type = new $type();
			return $type;
		}else{
			echo 'error';
		}
	}

	public function getShape($type){
		return;
	}
}

$shapeFactory = new shapeFactory();
$round = $shapeFactory->getData('round');
$round->draw();


$colorFactory = new colorFactory();
$red = $colorFactory->getData('red');
$red->draw();