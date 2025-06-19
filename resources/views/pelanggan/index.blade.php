@extends('layouts.app')

@section('content')
<div class="bg-white rounded-lg shadow-md overflow-hidden">
    <div class="bg-gray-800 text-white px-6 py-4 flex justify-between items-center">
        <h5 class="text-lg font-semibold">Data Pelanggan</h5>
        <a href="{{ route('pelanggan.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md flex items-center transition-colors">
            <i class="fas fa-plus mr-2"></i> Tambah Pelanggan
        </a>
    </div>
    <div class="p-6">
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200">
                <thead>
                    <tr class="bg-gray-800 text-white">
                        <th class="py-3 px-4 text-left">No Pelanggan</th>
                        <th class="py-3 px-4 text-left">Nama Pelanggan</th>
                        <th class="py-3 px-4 text-left">Alamat</th>
                        <th class="py-3 px-4 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @forelse($pelanggans as $pelanggan)
                    <tr class="hover:bg-gray-50">
                        <td class="py-3 px-4">{{ $pelanggan->Nopelanggan }}</td>
                        <td class="py-3 px-4">{{ $pelanggan->Namapelanggan }}</td>
                        <td class="py-3 px-4">{{ $pelanggan->Alamat }}</td>
                        <td class="py-3 px-4">
                            <div class="flex justify-center space-x-2">
                                <a href="{{ route('pelanggan.show', $pelanggan->Nopelanggan) }}" class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded-md flex items-center transition-colors">
                                    <i class="fas fa-eye mr-1"></i> Detail
                                </a>
                                <a href="{{ route('pelanggan.edit', $pelanggan->Nopelanggan) }}" class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded-md flex items-center transition-colors">
                                    <i class="fas fa-edit mr-1"></i> Edit
                                </a>
                                <form action="{{ route('pelanggan.destroy', $pelanggan->Nopelanggan) }}" method="POST" class="inline">
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
                        <td colspan="4" class="py-6 text-center text-gray-500">Tidak ada data pelanggan</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
