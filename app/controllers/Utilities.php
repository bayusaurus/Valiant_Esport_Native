<?php  

class Utilities extends Controller
{
	function not_found()
	{
		$data['judul'] = '404 PAGE NOT FOUND | TEAM VALIANT';
		$this->view('templates/not_found', $data);

	}
}

?>