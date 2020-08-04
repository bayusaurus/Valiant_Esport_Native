<!-- Modal Ubah Avatar -->
<div class="modal fade" id="modalTambahTeam" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Tambah Team</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formTambahTeam" action="<?= BASEURL; ?>/Team/tambahTeam" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="avatar">Wallpaper Team</label>
            <input type="file" class="form-control-file" name="avatar" id="avatar" required="">
          </div>
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" required="">
          </div>
          <div class="form-group">
            <label for="game">Game</label>
            <input type="text" class="form-control" name="game" id="game" placeholder="Game" required="">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" id="closeUbahAvatar" data-dismiss="modal">Batal</button>
        <button type="Submit" class="btn btn-primary">Tambah</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal Nonaktifkan -->
<div class="modal fade" id="modalHapusTeam" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Hapus Team</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formHapusTeam" action="<?= BASEURL; ?>/team/hapusTeam" method="post">
          <p>Apakah anda yakin ingin menghapus team <span id="nama"></span>?</p>
          <input type="hidden" name="id" id="id" value="">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="Submit" class="btn btn-danger">Nonaktifkan</button>
        </form>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  //Hapus
  //pass value
  $(".pass-value").click(function(){
    var id = $(this).data('id');
    var nama = $(this).data('nama')
    $("#formHapusTeam #id").val(id);
    $("#formHapusTeam #nama").text(nama);
  });
  $('#formTambahTeam #avatar').on('change', function() { 
    const size =  this.files[0].size; 
    if (size > 500) {
      alert("File Terlalu Besar");
    }else if( size < 100 ){
      alert("File Terlalu Kecil");
    }
  }); 
</script>