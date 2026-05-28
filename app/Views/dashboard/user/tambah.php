<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="container-fluid py-4">

<h2 class="fw-bold mb-4">
Tambah User
</h2>

<div class="card shadow border-0">

<div class="card-body">

<form action="/saveuser"
method="post">

<div class="mb-3">

<label>Nama</label>

<input
type="text"
name="nama"
class="form-control">

</div>

<div class="mb-3">

<label>Email</label>

<input
type="email"
name="email"
class="form-control">

</div>

<div class="mb-3">

<label>Password</label>

<input
type="password"
name="password"
class="form-control">

</div>

<div class="mb-3">

<label>Role</label>

<select
name="role"
class="form-control">

<option value="admin">
Admin
</option>

<option value="supplier">
Supplier
</option>

<option value="pabrik">
Pabrik
</option>

<option value="distributor">
Distributor
</option>

<option value="konsumen">
Konsumen
</option>

</select>

</div>

<button
class="btn btn-primary">

Simpan

</button>

</form>

</div>

</div>

</div>

<?= $this->endSection() ?>