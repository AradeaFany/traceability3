<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="container-fluid py-4">

    <!-- TITLE -->
    <div class="mb-4">

        <?php if(session()->get('role') == 'admin'): ?>

<h2>Dashboard Admin</h2>

<?php endif; ?>


<?php if(session()->get('role') == 'supplier'): ?>

<h2>Dashboard Supplier</h2>

<?php endif; ?>


<?php if(session()->get('role') == 'pabrik'): ?>

<h2>Dashboard Pabrik</h2>

<?php endif; ?>
<?php if(session()->get('role') == 'konsumen'): ?>

<h2>Dashboard Konsumen</h2>

<?php endif; ?>
<?php if(session()->get('role') == 'distributor'): ?>

<h2>Dashboard Distributor</h2>

<?php endif; ?>

        <p class="text-muted">
            Monitoring supply chain produk secara realtime
        </p>

    </div>

    <!-- CARD STATISTIK -->
    <div class="row">

        <div class="col-md-3 mb-4">

            <div class="card shadow border-0">

                <div class="card-body">

                    <h6 class="text-muted">
                        Total Produk
                    </h6>

                    <h2 class="fw-bold">
                        <?= $totalProduk ?>

                    </h2>

                </div>

            </div>

        </div>

        <div class="col-md-3 mb-4">

            <div class="card shadow border-0">

                <div class="card-body">

                    <h6 class="text-muted">
                        Total Batch
                    </h6>

                    <h2 class="fw-bold">
                         <?= $totalBatch ?>
                    </h2>

                </div>

            </div>

        </div>

        <div class="col-md-3 mb-4">

            <div class="card shadow border-0">

                <div class="card-body">

                    <h6 class="text-muted">
                        Distribusi Aktif
                    </h6>

                    <h2 class="fw-bold">
                       
<?= $distribusiAktif ?>

                    </h2>

                </div>

            </div>

        </div>

        <div class="col-md-3 mb-4">

            <div class="card shadow border-0">

                <div class="card-body">

                    <h6 class="text-muted">
                        Produk Sampai
                    </h6>

                    <h2 class="fw-bold">
                        <?= $produkSampai ?>
                    </h2>

                </div>

            </div>

        </div>

    </div>

    <!-- AKTIVITAS -->
    <div class="card shadow border-0">

        <div class="card-body">

            <h5 class="fw-bold mb-4">
                Aktivitas Distribusi
            </h5>

            <table class="table table-hover">

                <thead class="table-dark">

                    <tr>
                        <th>Produk</th>
                        <th>Batch</th>
                        <th>Status</th>
                        <th>Tanggal</th>
                    </tr>

                </thead>

                <tbody>
                    <?php foreach($aktivitas as $a): ?>
                    <tr>
                        <td><?= $a['nama_produk']; ?></td>
                        <td><?= $a['kode_batch']; ?></td>
                        <td>
                            <span class="badge bg-success">
<?= $a['status']; ?>
                            </span>
                        </td>
                        <td><?= $a['tanggal']; ?></td>
                    </tr>
<?php endforeach; ?>
                </tbody>

            </table>

        </div>

    </div>

</div>

<?= $this->endSection() ?>