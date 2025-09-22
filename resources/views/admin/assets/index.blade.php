@extends('layouts.admin')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="fw-bold">Database Aset</h2>
        <a href="{{ route('admin.assets.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-circle"></i> Tambah Asset
        </a>
    </div>

    {{-- ✅ Notifikasi sukses --}}
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <table class="table table-bordered table-striped align-middle">
        <thead class="table-dark text-center">
            <tr>
                <!-- <th width="5%">ID</th> -->
                <th>Nama Asset</th>
                <th>Jumlah</th>
                <th width="20%">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($assets as $asset)
                <tr>
                    <!-- <td class="text-center">{{ $asset->id }}</td> -->
                    <td>{{ $asset->asset_name }}</td> {{-- ✅ perbaikan field --}}
                    <td class="text-center">{{ $asset->jumlah ?? 0 }}</td>
                    <td class="text-center">
                        <a href="{{ route('admin.assets.edit', $asset->id) }}" class="btn btn-warning btn-sm">
                            <i class="bi bi-pencil-square"></i> Edit
                        </a>
                        <form action="{{ route('admin.assets.destroy', $asset->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Yakin hapus data ini?')" class="btn btn-danger btn-sm">
                                <i class="bi bi-trash"></i> Hapus
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center text-muted">Belum ada data aset.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
