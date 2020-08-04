<?php  

class Contact extends Controller
{
	function index()
	{
		$data['judul'] = 'CONTACT | TEAM VALIANT';
		$this->view('templates/header', $data);
		$this->view('contact/index');
		$this->view('templates/footer');
		$this->view('templates/closing');
	}
}

?>