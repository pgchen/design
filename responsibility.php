<?php
// 责任链模式
@header('Content-Type: text/html; charset=utf8');

class log
{
	public $info = 1;
	public $warning = 2;
	public $error = 3;
	protected $level;
	protected $nextLevel;
	public function showlog(){}
	public function setNextLeve($nextLevel='')
	{
		$this->nextLevel = $nextLevel;
	}

	public function logMessage($level){
      if($this->level == $level){
      		$this->showlog();
      }else if(!empty($this->nextLevel)){
         $this->nextLevel->logMessage($level);
      }
   }
}

class info extends log
{
	public function info($level)
	{
		$this->level = $level;
	}

	public function showlog()
	{
		echo 'This is info';
	}
}

class warning extends log
{
	public function warning($level)
	{
		$this->level = $level;
	}

	public function showlog()
	{
		echo 'This is warning';
	}
}

class error extends log
{
	public function error($level)
	{
		$this->level = $level;
	}

	public function showlog()
	{
		echo 'This is error';
	}
}

$log = new log();
$info = new info($log->info);
$warning = new warning($log->warning);
$error = new error($log->error);

$info->setNextLeve($warning);
$warning->setNextLeve($error);

echo 'info:';
$info->logMessage($log->info);
echo '<br />';

echo 'warning:';
$info->logMessage($log->warning);
echo '<br />';

echo 'error:';
$info->logMessage($log->error);
echo '<br />';

