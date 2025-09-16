{{-- resources/views/pages/hubungi.blade.php --}}
@extends('layouts.app')

@section('title', 'Hubungi Kami')

@section('content')
    <div class="container" style="margin-top: 20px;"> {{-- naikkan header sedikit --}}
        {{-- Header di kiri atas --}}
        <div class="mb-4 text-start">
            <h2 class="fw-bold" style="color: #000080;">Hubungi Kami</h2>
            <p class="fs-6 text-secondary">Silakan hubungi kami melalui email, telepon, atau formulir di bawah ini. Tim kami
                siap membantu Anda.</p>
        </div>

        {{-- Kontak Info --}}
        <div class="row mb-5 text-center">
            <div class="col-md-4 mb-3">
                <i class="bi bi-telephone-fill fs-3 text-primary mb-1"></i>
                <h6>Telepon</h6>
                <p class="mb-0">(021) 80820816</p>
            </div>
            <div class="col-md-4 mb-3">
                <i class="bi bi-envelope-fill fs-3 text-primary mb-1"></i>
                <h6>Email</h6>
                <p class="mb-0">info@jnebsdtangerang.com</p>
            </div>
            <div class="col-md-4 mb-3">
                <i class="bi bi-geo-alt-fill fs-3 text-primary mb-1"></i>
                <h6>Alamat</h6>
                <p class="mb-0">Jl. Pahlawan Seribu Buaran BSD City, Lengkong Karya,
                    Kec. Serpong Utara.</p>
            </div>
        </div>


        {{-- Style tambahan --}}
        <style>
            h2 {
                color: #000080;
                /* Navy */
                text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
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
