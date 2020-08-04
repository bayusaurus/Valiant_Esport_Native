<!-- banner dan judul -->
<div class="banner-detail-news ">
	<div class="desc col-md-12 text-center text-white">
		<div class="news-title container col-md-8">
			<h1><?= $data['news']['judul']; ?></h1>
		</div>
		<div class="news-time-writer mt-5">
			<h5><?= $data['news']['tanggal']; ?> | <?= $data['news']['username']; ?></h5>
		</div>	
	</div>
	<img src="<?= BASEURL; ?>/image/news/<?= $data['news']['thumbnail']; ?>">
</div>
<!-- end banner dan judul -->

<!-- isi news -->
<div class="container">
	<div class="news-isi text-white text-justify font-quattrocento my-5">
		<?= $data['news']['isi']; ?>
	</div>

	<!-- share -->
<!-- 	<div class="d-flex text-white">
		<p class="ml-auto font-quattrocento"><strong>Share :</strong></p> 
		<div class="share mr-3">
			<a href="<?= BASEURL; ?>/Home/ShareFB"><img src="<?= BASEURL; ?>/image/icon-tw.png"></a>
			<a href=""><img src="<?= BASEURL; ?>/image/icon-fb.png"></div></a>
	</div> -->
	<div class="divider mb-5"><hr></div>
	<!-- end share -->

</div>
<!-- isi news -->

