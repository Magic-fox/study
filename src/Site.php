<?php

class Site
{
	private $dir;

	private $request;

	private $current;

	public function __construct($dir, $request)
	{
		$this->dir     = $dir;
		$this->request = $request;
	}

	public function getPages()
	{
		$return  = [];
		$pages   = glob($this->dir.'/*.html');
		$current = $this->request->get('page', current($pages));

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
