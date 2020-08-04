<?php  

class Team extends Controller
{
	public function index()
	{	
		$data['team'] = $this->model('Team_model')->getAllTeam();
		$data['judul'] = 'TEAM | TEAM VALIANT';
		$this->view('templates/header', $data);
		$this->view('team/index', $data);
		$this->view('templates/footer');
		$this->view('templates/closing');
	}

	public function player($id_team)
	{
		$data['player'] = $this->model('Team_model')->getPlayerByTeam($id_team);
		$data['judul'] = 'TEAM | TEAM VALIANT';
		$this->view('templates/header', $data);
		$this->view('team/player', $data);
		$this->view('templates/footer');
		$this->view('templates/closing');
	}

	public function tambahTeam()
	{
		$target_dir = $_SERVER['DOCUMENT_ROOT'].'/valiant_native/public/image/team/';
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
		    Flasher::setFlash('Team gagal ditambahkan, pastikan file gambar anda benar.', 'danger');
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
		if ($_FILES["avatar"]["size"] > 1000000) {
		  Flasher::setFlash('Team gagal ditambahkan, file gambar terlalu besar. Pastikan ukuran file dibawah 1 MB.', 'danger');
		  header('Location: '. BASEURL . '/Admin/pg_team' );
		  $uploadOk = 0;
		}

		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" ) {
		  Flasher::setFlash('Team gagal ditambahkan, pastikan eksktensi file adalah .jpg, .jpeg atau .png.', 'danger');
		  $uploadOk = 0;
		}

		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		  Flasher::setFlash('Team gagal ditambahkan.', 'danger');
		// if everything is ok, try to upload file
		} else {
		  if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) {
		  	if ($this->model('Team_model')->tambahTeam($_POST, $name_file) > 0) {
				Flasher::setFlash('Team Behasil Ditambahkam.', 'success');
				header('Location: '. BASEURL . '/Admin/pg_team' );
				exit;
			}else{
				Flasher::setFlash('Team gagal ditambahkan.', 'danger');
				header('Location: '. BASEURL . '/Admin/pg_team' );
				exit;
			}
		  } else {
		    Flasher::setFlash('Team gagal ditambahkan.', 'danger');
		  }
		}
	}
	public function ubahProfileTeam(){
		if ($this->model('Team_model')->ubahProfileTeam($_POST) > 0) {
			Flasher::setFlash('Informasi berhasil diperbarui.', 'success');
			header('Location: '. BASEURL . '/Admin/pg_detailteam/'.$_POST['id_team'] );
			exit;
		}else{
			Flasher::setFlash('Informasi gagal diperbarui.', 'danger');
			header('Location: '. BASEURL . '/Admin/pg_detailteam/'.$_POST['id_team'] );
			exit;
		}
	}
	public function ubahFotoTeam(){
		$target_dir = $_SERVER['DOCUMENT_ROOT'].'/valiant_native/public/image/team/';
		$target_file = $target_dir . basename($_FILES["foto"]["name"]);
		$name_file = basename($_FILES["foto"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		  $check = getimagesize($_FILES["foto"]["tmp_name"]);
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
		if ($_FILES["foto"]["size"] > 2000000) {
		  Flasher::setFlash('Avatar Gagal Diubah , File Terlalu besar. Pastikan ukuran file dibawah 2 MB.', 'danger');
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
		  if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
		  	if ($this->model('Team_model')->ubahFotoTeam($_POST, $name_file) > 0) {
				Flasher::setFlash('Avatar berhasil diperbarui.', 'success');
				header('Location: '. BASEURL . '/Admin/pg_detailteam/'.$_POST['id_team'] );
				exit;
			}else{
				Flasher::setFlash('Avatar gagal diperbarui.', 'danger');
				header('Location: '. BASEURL . '/Admin/pg_detailteam/'.$_POST['id_team'] );
				exit;
			}
		  } else {
		    Flasher::setFlash('Avatar Gagal Diubah.', 'danger');
		  }
		}
	}
	public function hapusTeam()
	{
		if ($this->model('Team_model')->hapusTeam($_POST) > 0) {
			Flasher::setFlash('Team sukses dihapus', 'success');
			header('Location: '.BASEURL.'/Admin/pg_team');
			exit;
		}else{
			Flasher::setFlash('Team gagal dihapus.', 'danger');
			header('Location: '. BASEURL . '/Admin/pg_team' );
			exit;
		}
	}
	public function tambahPlayer()
	{
		$target_dir = $_SERVER['DOCUMENT_ROOT'].'/valiant_native/public/image/team/player/';
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
		    Flasher::setFlash('Player gagal ditambahkan, pastikan file gambar anda benar.', 'danger');
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
		  Flasher::setFlash('Player gagal ditambahkan, file gambar terlalu besar. Pastikan ukuran file dibawah 2 MB.', 'danger');
		  $uploadOk = 0;
		}

		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" ) {
		  Flasher::setFlash('Player gagal ditambahkan, pastikan eksktensi file adalah .jpg, .jpeg atau .png.', 'danger');
		  $uploadOk = 0;
		}

		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		  Flasher::setFlash('Player gagal ditambahkan.', 'danger');
		// if everything is ok, try to upload file
		} else {
		  if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) {
		  	if ($this->model('Team_model')->tambahPlayer($_POST, $name_file) > 0) {
				Flasher::setFlash('Player Behasil Ditambahkam.', 'success');
				header('Location: '. BASEURL . '/Admin/pg_detailteam/'.$_POST['id'] );
				exit;
			}else{
				Flasher::setFlash('Player gagal ditambahkan.', 'danger');
				header('Location: '. BASEURL . '/Admin/pg_detailteam/'.$_POST['id'] );
				exit;
			}
		  } else {
		    Flasher::setFlash('Player gagal ditambahkan.', 'danger');
		  }
		}
	}
	public function ubahProfilePlayer(){
		if ($this->model('Team_model')->ubahProfilePlayer($_POST) > 0) {
			Flasher::setFlash('Informasi berhasil diperbarui.', 'success');
			header('Location: '. BASEURL . '/Admin/pg_detailteam/'.$_POST['id_team'] );
			exit;
		}else{
			Flasher::setFlash('Informasi gagal diperbarui.', 'danger');
			header('Location: '. BASEURL . '/Admin/pg_detailteam/'.$_POST['id_team'] );
			exit;
		}
	}
	public function ubahFotoPlayer(){
		$target_dir = $_SERVER['DOCUMENT_ROOT'].'/valiant_native/public/image/team/player/';
		$target_file = $target_dir . basename($_FILES["foto"]["name"]);
		$name_file = basename($_FILES["foto"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		  $check = getimagesize($_FILES["foto"]["tmp_name"]);
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
		if ($_FILES["foto"]["size"] > 2000000) {
		  Flasher::setFlash('Avatar Gagal Diubah , File Terlalu besar. Pastikan ukuran file dibawah 2 MB.', 'danger');
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
		  if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
		  	if ($this->model('Team_model')->ubahFotoPlayer($_POST, $name_file) > 0) {
				Flasher::setFlash('Avatar berhasil diperbarui.', 'success');
				header('Location: '. BASEURL . '/Admin/pg_detailteam/'.$_POST['id_team'] );
				exit;
			}else{
				Flasher::setFlash('Avatar gagal diperbarui.', 'danger');
				header('Location: '. BASEURL . '/Admin/pg_detailteam/'.$_POST['id_team'] );
				exit;
			}
		  } else {
		    Flasher::setFlash('Avatar Gagal Diubah.', 'danger');
		  }
		}
	}
	public function hapusPlayer(){
		if ($this->model('Team_model')->hapusPlayer($_POST) > 0) {
			Flasher::setFlash('Player sukses dihapus', 'success');
			header('Location: '.BASEURL.'/Admin/pg_detailteam/'.$_POST['id_team']);
			exit;
		}else{
			Flasher::setFlash('Player gagal dihapus.', 'danger');
			header('Location: '.BASEURL.'/Admin/pg_detailteam/'.$_POST['id_team']);
			exit;
		}
	}
}

?>