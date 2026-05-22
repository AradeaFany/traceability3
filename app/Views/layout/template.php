<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title><?= $title ?? 'Traceability System' ?></title>

<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet"
>

<link
href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
rel="stylesheet"
>

</head>

<body class="bg-light">

<nav class="navbar navbar-dark bg-dark shadow">

    <div class="container-fluid">

        <span class="navbar-brand">
            Traceability System
        </span>

        <a href="/logout" class="btn btn-danger btn-sm">
            Logout
        </a>

    </div>

</nav>

<div class="container-fluid">

    <div class="row">

        <div class="col-md-2 bg-white shadow-sm min-vh-100 p-3">

            <h5>MENU</h5>

            <hr>

            <ul class="nav flex-column">

                <li class="nav-item mb-2">
                    <a href="/" class="nav-link">
                        <i class="bi bi-house"></i>
                        Dashboard
                    </a>
                </li>

                <li class="nav-item mb-2">
                    <a href="/produk" class="nav-link">
                        <i class="bi bi-box"></i>
                        Produk
                    </a>
                </li>

                <li class="nav-item mb-2">
                    <a href="/batch" class="nav-link">
                        <i class="bi bi-upc-scan"></i>
                        Batch
                    </a>
                </li>

            </ul>

        </div>

        <div class="col-md-10 p-4">

            <?= $this->renderSection('content') ?>

        </div>

    </div>

</div>

</body>
</html>