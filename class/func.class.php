<?php
function newCode($controller,$method = null,$param = null,$id = null)
{
	if(empty($controller)) {
		echo 'Doesn\'t exists => ' . $controller;
		exit;
	}
	if($method == null) $method = 'index';
	try {
		$inst = new $controller($id);
		$inst->$method($param);
	} catch (Exception $e) {
		show404('Page NotFound');
	}
}
?>

