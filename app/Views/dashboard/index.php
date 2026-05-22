<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="topbar">

    <h3>
        Dashboard Admin
    </h3>

    <p class="text-muted">
        Food Supply Chain Monitoring System
    </p>

</div>

<div class="row">

    <div class="col-md-4 mb-4">

        <div class="card p-4">

            <h5>Total Produk</h5>

            <h2>25</h2>

        </div>

    </div>

    <div class="col-md-4 mb-4">

        <div class="card p-4">

            <h5>Total Batch</h5>

            <h2>14</h2>

        </div>

    </div>

    <div class="col-md-4 mb-4">

        <div class="card p-4">

            <h5>Total Distribusi</h5>

            <h2>40</h2>

        </div>

    </div>

</div>

<div class="card p-4">

    <h4 class="mb-4">
        Aktivitas Supply Chain
    </h4>

    <table class="table table-bordered">

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
                <td>Beras Premium</td>
                <td>Diproses</td>
                <td>22 Mei 2026</td>
            </tr>

        </tbody>

    </table>

</div>

<?= $this->endSection() ?>