@extends('layouts.app')

@section('title', 'Perusahaan')

@section('content')
<div class="container" style="margin-top: 20px;">
    {{-- Header --}}
    <div class="mb-4 text-start">
        <h2 class="fw-bold" style="color: #000080;">Perusahaan</h2>
        <p class="fs-6 text-secondary">Kami adalah JNE EXPRESS, penyedia layanan logistik terpercaya di Indonesia. Berikut profil dan informasi perusahaan kami.</p>
    </div>

    {{-- Konten Perusahaan --}}
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card shadow-sm h-100">
                <div class="card-body text-center">
                    <i class="bi bi-building fs-1 text-primary mb-3"></i>
                    <h5 class="card-title fw-bold">Visi & Misi</h5>
                    <p class="card-text">Menjadi perusahaan logistik terpercaya yang memberikan layanan cepat, aman, dan inovatif di seluruh Indonesia.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm h-100">
                <div class="card-body text-center">
                    <i class="bi bi-people fs-1 text-success mb-3"></i>
                    <h5 class="card-title fw-bold">Tim Profesional</h5>
                    <p class="card-text">Dikelola oleh tim berpengalaman yang berkomitmen memberikan pelayanan terbaik untuk setiap pelanggan.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm h-100">
                <div class="card-body text-center">
                    <i class="bi bi-globe fs-1 text-info mb-3"></i>
                    <h5 class="card-title fw-bold">Cakupan Nasional</h5>
                    <p class="card-text">Menjangkau seluruh wilayah Indonesia dengan jaringan distribusi yang luas dan efisien.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    h2 {
        color: #000080;
        text-shadow: 1px 1px 2px rgba(0,0,0,0.2);
    }
</style>
@endsection
