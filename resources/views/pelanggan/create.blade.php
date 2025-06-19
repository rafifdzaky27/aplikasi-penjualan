@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h5>Tambah Pelanggan</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('pelanggan.store') }}" method="POST">
            @csrf
            
            <div class="mb-3">
                <label for="Nopelanggan" class="form-label">No Pelanggan</label>
                <input type="number" class="form-control @error('Nopelanggan') is-invalid @enderror" id="Nopelanggan" name="Nopelanggan" value="{{ old('Nopelanggan') }}" required>
                @error('Nopelanggan')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="mb-3">
                <label for="Namapelanggan" class="form-label">Nama Pelanggan</label>
                <input type="text" class="form-control @error('Namapelanggan') is-invalid @enderror" id="Namapelanggan" name="Namapelanggan" value="{{ old('Namapelanggan') }}" required maxlength="25">
                @error('Namapelanggan')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="mb-3">
                <label for="Alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control @error('Alamat') is-invalid @enderror" id="Alamat" name="Alamat" value="{{ old('Alamat') }}" required maxlength="25">
                @error('Alamat')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="d-flex justify-content-between">
                <a href="{{ route('pelanggan.index') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i> Kembali
                </a>
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i> Simpan
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
