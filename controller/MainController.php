<?php
class MainController
{
	private $var = array();
	private $urlInfo,$html;
	public function __construct()
	{
		$this->html = new Html();
		$this->html->_header('Hello TestPage');
	}
	public function run($url)
	{
		$this->urlInfo = $url;
		echo $urlInfo['controller'];
		$new = newCode($this->urlInfo['controller'],$this->urlInfo['method'],$this->urlInfo['param']);
	}
	public function ended()
	{
		$this->html->_footer();
	}
}
?>
