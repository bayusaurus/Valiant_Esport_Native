<center><?php  Flasher::Flash(); ?>
<h1>TEAM</h1>
<div class="col-md-8">
	<img src="<?= BASEURL; ?>/image/team/<?= $data['team']['foto']; ?>" style="height: 100%; width: 100%; object-fit: cover;">
</div>
<h1><?= $data['team']['nama']; ?></h1>
<h1><?= $data['team']['game']; ?></h1>
<button type="button" class="btn btn-info btn-sm pass-value" data-toggle="modal" data-target="#modalUbahProfileTeam" data-game="<?= $data['team']['game']; ?>" data-nama="<?= $data['team']['nama']; ?>" data-id_team="<?= $data['team']['id_team'] ?>">Ubah Info</button>
<button type="button" class="btn btn-primary btn-sm pass-value" data-toggle="modal" data-target="#modalUbahFotoTeam" data-id_team="<?= $data['team']['id_team'] ?>">Ubah Foto</button>


<hr>
<h1>PLAYER</h1>
</center>
<button type="button" class="btn btn-info mb-3" data-toggle="modal" data-target="#modalTambahPlayer">Tambah Player</button>
<div class="row justify-content-center">
	<?php foreach ($data['player'] as $player): ?>
		<div class=" col-md-3 my-2 mx-2">
			<div class="card" style="width: 18rem;">
			<div style="height: 300px; width: 100%">
			  <img src="<?= BASEURL; ?>/image/team/player/<?= $player['foto']; ?>"  alt="..." style="height: 100%; width: 100%; object-fit: cover;">
			</div>
			  <div class="card-body text-center">
			  	<h3><?= $player['nama']; ?></h3>
			  	<h3><?= $player['nick']; ?></h3>
			  	<button type="button" class="btn btn-info btn-sm pass-value" data-toggle="modal" data-target="#modalUbahProfilePlayer" data-nick="<?= $player['nick']; ?>" data-nama="<?= $player['nama']; ?>" data-id_player="<?= $player['id_player'] ?>" data-id_team="<?= $data['team']['id_team'] ?>">Ubah Info</button>
				<button type="button" class="btn btn-primary btn-sm pass-value" data-toggle="modal" data-target="#modalUbahFotoPlayer" data-id_player="<?= $player['id_player'] ?>" data-id_team="<?= $data['team']['id_team'] ?>">Ubah Foto</button>
			  	<button type="button" class="btn btn-danger btn-sm pass-value" data-toggle="modal" data-target="#modalHapusPlayer" data-id="<?= $player['id_player']; ?>" data-nama="<?= $player['nama']; ?>" data-id_team="<?= $data['team']['id_team'] ?>">Hapus</button>
			  </div>
			</div>
		</div>
	<?php endforeach ?>
</div>

