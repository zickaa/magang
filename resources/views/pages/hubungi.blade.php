{{-- resources/views/pages/hubungi.blade.php --}}
@extends('layouts.app')

@section('title', 'Hubungi Kami')

@section('content')
<div class="container" style="margin-top: 20px;"> {{-- naikkan header sedikit --}}
    {{-- Header di kiri atas --}}
    <div class="mb-4 text-start">
        <h2 class="fw-bold" style="color: #000080;">Hubungi Kami</h2>
        <p class="fs-6 text-secondary">Silakan hubungi kami melalui email, telepon, atau formulir di bawah ini. Tim kami siap membantu Anda.</p>
    </div>

    {{-- Kontak Info --}}
    <div class="row mb-5 text-center">
        <div class="col-md-4 mb-3">
            <i class="bi bi-telephone-fill fs-3 text-primary mb-1"></i>
            <h6>Telepon</h6>
            <p class="mb-0">(021) 1234-5678</p>
        </div>
        <div class="col-md-4 mb-3">
            <i class="bi bi-envelope-fill fs-3 text-primary mb-1"></i>
            <h6>Email</h6>
            <p class="mb-0">info@jneexpress.com</p>
        </div>
        <div class="col-md-4 mb-3">
            <i class="bi bi-geo-alt-fill fs-3 text-primary mb-1"></i>
            <h6>Alamat</h6>
            <p class="mb-0">Jl. Contoh No.123, Jakarta</p>
        </div>
    </div>

    {{-- Form Kontak --}}
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title mb-4">Kirim Pesan</h5>
                    <form action="#" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="name" placeholder="Nama lengkap" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Email aktif" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Pesan</label>
                            <textarea class="form-control" id="message" rows="3" placeholder="Tulis pesan Anda" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Kirim Pesan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Style tambahan --}}
<style>
    h2 {
        color: #000080; /* Navy */
        text-shadow: 1px 1px 2px rgba(0,0,0,0.2);
    }
    h6 {
        font-weight: 600;
    }
    .card {
        border-radius: 12px;
    }
    .form-control:focus {
        box-shadow: 0 0 5px rgba(0, 0, 128, 0.5);
        border-color: #000080;
    }
    button.btn-primary {
        background-color: #000080;
        border-color: #000080;
    }
    button.btn-primary:hover {
        background-color: #000066;
        border-color: #000066;
    }
</style>
@endsection
