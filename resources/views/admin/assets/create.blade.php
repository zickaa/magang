@extends('layouts.admin')

@section('content')
    <h2>Tambah Asset</h2>

    <form method="POST" action="{{ route('admin.assets.store') }}">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nama Asset</label>
            <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Deskripsi</label>
            <textarea name="description" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('admin.assets.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection
