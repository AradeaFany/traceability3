<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="container-fluid py-4">

    <h2 class="fw-bold mb-4">
        Detail Traceability
    </h2>

    <div class="card shadow border-0">

        <div class="card-body">
<?php foreach($trace as $t): ?>
            <p>
                <strong>Produk:</strong>
                <?= $t['nama_produk']; ?>

            </p>

            <p>
                <strong>Batch:</strong>
                <?= $t['kode_batch']; ?>

            </p>

            <p>
                <strong>Status:</strong>
                <?= $t['status']; ?>

            </p>
            <p>
                <strong>Lokasi:</strong>
                <?= $t['lokasi']; ?>

            </p>
            <p>
                <strong>Tanggal:</strong>
                <?= $t['tanggal']; ?>

            </p>
            <p>
                <strong>Keterangan:</strong>
                <?= $t['keterangan']; ?>

            </p>
<?php endforeach ?>
        </div>

    </div>

</div>

<?= $this->endSection() ?>