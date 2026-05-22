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

        <a href="#" class="btn btn-primary">
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
                            <th>Kode Batch</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td>1</td>

                            <td>Beras Premium</td>

                            <td>Pangan</td>

                            <td>BT001</td>

                            <td>
                                <span class="badge bg-success">
                                    Distribusi
                                </span>
                            </td>

                            <td>

                                <button class="btn btn-sm btn-warning">
                                    Edit
                                </button>

                                <button class="btn btn-sm btn-danger">
                                    Hapus
                                </button>

                            </td>

                        </tr>

                        <tr>

                            <td>2</td>

                            <td>Minyak Goreng</td>

                            <td>Sembako</td>

                            <td>BT002</td>

                            <td>
                                <span class="badge bg-primary">
                                    Gudang
                                </span>
                            </td>

                            <td>

                                <button class="btn btn-sm btn-warning">
                                    Edit
                                </button>

                                <button class="btn btn-sm btn-danger">
                                    Hapus
                                </button>

                            </td>

                        </tr>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

<?= $this->endSection() ?>