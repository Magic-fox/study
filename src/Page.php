<?php

class Page
{
	private $name;

	private $current;

	public function __construct($name, $current)
	{
		$this->name    = $name;
		$this->current = $current;
	}

	public function getTitle()
	{
		return ucfirst($this->name);
	}

	public function getLink()
	{
		return 'index.php?page='.$this->name;
	}

	public function getFile()
	{
		return 'pages/'.$this->name.'.html';
	}

	public function isCurrent()
	{
		return $this->current;
	}
}
