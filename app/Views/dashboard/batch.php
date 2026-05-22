<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="topbar">

    <h3>Data Batch</h3>

    <p class="text-muted">
        Monitoring Batch Produk
    </p>

</div>

<div class="card p-4">

    <div class="d-flex justify-content-between mb-4">

        <h4>List Batch</h4>

        <button class="btn btn-primary">
            + Tambah Batch
        </button>

    </div>

    <table class="table table-hover">

        <thead class="table-dark">

            <tr>
                <th>No</th>
                <th>Kode Batch</th>
                <th>Produk</th>
                <th>Tanggal Produksi</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>

        </thead>

        <tbody>

            <tr>
                <td>1</td>
                <td>BT001</td>
                <td>Beras Premium</td>
                <td>22 Mei 2026</td>

                <td>
                    <span class="badge bg-success">
                        Aktif
                    </span>
                </td>

                <td>

                    <button class="btn btn-warning btn-sm">
                        Edit
                    </button>

                    <button class="btn btn-danger btn-sm">
                        Hapus
                    </button>

                </td>

            </tr>

            <tr>

                <td>2</td>
                <td>BT002</td>
                <td>Kopi Arabica</td>
                <td>22 Mei 2026</td>

                <td>
                    <span class="badge bg-primary">
                        Distribusi
                    </span>
                </td>

                <td>

                    <button class="btn btn-warning btn-sm">
                        Edit
                    </button>

                    <button class="btn btn-danger btn-sm">
                        Hapus
                    </button>

                </td>

            </tr>

        </tbody>

    </table>

</div>

<?= $this->endSection() ?>