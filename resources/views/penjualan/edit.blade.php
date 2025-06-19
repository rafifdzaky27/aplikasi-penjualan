@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h5>Edit Penjualan</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('penjualan.update', $penjualan->Faktur) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="mb-3">
                <label for="Faktur" class="form-label">Faktur</label>
                <input type="number" class="form-control" id="Faktur" name="Faktur" value="{{ $penjualan->Faktur }}" readonly>
                <small class="text-muted">Nomor faktur tidak dapat diubah</small>
            </div>
            
            <div class="mb-3">
                <label for="Nopelanggan" class="form-label">No Pelanggan</label>
                <select class="form-select @error('Nopelanggan') is-invalid @enderror" id="Nopelanggan" name="Nopelanggan" required>
                    <option value="">-- Pilih Pelanggan --</option>
                    @foreach($pelanggans as $pelanggan)
                        <option value="{{ $pelanggan->Nopelanggan }}" {{ old('Nopelanggan', $penjualan->Nopelanggan) == $pelanggan->Nopelanggan ? 'selected' : '' }}>
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
                <input type="date" class="form-control @error('Tanggalpenjualan') is-invalid @enderror" id="Tanggalpenjualan" name="Tanggalpenjualan" value="{{ old('Tanggalpenjualan', $penjualan->Tanggalpenjualan) }}" required>
                @error('Tanggalpenjualan')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="d-flex justify-content-between">
                <a href="{{ route('penjualan.index') }}" class="btn btn-secondary">
                    <i class="fas fa-arrow-left"></i> Kembali
                </a>
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i> Update
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
