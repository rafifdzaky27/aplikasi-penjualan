@extends('layouts.app')

@section('content')
<div class="bg-white rounded-lg shadow-md overflow-hidden">
    <div class="bg-gray-800 text-white px-6 py-4 flex justify-between items-center">
        <h5 class="text-lg font-semibold">Data Barang</h5>
        <a href="{{ route('barang.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md flex items-center transition-colors">
            <i class="fas fa-plus mr-2"></i> Tambah Barang
        </a>
    </div>
    <div class="p-6">
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200">
                <thead>
                    <tr class="bg-gray-800 text-white">
                        <th class="py-3 px-4 text-left">Kode Barang</th>
                        <th class="py-3 px-4 text-left">Nama Barang</th>
                        <th class="py-3 px-4 text-left">Harga Barang</th>
                        <th class="py-3 px-4 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @forelse($barangs as $barang)
                    <tr class="hover:bg-gray-50">
                        <td class="py-3 px-4">{{ $barang->Kodebarang }}</td>
                        <td class="py-3 px-4">{{ $barang->Namabarang }}</td>
                        <td class="py-3 px-4">{{ $barang->Hargabarang }}</td>
                        <td class="py-3 px-4">
                            <div class="flex justify-center space-x-2">
                                <a href="{{ route('barang.show', $barang->Kodebarang) }}" class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded-md flex items-center transition-colors">
                                    <i class="fas fa-eye mr-1"></i> Detail
                                </a>
                                <a href="{{ route('barang.edit', $barang->Kodebarang) }}" class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded-md flex items-center transition-colors">
                                    <i class="fas fa-edit mr-1"></i> Edit
                                </a>
                                <form action="{{ route('barang.destroy', $barang->Kodebarang) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded-md flex items-center transition-colors delete-confirm">
                                        <i class="fas fa-trash mr-1"></i> Hapus
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="py-6 text-center text-gray-500">Tidak ada data barang</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
