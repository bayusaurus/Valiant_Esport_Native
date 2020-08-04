<?php  

class Admin extends Controller
{
	public function index()
	{
		$data['admin'] = $this->model('Admin_model')->getAdminByUsername($_SESSION['username']);
		$this->view('templates/admin/header');
		$this->view('admin/index', $data);
		$this->view('templates/admin/footer');
		$this->view('templates/admin/closing');
	}
	public function profile()
	{
		$data['admin'] = $this->model('Admin_model')->getAdminByUsername($_SESSION['username']);
		$this->view('templates/admin/header');
		$this->view('admin/profile', $data);
		$this->view('templates/admin/footer');
		$this->view('admin/modals_profile');
		$this->view('templates/admin/closing');
	}
	public function tambah()
	{
		$target_dir = $_SERVER['DOCUMENT_ROOT'].'/valiant_native/public/image/admin/';
		$target_file = $target_dir . basename($_FILES["avatar"]["name"]);
		$name_file = basename($_FILES["avatar"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		  $check = getimagesize($_FILES["avatar"]["tmp_name"]);
		  if($check !== false) {
		    echo "File is an image - " . $check["mime"] . ".";
		    $uploadOk = 1;
		  } else {
		    Flasher::setFlash('Admin gagal ditambahkan, pastikan file gambar anda benar.', 'danger');
		    $uploadOk = 0;
		  }
		}

		// Check if file already exists
		if (file_exists($target_file)) {
		 	$actual_name = pathinfo($target_file,PATHINFO_FILENAME);
			$extension = pathinfo($target_file, PATHINFO_EXTENSION);
			$original_name = $actual_name;
			$i = 1;
			while(file_exists($target_dir.$actual_name.'.'.$extension))
			{           
			    $actual_name = (string)$original_name.$i.'.'.$extension;
			    $name_file = $actual_name;
			    $target_file = $target_dir.$name_file;
			    $i++;
			}
		}

		// Check file size
		if ($_FILES["avatar"]["size"] > 2000000) {
		  Flasher::setFlash('Admin gagal ditambahkan, file gambar terlalu besar. Pastikan ukuran file dibawah 2 MB.', 'danger');
		  header('Location: '. BASEURL . '/Admin/pg_admin/');
		  $uploadOk = 0;
		}

		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "svg" ) {
		  Flasher::setFlash('Partner gagal ditambahkan, pastikan eksktensi file adalah .jpg, .jpeg atau .png.', 'danger');
		  header('Location: '. BASEURL . '/Admin/pg_admin/');
		  $uploadOk = 0;
		}

		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		  Flasher::setFlash('Admin gagal ditambahkan.', 'danger');
		// if everything is ok, try to upload file
		} else {
		  if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) {
		  	if ($this->model('Admin_model')->getAdminByUsername($_POST['username']) > 0) {
		  		Flasher::setFlash('Admin gagal ditambahkan.', 'danger');
				header('Location: '. BASEURL . '/Admin/pg_admin/');
		  	}else{
		  		if ($this->model('Admin_model')->tambah($_POST, $name_file) > 0) {
					Flasher::setFlash('Admin Behasil Ditambahkan. Password awal sama dengan username', 'success');
					header('Location: '. BASEURL . '/Admin/pg_admin/');
					exit;
				}else{
					Flasher::setFlash('Admin gagal ditambahkan.', 'danger');
					header('Location: '. BASEURL . '/Admin/pg_admin/');
					exit;
				}
		  	}
		  } else {
		    Flasher::setFlash('Admin gagal ditambahkan.', 'danger');
		  }
		}
	}
	public function ubahProfile(){
		if ($this->model('Admin_model')->ubahProfile($_POST) > 0) {
			Flasher::setFlash('Informasi berhasil diperbarui.', 'success');
			header('Location: '. BASEURL . '/Admin/Profile' );
			exit;
		}else{
			Flasher::setFlash('Informasi gagal diperbarui.', 'danger');
			header('Location: '. BASEURL . '/Admin/Profile' );
			exit;
		}
	}
	public function nonaktifkan(){
		if ($this->model('Admin_model')->nonaktifkan($_POST) > 0) {
			session_unset();
			$_SESSION=[];
			// session_destroy();
			Flasher::setFlash('Akun anda telah dinonaktifkan', 'danger');
			header('Location: '.BASEURL.'/Admin/pg_login');
			exit;
		}else{
			Flasher::setFlash('Akun gagal dinonaktifkan.', 'danger');
			header('Location: '. BASEURL . '/Admin/Profile' );
			exit;
		}
	}
	public function ubahPassword(){
		$data['admin'] = $this->model('Admin_model')->getAdminByUsername($_POST['username']);
		
		if (password_verify($_POST['passwordLama'], $data['admin']['password'])) {
			if ($this->model('Admin_model')->ubahPassword($_POST) > 0) {
				Flasher::setFlash('Password berhasil diperbarui.', 'success');
				header('Location: '. BASEURL . '/Admin/Profile' );
				exit;
			}else{
				Flasher::setFlash('Password gagal diperbarui.', 'danger');
				header('Location: '. BASEURL . '/Admin/Profile' );
				exit;
			}
		}else{
			Flasher::setFlash('Password gagal diperbarui.', 'danger');
			header('Location: '. BASEURL . '/Admin/Profile' );
			exit;
		}
	}
	public function ubahAvatar(){
		$target_dir = $_SERVER['DOCUMENT_ROOT'].'/valiant_native/public/image/admin/';
		$target_file = $target_dir . basename($_FILES["avatar"]["name"]);
		$name_file = basename($_FILES["avatar"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		  $check = getimagesize($_FILES["avatar"]["tmp_name"]);
		  if($check !== false) {
		    echo "File is an image - " . $check["mime"] . ".";
		    $uploadOk = 1;
		  } else {
		    Flasher::setFlash('Avatar gagal diubah, Pastikan file yang anda unggah adalah file gambar.', 'danger');
		    $uploadOk = 0;
		  }
		}

		// Check if file already exists
		if (file_exists($target_file)) {
		  Flasher::setFlash('Avatar Gagal diubah, Nama File sudah terpakai.', 'danger');
		  $uploadOk = 0;
		}

		// Check file size
		if ($_FILES["avatar"]["size"] > 500000) {
		  Flasher::setFlash('Avatar Gagal Diubah , File Terlalu besar. Pastikan ukuran file dibawah 5 MB.', 'danger');
		  $uploadOk = 0;
		}

		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" ) {
		  Flasher::setFlash('Avatar Gagal Diubah, Pastikan eksktensi file adalah .jpg, .jpeg atau .png.', 'danger');
		  $uploadOk = 0;
		}

		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		  Flasher::setFlash('Avatar Gagal Diubah.', 'danger');
		// if everything is ok, try to upload file
		} else {
		  if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) {
		  	if ($this->model('Admin_model')->ubahAvatar($_POST, $name_file) > 0) {
				Flasher::setFlash('Avatar berhasil diperbarui.', 'success');
				header('Location: '. BASEURL . '/Admin/Profile' );
				exit;
			}else{
				Flasher::setFlash('Avatar gagal diperbarui.', 'danger');
				header('Location: '. BASEURL . '/Admin/Profile' );
				exit;
			}
		  } else {
		    Flasher::setFlash('Avatar Gagal Diubah.', 'danger');
		  }
		}
	}
	public function getUbahProfile()
	{
		echo json_encode($this->model("Admin_model")->getAdminByUsername($_POST['username']));
	}
	public function pg_login()
	{
		$data['judul'] = 'LOG IN | TEAM VALIANT';
		$this->view('admin/login');
	}
	function pg_admin()
	{
		$data['admin']=$this->model("Admin_model")->getAllAdmin();
		$this->view('templates/admin/header');
		$this->view('admin/admin', $data);
		$this->view('templates/admin/footer');
		$this->view('admin/modal_admin');
		$this->view('templates/admin/closing');
	}
	function pg_news()
	{	
		$data['news']=$this->model("News_model")->getAllNews();
		$this->view('templates/admin/header');
		$this->view('news/news', $data);
		$this->view('templates/admin/footer');
		$this->view('news/modal_news');
		$this->view('templates/admin/closing');
	}
	function pg_team()
	{
		$data['team']=$this->model("Team_model")->getAllTeam();
		$this->view('templates/admin/header');
		$this->view('team/team', $data);
		$this->view('templates/admin/footer');
		$this->view('team/modal_team');
		$this->view('templates/admin/closing');
	}
	function pg_detailteam($id)
	{
		$data['team']=$this->model("Team_model")->getTeamById($id);
		$data['player']=$this->model("Team_model")->getPlayerByTeam($id);
		$this->view('templates/admin/header');
		$this->view('team/detail_team_admin', $data);
		$this->view('templates/admin/footer');
		$this->view('team/modal_detail_team', $data);
		$this->view('templates/admin/closing');
	}
	function pg_partner()
	{
		$data['partner']=$this->model("Partner_model")->getAllPartner();
		$this->view('templates/admin/header');
		$this->view('partner/partner', $data);
		$this->view('templates/admin/footer');
		$this->view('partner/modal_partner');
		$this->view('templates/admin/closing');
	}
	function pg_detailpartner($id)
	{
		$data['partner']=$this->model("Partner_model")->getPartnerById($id);
		$this->view('templates/admin/header');
		$this->view('partner/detail_partner_admin', $data);
		$this->view('templates/admin/footer');
		$this->view('partner/modal_detail_partner', $data);
		$this->view('templates/admin/closing');
	}
	function pg_tambah_berita()
	{
		$this->view('templates/admin/header_summernote');
		$this->view('news/tambah_news');
		$this->view('templates/admin/footer');
		$this->view('news/summernote');
		$this->view('templates/admin/closing');
	}
	function pg_detailnews($id)
	{	
		$data['news']=$this->model("News_model")->getNewsById($id);
		$this->view('templates/admin/header_summernote');
		$this->view('news/edit_news', $data);
		$this->view('templates/admin/footer');
		$this->view('news/summernote');
		$this->view('templates/admin/closing');
	}
	public function Login(){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$admin = $this->model('Admin_model')->getAdminByUsername($username);
		if (!empty($admin) && $admin['status'] === '1') {
			if (password_verify($password, $admin['password'])) {
				session_start();
				$_SESSION['login'] = true;
				$_SESSION['nama'] = $admin['nama'];
				$_SESSION['username'] = $admin['username'];
				$_SESSION['avatar'] = $admin['avatar'];
				Flasher::setFlash('Login Berhasil', 'success');
				header('Location: '.BASEURL.'/Admin/index');
				exit;
			}else{
				Flasher::setFlash('Login Gagal Password Salah', 'danger');
				header('Location: '.BASEURL.'/Admin/pg_login');
				exit;
			}
		}else{
				Flasher::setFlash('Login Gagal Username Salah', 'danger');
				header('Location: '.BASEURL.'/Admin/pg_login');
				exit;
		}
	}

	public function Logout(){
		session_unset();
		$_SESSION=[];
		// session_destroy();
		Flasher::setFlash('Silakan Login Terlebih Dahulu', 'danger');
		header('Location: '.BASEURL.'/Admin/pg_login');
		exit;
	}

}

?>