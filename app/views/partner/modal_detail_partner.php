<!-- Modal Ubah Info Profile Team-->
<div class="modal fade" id="modalUbahProfile" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Ubah Profile Partner</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formUbahProfile" action="<?= BASEURL; ?>/Partner/UbahProfile" method="POST">
          <input type="hidden" name="id_partner" id="id_partner" value="">
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" required="">
          </div>
          <div class="form-group">
            <label for="link">Link</label>
            <input type="text" class="form-control" name="link" id="link" placeholder="Link" required="">
          </div>
          <div class="form-group">
            <label for="desc">Desc</label>
            <input type="text" class="form-control" name="desc" id="desc" placeholder="Desc" required="">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="Submit" class="btn btn-primary">Ubah</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal Ubah Avatar TEAM -->
<div class="modal fade" id="modalUbahFoto" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Ubah Foto Partner</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formUbahFoto" action="<?= BASEURL; ?>/Partner/ubahFoto" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id_partner" id="id_partner" value="">
          <div class="form-group">
            <label for="foto">Foto</label>
            <input type="file" class="form-control-file" name="foto" id="foto" required="">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" id="closeUbahAvatar" data-dismiss="modal">Batal</button>
        <button type="Submit" class="btn btn-primary">Ubah</button>
        </form>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
   //Ubah Info Team
  //pass value
  $(".pass-value").click(function(){
    var id_partner = $(this).data('id_partner');
    $("#formUbahFoto #id_partner").val(id_partner);
  });
  //Ubah Info Team
  //pass value
  $(".pass-value").click(function(){
    var id_partner = $(this).data('id_partner');
    var nama = $(this).data('nama');
    var desc = $(this).data('desc');
    var link = $(this).data('link');
    $("#formUbahProfile #desc").val(desc);
    $("#formUbahProfile #nama").val(nama);
    $("#formUbahProfile #link").val(link);
    $("#formUbahProfile #id_partner").val(id_partner);
  });
</script>