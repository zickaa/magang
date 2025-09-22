<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JNE Express - BSD Tangerang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
        }

        .hero {
            background: url('images/bgg.jpg') no-repeat center center/cover;
            position: relative;
            height: 100vh;
            color: #fff;
            overflow: hidden;
        }

        .hero-overlay {
            background: linear-gradient(135deg, rgba(13, 27, 42, 0.9), rgba(27, 38, 59, 0.85));
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            text-align: center;
            animation: fadeIn 1s ease-in-out;
        }

        .hero-content h1 {
            font-size: 3rem;
            font-weight: 700;
            color: #e0e0e0;
            text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.7);
        }

        .hero-content p {
            font-size: 1.2rem;
            color: #cbd5e1;
            margin-bottom: 30px;
        }

        .top-right {
            position: absolute;
            top: 20px;
            right: 30px;
            z-index: 3;
        }

        .btn-custom {
            background: #1d4ed8;
            color: #fff;
            font-weight: 600;
            border-radius: 8px;
            padding: 10px 20px;
            transition: all 0.3s ease;
        }

        .btn-custom:hover {
            background: #0a2e75;
            transform: scale(1.05);
        }

        .btn-outline-custom {
            border: 2px solid #fff;
            color: #fff;
            font-weight: 600;
            border-radius: 8px;
            padding: 10px 20px;
            transition: all 0.3s ease;
        }

        .btn-outline-custom:hover {
            background: #1d4ed8;
            border-color: #1d4ed8;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>
    <div class="hero d-flex justify-content-center align-items-center">
        <div class="hero-overlay"></div>
        <div class="container hero-content">
            <h1 class="mb-2">Selamat Datang di <span class="text-info">JNE Express</span></h1>
            <h2 class="fw-bold text-light">BSD TANGERANG</h2>
            <p>Menyediakan solusi pengiriman cepat, aman, dan terpercaya<br>untuk seluruh kebutuhan bisnis maupun personal Anda.</p>
            <div class="mt-4">
                <a href="{{ route('login') }}" class="btn btn-custom me-2 shadow">
                    <i class="bi bi-box-arrow-in-right me-1"></i> Sign In
                </a>
                <a href="{{ route('register') }}" class="btn btn-outline-custom shadow">
                    <i class="bi bi-person-plus me-1"></i> Sign Up
                </a>
            </div>
        </div>

        <!-- Tombol kecil kanan atas -->
        {{-- <div class="top-right">
            <a href="{{ route('login') }}" class="btn btn-sm btn-light me-2 shadow-sm">Sign In</a>
            <a href="{{ route('register') }}" class="btn btn-sm btn-outline-light shadow-sm">Sign Up</a>
        </div> --}}
    </div>
</body>

</html>