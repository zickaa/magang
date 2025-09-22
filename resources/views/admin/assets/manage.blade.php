@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2 class="mb-4">Manage Assets</h2>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <!-- Form tambah asset -->
        <div class="card mb-4">
            <div class="card-body">
                <form action="{{ route('manage.store') }}" method="POST">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-5">
                            <select name="asset_id" class="form-control" required>
                                <option value="">-- Pilih Asset --</option>
                                @foreach ($assets as $asset)
                                    <option value="{{ $asset->id }}">{{ $asset->nama_asset }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3">
                            <input type="number" name="jumlah" class="form-control" placeholder="Jumlah" min="1"
                                required>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-primary w-100">Tambah</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>

        <!-- Tabel asset -->
        <div class="card">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Nama Asset</th>
                            <!-- <th>Kode Asset</th> -->
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($assets as $asset)
                            <tr>
                                <td>{{ $asset->id }}</td>
                                <td>{{ $asset->nama_asset }}</td>
                                <!-- <td>{{ $asset->kode_asset }}</td> -->
                                <td>
                                    <a href="{{ route('admin.assets.edit', $asset) }}"
                                        class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('admin.assets.destroy', $asset) }}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm"
                                            onclick="return confirm('Yakin hapus asset ini?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center">Belum ada data asset.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
