<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="topbar">

    <h3>
        Data Produk
    </h3>

    <p class="text-muted">
        Manajemen Produk Supply Chain
    </p>

</div>

<div class="card p-4">

    <div class="d-flex justify-content-between mb-4">

        <h4>List Produk</h4>

        <button class="btn btn-primary">
            + Tambah Produk
        </button>

    </div>

    <table class="table table-hover">

        <thead class="table-dark">

            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Kategori</th>
                <th>Supplier</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>

        </thead>

        <tbody>

            <tr>
                <td>1</td>
                <td>Beras Premium</td>
                <td>Pangan</td>
                <td>PT Maju Tani</td>
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
                <td>Kopi Arabica</td>
                <td>Minuman</td>
                <td>PT Kopi Nusantara</td>
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