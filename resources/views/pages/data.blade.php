@extends('layouts.app')

@section('title', 'Database Asset')

@section('content')
    <div class="container" style="margin-top: 20px;">
        {{-- Header --}}
        <div class="mb-4 text-start">
            <h2 class="fw-bold" style="color: #000080;">Database Asset</h2>
            <p class="fs-6 text-secondary">Data lengkap mengenai aset perusahaan beserta lokasi penyimpanan.</p>
        </div>

        <div class="row g-4">
            {{-- Database Aset --}}
            <div class="col-md-6">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h5 class="card-title fw-bold"><i class="bi bi-hdd-network text-primary me-2"></i> Database Aset</h5>
                        <p class="text-secondary">Informasi jumlah aset yang tersedia.</p>

                        <table class="table table-bordered table-striped">
                            <thead class="table-danger">
                                <tr>
                                    <th>Tipe</th>
                                    <th>Jumlah Asset</th>
                                    <th>Update Terakhir</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($assets as $asset)
                                    <tr>
                                        <td>{{ $asset->asset_name }}</td>
                                        <td>{{ $asset->jumlah }}</td>
                                        <td>{{ \Carbon\Carbon::parse($asset->updated_at)->format('d-m-Y') }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3" class="text-center">Belum ada data aset.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            {{-- Database Lokasi --}}
            <div class="col-md-6">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h5 class="card-title fw-bold"><i class="bi bi-geo-alt text-danger me-2"></i> Database Lokasi</h5>
                        <p class="text-secondary">Detail alokasi aset perusahaan.</p>

                        <table class="table table-bordered table-striped">
                            <thead class="table-danger">
                                <tr>
                                    <th>Tipe</th>
                                    <th>Dari</th>
                                    <th>Ke</th>
                                    <th>Tanggal</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($locations as $location)
                                    <tr>
                                        <td>{{ $location->asset_name }}</td>
                                        <td>{{ $location->from_location }}</td>
                                        <td>{{ $location->to_location }}</td>
                                        <td>{{ \Carbon\Carbon::parse($location->date)->format('d-m-Y') }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="text-center">Belum ada data alokasi.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        h2 {
            color: #000080;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
        }
    </style>
@endsection
