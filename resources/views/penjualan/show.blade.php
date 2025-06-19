@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h5>Detail Penjualan</h5>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered">
                <tr>
                    <th width="30%">Faktur</th>
                    <td>{{ $penjualan->Faktur }}</td>
                </tr>
                <tr>
                    <th>No Pelanggan</th>
                    <td>{{ $penjualan->Nopelanggan }}</td>
                </tr>
                <tr>
                    <th>Nama Pelanggan</th>
                    <td>{{ $penjualan->pelanggan->Namapelanggan ?? 'Pelanggan tidak ditemukan' }}</td>
                </tr>
                <tr>
                    <th>Alamat Pelanggan</th>
                    <td>{{ $penjualan->pelanggan->Alamat ?? 'Alamat tidak tersedia' }}</td>
                </tr>
                <tr>
                    <th>Tanggal Penjualan</th>
                    <td>{{ $penjualan->Tanggalpenjualan }}</td>
                </tr>
                <tr>
                    <th>Tanggal Dibuat</th>
                    <td>{{ $penjualan->created_at->format('d-m-Y H:i:s') }}</td>
                </tr>
                <tr>
                    <th>Terakhir Diperbarui</th>
                    <td>{{ $penjualan->updated_at->format('d-m-Y H:i:s') }}</td>
                </tr>
            </table>
        </div>
        
        <div class="mt-3">
            <a href="{{ route('penjualan.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Kembali
            </a>
            <a href="{{ route('penjualan.edit', $penjualan->Faktur) }}" class="btn btn-warning">
                <i class="fas fa-edit"></i> Edit
            </a>
            <form action="{{ route('penjualan.destroy', $penjualan->Faktur) }}" method="POST" class="d-inline">
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
