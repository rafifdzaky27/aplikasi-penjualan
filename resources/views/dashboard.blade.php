@extends('layouts.app')

@section('content')
<div class="w-full">
    <div class="bg-white rounded-lg shadow-md overflow-hidden mb-6">
        <div class="bg-gray-800 text-white px-6 py-4">
            <h4 class="text-xl font-semibold">Dashboard</h4>
        </div>
        <div class="p-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-blue-500 text-white rounded-lg shadow-md overflow-hidden">
                    <div class="p-6">
                        <div class="flex justify-between items-center">
                            <div>
                                <h5 class="text-lg font-semibold">Barang</h5>
                                <p class="text-4xl font-bold mt-2">{{ \App\Models\Barang::count() }}</p>
                            </div>
                            <i class="fas fa-box text-4xl opacity-80"></i>
                        </div>
                        <a href="{{ route('barang.index') }}" class="inline-block mt-4 px-4 py-2 bg-white text-blue-500 rounded hover:bg-gray-100 transition-colors font-medium">Lihat Detail</a>
                    </div>
                </div>
                
                <div class="bg-green-500 text-white rounded-lg shadow-md overflow-hidden">
                    <div class="p-6">
                        <div class="flex justify-between items-center">
                            <div>
                                <h5 class="text-lg font-semibold">Pelanggan</h5>
                                <p class="text-4xl font-bold mt-2">{{ \App\Models\Pelanggan::count() }}</p>
                            </div>
                            <i class="fas fa-users text-4xl opacity-80"></i>
                        </div>
                        <a href="{{ route('pelanggan.index') }}" class="inline-block mt-4 px-4 py-2 bg-white text-green-500 rounded hover:bg-gray-100 transition-colors font-medium">Lihat Detail</a>
                    </div>
                </div>
                
                <div class="bg-yellow-500 text-white rounded-lg shadow-md overflow-hidden">
                    <div class="p-6">
                        <div class="flex justify-between items-center">
                            <div>
                                <h5 class="text-lg font-semibold">Penjualan</h5>
                                <p class="text-4xl font-bold mt-2">{{ \App\Models\Penjualan::count() }}</p>
                            </div>
                            <i class="fas fa-shopping-cart text-4xl opacity-80"></i>
                        </div>
                        <a href="{{ route('penjualan.index') }}" class="inline-block mt-4 px-4 py-2 bg-white text-yellow-500 rounded hover:bg-gray-100 transition-colors font-medium">Lihat Detail</a>
                    </div>
                </div>
            </div>
            
            <div class="mt-10">
                <h4 class="text-xl font-semibold mb-4">Tentang Aplikasi</h4>
                <p class="mb-4 text-gray-700">Aplikasi Penjualan Barang adalah sistem manajemen penjualan sederhana yang memungkinkan Anda untuk:</p>
                <ul class="list-disc pl-5 mb-4 text-gray-700 space-y-2">
                    <li>Mengelola data barang (tambah, edit, hapus)</li>
                    <li>Mengelola data pelanggan (tambah, edit, hapus)</li>
                    <li>Mencatat transaksi penjualan (tambah, edit, hapus)</li>
                </ul>
                <p class="text-gray-700">Gunakan menu navigasi di atas untuk mengakses fitur-fitur tersebut.</p>
            </div>
        </div>
    </div>
</div>
@endsection
