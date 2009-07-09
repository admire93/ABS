<?php
function __autoload($file) {
	if(strpos($file,'Controller') !== false) {
		require_once DIREC . '/controller/' . $file . '.php';
	} else if(strpos($file,'Model')) {
		require_once DIREC . '/model/' . $file . '.php';
	} else if(strpos($file,'View')) {
		require_once DIREC . '/view/' . $file . '.php';
	} else {
		require_once DIREC . '/class/' . $file . '.class.php';
	}
}
?>
