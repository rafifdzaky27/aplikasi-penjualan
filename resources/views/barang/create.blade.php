@extends('layouts.app')

@section('content')
<div class="bg-white rounded-lg shadow-md overflow-hidden">
    <div class="bg-gray-800 text-white px-6 py-4">
        <h5 class="text-lg font-semibold">Tambah Barang</h5>
    </div>
    <div class="p-6">
        <form action="{{ route('barang.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="Kodebarang" class="block text-sm font-medium text-gray-700 mb-1">Kode Barang</label>
                <input type="number" class="w-full px-3 py-2 border @error('Kodebarang') border-red-500 @else border-gray-300 @enderror rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" id="Kodebarang" name="Kodebarang" value="{{ old('Kodebarang') }}" required>
                @error('Kodebarang')
                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="Namabarang" class="block text-sm font-medium text-gray-700 mb-1">Nama Barang</label>
                <input type="text" class="w-full px-3 py-2 border @error('Namabarang') border-red-500 @else border-gray-300 @enderror rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" id="Namabarang" name="Namabarang" value="{{ old('Namabarang') }}" required maxlength="25">
                @error('Namabarang')
                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="Hargabarang" class="block text-sm font-medium text-gray-700 mb-1">Harga Barang</label>
                <input type="text" class="w-full px-3 py-2 border @error('Hargabarang') border-red-500 @else border-gray-300 @enderror rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" id="Hargabarang" name="Hargabarang" value="{{ old('Hargabarang') }}" required maxlength="25">
                @error('Hargabarang')
                <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex space-x-2">
                <button type="submit" class="px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white rounded-md transition-colors">Simpan</button>
                <a href="{{ route('barang.index') }}" class="px-4 py-2 bg-gray-500 hover:bg-gray-600 text-white rounded-md transition-colors">Kembali</a>
            </div>
        </form>
    </div>
</div>
@endsection
