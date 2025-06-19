@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h5>Edit Barang</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('barang.update', $barang->Kodebarang) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="mb-3">
                <label for="Kodebarang" class="form-label">Kode Barang</label>
                <input type="number" class="form-control" id="Kodebarang" name="Kodebarang" value="{{ $barang->Kodebarang }}" readonly>
                <small class="text-muted">Kode barang tidak dapat diubah</small>
            </div>
            
            <div class="mb-3">
                <label for="Namabarang" class="form-label">Nama Barang</label>
                <input type="text" class="form-control @error('Namabarang') is-invalid @enderror" id="Namabarang" name="Namabarang" value="{{ old('Namabarang', $barang->Namabarang) }}" required maxlength="25">
                @error('Namabarang')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="mb-3">
                <label for="Hargabarang" class="form-label">Harga Barang</label>
                <input type="text" class="form-control @error('Hargabarang') is-invalid @enderror" id="Hargabarang" name="Hargabarang" value="{{ old('Hargabarang', $barang->Hargabarang) }}" required maxlength="25">
                @error('Hargabarang')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="d-flex justify-content-between">
                <a href="{{ route('barang.index') }}" class="btn btn-secondary">
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
