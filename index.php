<?php
require_once './define.php';
require_once DIREC . '/common/common.php';

$url = urlParse($_SERVER['PATH_INFO']);
var_dump($url);
#$main = new MainController();
#$main->run($url);
?>
