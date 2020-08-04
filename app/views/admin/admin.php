<?php  Flasher::Flash(); ?>
<button type="button" class="btn btn-info mb-3" data-toggle="modal" data-target="#modalTambah">Tambah Admin</button>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th class="text-center" scope="col">#</th>
      <th class="text-center" scope="col">Nama</th>
      <th class="text-center" scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
    
    <?php
    $no=1;
    foreach ($data['admin'] as $admin): ?>
      <tr>
        <th class="text-center" scope="row"><?= $no; ?></th>
        <td class="text-center"><?= $admin['nama']; ?></td>
        <td class="text-center"><?= $admin['email']; ?></td>
      </tr>
    <?php 
    $no++;
    endforeach ?>

  </tbody>
</table>