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
		if(empty($path[1])) {
				$var['controller'] = null;
		} else {
			$control = explode('-',$path[1]); #Hello
			if(count($control) >= 3)
			{
				echo 'Error handling => ' . $path[1];
				exit;
			}
			$var['id'] = $control[1];
			if($len == 4) {	# Graceful Codes
				$var['controller'] = $control[0] .'Controller';
				$var['method'] = $path[2];
				$var['param'] = $path[3];
			} else if($len == 3 || $len == 2) {
				$var['controller'] = $control[0] .'Controller';
				$var['method'] = $path[2];
			} else {
				return false;	
			}
		}
		return $var;
	}
}
?>
