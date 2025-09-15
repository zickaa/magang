<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register JNE Express</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .bg {
            background-image: url('images/bgg.jpg'); /* Ganti sesuai gambar hero */
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative; /* agar tombol kembali muncul di atas */
        }

        .register-container {
            background-color: rgba(255, 255, 255, 0.85);
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0,0,0,0.3);
            width: 350px;
        }

        .register-container h2 {
            margin-bottom: 20px;
            text-align: center;
        }

        .register-container input[type="text"],
        .register-container input[type="email"],
        .register-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0 20px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .register-container button {
            width: 100%;
            background-color: #007bff;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        .register-container button:hover {
            background-color: #0056b3;
        }

        /* Tombol kembali ke welcome */
        .back-btn {
            position: absolute;
            top: 20px;
            left: 20px;
            background-color: rgba(255,255,255,0.8);
            border-radius: 50%;
            padding: 10px;
            text-decoration: none;
            color: #007bff;
            font-size: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background 0.3s;
        }

        .back-btn:hover {
            background-color: rgba(255,255,255,1);
        }

        /* Alert error */
        .alert ul {
            margin-bottom: 0;
            padding-left: 20px;
        }
    </style>
</head>
<body>

<div class="bg">
    <!-- Tombol kembali ke welcome -->
    <a href="{{ route('welcome') }}" class="back-btn" title="Kembali ke beranda">
        <i class="bi bi-arrow-left"></i>
    </a>

    <div class="register-container">
        <h2>Register</h2>

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
            <label for="name">Nama</label>
            <input type="text" id="name" name="name" placeholder="Masukkan nama" required value="{{ old('name') }}">

            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Masukkan email" required value="{{ old('email') }}">

            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Masukkan password" required>

            <label for="password_confirmation">Konfirmasi Password</label>
            <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Konfirmasi password" required>

            <button type="submit">Register</button>
        </form>

        <p class="mt-3 text-center">
            Sudah punya akun? <a href="{{ route('login') }}">Sign In</a>
        </p>
    </div>
</div>

</body>
</html>
