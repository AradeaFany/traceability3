<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="container-fluid py-4">

    <h2 class="fw-bold mb-4">
        Edit Produk
    </h2>

    <div class="card shadow border-0">

        <div class="card-body">

            <form action="/updateproduk/
<?= $produk['id']; ?>" method="post">

                <div class="mb-3">
                    <label>Nama Produk</label>

                    <input
                        type="text"
                        class="form-control"
                        value="<?= $produk['nama_produk']; ?>"
                        name="nama_produk"

                    >
                </div>

                <div class="mb-3">
                    <label>Kategori</label>

                    <input
                        type="text"
                        class="form-control"
                        value="<?= $produk['jenis']; ?>"
                        name="jenis"
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