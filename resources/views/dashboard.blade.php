@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="container" style="margin-top: 20px;">
        {{-- Header --}}
        <div class="mb-4 text-start">
            <h2 class="fw-bold" style="color: #000080;">Dashboard</h2>
            <p class="fs-6 text-secondary">Selamat datang di dashboard utama. Di sini Anda dapat melihat ringkasan dan
                informasi penting tentang website dan perusahaan kami.</p>
        </div>

        {{-- Tentang Website --}}
        <div class="card mb-4 shadow-sm">
            <div class="card-body">
                <h5 class="card-title fw-bold">Tentang Website</h5>
                <p class="card-text">
                    Website ini dibuat untuk memberikan informasi lengkap mengenai perusahaan, produk, dan cara menghubungi
                    kami.
                </p>
            </div>
        </div>

        {{-- Section Card --}}
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 shadow-sm border-0 text-center dashboard-card">
                    <div class="card-body">
                        <i class="bi bi-building fs-1 text-primary mb-3"></i>
                        <h5 class="card-title fw-bold">Perusahaan</h5>
                        <p class="card-text">Pelajari lebih lanjut tentang profil dan sejarah perusahaan kami.</p>
                        <a href="{{ url('/perusahaan') }}" class="btn btn-primary btn-sm">Lihat</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 shadow-sm border-0 text-center dashboard-card">
                    <div class="card-body">
                        <i class="bi bi-box-seam fs-1 text-success mb-3"></i>
                        <h5 class="card-title fw-bold">Produk</h5>
                        <p class="card-text">Jelajahi produk-produk unggulan yang kami tawarkan.</p>
                        <a href="{{ url('/produk') }}" class="btn btn-success btn-sm">Lihat</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 shadow-sm border-0 text-center dashboard-card">
                    <div class="card-body">
                        <i class="bi bi-envelope fs-1 text-info mb-3"></i>
                        <h5 class="card-title fw-bold">Hubungi Kami</h5>
                        <p class="card-text">Hubungi kami untuk pertanyaan atau informasi lebih lanjut.</p>
                        <a href="{{ url('/hubungi') }}" class="btn btn-info btn-sm text-white">Lihat</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 shadow-sm border-0 text-center dashboard-card">
                    <div class="card-body">
                        <i class="bi bi-database fs-1 text-warning mb-3"></i>
                        <h5 class="card-title fw-bold">Database</h5>
                        <p class="card-text">Info lebih lanjut mengenai database.</p>
                        <a href="{{ url('/data') }}" class="btn btn-warning btn-sm text-white">Lihat</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 shadow-sm border-0 text-center dashboard-card">
                    <div class="card-body">
                        <i class="bi bi-gear fs-1 text-danger mb-3"></i>
                        <h5 class="card-title fw-bold">Manage</h5>
                        <p class="card-text">Manage asset lebih lanjut.</p>
                        <a href="{{ url('/manage') }}" class="btn btn-danger btn-sm text-white">Lihat</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Style tambahan --}}
    <style>
        h2 {
            color: #000080;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
        }

        .dashboard-card {
            border-radius: 12px;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .dashboard-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }

        .dashboard-card i {
            transition: transform 0.3s;
        }

        .dashboard-card:hover i {
            transform: scale(1.2);
        }

        .btn-primary,
        .btn-success,
        .btn-info {
            border-radius: 8px;
        }
    </style>
@endsection
