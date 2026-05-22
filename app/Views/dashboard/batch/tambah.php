<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="container-fluid py-4">

    <h2 class="fw-bold mb-4">
        Tambah Batch
    </h2>

    <div class="card shadow border-0">

        <div class="card-body">

            <form>

                <div class="mb-3">

                    <label>Kode Batch</label>

                    <input
                        type="text"
                        class="form-control"
                        placeholder="Masukkan kode batch"
                    >

                </div>

                <div class="mb-3">

                    <label>Nama Produk</label>

                    <input
                        type="text"
                        class="form-control"
                        placeholder="Masukkan produk"
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