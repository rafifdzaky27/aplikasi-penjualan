@extends('layouts.app')

@section('content')
<div class="bg-white rounded-lg shadow-md overflow-hidden">
    <div class="bg-gray-800 text-white px-6 py-4">
        <h5 class="text-lg font-semibold">Detail Barang</h5>
    </div>
    <div class="p-6">
        <div class="overflow-x-auto">
            <table class="min-w-full border border-gray-200">
                <tr class="border-b">
                    <th class="bg-gray-100 px-6 py-3 text-left text-sm font-semibold text-gray-700 w-1/3">Kode Barang</th>
                    <td class="px-6 py-3 text-sm text-gray-700">{{ $barang->Kodebarang }}</td>
                </tr>
                <tr class="border-b">
                    <th class="bg-gray-100 px-6 py-3 text-left text-sm font-semibold text-gray-700">Nama Barang</th>
                    <td class="px-6 py-3 text-sm text-gray-700">{{ $barang->Namabarang }}</td>
                </tr>
                <tr class="border-b">
                    <th class="bg-gray-100 px-6 py-3 text-left text-sm font-semibold text-gray-700">Harga Barang</th>
                    <td class="px-6 py-3 text-sm text-gray-700">{{ $barang->Hargabarang }}</td>
                </tr>
                <tr class="border-b">
                    <th class="bg-gray-100 px-6 py-3 text-left text-sm font-semibold text-gray-700">Tanggal Dibuat</th>
                    <td class="px-6 py-3 text-sm text-gray-700">{{ $barang->created_at->format('d-m-Y H:i:s') }}</td>
                </tr>
                <tr>
                    <th class="bg-gray-100 px-6 py-3 text-left text-sm font-semibold text-gray-700">Terakhir Diperbarui</th>
                    <td class="px-6 py-3 text-sm text-gray-700">{{ $barang->updated_at->format('d-m-Y H:i:s') }}</td>
                </tr>
            </table>
        </div>
        
        <div class="mt-6 flex space-x-2">
            <a href="{{ route('barang.index') }}" class="px-4 py-2 bg-gray-500 hover:bg-gray-600 text-white rounded-md transition-colors flex items-center">
                <i class="fas fa-arrow-left mr-2"></i> Kembali
            </a>
            <a href="{{ route('barang.edit', $barang->Kodebarang) }}" class="px-4 py-2 bg-yellow-500 hover:bg-yellow-600 text-white rounded-md transition-colors flex items-center">
                <i class="fas fa-edit mr-2"></i> Edit
            </a>
            <form action="{{ route('barang.destroy', $barang->Kodebarang) }}" method="POST" class="inline">
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
