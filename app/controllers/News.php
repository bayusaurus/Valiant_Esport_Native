<?php  

class News extends Controller
{
	function index()
	{	
		$data['news']=$this->model("News_model")->getLatestNews();
		$data['judul'] = 'NEWS | TEAM VALIANT';
		$this->view('templates/header', $data);
		$this->view('news/index', $data);
		$this->view('templates/footer');
		$this->view('templates/closing');
	}

	function detailnews($id)
	{
		$data['news']=$this->model("News_model")->getNewsById($id);
		$data['judul'] = 'DETAIL NEWS | TEAM VALIANT';
		
		$this->view('templates/header', $data);
		$this->view('news/detailnews', $data);
		$this->view('templates/footer');
		$this->view('templates/closing');
	}
	public function tambah()
	{
		$target_dir = $_SERVER['DOCUMENT_ROOT'].'/valiant_native/public/image/news/';
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
		    Flasher::setFlash('News gagal ditambahkan, pastikan file gambar anda benar.', 'danger');
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
		  Flasher::setFlash('News gagal ditambahkan, file gambar terlalu besar. Pastikan ukuran file dibawah 2 MB.', 'danger');
		  $uploadOk = 0;
		}

		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" ) {
		  Flasher::setFlash('News gagal ditambahkan, pastikan eksktensi file adalah .jpg, .jpeg atau .png.', 'danger');
		  $uploadOk = 0;
		}

		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		  Flasher::setFlash('News gagal ditambahkan.', 'danger');
		// if everything is ok, try to upload file
		} else {
		  if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) {
		  	if ($this->model('News_model')->tambah($_POST, $name_file) > 0) {
				Flasher::setFlash('News Behasil Ditambahkam.', 'success');
				header('Location: '. BASEURL . '/Admin/pg_news/');
				exit;
			}else{
				Flasher::setFlash('News gagal ditambahkan.', 'danger');
				header('Location: '. BASEURL . '/Admin/pg_news');
				exit;
			}
		  } else {
		    Flasher::setFlash('News gagal ditambahkan.', 'danger');
		  }
		}
	}
	public function ubahIsi(){
		if ($this->model('News_model')->ubahIsi($_POST) > 0) {
			Flasher::setFlash('Informasi berhasil diperbarui.', 'success');
			header('Location: '. BASEURL . '/Admin/pg_detailnews/'.$_POST['id_news'] );
			exit;
		}else{
			Flasher::setFlash('Informasi gagal diperbarui.', 'danger');
			header('Location: '. BASEURL . '/Admin/pg_detailnews/'.$_POST['id_news'] );
			exit;
		}
	}
	public function ubahThumbnail(){
		$target_dir = $_SERVER['DOCUMENT_ROOT'].'/valiant_native/public/image/news/';
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
		  	if ($this->model('News_model')->ubahThumbnail($_POST, $name_file) > 0) {
				Flasher::setFlash('Avatar berhasil diperbarui.', 'success');
				header('Location: '. BASEURL . '/Admin/pg_detailnews/'.$_POST['id_news'] );
				exit;
			}else{
				Flasher::setFlash('Avatar gagal diperbarui.', 'danger');
				header('Location: '. BASEURL . '/Admin/pg_detailnews/'.$_POST['id_news'] );
				exit;
			}
		  } else {
		    Flasher::setFlash('Avatar Gagal Diubah.', 'danger');
		  }
		}
	}
	public function hapus(){
		if ($this->model('News_model')->hapus($_POST) > 0) {
			Flasher::setFlash('News sukses dihapus', 'success');
			header('Location: '. BASEURL . '/Admin/pg_News/');
			exit;
		}else{
			Flasher::setFlash('News gagal dihapus.', 'danger');
			header('Location: '. BASEURL . '/Admin/pg_News/');
			exit;
		}
	}

}

?>