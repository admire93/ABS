<?php
class Request
{
	private $var;
	public function getPost()
	{
		$this->var = $_POST;
		return $this->var;
	}
	public function getGet()
	{
		$this->var = $_GET;
		return $this->var;
	}
}
?>
