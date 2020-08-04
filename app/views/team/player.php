<!-- BANNER -->
<div class="banner-team">
	<div class="container text-white banner-text pt-4">
		<h2>VALIANT RED FLAME</h2>
		<h3>DOTA2</h3>
	</div>
</div>
<!-- END BANNER -->

<!-- TEAM -->
<div class="container mb-5">

	<div class="row text-center justify-content-center my-3">

		<?php if (!empty($data['player'])): ?>
		<?php foreach ($data['player'] as $player): ?>
			<div class="col-md-4 px-2 py-2">
				<div class="player-profile mx-1">
					<div class=" px-2 text-center player-overview text-center text-white container mb-3">
						<h2 class="text-gold"><?= $player['nama']; ?></h2>
						<h3 class="text-white"><?= $player['nick']; ?></h3>
					</div>
					<img src="<?= BASEURL; ?>/image/team/player/<?= $player['foto']; ?>" alt="...">
				</div>
			</div>		
		<?php endforeach ?>
		<?php else: ?>
			<p class="text-white">No Player Found.</p>
		<?php endif ?>
	
	</div>
	<div class="divider"><hr></div>
	<div class="d-flex">
		<div><a href="#" class="text-decoration-none text-white">&#8592; Valiant Red Flame</a></div>
		<div class="ml-auto"><a href="#" class="text-decoration-none text-white">Valiant Apocalyptic &#8594;</a></div>
	</div>
</div>
<!-- END TEAM -->