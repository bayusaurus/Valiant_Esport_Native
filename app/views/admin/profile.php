<center>
<div id="profile">
	<?php Flasher::flash(); ?>
    <img src="<?= BASEURL; ?>/image/admin/<?= $data['admin']['avatar']; ?>" class="img-thumbnail mb-2">
    <div class="col-md-6 my-3">
	    <div class="btn-group btn-group-toggle" data-toggle="buttons">
		  <label class="btn btn-warning text-white active">
		    <input type="radio" name="options" data-toggle="modal" data-target="#modalUbahAvatar" data-username="<?= $_SESSION['username']; ?>" id="tombolUbahAvatar" checked> Ubah Avatar
		  </label>
		  <label class="btn btn-info active">
		    <input type="radio" name="options" data-toggle="modal" data-target="#modalUbahProfile" data-username="<?= $_SESSION['username']; ?>" id="tombolUbahProfile" checked> Ubah Info
		  </label>
		  <label class="btn btn-primary">
		    <input type="radio" name="options" data-toggle="modal" data-target="#modalUbahPassword" data-username="<?= $_SESSION['username']; ?>" id="tombolUbahPassword"> Ubah Password
		  </label>
		  <label class="btn btn-danger">
		    <input type="radio" name="options" data-toggle="modal" data-target="#modalNonaktifkan" data-username="<?= $_SESSION['username']; ?>" id="tombolNonaktifkan"> Nonatifkan
		  </label>
		</div>
	</div>
    <h2><?= $data['admin']['username']; ?></h2>
    <h2><?= $data['admin']['nama']; ?></h2>
    <h2><?= $data['admin']['email']; ?></h2>
</div>
</center>
