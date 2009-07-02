<?php
 function urlParse($url) 
 {
	 $ex = explode('/',$url);
	 
	 if(!empty($ex)) {
		_urlParse($ex[1],$ex[2],$ex[3]);
	 }
	 
	 return $ex;
 }
?>

