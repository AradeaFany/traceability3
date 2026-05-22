<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<h2 class="mb-4">Dashboard</h2>

<div class="row">

    <div class="col-md-4">

        <div class="card shadow border-0">

            <div class="card-body">

                <h5>Total Produk</h5>

                <h2>10</h2>

            </div>

        </div>

    </div>

    <div class="col-md-4">

        <div class="card shadow border-0">

            <div class="card-body">

                <h5>Total Batch</h5>

                <h2>5</h2>

            </div>

        </div>

    </div>

</div>

<div class="card mt-4 shadow border-0">

    <div class="card-header bg-dark text-white">
        Data Distribusi
    </div>

    <div class="card-body">

        <table class="table table-hover">

            <thead>

                <tr>
                    <th>No</th>
                    <th>Produk</th>
                    <th>Status</th>
                    <th>Tanggal</th>
                </tr>

            </thead>

            <tbody>

                <tr>
                    <td>1</td>
                    <td>Kopi Arabica</td>
                    <td>
                        <span class="badge bg-success">
                            Selesai
                        </span>
                    </td>
                    <td>22 Mei 2026</td>
                </tr>

            </tbody>

        </table>

    </div>

</div>

<?= $this->endSection() ?>