@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5>Data Penjualan</h5>
        <a href="{{ route('penjualan.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Tambah Penjualan
        </a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>Faktur</th>
                        <th>No Pelanggan</th>
                        <th>Nama Pelanggan</th>
                        <th>Tanggal Penjualan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($penjualans as $penjualan)
                    <tr>
                        <td>{{ $penjualan->Faktur }}</td>
                        <td>{{ $penjualan->Nopelanggan }}</td>
                        <td>{{ $penjualan->pelanggan->Namapelanggan ?? 'Pelanggan tidak ditemukan' }}</td>
                        <td>{{ $penjualan->Tanggalpenjualan }}</td>
                        <td>
                            <div class="btn-group" role="group">
                                <a href="{{ route('penjualan.show', $penjualan->Faktur) }}" class="btn btn-info btn-sm">
                                    <i class="fas fa-eye"></i> Detail
                                </a>
                                <a href="{{ route('penjualan.edit', $penjualan->Faktur) }}" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <form action="{{ route('penjualan.destroy', $penjualan->Faktur) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm delete-confirm">
                                        <i class="fas fa-trash"></i> Hapus
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center">Tidak ada data penjualan</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
