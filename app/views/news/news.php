<?php Flasher::Flash(); ?>
<a href="<?= BASEURL; ?>/admin/pg_tambah_berita"><button type="button" class="btn btn-info mb-3">Tambah Berita Baru</button></a>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Judul</th>
      <th scope="col">Penulis</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Detail</th>
      <th scope="col">Hapus</th>
    </tr>
  </thead>
  <tbody>
      <?php foreach ($data['news'] as $news): ?>
        <tr>
        <th scope="row">1</th>
        <td><?= $news['judul']; ?></td>
        <td><?= $news['username']; ?></td>
        <td><?= $news['tanggal']; ?></td>
        <td class="text-center">
          <a href="<?= BASEURL; ?>/Admin/pg_detailnews/<?= $news['id_news']; ?>"><button type="button" class="btn btn-success btn-sm" >Detail</button></a>
        </td>
        <td class="text-center"><button type="button" class="btn btn-danger btn-sm pass-value" data-toggle="modal" data-target="#modalHapus" data-id="<?= $news['id_news']; ?>" data-nama="<?= $news['judul']; ?>" >Hapus</button></td>
        </tr>
      <?php endforeach ?>
  </tbody>
</table>