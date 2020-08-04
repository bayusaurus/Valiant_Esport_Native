<?php  Flasher::Flash(); ?>
<button type="button" class="btn btn-info mb-3" data-toggle="modal" data-target="#modalTambahTeam">Tambah Team</button>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th class="text-center" scope="col">#</th>
      <th class="text-center" scope="col">Nama</th>
      <th class="text-center" scope="col">Game</th>
      <th class="text-center" scope="col">Detail</th>
      <th class="text-center" scope="col">Hapus</th>
    </tr>
  </thead>
  <tbody>
    
    <?php
    $no=1;
    foreach ($data['team'] as $key): ?>
      <tr>
        <th class="text-center" scope="row"><?= $no; ?></th>
        <td class="text-center"><?= $key['nama']; ?></td>
        <td class="text-center"><?= $key['game']; ?></td>
        <td class="text-center">
         <!--  <form action="<?= BASEURL; ?>/Admin/pg_detailteam" method="post">
            <input type="hidden" name="id" value="<?= $key['id']; ?>">
            <button type="Submit" class="btn btn-success btn-sm" >Detail</button>
          </form> -->
          <a href="<?= BASEURL; ?>/Admin/pg_detailteam/<?= $key['id_team']; ?>"><button type="button" class="btn btn-success btn-sm" >Detail</button></a>
        </td>
        <td class="text-center"><button type="button" class="btn btn-danger btn-sm pass-value" data-toggle="modal" data-target="#modalHapusTeam" data-id="<?= $key['id_team']; ?>" data-nama="<?= $key['nama']; ?>" >Hapus</button></td>
      </tr>
    <?php 
    $no++;
    endforeach ?>

  </tbody>
</table>