<?php  

class Home extends Controller
{
	function index()
	{
		$data['news']=$this->model("News_model")->getLatestNews();
		$data['team']=$this->model("Team_model")->getAllTeam();
		$data['partner']=$this->model("Partner_model")->getAllPartner();
		$data['judul'] = 'HOME | TEAM VALIANT';
		$this->view('templates/header', $data);
		$this->view('Home/index', $data);
		$this->view('templates/footer');
		$this->view('templates/slick-slider');
		$this->view('templates/closing');
	}
}

?>