<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="container-fluid py-4">

    <h2 class="fw-bold mb-4">
        Detail Produk
    </h2>

    <div class="card shadow border-0">

        <div class="card-body">

            <h4>Beras Premium</h4>

            <p>
                Produk pangan kualitas premium
                untuk distribusi nasional.
            </p>

            <hr>

            <p>
                <strong>Kategori:</strong>
                Pangan
            </p>

            <p>
                <strong>Kode Batch:</strong>
                BT001
            </p>

            <p>
                <strong>Status:</strong>
                Distribusi
            </p>

        </div>

    </div>

</div>

<?= $this->endSection() ?>