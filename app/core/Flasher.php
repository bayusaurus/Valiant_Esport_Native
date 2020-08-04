<?php  

class Flasher
{
	
	public static function setFlash($pesan, $warna)
	{
		$_SESSION['flash'] =[
			'pesan' => $pesan,
			'warna' => $warna
		];
	}

	public static function flash()
	{
		if (isset($_SESSION['flash'])) 
		{
			echo
			'<div class="alert alert-'.$_SESSION['flash']['warna'].' alert-dismissible fade show" role="alert">
			  <strong>'. $_SESSION['flash']['pesan'].'</strong>
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>';
			unset($_SESSION['flash']);
		}
	}
}

?>