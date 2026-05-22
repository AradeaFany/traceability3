<!DOCTYPE html>
<html lang="id">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $title ?? 'Dashboard' ?></title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>

        body{
            background: #f1f5f9;
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .sidebar{
            width: 260px;
            height: 100vh;
            background: #0f172a;
            position: fixed;
            left: 0;
            top: 0;
            padding-top: 20px;
        }

        .logo{
            color: white;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 40px;
        }

        .sidebar a{
            display: block;
            color: #cbd5e1;
            padding: 15px 25px;
            text-decoration: none;
            transition: 0.3s;
            border-left: 4px solid transparent;
        }

        .sidebar a:hover{
            background: #1e293b;
            color: white;
            border-left: 4px solid #3b82f6;
            padding-left: 30px;
        }

        .content{
            margin-left: 260px;
            padding: 30px;
        }

        .topbar{
            background: white;
            padding: 20px;
            border-radius: 20px;
            margin-bottom: 30px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
        }

        .card{
            border: none;
            border-radius: 20px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
            transition: 0.3s;
        }

        .card:hover{
            transform: translateY(-5px);
        }

    </style>

</head>
<body>

<div class="sidebar">

    <div class="logo">
        TRACEABILITY
    </div>

    <a href="/dashboard">
        <i class="bi bi-grid-fill"></i> Dashboard
    </a>

    <a href="/produk">
        <i class="bi bi-box-seam"></i> Produk
    </a>

    <a href="/dashboard">
        <i class="bi bi-upc-scan"></i> Batch
    </a>

    <a href="/dashboard">
        <i class="bi bi-gear-fill"></i> Proses
    </a>

    <a href="#">
        <i class="bi bi-truck"></i> Distribusi
    </a>

    <a href="/logout">
        <i class="bi bi-box-arrow-right"></i> Logout
    </a>

</div>

<div class="content">

    <?= $this->renderSection('content') ?>

</div>

</body>
</html>