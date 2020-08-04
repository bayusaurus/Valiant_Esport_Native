<!-- BANNER -->
<div class="banner-team">
	<div class="container text-white banner-text">
		<span>TEAMS</span>
	</div>
</div>
<!-- END BANNER -->

<!-- TEAM -->
<div class="container">
	<div class="row text-center justify-content-center my-3">
		
		<?php foreach ($data['team'] as $team): ?>
		<div class="col-md-6 px-2 py-2">
			<div class="teams-profile mx-1">
				<div class=" px-2 text-center team-overview text-center text-white container mb-3">
					<a href="<?= BASEURL; ?>/Team/Player/<?= $team['id_team']; ?>"><h3 class="text-gold"><?= $team['nama']; ?></h3>
					<h4 class="text-white"><?= $team['game']; ?></h4></a>
				</div>
				<img src="<?= BASEURL; ?>/image/team/<?= $team['foto']; ?>" alt="...">
			</div>
		</div>			
		<?php endforeach ?>

	</div>
</div>
<!-- END TEAM -->