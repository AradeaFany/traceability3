<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="container-fluid py-4">

    <div class="mb-4">

        <h2 class="fw-bold">
            Traceability
        </h2>

        <p class="text-muted">
            Monitoring perjalanan distribusi produk
        </p>

    </div>

    <div class="card shadow border-0">

        <div class="card-body">

            <table class="table table-hover">

                <thead class="table-dark">

                    <tr>

                        <th>No</th>
                        <th>Produk</th>
                        <th>Kode</th>
                        <th>Lokasi</th>
                        <th>Tanggal</th>

                        <th>Status</th>

                        <th>Aksi</th>

                    </tr>

                </thead>

                <tbody>
                <?php foreach($trace as $t): ?>
                    <tr>

                        <td>1</td>
                        <td><?= $t['nama_produk']; ?></td>
                        <td><?= $t['kode_batch']; ?></td>
                        <td><?= $t['lokasi']; ?></td>
                        <td><?= $t['tanggal']; ?></td>
                        <td>
                            <span class="badge bg-success">
                                <?= $t['status']; ?>
                            </span>
                        </td>
                       
                    </tr>
                <?php endforeach; ?>
                </tbody>

            </table>

        </div>

    </div>

</div>

<?= $this->endSection() ?>