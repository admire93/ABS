<?php
class UrlParser
{	
	private $path = array();
	public function urlParse($pathInfo)
	{
		$path = explode('/',$pathInfo);
		$len = count($path);
		$handle = $this->makeHandle($path,$len);
		return $handle;
	}
	private function makeHandle($path,$len)
	{
		if($len == 4) {
			$var['controller'] = $path[1];
			$var['method'] = $path[2];
			$var['param'] = $path[3];
		} else if($len == 3 || $len == 2) {
			$var['controller'] = $path[1];
			$var['method'] = $path[2];
		} else {
			return false;	
		}
		return $var;
	}
}
?>
