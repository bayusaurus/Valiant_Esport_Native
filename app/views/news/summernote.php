<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		function readURL(input) {
	        if (input.files && input.files[0]) {
	            var reader = new FileReader();

	            reader.onload = function (e) {
	                $('#image_upload_preview').attr('src', e.target.result);
	                $('#image_upload_preview').show();
	            }

	            reader.readAsDataURL(input.files[0]);
	        }
	    }

	    $("#inputFile").change(function () {
	        readURL(this);
	    });

	    $("#tombolThumbnail").click(function(){
			$("#formThumbnail").show();
			$("#submitThumbnail").show();
		});

		$("#tombolIsi").click(function(){
			$("#formIsi").show();
			$("#info").hide();
		});

	  	$(".summernote").summernote({
	        height: 300,
	        toolbar: [
	            [ 'style', [ 'style' ] ],
	            [ 'font', [ 'bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear'] ],
	            [ 'fontname', [ 'fontname' ] ],
	            [ 'fontsize', [ 'fontsize' ] ],
	            [ 'color', [ 'color' ] ],
	            [ 'para', [ 'ol', 'ul', 'paragraph', 'height' ] ],
	            [ 'table', [ 'table' ] ],
	            [ 'insert', [ 'link'] ],
	            [ 'view', [ 'undo', 'redo', 'codeview', 'help' ] ]
	        ]
    	});

    	$(".summernote1").summernote({
	        height: 300,
	        toolbar: [
	            [ 'style', [] ],
	            [ 'font', [] ],
	            [ 'fontname', [] ],
	            [ 'fontsize', [] ],
	            [ 'color', [] ],
	            [ 'para', [] ],
	            [ 'table', [] ],
	            [ 'insert', [] ],
	            [ 'view', [] ]
	        ]
    	});
	});
</script>