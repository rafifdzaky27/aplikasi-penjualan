@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h5>Tambah Penjualan</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('penjualan.store') }}" method="POST">
            @csrf
            
            <div class="mb-3">
                <label for="Faktur" class="form-label">Faktur</label>
                <input type="number" class="form-control @error('Faktur') is-invalid @enderror" id="Faktur" name="Faktur" value="{{ old('Faktur') }}" required>
                @error('Faktur')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="mb-3">
                <label for="Nopelanggan" class="form-label">No Pelanggan</label>
                <select class="form-select @error('Nopelanggan') is-invalid @enderror" id="Nopelanggan" name="Nopelanggan" required>
                    <option value="">-- Pilih Pelanggan --</option>
                    @foreach($pelanggans as $pelanggan)
                        <option value="{{ $pelanggan->Nopelanggan }}" {{ old('Nopelanggan') == $pelanggan->Nopelanggan ? 'selected' : '' }}>
                            {{ $pelanggan->Nopelanggan }} - {{ $pelanggan->Namapelanggan }}
                        </option>
                    @endforeach
                </select>
                @error('Nopelanggan')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="mb-3">
                <label for="Tanggalpenjualan" class="form-label">Tanggal Penjualan</label>
                <input type="date" class="form-control @error('Tanggalpenjualan') is-invalid @enderror" id="Tanggalpenjualan" name="Tanggalpenjualan" value="{{ old('Tanggalpenjualan', date('Y-m-d')) }}" required>
                @error('Tanggalpenjualan')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="d-flex justify-content-between">
                <a href="{{ route('penjualan.index') }}" class="btn btn-secondary">
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
