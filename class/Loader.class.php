<?php
class Loader
{
	public function view($path , $data = null)
	{
		if(!empty($path) && (empty($data) || is_array($data))) {
			if(empty($data)) {
				$data = array();
			}
			foreach($data as $key => $var)
			{
				$$key = $var;
			}
		} else {
			echo 'View Error';
		}
		require_once DIREC . '/view/' . $path . '.php';
	}
	public function model($modelName)
	{
		$model = $modelName . 'Model';
		$$modelName = new $model();
	}
}
?>
