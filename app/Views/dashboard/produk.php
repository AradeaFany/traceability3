<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="d-flex justify-content-between align-items-center mb-4">

    <h2>Data Produk</h2>

    <button class="btn btn-primary">
        + Tambah Produk
    </button>

</div>

<div class="card shadow border-0">

    <div class="card-body">

        <table class="table table-hover align-middle">

            <thead class="table-dark">

                <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Kategori</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>

            </thead>

            <tbody>

                <tr>

                    <td>1</td>

                    <td>Kopi Arabica</td>

                    <td>Minuman</td>

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

                    <td>Coklat Premium</td>

                    <td>Makanan</td>

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

</div>

<?= $this->endSection() ?>