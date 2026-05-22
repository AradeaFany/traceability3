<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="container-fluid py-4">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>

            <h2 class="fw-bold">
                Data Proses
            </h2>

            <p class="text-muted">
                Monitoring proses distribusi produk
            </p>

        </div>

        <a href="#" class="btn btn-primary">

            + Tambah Proses

        </a>

    </div>

    <div class="card shadow border-0">

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-hover align-middle">

                    <thead class="table-dark">

                        <tr>

                            <th>No</th>
                            <th>Status</th>
                            <th>Lokasi</th>
                            <th>Tanggal</th>
                            <th>Aksi</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td>1</td>

                            <td>

                                <span class="badge bg-success">
                                    Distribusi
                                </span>

                            </td>

                            <td>Bandung</td>

                            <td>22 Mei 2026</td>

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

    </div>

</div>

<?= $this->endSection() ?>