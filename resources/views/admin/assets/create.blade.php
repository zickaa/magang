@extends('layouts.admin')

@section('content')
    <h2 class="mb-4">Tambah Asset</h2>

    {{-- ✅ Form Tambah Asset --}}
    <form method="POST" action="{{ route('admin.assets.store') }}">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nama Asset</label>
            <input type="text" name="asset_name" class="form-control" value="{{ old('asset_name') }}" required>
            @error('asset_name')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">Jumlah</label>
            <input type="number" name="jumlah" class="form-control" value="{{ old('jumlah', 1) }}" min="1" required>
            @error('jumlah')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <button type="submit" class="btn btn-success">
            <i class="bi bi-save"></i> Simpan
        </button>
        <a href="{{ route('admin.assets.index') }}" class="btn btn-secondary">
            <i class="bi bi-arrow-left"></i> Kembali
        </a>
    </form>
@endsection
