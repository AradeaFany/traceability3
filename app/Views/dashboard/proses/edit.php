<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="container-fluid py-4">

    <div class="card shadow border-0">

        <div class="card-body">

            <h3 class="mb-4">
                Edit Proses
            </h3>

            <form>

                <div class="mb-3">

                    <label class="form-label">
                        Status
                    </label>

                    <input
                        type="text"
                        class="form-control"
                        value="Distribusi"
                    >

                </div>

                <div class="mb-3">

                    <label class="form-label">
                        Lokasi
                    </label>

                    <input
                        type="text"
                        class="form-control"
                        value="Bandung"
                    >

                </div>

                <button class="btn btn-warning">
                    Update
                </button>

            </form>

        </div>

    </div>

</div>

<?= $this->endSection() ?>