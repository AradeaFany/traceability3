<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<h2>Data Proses</h2>

<a href="/proses/tambah">
Tambah
</a>


<table border="1">

<tr>

<th>ID</th>
<th>Status</th>
<th>Lokasi</th>
<th>Tanggal</th>
<th>Keterangan</th>

<th>Aksi</th>

</tr>


<?php foreach($proses as $p): ?>

<tr>

<td>
<?= $p['id']; ?>
</td>

<td>
<?= $p['status']; ?>
</td>

<td>
<?= $p['lokasi']; ?>
</td>

<td>
<?= $p['tanggal']; ?>
</td>
<td>
<?= $p['keterangan']; ?>
</td>

<td>

<a
href="/editproses/<?= $p['id']; ?>"
class="btn btn-warning">

Edit

</a>


<a
href="/hapusproses/<?= $p['id']; ?>"
class="btn btn-danger">

Hapus

</a>

</td>

</tr>

<?php endforeach; ?>


</table>

<?= $this->endSection() ?>