@extends('layouts.app')

@section('title', 'Produk')

@section('content')
<div class="container" style="margin-top: 20px;">
    {{-- Header --}}
    <div class="mb-4 text-start">
        <h2 class="fw-bold" style="color: #000080;">Produk</h2>
        <p class="fs-6 text-secondary">Berikut layanan dan produk unggulan dari JNE EXPRESS untuk memenuhi kebutuhan logistik Anda.</p>
    </div>

    {{-- Produk --}}
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card shadow-sm h-100">
                <div class="card-body text-center">
                    <i class="bi bi-speedometer2 fs-1 text-primary mb-3"></i>
                    <h5 class="card-title fw-bold">JNE Regular</h5>
                    <p class="card-text">Pengiriman cepat dan aman ke seluruh Indonesia dengan harga kompetitif.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm h-100">
                <div class="card-body text-center">
                    <i class="bi bi-lightning fs-1 text-warning mb-3"></i>
                    <h5 class="card-title fw-bold">JNE YES</h5>
                    <p class="card-text">Layanan kilat hingga tujuan dalam 1 hari untuk paket penting dan mendesak.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm h-100">
                <div class="card-body text-center">
                    <i class="bi bi-truck fs-1 text-success mb-3"></i>
                    <h5 class="card-title fw-bold">JNE Trucking</h5>
                    <p class="card-text">Solusi pengiriman barang besar dan berat dengan armada khusus dan handal.</p>
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
