@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>Dashboard</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card bg-primary text-white">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h5 class="card-title">Barang</h5>
                                        <p class="card-text fs-2">{{ \App\Models\Barang::count() }}</p>
                                    </div>
                                    <i class="fas fa-box fa-3x"></i>
                                </div>
                                <a href="{{ route('barang.index') }}" class="btn btn-light mt-3">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card bg-success text-white">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h5 class="card-title">Pelanggan</h5>
                                        <p class="card-text fs-2">{{ \App\Models\Pelanggan::count() }}</p>
                                    </div>
                                    <i class="fas fa-users fa-3x"></i>
                                </div>
                                <a href="{{ route('pelanggan.index') }}" class="btn btn-light mt-3">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card bg-warning text-dark">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h5 class="card-title">Penjualan</h5>
                                        <p class="card-text fs-2">{{ \App\Models\Penjualan::count() }}</p>
                                    </div>
                                    <i class="fas fa-shopping-cart fa-3x"></i>
                                </div>
                                <a href="{{ route('penjualan.index') }}" class="btn btn-light mt-3">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="mt-5">
                    <h4>Tentang Aplikasi</h4>
                    <p>Aplikasi Penjualan Barang adalah sistem manajemen penjualan sederhana yang memungkinkan Anda untuk:</p>
                    <ul>
                        <li>Mengelola data barang (tambah, edit, hapus)</li>
                        <li>Mengelola data pelanggan (tambah, edit, hapus)</li>
                        <li>Mencatat transaksi penjualan (tambah, edit, hapus)</li>
                    </ul>
                    <p>Gunakan menu navigasi di atas untuk mengakses fitur-fitur tersebut.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
