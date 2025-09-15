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
                            <div class="mb-3">
                                <label class="form-label">Nama Asset</label>
                                <input type="text" name="asset_name" class="form-control" placeholder="Contoh: Printer"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Dari</label>
                                <input type="text" name="from_location" class="form-control"
                                    placeholder="Contoh: Gudang A" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Ke</label>
                                <input type="text" name="to_location" class="form-control"
                                    placeholder="Contoh: Office BSD" required>
                            </div>
                            

                            <div class="mb-3">
                                <label class="form-label">Tanggal</label>
                                <!-- ✅ Default hari ini -->
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
                                    <th>Tanggal</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($allocations as $index => $allocation)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $allocation->asset_name }}</td>
                                        <td>{{ $allocation->from_location }}</td>
                                        <td>{{ $allocation->to_location }}</td>
                                        <!-- ✅ Format lebih enak dibaca -->
                                        <td>{{ \Carbon\Carbon::parse($allocation->date)->translatedFormat('d F Y') }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-muted">Belum ada data alokasi.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
