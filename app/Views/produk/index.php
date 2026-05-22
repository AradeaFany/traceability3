<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="container-fluid py-4">

    <!-- HEADER -->
    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h2 class="fw-bold">Produk</h2>

            <p class="text-muted">
                Kelola data produk traceability
            </p>
        </div>

        <a href="/produk/tambah" class="btn btn-primary">
            + Tambah Produk
        </a>

    </div>

    <!-- CARD -->
    <div class="card shadow border-0">

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-hover align-middle">

                    <thead class="table-dark">

                        <tr>
                            <th>No</th>
                            <th>Nama Produk</th>
                            <th>Kategori</th>
                            <th>Aksi</th>
                        </tr>

                    </thead>

                    <tbody>

<?php foreach($produk as $p): ?>

<tr>

    <td>
        <?= $p['id']; ?>
    </td>

    <td>
        <?= $p['nama_produk']; ?>
    </td>

    <td>
        <?= $p['jenis']; ?>
    </td>

    <td>

        <a
        href="/editproduk/<?= $p['id']; ?>"
        class="btn btn-sm btn-warning">

        Edit

        </a>


        <a
        href="/hapusproduk/<?= $p['id']; ?>"
        class="btn btn-sm btn-danger">

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