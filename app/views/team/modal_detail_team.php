<!-- Modal Ubah Info Profile Team-->
<div class="modal fade" id="modalUbahProfileTeam" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Ubah Profile Team</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formUbahProfileTeam" action="<?= BASEURL; ?>/Team/UbahProfileTeam" method="POST">
          <input type="hidden" name="id_team" id="id_team" value="">
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
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="Submit" class="btn btn-primary">Ubah</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal Ubah Avatar TEAM -->
<div class="modal fade" id="modalUbahFotoTeam" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Ubah Foto Team</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formUbahFotoTeam" action="<?= BASEURL; ?>/Team/UbahFotoTeam" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id_team" id="id_team" value="">
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

<!-- Modal Tambah Player -->
<div class="modal fade" id="modalTambahPlayer" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Tambah Player</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formTambahPlayer" action="<?= BASEURL; ?>/Team/tambahPlayer" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <input type="hidden" name="id" value="<?= $data['team']['id_team']; ?>">
            <label for="avatar">Foto Player</label>
            <input type="file" class="form-control-file" name="avatar" id="avatar" required="">
          </div>
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" required="">
          </div>
          <div class="form-group">
            <label for="nick">nick</label>
            <input type="text" class="form-control" name="nick" id="nick" placeholder="nick" required="">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="Submit" class="btn btn-primary">Tambah</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal Ubah Info Profile Player-->
<div class="modal fade" id="modalUbahProfilePlayer" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Ubah Profile Player</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formUbahProfilePlayer" action="<?= BASEURL; ?>/Team/UbahProfilePlayer" method="POST">
          <input type="hidden" name="id_player" id="id_player" value="">
          <input type="hidden" name="id_team" id="id_team" value="">
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" required="">
          </div>
          <div class="form-group">
            <label for="nick">Nickname</label>
            <input type="text" class="form-control" name="nick" id="nick" placeholder="Nick" required="">
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
<!-- Modal Ubah Avatar Player -->
<div class="modal fade" id="modalUbahFotoPlayer" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Ubah Foto Team</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formUbahFotoPlayer" action="<?= BASEURL; ?>/Team/UbahFotoPlayer" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id_player" id="id_player" value="">
          <input type="hidden" name="id_team" id="id_team" value="">
          <div class="form-group">
            <label for="foto">Foto</label>
            <input type="file" class="form-control-file" name="foto" id="foto" required="" maxlength="20">
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

<!-- Modal Nonaktifkan -->
<div class="modal fade" id="modalHapusPlayer" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Hapus Team</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formHapusPlayer" action="<?= BASEURL; ?>/team/hapusPlayer" method="post">
          <p>Apakah anda yakin ingin menghapus team <span id="nama"></span>?</p>
          <input type="hidden" name="id" id="id" value="">
          <input type="hidden" name="id_team" id="id_team" value="">
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
   //Ubah Info Team
  //pass value
  $(".pass-value").click(function(){
    var id_team = $(this).data('id_team');
    $("#formUbahFotoTeam #id_team").val(id_team);
  });
  //Ubah Info Team
  //pass value
  $(".pass-value").click(function(){
    var id_team = $(this).data('id_team');
    var nama = $(this).data('nama');
    var game = $(this).data('game');
    $("#formUbahProfileTeam #game").val(game);
    $("#formUbahProfileTeam #nama").val(nama);
    $("#formUbahProfileTeam #id_team").val(id_team);
  });

  //ubah foto player
  //pass value
  $(".pass-value").click(function(){
    var id_player = $(this).data('id_player');
    $("#formUbahFotoPlayer #id_player").val(id_player);
    var id_team = $(this).data('id_team');
    $("#formUbahFotoPlayer #id_team").val(id_team);
  });
  //Ubah Info Player
  //pass value
  $(".pass-value").click(function(){
    var id_player = $(this).data('id_player');
    var id_team = $(this).data('id_team');
    var nama = $(this).data('nama');
    var nick = $(this).data('nick');
    $("#formUbahProfilePlayer #nick").val(nick);
    $("#formUbahProfilePlayer #nama").val(nama);
    $("#formUbahProfilePlayer #id_player").val(id_player);
    $("#formUbahProfilePlayer #id_team").val(id_team);
  });
  //Hapus
  //pass value
  $(".pass-value").click(function(){
    var id = $(this).data('id');
    var nama = $(this).data('nama');
    var id_team = $(this).data('id_team');
    $("#formHapusPlayer #id").val(id);
    $("#formHapusPlayer #nama").text(nama);
    $("#formHapusPlayer #id_team").val(id_team);
  });
</script>