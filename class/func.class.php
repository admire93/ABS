<?php
function newCode($controller,$method = null,$param = null)
{
	$new = array();
	if(empty($controller)) echo 'Doesn\' exists => ' . $controller;
	if($method == null) $method = 'index';
	
	$new['newInstance'] = '$inst = new ' . $controller . '();';
	$new['callMethod'] = '$inst->' . $method . '(' . $param . ');';

	foreach($new as $key => $var)
	{
		eval($var);
	}
}
?>

