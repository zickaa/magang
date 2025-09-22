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
<<<<<<< HEAD
                <th>Jumlah</th>
                <th width="20%">Aksi</th>
=======
                <th>Kode Asset</th>
                <th>Aksi</th>
>>>>>>> 4df1b2447142d860f8197edd9a1405db224a4b69
            </tr>
        </thead>
        <tbody>
            @forelse($assets as $asset)
                <tr>
<<<<<<< HEAD
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
=======
                    <td>{{ $asset->id }}</td>
                    <td>{{ $asset->nama_asset }}</td>
                    <td>{{ $asset->kode_asset }}</td>
                    <td>
                        <a href="{{ route('admin.assets.edit', $asset->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('admin.assets.destroy', $asset->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Yakin hapus asset ini?')" class="btn btn-danger btn-sm">Hapus</button>
>>>>>>> 4df1b2447142d860f8197edd9a1405db224a4b69
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
<<<<<<< HEAD
                    <td colspan="4" class="text-center text-muted">Belum ada data aset.</td>
=======
                    <td colspan="4" class="text-center">Belum ada data asset.</td>
>>>>>>> 4df1b2447142d860f8197edd9a1405db224a4b69
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
