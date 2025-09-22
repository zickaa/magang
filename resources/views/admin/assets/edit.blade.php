@extends('layouts.admin')

@section('content')
    <h2>Edit Asset</h2>

    <form method="POST" action="{{ route('admin.assets.update', $asset->id) }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Nama Asset</label>
            <input type="text" name="nama_asset" class="form-control" value="{{ $asset->nama_asset }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Kode Asset</label>
            <input type="text" name="kode_asset" class="form-control" value="{{ $asset->kode_asset }}" required>
        </div>

        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('admin.assets.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection
