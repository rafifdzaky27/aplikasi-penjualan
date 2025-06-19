@extends('layouts.app')

@section('content')
<div class="bg-white rounded-lg shadow-md overflow-hidden">
    <div class="bg-gray-800 text-white px-6 py-4 flex justify-between items-center">
        <h5 class="text-lg font-semibold">Data Penjualan</h5>
        <a href="{{ route('penjualan.create') }}" class="px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white rounded-md transition-colors flex items-center">
            <i class="fas fa-plus mr-2"></i> Tambah Penjualan
        </a>
    </div>
    <div class="p-6">
        <div class="overflow-x-auto">
            <table class="w-full border-collapse">
                <thead>
                    <tr class="bg-gray-800 text-white">
                        <th class="py-3 px-4 text-left">Faktur</th>
                        <th class="py-3 px-4 text-left">No Pelanggan</th>
                        <th class="py-3 px-4 text-left">Nama Pelanggan</th>
                        <th class="py-3 px-4 text-left">Tanggal Penjualan</th>
                        <th class="py-3 px-4 text-left">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($penjualans as $penjualan)
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-3 px-4">{{ $penjualan->Faktur }}</td>
                        <td class="py-3 px-4">{{ $penjualan->Nopelanggan }}</td>
                        <td class="py-3 px-4">{{ $penjualan->pelanggan->Namapelanggan ?? 'Pelanggan tidak ditemukan' }}</td>
                        <td class="py-3 px-4">{{ $penjualan->Tanggalpenjualan }}</td>
                        <td class="py-3 px-4">
                            <div class="flex flex-wrap gap-1">
                                <a href="{{ route('penjualan.show', $penjualan->Faktur) }}" class="px-3 py-1 bg-blue-500 hover:bg-blue-600 text-white rounded text-sm flex items-center">
                                    <i class="fas fa-eye mr-1"></i> Detail
                                </a>
                                <a href="{{ route('penjualan.edit', $penjualan->Faktur) }}" class="px-3 py-1 bg-yellow-500 hover:bg-yellow-600 text-white rounded text-sm flex items-center">
                                    <i class="fas fa-edit mr-1"></i> Edit
                                </a>
                                <form action="{{ route('penjualan.destroy', $penjualan->Faktur) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="px-3 py-1 bg-red-500 hover:bg-red-600 text-white rounded text-sm flex items-center delete-confirm">
                                        <i class="fas fa-trash mr-1"></i> Hapus
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="py-4 text-center text-gray-500">Tidak ada data penjualan</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
