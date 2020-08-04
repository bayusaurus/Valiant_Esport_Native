 	
	<!-- JUMBOTRON -->
	<div class="jumbotron jumbotron-fluid text-white">
	  <div class="container text-center">
	    <div class="title">VALIANT</div>
	    <div class="motto">COMPETE TO <span>CONQUER</span></div>
	  </div>
	</div>
	<!--END JUMBOTRON -->

	<!-- SPONSOR -->
	<div class="sponsor py-1">
		<div class="slider-sponsor px-2">
			<?php foreach ($data['partner'] as $partner): ?>
				<div class="slider-sponsor-slide">
					<center><img src="<?= BASEURL; ?>/image/partner/<?= $partner['avatar']; ?>"></center>
				</div>
			<?php endforeach ?>
		</div>
	</div>
	<!-- END SPONSOR -->

	<!-- ROW NEWS -->
	<div class="container news pt-4">
		<div class="text-center text-white title"><span>VALIANT</span> NEWS</div>
		<div class="container">

			<div class="slider-news mt-4">
				<?php foreach ($data['news'] as $news): ?>
				<div class="slider-news-slide mx-1">
					<img src="<?= BASEURL; ?>/image/news/<?= $news['thumbnail']; ?>" alt="...">
					<div class="mt-2 px-2 text-justify title-elipsis">
						<h5><?= $news['judul']; ?></h5>
						<div class="d-flex mb-2 mt-3 justify-content-between">
							<div><small><?= $news['tanggal']; ?></small></div> 
							<div><small><?= $news['username']; ?></small></div>
						</div>
					</div>
				</div>
				<?php endforeach ?>

			</div>
			<a href="<?= BASEURL; ?>/Home/News"><center><button type="button" class="btn bg-merah tombol my-5 px-4">Baca Berita Lain</button></center></a>
		</div>
	</div>
	<!--END ROW NEWS -->
	
	<!-- ROW TEAMS -->
	<div class="teams">
		<div class="container pt-4">
			<div class="text-center title"><span>VALIANT</span> TEAMS</div>
			<div class="container">

			<div class="slider-teams mt-4">
				<?php foreach ($data['team'] as $team): ?>
					<div class="slider-teams-slide mx-1">
					<div class=" px-2 text-center team-overview text-center text-white container mb-3">
						<a href="<?= BASEURL; ?>/Team/Player/<?= $team['id_team']; ?>"><h2 class="text-gold"><?= $team['nama']; ?></h2>
						<h3 class="text-white"><?= $team['game']; ?></h3></a>
					</div>
					<img src="<?= BASEURL; ?>/image/team/<?= $team['foto']; ?>" alt="<?= $team['nama']; ?>">
				</div>	
				<?php endforeach ?>
	
			</div>
			<a href="<?= BASEURL; ?>/Home/Team"><center><button type="button" class="btn bg-merah tombol my-5 px-4">Lihat Semua Tim</button></center></a>
		</div>
		</div>
	</div>
	<!-- END ROW TEAMS -->

	<!-- ROW GOODS -->
	<div class="goods">
		<div class="container pt-4">
			<div class="text-center title"><span>VALIANT</span> GOODS</div>
			
			<div class="row my-4">
				<div class="goods-item px-2 py-2 col-lg-3">
					<img src="<?= BASEURL; ?>/image/goods1.png">
				</div>
				<div class="goods-item px-2 py-2 col-lg-3">
					<img src="<?= BASEURL; ?>/image/goods3.png">
				</div>
				<div class="goods-item px-2 py-2 col-lg-3">
					<img src="<?= BASEURL; ?>/image/goods4.png">
				</div>
				<div class="goods-item px-2 py-2 col-lg-3">
					<img src="<?= BASEURL; ?>/image/goods2.png">
				</div>	
			</div>

		</div>
		<a href="https://shopee.co.id/" target="_blank"><center><button type="button" class="btn bg-merah tombol mb-5 px-4">Beli Sekarang &#8594;</button></center></a>
	</div>
	<!--END ROW GOODS -->

	<!-- SPONSOR -->
	<!-- END SPONSOR -->