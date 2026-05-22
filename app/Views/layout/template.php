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

<style>

body{
    overflow-x: hidden;
}

.sidebar{
    min-height: 100vh;
    background: #0f172a;
}

.sidebar .nav-link{
    color: #cbd5e1;
    padding: 12px;
    border-radius: 10px;
    transition: 0.3s;
}

.sidebar .nav-link:hover{
    background: #1e293b;
    color: white;
}

.sidebar .nav-link i{
    margin-right: 10px;
}

.logo-title{
    font-size: 22px;
    font-weight: bold;
    color: white;
}

.content-area{
    background: #f8fafc;
    min-height: 100vh;
}

</style>

</head>

<body>

<div class="container-fluid">

    <div class="row">

        <!-- SIDEBAR -->
        <div class="col-md-2 sidebar p-3">

            <div class="logo-title mb-4">
                TRACEABILITY
            </div>

            <ul class="nav flex-column">

                <li class="nav-item mb-2">

                    <a href="/" class="nav-link">

                        <i class="bi bi-house-door-fill"></i>

                        Dashboard

                    </a>

                </li>

                <li class="nav-item mb-2">

                    <a href="/produk" class="nav-link">

                        <i class="bi bi-box-seam"></i>

                        Produk

                    </a>

                </li>

                <li class="nav-item mb-2">

                    <a href="/batch" class="nav-link">

                        <i class="bi bi-upc-scan"></i>

                        Batch

                    </a>

                </li>

                <li class="nav-item mb-2">

                    <a href="/traceability" class="nav-link">

                        <i class="bi bi-diagram-3-fill"></i>

                        Traceability

                    </a>

                </li>

                <li class="nav-item mt-4">

                    <a href="/logout" class="nav-link text-danger">

                        <i class="bi bi-box-arrow-right"></i>

                        Logout

                    </a>

                </li>

            </ul>

        </div>

        <!-- CONTENT -->
        <div class="col-md-10 p-4 content-area">

            <?= $this->renderSection('content') ?>

        </div>

    </div>

</div>

</body>
</html>