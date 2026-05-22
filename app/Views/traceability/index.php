<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="container-fluid py-4">

    <div class="mb-4">

        <h2 class="fw-bold">
            Traceability
        </h2>

        <p class="text-muted">
            Monitoring perjalanan distribusi produk
        </p>

    </div>

    <div class="card shadow border-0">

        <div class="card-body">

            <table class="table table-hover">

                <thead class="table-dark">

                    <tr>

                        <th>No</th>
                        <th>Produk</th>
                        <th>Batch</th>
                        <th>Status</th>
                        <th>Aksi</th>

                    </tr>

                </thead>

                <tbody>

                    <tr>

                        <td>1</td>

                        <td>Beras Premium</td>

                        <td>BT001</td>

                        <td>

                            <span class="badge bg-success">
                                Distribusi
                            </span>

                        </td>

                        <td>

                            <button class="btn btn-info btn-sm">
                                Tracking
                            </button>

                            <button class="btn btn-primary btn-sm">
                                Detail
                            </button>

                        </td>

                    </tr>

                </tbody>

            </table>

        </div>

    </div>

</div>

<?= $this->endSection() ?>