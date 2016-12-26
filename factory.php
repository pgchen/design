<?php
// 工厂模式
@header('Content-Type: text/html; charset=utf8');

abstract class shape
{
	abstract function draw();
}

class square extends shape
{
	public function draw()
	{
		echo 'This is square';
	}
}

class round extends shape
{
	public function draw()
	{
		echo 'This is round';
	}
}

class rectangle extends shape
{
	public function draw()
	{
		echo 'This is rectangle';
	}
}

class shapeFactory
{
	public function getShape($type)
	{
		if(class_exists($type)){
			$type = new $type();
			$type->draw();
		}else{
			echo 'Please enter the correct value!';
		}
	}
}

echo 'square:';
$shapeFactory = new shapeFactory();
$shapeFactory->getShape('square');
echo '<br />';
echo 'round:';
$shapeFactory->getShape('round');
echo '<br />';
echo 'rectangle:';
$shapeFactory->getShape('rectangle');
echo '<br />';
echo 'none:';
$shapeFactory->getShape('none');

