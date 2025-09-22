@extends('layouts.app')

@section('title', 'Database Asset')

@section('content')
    <div class="container mt-4">
        <div class="mb-4 text-start">
            <h2 class="fw-bold text-navy">Database Asset</h2>
            <p class="fs-6 text-secondary">Data lengkap mengenai aset perusahaan beserta lokasi penyimpanan.</p>
        </div>

        <div class="row g-4">
            <!-- Rekap Asset -->
            <div class="col-md-6">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h5 class="card-title fw-bold"><i class="bi bi-hdd-network text-primary me-2"></i> Rekap Aset</h5>
                        <table class="table table-bordered text-center">
                            <thead class="table-primary">
                                <tr>
                                    <th>Lokasi</th>
                                    <th>Total Asset</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($rekap as $row)
                                    <tr>
                                        <td>{{ $row->nama_lokasi }}</td>
                                        <td>{{ $row->total_asset }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="2" class="text-muted">Belum ada data rekap.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Detail Alokasi -->
            <div class="col-md-6">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h5 class="card-title fw-bold"><i class="bi bi-geo-alt text-danger me-2"></i> Detail Alokasi</h5>
                        <table class="table table-bordered table-striped text-center">
                            <thead class="table-danger">
                                <tr>
                                    <th>Nama Aset</th>
                                    <th>Dari</th>
                                    <th>Ke</th>
                                    <th>Jumlah</th>
                                    <th>Tanggal</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($locations as $location)
                                    <tr>
                                        <td>{{ optional($location->asset)->asset_name ?? '❌ Tidak ada asset' }}</td>
                                        <td>{{ optional($location->fromLocation)->nama_lokasi ?? '-' }}</td>
                                        <td>{{ optional($location->toLocation)->nama_lokasi ?? '-' }}</td>
                                        <td>{{ $location->jumlah }}</td>
                                        <td>{{ \Carbon\Carbon::parse($location->date)->format('d-m-Y') }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center">Belum ada data alokasi.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>

                        <!-- ✅ Pagination -->
                        <!-- ✅ Pagination -->
                        <div class="d-flex justify-content-center mt-3">
                            {{ $locations->onEachSide(1)->links('pagination::bootstrap-5') }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection