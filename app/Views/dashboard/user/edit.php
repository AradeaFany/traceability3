<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="container-fluid py-4">

<h2 class="fw-bold mb-4">
Edit User
</h2>

<div class="card shadow border-0">

<div class="card-body">

<form
action="/updateuser/<?= $user['id']; ?>"
method="post">

<div class="mb-3">

<label>Nama</label>

<input
type="text"
name="nama"
value="<?= $user['nama']; ?>"
class="form-control">

</div>

<div class="mb-3">

<label>Email</label>

<input
type="email"
name="email"
value="<?= $user['email']; ?>"
class="form-control">

</div>

<div class="mb-3">

<label>Role</label>

<select
name="role"
class="form-control">

<option
value="admin"
<?= $user['role']=='admin' ? 'selected' : ''; ?>>

Admin

</option>

<option
value="supplier"
<?= $user['role']=='supplier' ? 'selected' : ''; ?>>

Supplier

</option>

<option
value="pabrik"
<?= $user['role']=='pabrik' ? 'selected' : ''; ?>>

Pabrik

</option>

<option
value="distributor"
<?= $user['role']=='distributor' ? 'selected' : ''; ?>>

Distributor

</option>

<option
value="konsumen"
<?= $user['role']=='konsumen' ? 'selected' : ''; ?>>

Konsumen

</option>

</select>

</div>

<button
class="btn btn-primary">

Update

</button>

</form>

</div>

</div>

</div>

<?= $this->endSection() ?>