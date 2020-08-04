<!-- BANNER -->
<div class="banner-partner">
	<div class="container text-white banner-text">
		<span>PARTNERS</span>
	</div>
</div>
<!-- END BANNER -->

<!-- TEAM -->
<div class="bg-putih py-3">
<div class="container partners">
	<div class="row justify-content-center">

		<?php foreach ($data['partner'] as $partner): ?>
			<div class="col-md-6 partners-detail px-3 py-3">
				<div class="partners-profile py-2 bg-putih" style="height: 100%; width: 100%;">
					<center><img src="<?= BASEURL; ?>/image/partner/<?= $partner['avatar']; ?>" class="">
					<h2><?= $partner['nama']; ?></h2></center>
					<p class="text-justify mx-2 my-2 font-quattrocento"><?= $partner['deskripsi']; ?></p>
					<center><a href="https://<?= $partner['link']; ?>/"><button type="button" class="btn bg-merah tombol my-2 px-4">Kunjungi Website</button></a></center>
				</div>
			</div>
		<?php endforeach ?>

	</div>
</div>
</div>
<!-- END TEAM -->