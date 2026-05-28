<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="container-fluid py-4">

    <div class="card shadow border-0">

        <div class="card-body">

            <h3 class="mb-4">
                Edit Proses
            </h3>

            <form action="/updateproses/<?= $proses['id']; ?>"
method="post">

                <div class="mb-3">

                    <label class="form-label">
                        Status
                    </label>

                    <input
                        type="text"
                        class="form-control"
                        value="<?= $proses['status']; ?>"
                        name="status"
                    >

                </div>

                <div class="mb-3">

                    <label class="form-label">
                        Lokasi
                    </label>

                    <input
                        type="text"
                        class="form-control"
                        value="<?= $proses['lokasi']; ?>"
                        name="lokasi"
                    >

                </div>
                <div class="mb-3">

                    <label class="form-label">
                        Tanggal
                    </label>

                    <input
                        type="text"
                        class="form-control"
                        value="<?= $proses['tanggal']; ?>"
                        name="tanggal"
                    >

                </div>
                <div class="mb-3">

                    <label class="form-label">
                        Keterangan
                    </label>

                    <input
                        type="text"
                        class="form-control"
                        value="<?= $proses['keterangan']; ?>"
                        name="keterangan"
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