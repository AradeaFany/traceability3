<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>QR Code</title>

<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet"
>

</head>

<body class="bg-light">

<div class="container py-5 text-center">

    <div class="card shadow border-0 p-5">

        <h2 class="fw-bold mb-4">
            QR Code Traceability
        </h2>

        <img
            src="https://api.qrserver.com/v1/create-qr-code/?size=300x300&data=http://localhost:8080/trace/1"
            class="img-fluid"
        >

        <div class="mt-4">

            <a href="/trace/1" class="btn btn-primary">

                Buka Tracking

            </a>

        </div>

    </div>

</div>

</body>
</html>