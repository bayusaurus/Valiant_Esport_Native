<?php 

/**
 * 
 */
class Controller
{
	// mendapatkan view
	public function view($view, $data = [])
	{
		require_once '../app/views/'. $view . '.php';
	}

	//mendapatkan model
	public function model($model)
	{
		require_once '../app/models/'. $model . '.php';
		return new $model;
	}

}
?>