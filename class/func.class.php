<?php
function newCode($info)
{
	$newCode['newInstance'] = '$inst = new ' . $info['controller'] . '();'
	$newCode['run'] = '$inst->' . $info['method'] '(' .$info['param'] . ');';	
	foreach($newCode as $key => $var)
	{		
		try {
			eval($var);
		} 
		sometingError $e {
			echo $key 'error : ' . $e; 
		}
	}
}
?>
