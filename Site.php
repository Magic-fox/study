<?php

class Site
{
	private $dir;

	private $current;

	public function __construct($dir)
	{
		$this->dir = $dir;
	}

	public function getPages()
	{
		$return = [];
		$pages  = glob($this->dir.'/*.html');
		$current = isset($_GET['page']) ? $_GET['page'] : current($pages);

		foreach ($pages as $key => $value) {
			$value = str_replace([$this->dir.'/', '.html'], '', $value);

			$page = new Page($value, $value == $current);

			if ($page->isCurrent()) {
				$this->current = $page;
			}

			$return[] = $page;
		}

		return $return;
	}

	public function getCurrent()
	{
		return $this->current;
	}
}
