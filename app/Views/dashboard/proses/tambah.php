<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="container-fluid py-4">

    <div class="card shadow border-0">

        <div class="card-body">

            <h3 class="mb-4">
                Tambah Proses
            </h3>

            <form action="/saveproses"
method="post">
                <div class="mb-3">

                    <label class="form-label">
                        Batch ID
                    </label>
<select class="form-control" name="batch_id">
                    <?php foreach($batch as $b): ?>

<option 
class="form-control"
value="<?= $b['id']; ?>">

<?= $b['kode_batch']; ?>

</option>

<?php endforeach; ?>

</select>

                </div>
                <div class="mb-3">

                    <label class="form-label">
                        Status
                    </label>
<select name="status"
class="form-control">

<option>Produksi</option>

<option>Gudang</option>

<option>Dikirim</option>

<option>Transit</option>

<option>Sampai</option>

<option>Selesai</option>

</select>
                    

                 

                </div>

                <div class="mb-3">

                    <label class="form-label">
                        Lokasi
                    </label>

                    <input
                        type="text"
                        class="form-control"
                        placeholder="Masukkan lokasi"
                        name="lokasi"
                    >

                </div>
                <div class="mb-3">

                    <label class="form-label">
                        Tanggal
                    </label>

                    <input
                        type="date"
                        class="form-control"
                        placeholder="Masukkan Tanggal"
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
                        placeholder="Masukkan Keterangan"
                        name="keterangan"
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