@extends('layouts.app')

@section('content')
<div class="bg-white rounded-lg shadow-md overflow-hidden">
    <div class="bg-gray-800 text-white px-6 py-4">
        <h5 class="text-lg font-semibold">Tambah Pelanggan</h5>
    </div>
    <div class="p-6">
        <form action="{{ route('pelanggan.store') }}" method="POST">
            @csrf
            
            <div class="mb-4">
                <label for="Nopelanggan" class="block text-sm font-medium text-gray-700 mb-1">No Pelanggan</label>
                <input type="number" class="w-full px-3 py-2 border @error('Nopelanggan') border-red-500 @else border-gray-300 @enderror rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" id="Nopelanggan" name="Nopelanggan" value="{{ old('Nopelanggan') }}" required>
                @error('Nopelanggan')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="mb-4">
                <label for="Namapelanggan" class="block text-sm font-medium text-gray-700 mb-1">Nama Pelanggan</label>
                <input type="text" class="w-full px-3 py-2 border @error('Namapelanggan') border-red-500 @else border-gray-300 @enderror rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" id="Namapelanggan" name="Namapelanggan" value="{{ old('Namapelanggan') }}" required maxlength="25">
                @error('Namapelanggan')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="mb-6">
                <label for="Alamat" class="block text-sm font-medium text-gray-700 mb-1">Alamat</label>
                <input type="text" class="w-full px-3 py-2 border @error('Alamat') border-red-500 @else border-gray-300 @enderror rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" id="Alamat" name="Alamat" value="{{ old('Alamat') }}" required maxlength="25">
                @error('Alamat')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="flex justify-between">
                <a href="{{ route('pelanggan.index') }}" class="px-4 py-2 bg-gray-500 hover:bg-gray-600 text-white rounded-md transition-colors flex items-center">
                    <i class="fas fa-arrow-left mr-2"></i> Kembali
                </a>
                <button type="submit" class="px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white rounded-md transition-colors flex items-center">
                    <i class="fas fa-save mr-2"></i> Simpan
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
