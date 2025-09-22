<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login - JNE Tangerang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body,
        html {
            height: 100%;
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #0d1b2a, #1b263b, #0d1b2a);
            color: #fff;
        }

        .bg-overlay {
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.4);
        }

        .login-container {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 40px;
            max-width: 380px;
            width: 100%;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.4);
            animation: fadeIn 0.8s ease-in-out;
        }

        .login-container h2 {
            font-weight: bold;
            color: #e0e0e0;
            margin-bottom: 5px;
            text-align: center;
        }

        .login-container p {
            font-size: 14px;
            text-align: center;
            color: #b0b0b0;
            margin-bottom: 25px;
        }

        .form-control {
            background-color: rgba(255, 255, 255, 0.15);
            border: none;
            color: #fff;
            border-radius: 8px;
            padding: 12px;
        }

        .form-control:focus {
            background-color: rgba(255, 255, 255, 0.25);
            color: #fff;
            box-shadow: 0 0 0 2px #1d4ed8;
        }

        .btn-login {
            background: #1d4ed8;
            border: none;
            padding: 12px;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            color: #fff;
            transition: all 0.3s ease;
        }

        .btn-login:hover {
            background: #0a2e75;
            transform: scale(1.05);
        }

        /* Tombol kembali */
        .back-btn {
            position: absolute;
            top: 20px;
            left: 20px;
            background-color: rgba(255, 255, 255, 0.15);
            border-radius: 50%;
            padding: 10px;
            text-decoration: none;
            color: #fff;
            font-size: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s;
        }

        .back-btn:hover {
            background-color: rgba(255, 255, 255, 0.3);
            transform: rotate(-15deg);
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>
    <div class="d-flex justify-content-center align-items-center vh-100 position-relative">
        <!-- Tombol kembali -->
        <a href="{{ route('welcome') }}" class="back-btn">
            <i class="bi bi-arrow-left"></i>
        </a>

        <div class="login-container">
            <h2><i class="bi bi-box-arrow-in-right me-2"></i> Login</h2>
            <p>Masukkan username dan password Anda</p>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" id="username" name="username" class="form-control"
                        placeholder="Masukkan username" required>
                </div>

                <div class="mb-4">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" name="password" class="form-control"
                        placeholder="Masukkan password" required>
                </div>

                <button type="submit" class="btn btn-login w-100">
                    <i class="bi bi-unlock me-1"></i> Login
                </button>
            </form>
        </div>
    </div>
</body>

</html>