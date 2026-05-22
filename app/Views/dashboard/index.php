<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="container-fluid py-4">

    <!-- TITLE -->
    <div class="mb-4">

        <h2 class="fw-bold">
            Dashboard Traceability
        </h2>

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
                        120
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
                        45
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
                        18
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
                        97
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

                    <tr>
                        <td>Beras Premium</td>
                        <td>BT001</td>
                        <td>
                            <span class="badge bg-success">
                                Dikirim
                            </span>
                        </td>
                        <td>22 Mei 2026</td>
                    </tr>

                    <tr>
                        <td>Minyak Goreng</td>
                        <td>BT002</td>
                        <td>
                            <span class="badge bg-warning">
                                Gudang
                            </span>
                        </td>
                        <td>21 Mei 2026</td>
                    </tr>

                </tbody>

            </table>

        </div>

    </div>

</div>

<?= $this->endSection() ?>