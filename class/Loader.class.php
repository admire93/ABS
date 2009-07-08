<?php
class Loader
{
	public function view($path , $data)
	{
		if(!empty($data) && is_array($data)) {
			foreach($data as $key => $var)
			{
				$$key = $var;
			}
		} else {
			echo 'View Error';
		}
		include DIREC . '/view/' . $path . '.php';
	}
	public function model()
	{
	}
}
?>
