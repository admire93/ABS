<?php
class MainController
{
	private $var = array();
	private $urlInfo;
	public function run($url)
	{
		$this->urlInfo = $url;
		echo $urlInfo['controller'];
		$new = newCode($this->urlInfo['controller'],$this->urlInfo['method'],$this->urlInfo['param']);
	}
}
?>
