<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="container-fluid py-4">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>

            <h2 class="fw-bold">
                Data Proses
            </h2>

            <p class="text-muted">
                Monitoring proses distribusi produk
            </p>

        </div>

        <a href="/proses/tambah" class="btn btn-primary">

            + Tambah Proses

        </a>

    </div>

    <div class="card shadow border-0">

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-hover align-middle">

                    <thead class="table-dark">

                        <tr>

                            <th>No</th>
                            <th>Status</th>
                            <th>Lokasi</th>
                            <th>Tanggal</th>
                            <th>keterangan</th>

                            <th>Aksi</th>

                        </tr>

                    </thead>

                    <tbody>
<?php foreach($proses as $p): ?>

                        <tr>

                            <td><?= $p['id']; ?></td>

                            <td>
<?php

$warna='secondary';

if($p['status']=='Gudang')
$warna='warning';

elseif($p['status']=='Dikirim')
$warna='primary';

elseif($p['status']=='Sampai')
$warna='success';

?>

<span class="badge bg-<?= $warna ?>">
<?= $p['status'] ?>
</span>
                                

                            </td>

                            <td><?= $p['lokasi']; ?></td>

                            <td><?= $p['tanggal']; ?></td>
                            <td><?= $p['keterangan']; ?></td>

                            <td>

                                    <a href="
/editproses/
<?= $p['id']; ?>
" class="btn btn-sm btn-warning">Edit</a>
                                </button>

                                <a href="
/hapusproses/
<?= $p['id']; ?>
" class="btn btn-danger btn-sm">
                                    Hapus
</a>

                            </td>

                        </tr>
<?php endforeach; ?>
                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

<?= $this->endSection() ?>