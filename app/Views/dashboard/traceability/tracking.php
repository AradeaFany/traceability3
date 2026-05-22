<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="container-fluid py-4">

    <h2 class="fw-bold mb-4">
        Tracking Distribusi
    </h2>

    <div class="row text-center">

        <div class="col-md-3">

            <div class="card shadow border-0 p-4">

                <h1>🌾</h1>

                <h5>Petani</h5>

            </div>

        </div>

        <div class="col-md-3">

            <div class="card shadow border-0 p-4">

                <h1>🏭</h1>

                <h5>Gudang</h5>

            </div>

        </div>

        <div class="col-md-3">

            <div class="card shadow border-0 p-4">

                <h1>🚚</h1>

                <h5>Distributor</h5>

            </div>

        </div>

        <div class="col-md-3">

            <div class="card shadow border-0 p-4">

                <h1>🛒</h1>

                <h5>Retail</h5>

            </div>

        </div>

    </div>

</div>

<?= $this->endSection() ?>