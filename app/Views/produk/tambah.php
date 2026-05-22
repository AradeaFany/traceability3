<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="container-fluid py-4">

    <h2 class="fw-bold mb-4">
        Tambah Produk
    </h2>

    <div class="card shadow border-0">

        <div class="card-body">

             <form action="/saveproduk" method="post">


                <div class="mb-3">
                    <label>Nama Produk</label>

                    <input
                        name="nama_produk"
                        type="text"
                        class="form-control"
                        placeholder="Masukkan nama produk"
                    >
                </div>

                <div class="mb-3">
                    <label>Jenis</label>

                    <input
                        type="text"
                        class="form-control"
                        placeholder="Masukkan kategori"
                        name="jenis"
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
