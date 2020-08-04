<!-- Modal Ubah Avatar -->
<div class="modal fade" id="modalUbahAvatar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Ubah Avatar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formUbahAvatar" action="<?= BASEURL; ?>/Admin/UbahAvatar" method="post" enctype="multipart/form-data">
          <input type="hidden" name="username" id="username" value="">
          <div class="form-group">
            <label for="avatar">Avatar</label>
            <input type="file" class="form-control-file" name="avatar" id="avatar" required="">
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

<!-- Modal Ubah Info Profile -->
<div class="modal fade" id="modalUbahProfile" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Ubah Profile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formUbahProfile" action="<?= BASEURL; ?>/Admin/UbahProfile" method="POST">
          <input type="hidden" name="username" id="username" value="">
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" required="">
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Email" required="">
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

<!-- Modal Ubah Password -->
<div class="modal fade" id="modalUbahPassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Ubah Password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formUbahPassword"  action="<?= BASEURL; ?>/Admin/UbahPassword" method="post">
          <input type="hidden" name="username" id="username" value="">
          <div class="form-group">
            <label for="passwordLama">Password Lama</label>
            <input type="password" class="form-control" name="passwordLama" id="passwordLama" placeholder="Password Lama" required="">
          </div>
          <div class="form-group">
            <label for="passwordBaru">Password Baru</label>
            <input type="password" class="form-control" name="passwordBaru" id="passwordBaru" placeholder="Password Baru" required="">
          </div>
          <div class="form-group">
            <label for="passwordBaru1">Ulangi Password Baru</label>
            <input type="password" class="form-control" name="passwordBaru1" id="passwordBaru1" placeholder="Ulangi Password Baru" required="">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" id="closeUbahPassword">Batal</button>
        <button type="Submit" class="btn btn-primary">Ubah</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal Nonaktifkan -->
<div class="modal fade" id="modalNonaktifkan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Ubah Password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formNonaktifkan" action="<?= BASEURL; ?>/admin/nonaktifkan" method="post">
          <p>Apakah anda yakin ingin menonaktifkan akun anda?</p>
          <input type="hidden" name="username" id="username" value="">
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

    //avatar
    //pass value
    $("#tombolUbahAvatar").click(function(){
      var username = $(this).data('username');
      $("#formUbahAvatar #username").val(username);
    });
    //cleasr isi input ketika di close
    $("#closeUbahAvatar").click(function(){
      $("#formUbahAvatar #avatar").val('');
    });

    //info
    //pass value dan autocomplete 
    $("#tombolUbahProfile").click(function(){
      var username = $(this).data('username');
      $.ajax({
        url: 'http://localhost/valiant_native/public/Admin/getUbahProfile',
        data: {username : username},
        method: 'post',
        dataType: 'json',
        success: function(data){
          $("#formUbahProfile #username").val(data.username);
          $("#formUbahProfile #nama").val(data.nama);
          $("#formUbahProfile #email").val(data.email);
        }
      });
    });

    //password
    //pass value
    $("#tombolUbahPassword").click(function(){
      var username = $(this).data('username');
      $("#formUbahPassword #username").val(username);
    });
    //validasi kesamaan password
    $( "#formUbahPassword" ).submit(function() {
      if ($("#formUbahPassword #passwordBaru").val() != $("#formUbahPassword #passwordBaru1").val())
      {
        alert('Konfirmasi password Baru salah! Ulangi password dengan nilai yang sama.');
        return false;
      } else {
        return true;
      }
    });
    //clear isi input ketika di close
    $("#closeUbahPassword").click(function(){
      $("#formUbahPassword #passwordLama").val('');
      $("#formUbahPassword #passwordBaru").val('');
      $("#formUbahPassword #passwordBaru1").val('');
    });

    //nonaktikfan
    //pass value
    $("#tombolNonaktifkan").click(function(){
      var username = $(this).data('username');
      $("#formNonaktifkan #username").val(username);
    });
  </script>