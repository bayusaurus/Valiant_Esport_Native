<div class="container">
	<form action="<?= BASEURL; ?>/news/tambah" method="post" enctype="multipart/form-data">
	    
	    <div class="form-group row">
		    <div class="col-md-1 col-form-label"><label for="inputFile">Thumbnail</label></div>
		    <div class="col-md-11"><input type='file' class="form-control-file" name="avatar" id="inputFile" required=""></div>
	    </div>
	    
	    <div class="my-4 col-md-12">
	    	<img id="image_upload_preview" src="" style="display: none; object-fit: cover; height: 400px; width: 100%" alt="your image" />
		</div>
		
		<div class="form-group row">
		    <div class="col-md-1 col-form-label"><label for="judul">Judul</label></div>
		    <div class="col-md-11"><input type='text' class="form-control" name="judul" id="judul" required=""></div>
	    </div>
		
		<textarea class="summernote" name="isi" placeholder="isi" required=""></textarea>
		
		<center><button type="submit" class="btn btn-info mt-4">Tambah</button></center>
	</form>	
</div>
