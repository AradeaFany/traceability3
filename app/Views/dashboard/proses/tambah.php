<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="container-fluid py-4">

    <div class="card shadow border-0">

        <div class="card-body">

            <h3 class="mb-4">
                Tambah Proses
            </h3>

            <form>

                <div class="mb-3">

                    <label class="form-label">
                        Status
                    </label>

                    <input
                        type="text"
                        class="form-control"
                        placeholder="Masukkan status"
                    >

                </div>

                <div class="mb-3">

                    <label class="form-label">
                        Lokasi
                    </label>

                    <input
                        type="text"
                        class="form-control"
                        placeholder="Masukkan lokasi"
                    >

                </div>

                <button class="btn btn-primary">
                    Simpan
                </button>

            </form>

        </div>

    </div>

</div>

<?= $this->endSection() ?>