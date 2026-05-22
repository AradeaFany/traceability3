<!DOCTYPE html>
<html lang="id">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Register</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>

        body{
            height: 100vh;
            background: linear-gradient(135deg, #0f172a, #1d4ed8);
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, Helvetica, sans-serif;
        }

        .register-card{
            width: 500px;
            background: white;
            padding: 40px;
            border-radius: 25px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.3);
        }

        .title{
            text-align: center;
            font-size: 35px;
            font-weight: bold;
            color: #0f172a;
            margin-bottom: 10px;
        }

        .subtitle{
            text-align: center;
            color: gray;
            margin-bottom: 30px;
        }

        .form-control{
            height: 50px;
            border-radius: 12px;
        }

        .input-group-text{
            border-radius: 12px 0 0 12px;
        }

        .btn-register{
            height: 50px;
            border-radius: 12px;
            background: #2563eb;
            border: none;
            font-weight: bold;
        }

        .btn-register:hover{
            background: #1d4ed8;
        }

        .login-text{
            text-align: center;
            margin-top: 20px;
            color: gray;
        }

        .login-text a{
            text-decoration: none;
            font-weight: bold;
        }

    </style>

</head>
<body>

<div class="register-card">

    <div class="title">
        REGISTER
    </div>

    <div class="subtitle">
        Buat akun baru Traceability System
    </div>

    <form>

        <div class="mb-3">

            <label class="mb-2">Nama</label>

            <div class="input-group">

                <span class="input-group-text">
                    <i class="bi bi-person-fill"></i>
                </span>

                <input type="text" class="form-control" placeholder="Masukkan nama">

            </div>

        </div>

        <div class="mb-3">

            <label class="mb-2">Email</label>

            <div class="input-group">

                <span class="input-group-text">
                    <i class="bi bi-envelope-fill"></i>
                </span>

                <input type="email" class="form-control" placeholder="Masukkan email">

            </div>

        </div>

        <div class="mb-4">

            <label class="mb-2">Password</label>

            <div class="input-group">

                <span class="input-group-text">
                    <i class="bi bi-lock-fill"></i>
                </span>

                <input type="password" class="form-control" placeholder="Masukkan password">

            </div>

        </div>

        <button class="btn btn-primary btn-register w-100">
            REGISTER
        </button>

    </form>

    <div class="login-text">

        Sudah punya akun?
        <a href="/login">
            Login
        </a>

    </div>

</div>

</body>
</html>