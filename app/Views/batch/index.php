<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="container-fluid py-4">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>

            <h2 class="fw-bold">
                Batch Produk
            </h2>

            <p class="text-muted">
                Monitoring data batch distribusi
            </p>

        </div>

        <a href="/batch/tambah" class="btn btn-primary">
            + Tambah Batch
        </a>

    </div>

    <div class="card shadow border-0">

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-hover align-middle">

                    <thead class="table-dark">

                        <tr>

                            <th>No</th>
                            <th>ID Produk</th>
                            <th>Lokasi</th>
                            <th>Tanggal</th>
                            <th>Kode Batch</th>
                            <th>Aksi</th>

                        </tr>

                    </thead>

                    <tbody>
                        <?php $no = 1; ?>
<?php foreach(
$batch as $b
): ?>

                        <tr>

                            <td><?= $no++; ?></td>
                            <td><?= $b['produk_id']; ?></td>
                            <td><?= $b['lokasi']; ?></td>
                            <td><?= $b['tanggal_panen']; ?></td>
                            <td><?= $b['kode_batch']; ?></td>

                    

                            <td>
                                <a href="/editbatch/<?= $b['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
                                <a href="/hapusbatch/<?= $b['id']; ?>" class="btn btn-sm btn-danger">Hapus</a>

<?php endforeach; ?>
                            </td>

                        </tr>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

<?= $this->endSection() ?>