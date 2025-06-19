@extends('layouts.app')

@section('content')
<div class="bg-white rounded-lg shadow-md overflow-hidden">
    <div class="bg-gray-800 text-white px-6 py-4">
        <h5 class="text-lg font-semibold">Tambah Penjualan</h5>
    </div>
    <div class="p-6">
        <form action="{{ route('penjualan.store') }}" method="POST">
            @csrf
            
            <div class="mb-4">
                <label for="Faktur" class="block text-sm font-medium text-gray-700 mb-1">Faktur</label>
                <input type="number" class="w-full px-3 py-2 border @error('Faktur') border-red-500 @else border-gray-300 @enderror rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" id="Faktur" name="Faktur" value="{{ old('Faktur') }}" required>
                @error('Faktur')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="mb-4">
                <label for="Nopelanggan" class="block text-sm font-medium text-gray-700 mb-1">No Pelanggan</label>
                <select class="w-full px-3 py-2 border @error('Nopelanggan') border-red-500 @else border-gray-300 @enderror rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" id="Nopelanggan" name="Nopelanggan" required>
                    <option value="">-- Pilih Pelanggan --</option>
                    @foreach($pelanggans as $pelanggan)
                        <option value="{{ $pelanggan->Nopelanggan }}" {{ old('Nopelanggan') == $pelanggan->Nopelanggan ? 'selected' : '' }}>
                            {{ $pelanggan->Nopelanggan }} - {{ $pelanggan->Namapelanggan }}
                        </option>
                    @endforeach
                </select>
                @error('Nopelanggan')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="mb-6">
                <label for="Tanggalpenjualan" class="block text-sm font-medium text-gray-700 mb-1">Tanggal Penjualan</label>
                <input type="date" class="w-full px-3 py-2 border @error('Tanggalpenjualan') border-red-500 @else border-gray-300 @enderror rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" id="Tanggalpenjualan" name="Tanggalpenjualan" value="{{ old('Tanggalpenjualan', date('Y-m-d')) }}" required>
                @error('Tanggalpenjualan')
                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="flex justify-between">
                <a href="{{ route('penjualan.index') }}" class="px-4 py-2 bg-gray-500 hover:bg-gray-600 text-white rounded-md transition-colors flex items-center">
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
