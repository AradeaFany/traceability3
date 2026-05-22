<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<h2 class="mb-4">
    Traceability Produk
</h2>

<div class="card shadow border-0">

    <div class="card-body">

        <div class="mb-4">

            <h4>Kopi Arabica</h4>

            <span class="badge bg-success">
                Selesai Distribusi
            </span>

        </div>

        <div class="timeline">

            <!-- Supplier -->

            <div class="card mb-3 border-start border-primary border-4">

                <div class="card-body">

                    <h5>Supplier</h5>

                    <p class="mb-1">
                        PT Kopi Nusantara
                    </p>

                    <small class="text-muted">
                        20 Mei 2026
                    </small>

                </div>

            </div>

            <!-- Batch -->

            <div class="card mb-3 border-start border-warning border-4">

                <div class="card-body">

                    <h5>Batch Produksi</h5>

                    <p class="mb-1">
                        Kode Batch : BT001
                    </p>

                    <small class="text-muted">
                        21 Mei 2026
                    </small>

                </div>

            </div>

            <!-- Produksi -->

            <div class="card mb-3 border-start border-success border-4">

                <div class="card-body">

                    <h5>Proses Produksi</h5>

                    <p class="mb-1">
                        Roasting & Packaging
                    </p>

                    <small class="text-muted">
                        22 Mei 2026
                    </small>

                </div>

            </div>

            <!-- Distribusi -->

            <div class="card mb-3 border-start border-danger border-4">

                <div class="card-body">

                    <h5>Distribusi</h5>

                    <p class="mb-1">
                        Distributor Bandung
                    </p>

                    <small class="text-muted">
                        23 Mei 2026
                    </small>

                </div>

            </div>

        </div>

    </div>

</div>

<?= $this->endSection() ?>