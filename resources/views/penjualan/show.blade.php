@extends('layouts.app')

@section('content')
<div class="bg-white rounded-lg shadow-md overflow-hidden">
    <div class="bg-gray-800 text-white px-6 py-4">
        <h5 class="text-lg font-semibold">Detail Penjualan</h5>
    </div>
    <div class="p-6">
        <div class="overflow-x-auto">
            <table class="w-full border-collapse">
                <tr class="border-b">
                    <th class="py-3 px-4 text-left bg-gray-100 w-1/3">Faktur</th>
                    <td class="py-3 px-4">{{ $penjualan->Faktur }}</td>
                </tr>
                <tr class="border-b">
                    <th class="py-3 px-4 text-left bg-gray-100">No Pelanggan</th>
                    <td class="py-3 px-4">{{ $penjualan->Nopelanggan }}</td>
                </tr>
                <tr class="border-b">
                    <th class="py-3 px-4 text-left bg-gray-100">Nama Pelanggan</th>
                    <td class="py-3 px-4">{{ $penjualan->pelanggan->Namapelanggan ?? 'Pelanggan tidak ditemukan' }}</td>
                </tr>
                <tr class="border-b">
                    <th class="py-3 px-4 text-left bg-gray-100">Alamat Pelanggan</th>
                    <td class="py-3 px-4">{{ $penjualan->pelanggan->Alamat ?? 'Alamat tidak tersedia' }}</td>
                </tr>
                <tr class="border-b">
                    <th class="py-3 px-4 text-left bg-gray-100">Tanggal Penjualan</th>
                    <td class="py-3 px-4">{{ $penjualan->Tanggalpenjualan }}</td>
                </tr>
                <tr class="border-b">
                    <th class="py-3 px-4 text-left bg-gray-100">Tanggal Dibuat</th>
                    <td class="py-3 px-4">{{ $penjualan->created_at->format('d-m-Y H:i:s') }}</td>
                </tr>
                <tr>
                    <th class="py-3 px-4 text-left bg-gray-100">Terakhir Diperbarui</th>
                    <td class="py-3 px-4">{{ $penjualan->updated_at->format('d-m-Y H:i:s') }}</td>
                </tr>
            </table>
        </div>
        
        <div class="mt-6 flex flex-wrap gap-2">
            <a href="{{ route('penjualan.index') }}" class="px-4 py-2 bg-gray-500 hover:bg-gray-600 text-white rounded-md transition-colors flex items-center">
                <i class="fas fa-arrow-left mr-2"></i> Kembali
            </a>
            <a href="{{ route('penjualan.edit', $penjualan->Faktur) }}" class="px-4 py-2 bg-yellow-500 hover:bg-yellow-600 text-white rounded-md transition-colors flex items-center">
                <i class="fas fa-edit mr-2"></i> Edit
            </a>
            <form action="{{ route('penjualan.destroy', $penjualan->Faktur) }}" method="POST" class="inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="px-4 py-2 bg-red-500 hover:bg-red-600 text-white rounded-md transition-colors flex items-center delete-confirm">
                    <i class="fas fa-trash mr-2"></i> Hapus
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
