@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h5>Detail Barang</h5>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered">
                <tr>
                    <th width="30%">Kode Barang</th>
                    <td>{{ $barang->Kodebarang }}</td>
                </tr>
                <tr>
                    <th>Nama Barang</th>
                    <td>{{ $barang->Namabarang }}</td>
                </tr>
                <tr>
                    <th>Harga Barang</th>
                    <td>{{ $barang->Hargabarang }}</td>
                </tr>
                <tr>
                    <th>Tanggal Dibuat</th>
                    <td>{{ $barang->created_at->format('d-m-Y H:i:s') }}</td>
                </tr>
                <tr>
                    <th>Terakhir Diperbarui</th>
                    <td>{{ $barang->updated_at->format('d-m-Y H:i:s') }}</td>
                </tr>
            </table>
        </div>
        
        <div class="mt-3">
            <a href="{{ route('barang.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Kembali
            </a>
            <a href="{{ route('barang.edit', $barang->Kodebarang) }}" class="btn btn-warning">
                <i class="fas fa-edit"></i> Edit
            </a>
            <form action="{{ route('barang.destroy', $barang->Kodebarang) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger delete-confirm">
                    <i class="fas fa-trash"></i> Hapus
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
