<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - JNE Express</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #0d1b2a, #1b263b, #0d1b2a);
            color: #fff;
        }

        .register-container {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(12px);
            border-radius: 15px;
            padding: 40px;
            max-width: 400px;
            width: 100%;
            box-shadow: 0 8px 25px rgba(0,0,0,0.4);
            animation: fadeIn 0.8s ease-in-out;
        }

        .register-container h2 {
            font-weight: bold;
            color: #e0e0e0;
            margin-bottom: 5px;
            text-align: center;
        }

        .register-container p {
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

        .btn-register {
            background: #1d4ed8;
            border: none;
            padding: 12px;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            color: #fff;
            transition: all 0.3s ease;
        }

        .btn-register:hover {
            background: #0a2e75;
            transform: scale(1.05);
        }

        .back-btn {
            position: absolute;
            top: 20px;
            left: 20px;
            background-color: rgba(255,255,255,0.15);
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
            background-color: rgba(255,255,255,0.3);
            transform: rotate(-15deg);
        }

        .alert ul { margin-bottom: 0; padding-left: 20px; }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <div class="d-flex justify-content-center align-items-center vh-100 position-relative">
        <!-- Tombol kembali ke welcome -->
        <a href="{{ route('welcome') }}" class="back-btn" title="Kembali ke beranda">
            <i class="bi bi-arrow-left"></i>
        </a>

        <div class="register-container">
            <h2><i class="bi bi-person-plus me-2"></i> Register</h2>
            <p>Buat akun baru untuk mengakses sistem</p>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" id="name" name="name" class="form-control"
                           placeholder="Masukkan nama" required value="{{ old('name') }}">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" name="email" class="form-control"
                           placeholder="Masukkan email" required value="{{ old('email') }}">
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" name="password" class="form-control"
                           placeholder="Masukkan password" required>
                </div>

                <div class="mb-4">
                    <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation"
                           class="form-control" placeholder="Konfirmasi password" required>
                </div>

                <button type="submit" class="btn btn-register w-100">
                    <i class="bi bi-person-check me-1"></i> Register
                </button>
            </form>

            <p class="mt-3 text-center text-light">
                Sudah punya akun?
                <a href="{{ route('login') }}" class="text-info text-decoration-none">Sign In</a>
            </p>
        </div>
    </div>
</body>
</html>