<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Tracking Produk</title>

<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet"
>

<style>

body{
    background:#f1f5f9;
}

.card-track{
    border-radius:20px;
}

.timeline{
    border-left:4px solid #2563eb;
    padding-left:20px;
}

.timeline-item{
    margin-bottom:25px;
}

</style>

</head>

<body>

<div class="container py-5">

    <div class="card shadow border-0 card-track">

        <div class="card-body p-5">

            <h2 class="fw-bold mb-4">
                Traceability Produk
            </h2>

            <p>
                <strong>Nama Produk:</strong>
                Beras Premium
            </p>

            <p>
                <strong>Kode Batch:</strong>
                BT001
            </p>

            <p>
                <strong>Status:</strong>

                <span class="badge bg-success">
                    Distribusi
                </span>

            </p>

            <hr class="my-4">

            <div class="timeline">

                <div class="timeline-item">

                    🌾 Produk dipanen petani

                </div>

                <div class="timeline-item">

                    🏭 Produk masuk gudang

                </div>

                <div class="timeline-item">

                    🚚 Produk dikirim distributor

                </div>

                <div class="timeline-item">

                    🛒 Produk sampai retail

                </div>

            </div>

        </div>

    </div>

</div>

</body>
</html>