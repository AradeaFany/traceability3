<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="container-fluid py-4">

    <h2 class="fw-bold mb-4">
        Edit Batch
    </h2>

    <div class="card shadow border-0">

        <div class="card-body">

            <form action="/updatebatch/<?= $batch['id']; ?>" method="post">

                <div class="mb-3">
                    <label>Nama Produk</label>
                    <select  name="produk_id" class="form-control">
                    <?php foreach($produk as $p): ?> 
                    <option value="<?= $p['id']; ?>"<?=($p['id']==$batch['produk_id'])?'selected':''?>><?= $p['nama_produk']; ?>

                    </option>

                    <?php endforeach; ?>

                    </select>
                </div>

                <div class="mb-3">
                    <label>Tanggal Panen</label>
                    <input
                        type="date"
                        class="form-control"
                        value="<?= $batch['tanggal_panen']; ?>"
                        name="tanggal_panen">
                        
                </div>
                <div class="mb-3">
                    <label>Lokasi</label>
                    <input
                        type="text"
                        class="form-control"
                        value="<?= $batch['lokasi']; ?>"
                        name="lokasi">
                        
                </div>
                <div class="mb-3">
                    <label>Kode batch</label>
                    <input
                        type="text"
                        class="form-control"
                        value="<?= $batch['kode_batch']; ?>"
                        name="kode_batch">
                        
                </div>
                <button class="btn btn-warning">
                    Update
                </button>

            </form>

        </div>

    </div>

</div>

<?= $this->endSection() ?>