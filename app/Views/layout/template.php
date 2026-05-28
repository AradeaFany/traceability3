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
    overflow-x:hidden;
    background:#f8fafc;
}

.sidebar{
    min-height:100vh;
    background:#0f172a;
}

.logo-title{
    font-size:22px;
    font-weight:bold;
    color:white;
    text-align:center;
}

.sidebar .nav-link{
    color:#cbd5e1;
    padding:12px 15px;
    border-radius:10px;
    transition:0.3s;
    margin-bottom:5px;
}

.sidebar .nav-link:hover{
    background:#1e293b;
    color:white;
}

.sidebar .nav-link i{
    margin-right:10px;
}

.content-area{
    min-height:100vh;
    background:#f8fafc;
}

.card{
    border-radius:15px;
}

.table-responsive{
    overflow-x:auto;
}

.btn{
    border-radius:10px;
}

@media(max-width:768px){

    .sidebar{
        min-height:auto;
    }

    .logo-title{
        margin-bottom:20px;
    }

    .content-area{
        padding:20px !important;
    }

}

</style>

</head>

<body>

<div class="container-fluid">

    <div class="row">

        <div class="col-md-2 sidebar p-3">

            <div class="logo-title mb-4">
                TRACEABILITY
            </div>

            <ul class="nav flex-column">

                <li class="nav-item">

                    <a href="/" class="nav-link">

                        <i class="bi bi-house-door-fill"></i>

                        Dashboard

                    </a>

                </li>
                <?php if(

                session()->get('role')
                =='admin'

                || 

                session()->get('role')
                =='supplier'

                ): ?>
                <li class="nav-item">

                    <a href="/produk" class="nav-link">

                        <i class="bi bi-box-seam"></i>

                        Produk

                    </a>
                <?php endif; ?>
                </li>
                <?php if(

                session()->get('role')
                =='admin'

                || 

                session()->get('role')
                =='supplier'

                ): ?>
                <li class="nav-item">

                    <a href="/batch" class="nav-link">

                        <i class="bi bi-upc-scan"></i>

                        Batch

                    </a>

                </li>
                <?php endif; ?>
                <?php if(

                session()->get('role')
                =='admin'

                || 

                session()->get('role')
                =='pabrik'

                ): ?>
                <li class="nav-item">

                    <a href="/proses" class="nav-link">

                        <i class="bi bi-diagram-3"></i>

                        Proses

                    </a>
                </li>
                <?php endif; ?>
                <?php if(

                session()->get('role')
                =='admin'

                ||

                session()->get('role')
                =='distributor'

                ||

                session()->get('role')
                =='konsumen'

                ): ?>

                <li class="nav-item">

                    <a href="/traceability" class="nav-link">

                        <i class="bi bi-geo-alt-fill"></i>

                        Traceability

                    </a>

                </li>
                <?php endif; ?>
        
                <?php if(
                session()->get('role')
                =='admin'
                ): ?>
                <li class="nav-item">

                    <a href="/user" class="nav-link">

                        <i class="bi bi-person-fill"></i>

                        User

                    </a>

                </li>
                <?php endif; ?>
                <li class="nav-item mt-4">

                    <a href="/logout" class="nav-link text-danger">

                        <i class="bi bi-box-arrow-right"></i>

                        Logout

                    </a>

                </li>

            </ul>

        </div>

        <div class="col-md-10 p-4 content-area">

            <?= $this->renderSection('content') ?>

        </div>

    </div>

</div>

</body>
</html>