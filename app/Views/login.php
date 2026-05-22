<!DOCTYPE html>
<html lang="id">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Traceability System</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body{
            height: 100vh;
            background: linear-gradient(135deg, #0f172a, #1d4ed8);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container-login{
            width: 950px;
            height: 550px;
            background: rgba(255,255,255,0.1);
            border-radius: 30px;
            overflow: hidden;
            backdrop-filter: blur(10px);
            box-shadow: 0 10px 40px rgba(0,0,0,0.3);
            display: flex;
        }

        .left-side{
            width: 50%;
            background: linear-gradient(135deg, #2563eb, #1e3a8a);
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding: 40px;
        }

        .left-side h1{
            font-size: 42px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .left-side p{
            text-align: center;
            opacity: 0.9;
            line-height: 1.8;
        }

        .right-side{
            width: 50%;
            background: white;
            padding: 60px;
            display: flex;
            justify-content: center;
            flex-direction: column;
        }

        .login-title{
            font-size: 32px;
            font-weight: bold;
            color: #0f172a;
            margin-bottom: 10px;
        }

        .login-subtitle{
            color: gray;
            margin-bottom: 35px;
        }

        .form-control{
            height: 50px;
            border-radius: 12px;
        }

        .input-group-text{
            border-radius: 12px 0 0 12px;
        }

        .btn-login{
            height: 50px;
            border-radius: 12px;
            background: #2563eb;
            border: none;
            font-weight: bold;
            transition: 0.3s;
        }

        .btn-login:hover{
            background: #1d4ed8;
        }

        .register-text{
            margin-top: 20px;
            text-align: center;
            color: gray;
        }

        .register-text a{
            color: #2563eb;
            text-decoration: none;
            font-weight: bold;
        }

        @media(max-width: 900px){

            .container-login{
                width: 95%;
                height: auto;
                flex-direction: column;
            }

            .left-side,
            .right-side{
                width: 100%;
            }

            .left-side{
                padding: 50px 30px;
            }

        }

    </style>

</head>
<body>

<div class="container-login">

    <!-- LEFT -->
    <div class="left-side">

        <h1>TRACEABILITY</h1>

        <p>
            Food Supply Chain Monitoring System
            untuk memantau distribusi produk secara
            transparan dan modern.
        </p>

    </div>

    <!-- RIGHT -->
    <div class="right-side">

        <div class="login-title">
            Login
        </div>

        <div class="login-subtitle">
            Silakan login untuk melanjutkan
        </div>

        <form action="/login-process" method="post">

            <div class="mb-3">

                <label class="mb-2">Email</label>

                <div class="input-group">

                    <span class="input-group-text">
                        <i class="bi bi-envelope-fill"></i>
                    </span>

                    <input
                        type="email"
                        name="email"
                        class="form-control"
                        placeholder="Masukkan email"
                        required
                    >

                </div>

            </div>

            <div class="mb-4">

                <label class="mb-2">Password</label>

                <div class="input-group">

                    <span class="input-group-text">
                        <i class="bi bi-lock-fill"></i>
                    </span>

                    <input
                        type="password"
                        name="password"
                        class="form-control"
                        placeholder="Masukkan password"
                        required
                    >

                </div>

            </div>

            <button type="submit" class="btn btn-primary btn-login w-100">
                LOGIN
            </button>

        </form>

        <div class="register-text">

            Belum punya akun?
            <a href="#">
                Register
            </a>

        </div>

    </div>

</div>

</body>
</html>