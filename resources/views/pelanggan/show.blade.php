@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h5>Detail Pelanggan</h5>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered">
                <tr>
                    <th width="30%">No Pelanggan</th>
                    <td>{{ $pelanggan->Nopelanggan }}</td>
                </tr>
                <tr>
                    <th>Nama Pelanggan</th>
                    <td>{{ $pelanggan->Namapelanggan }}</td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td>{{ $pelanggan->Alamat }}</td>
                </tr>
                <tr>
                    <th>Tanggal Dibuat</th>
                    <td>{{ $pelanggan->created_at->format('d-m-Y H:i:s') }}</td>
                </tr>
                <tr>
                    <th>Terakhir Diperbarui</th>
                    <td>{{ $pelanggan->updated_at->format('d-m-Y H:i:s') }}</td>
                </tr>
            </table>
        </div>
        
        <div class="mt-3">
            <a href="{{ route('pelanggan.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Kembali
            </a>
            <a href="{{ route('pelanggan.edit', $pelanggan->Nopelanggan) }}" class="btn btn-warning">
                <i class="fas fa-edit"></i> Edit
            </a>
            <form action="{{ route('pelanggan.destroy', $pelanggan->Nopelanggan) }}" method="POST" class="d-inline">
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
