<?php  Flasher::Flash(); ?>
<button type="button" class="btn btn-info mb-3" data-toggle="modal" data-target="#modalTambah">Tambah Partner</button>
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
    foreach ($data['partner'] as $partner): ?>
      <tr>
        <th class="text-center" scope="row"><?= $no; ?></th>
        <td class="text-center"><?= $partner['nama']; ?></td>
        <td class="text-center"><?= $partner['deskripsi']; ?></td>
        <td class="text-center">
          <a href="<?= BASEURL; ?>/Admin/pg_detailpartner/<?= $partner['id_partner']; ?>"><button type="button" class="btn btn-success btn-sm" >Detail</button></a>
        </td>
        <td class="text-center"><button type="button" class="btn btn-danger btn-sm pass-value" data-toggle="modal" data-target="#modalHapus" data-id="<?= $partner['id_partner']; ?>" data-nama="<?= $partner['nama']; ?>" >Hapus</button></td>
      </tr>
    <?php 
    $no++;
    endforeach ?>

  </tbody>
</table>