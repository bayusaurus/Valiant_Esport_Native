<center><?php  Flasher::Flash(); ?>
<div class="col-md-8">
	<img src="<?= BASEURL; ?>/image/partner/<?= $data['partner']['avatar']; ?>" style="height: 300px; width: 300px; object-fit: cover;">
</div>
<h1><?= $data['partner']['nama']; ?></h1>
<h1><?= $data['partner']['deskripsi']; ?></h1>

<button type="button" class="btn btn-info btn-sm pass-value" data-toggle="modal" data-target="#modalUbahProfile" data-desc="<?= $data['partner']['deskripsi']; ?>" data-nama="<?= $data['partner']['nama']; ?>" data-link="<?= $data['partner']['link']; ?>" data-id_partner="<?= $data['partner']['id_partner'] ?>">Ubah Info</button>
<button type="button" class="btn btn-primary btn-sm pass-value" data-toggle="modal" data-target="#modalUbahFoto" data-id_partner="<?= $data['partner']['id_partner'] ?>">Ubah Foto</button>

