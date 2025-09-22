@extends('layouts.admin')

@section('content')
    <h2 class="mb-4">Edit Asset</h2>

    <form method="POST" action="{{ route('admin.assets.update', $asset->id) }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Nama Asset</label>
            <input type="text" name="nama_asset" class="form-control" value="{{ old('nama_asset', $asset->nama_asset) }}" required>
            @error('nama_asset')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <!-- <div class="mb-3">
            <label class="form-label">Deskripsi</label>
            <textarea name="deskripsi" class="form-control">{{ old('deskripsi', $asset->deskripsi) }}</textarea>
            @error('deskripsi')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div> -->

        <div class="mb-3">
            <label class="form-label">Jumlah</label>
            <input type="number" name="jumlah" class="form-control" value="{{ old('jumlah', $asset->jumlah) }}" min="1" required>
            @error('jumlah')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <button type="submit" class="btn btn-success">
            <i class="bi bi-save"></i> Update
        </button>
        <a href="{{ route('admin.assets.index') }}" class="btn btn-secondary">
            <i class="bi bi-arrow-left"></i> Kembali
        </a>
    </form>
@endsection
