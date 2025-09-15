@extends('layouts.admin')

@section('content')
    <div class="d-flex justify-content-between mb-3">
        <h2>Database (Assets)</h2>
        <a href="{{ route('admin.assets.create') }}" class="btn btn-primary">+ Tambah Asset</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nama Asset</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($assets as $asset)
                <tr>
                    <td>{{ $asset->id }}</td>
                    <td>{{ $asset->name }}</td>
                    <td>{{ $asset->description }}</td>
                    <td>
                        <a href="{{ route('admin.assets.edit', $asset->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('admin.assets.destroy', $asset->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Yakin hapus data ini?')" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr><td colspan="4" class="text-center">Belum ada data</td></tr>
            @endforelse
        </tbody>
    </table>
@endsection
