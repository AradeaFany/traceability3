<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="d-flex justify-content-between align-items-center mb-4">

    <h2>Data Batch</h2>

    <button class="btn btn-primary">
        + Tambah Batch
    </button>

</div>

<div class="card shadow border-0">

    <div class="card-body">

        <table class="table table-hover align-middle">

            <thead class="table-dark">

                <tr>
                    <th>No</th>
                    <th>Kode Batch</th>
                    <th>Produk</th>
                    <th>Supplier</th>
                    <th>Status</th>
                    <th>Tanggal</th>
                    <th>QR</th>
                    <th>Aksi</th>
                </tr>

            </thead>

            <tbody>

                <tr>

                    <td>1</td>

                    <td>BT001</td>

                    <td>Kopi Arabica</td>

                    <td>PT Kopi Nusantara</td>

                    <td>
                        <span class="badge bg-success">
                            Produksi
                        </span>
                    </td>

                    <td>22 Mei 2026</td>

                    <td>

                        <button class="btn btn-dark btn-sm">
                            QR
                        </button>

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

                    <td>Coklat Premium</td>

                    <td>PT Coklat Indo</td>

                    <td>
                        <span class="badge bg-primary">
                            Distribusi
                        </span>
                    </td>

                    <td>22 Mei 2026</td>

                    <td>

                        <button class="btn btn-dark btn-sm">
                            QR
                        </button>

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

</div>

<?= $this->endSection() ?>