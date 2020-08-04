<div class="container">
<?php Flasher::Flash(); ?>
	<center><button class="btn btn-info" id="tombolThumbnail">Ubah Thumbnail</button>
	<button class="btn btn-info" id="tombolIsi">Ubah Isi</button></center>
	<form action="<?= BASEURL; ?>/news/ubahThumbnail" method="post" enctype="multipart/form-data">
	    
	    <div class="form-group row" style="display: none;" id="formThumbnail">
		    <div class="col-md-1 col-form-label"><label for="inputFile">Thumbnail</label></div>
		    <div class="col-md-11"><input type='file' class="form-control-file" name="foto" id="inputFile" required=""></div>
	    </div>
	    
	    <div class="my-4 col-md-12">
	    	<img id="image_upload_preview" src="<?= BASEURL; ?>/image/news/<?= $data['news']['thumbnail']; ?>" style=" object-fit: cover; height: 400px; width: 100%" alt="your image" />
		</div>

		<input type="hidden" name="id_news" value="<?= $data['news']['id_news']; ?>">
		<center><button type="submit" class="btn btn-info my-4" id="submitThumbnail" style="display: none;">Ubah Thumbnail</button></center>
	</form>

	<div id="info">
		<h2><?= $data['news']['judul']; ?></h2>	
		<textarea name="isi" class="col-md-12 summernote1 mt-3" placeholder="isi" required=""><?= $data['news']['isi']; ?></textarea>
	</div>

	<div style="display: none;" id="formIsi">
		<form action="<?= BASEURL; ?>/news/ubahIsi" method="post" enctype="multipart/form-data">

			<div class="form-group row">
			    <div class="col-md-1 col-form-label"><label for="judul">Judul</label></div>
			    <div class="col-md-11"><input type='text' class="form-control" name="judul" id="judul" required="" value="<?= $data['news']['judul']; ?>"></div>
		    </div>
			
			<textarea class="summernote" name="isi" placeholder="isi" required=""><?= $data['news']['isi']; ?></textarea>
			<input type="hidden" name="id_news" value="<?= $data['news']['id_news']; ?>">
			<center><button type="submit" class="btn btn-info mt-4">Ubah News</button></center>
		</form>
	</div>		
</div>
