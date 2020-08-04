<!-- BANNER -->
<div class="banner-news">
	<div class="container text-white banner-text">
		<span>NEWS</span>
	</div>
</div>
<!-- END BANNER -->

<!-- TEAM -->
<div class="container">
	<div class="row justify-content-center my-3 px-2 py-2">
		
		<?php foreach ($data['news'] as $news): ?>
			<div class="col-lg-12 my-3">
				<div class="row">
					<div class="col-lg-4 news-thumbnail "> 
						<img src="<?= BASEURL; ?>/image/news/<?= $news['thumbnail']; ?>">
					</div>
					<div class="col-lg-8 news-desc text-white"> 
						<div class="news-title text-justify"><a href="<?= BASEURL; ?>/News/DetailNews/<?= $news['id_news']; ?>" class="text-decoration-none"><h3><?= $news['judul']; ?></h3></a></div>
						<div class="news-time-writer text-gold"><small><?= $news['tanggal']; ?> | <?= $news['username']; ?></small></div>
						<div class="news-short font-quattrocento my-2 text-justify isi-elipsis" style="height: 290px;"><?= $news['isi']; ?></div>
						<div class="news-read-more"><a href="<?= BASEURL; ?>/News/DetailNews/<?= $news['id_news']; ?>" class="text-decoration-none"><h5>Read More</h5></a></div>
					</div>
				</div>
			</div>
		<?php endforeach ?>
		
	</div>

	<!-- <div class="divider mb-5">
		<hr>
		<nav aria-label="Page navigation example">
		  <ul class="pagination justify-content-center">
		    <li class="page-item"><a class="page-link text-decoration-none" href="#">1</a></li>
		    <li class="page-item"><a class="page-link" href="#">2</a></li>
		    <li class="page-item"><a class="page-link" href="#">3</a></li>
		    <li class="page-item">
		      <a class="page-link" href="#">Next</a>
		    </li>
		  </ul>
		</nav>
	</div> -->

</div>


<!-- END TEAM -->