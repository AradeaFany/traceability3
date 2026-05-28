<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="container-fluid py-4">

    <div class="d-flex
    justify-content-between
    align-items-center
    mb-4">

        <div>

            <h2 class="fw-bold">
                Data User
            </h2>

            <p class="text-muted">
                Kelola user sistem
            </p>

        </div>

        <a
        href="/user/tambah"
        class="btn btn-primary">

        + Tambah User

        </a>

    </div>

    <div class="card shadow border-0">

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-hover">

                    <thead class="table-dark">

                        <tr>

                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Aksi</th>

                        </tr>

                    </thead>

                    <tbody>

                        <?php foreach($user as $u): ?>

                        <tr>

                            <td>
                                <?= $u['id']; ?>
                            </td>

                            <td>
                                <?= $u['nama']; ?>
                            </td>

                            <td>
                                <?= $u['email']; ?>
                            </td>

                            <td>

                                <span class="badge bg-primary">

                                <?= $u['role']; ?>

                                </span>

                            </td>

                            <td>

                                <a
                                href="/edituser/<?= $u['id']; ?>"
                                class="btn btn-warning btn-sm">

                                Edit

                                </a>

                                <a
                                href="/hapususer/<?= $u['id']; ?>"
                                class="btn btn-danger btn-sm">

                                Hapus

                                </a>

                            </td>

                        </tr>

                        <?php endforeach; ?>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

<?= $this->endSection() ?>