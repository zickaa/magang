@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h2 class="fw-bold text-navy">📦 Manage Asset</h2>
        <p class="text-muted">Kelola alokasi aset perusahaan.</p>

        <div class="row">
            <!-- Form Tambah Alokasi -->
            <div class="col-md-4">
                <div class="card shadow-sm mb-4">
                    <div class="card-header bg-navy text-white">
                        <strong>Tambah Alokasi</strong>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('manage.store') }}" method="POST">
                            @csrf

                            <!-- Dropdown Asset -->
                            <div class="mb-3">
                                <label class="form-label">Nama Asset</label>
                                <select name="asset_id" class="form-control" required>
                                    <option value="">-- Pilih Asset --</option>
                                    @foreach ($assets as $asset)
                                        <option value="{{ $asset->id }}">{{ $asset->asset_name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Dropdown Dari Lokasi -->
                            <div class="mb-3">
                                <label class="form-label">Dari Lokasi</label>
                                <select name="from_location_id" class="form-control">
                                    <option value="">-- Tidak ada (baru masuk) --</option>
                                    @foreach ($locations as $loc)
                                        <option value="{{ $loc->id }}">{{ $loc->nama_lokasi }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Dropdown Ke Lokasi -->
                            <div class="mb-3">
                                <label class="form-label">Ke Lokasi</label>
                                <select name="to_location_id" class="form-control" required>
                                    <option value="">-- Pilih Lokasi --</option>
                                    @foreach ($locations as $loc)
                                        <option value="{{ $loc->id }}">{{ $loc->nama_lokasi }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Jumlah -->
                            <div class="mb-3">
                                <label class="form-label">Jumlah</label>
                                <input type="number" name="jumlah" class="form-control" min="1" value="1"
                                    required>
                            </div>

                            <!-- Tanggal -->
                            <div class="mb-3">
                                <label class="form-label">Tanggal</label>
                                <input type="date" name="date" class="form-control" value="{{ date('Y-m-d') }}"
                                    required>
                            </div>

                            <button type="submit" class="btn btn-navy w-100">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Tabel Data Alokasi -->
            <div class="col-md-8">
                <div class="card shadow-sm mb-4">
                    <div class="card-header bg-success text-white">
                        <strong>Daftar Alokasi Asset</strong>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered align-middle text-center">
                            <thead class="table-success">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Asset</th>
                                    <th>Dari</th>
                                    <th>Ke</th>
                                    <th>Jumlah</th>
                                    <th>Tanggal</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($allocations as $index => $allocation)
                                    <tr>
                                        <td>{{ $allocations->firstItem() + $index }}</td>
                                        <td>{{ $allocation->asset->asset_name ?? '-' }}</td>
                                        <td>{{ $allocation->fromLocation->nama_lokasi ?? '-' }}</td>
                                        <td>{{ $allocation->toLocation->nama_lokasi ?? '-' }}</td>
                                        <td>{{ $allocation->jumlah }}</td>
                                        <td>{{ \Carbon\Carbon::parse($allocation->date)->translatedFormat('d F Y') }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-muted">Belum ada data alokasi.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>

                        <!-- Pagination -->
                        <div class="d-flex justify-content-center mt-3">
                            {{ $allocations->onEachSide(1)->links('pagination::bootstrap-5') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
