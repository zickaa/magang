<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JNE Express</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .hero {
            background-image: url('images/bgg.jpg');
            background-size: cover;
            background-position: center;
            height: 100vh;
            color: white;
            position: relative;
        }

        .hero-overlay {
            background-color: rgba(0, 0, 0, 0.5);
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .hero-content {
            position: relative;
            z-index: 1;
        }

        .top-right {
            position: absolute;
            top: 20px;
            right: 20px;
        }
    </style>
</head>

<body>

    <div class="hero d-flex justify-content-center align-items-center">
        <div class="hero-overlay"></div>
        <div class="container hero-content text-center">
            <h1 class="display-4">Selamat Datang di JNE Express</h1><br>
            <h1 class="display-4">BSD TANGERANG</h1>
            <p class="lead">Menyediakan solusi pengiriman cepat dan aman untuk seluruh kebutuhan bisnis dan personal
                Anda.</p>
            {{-- <a href="{{ url('/login') }}" class="btn btn-primary btn-lg">Sign In</a>
        <a href="{{ url('/register') }}" class="btn btn-outline-light btn-lg">Sign Up</a> --}}
        </div>
        <div class="top-right">
            <a href="{{ route('login') }}" class="btn btn-sm btn-light me-2 shadow-sm">Sign In</a>
            <a href="{{ route('register') }}" class="btn btn-sm btn-outline-light shadow-sm">Sign Up</a>
        </div>

    </div>

</body>

</html>
