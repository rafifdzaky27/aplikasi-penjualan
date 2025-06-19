<?php

namespace App\Http\Controllers;

use App\Models\Penjualan;
use App\Models\Pelanggan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penjualans = Penjualan::with('pelanggan')->get();
        return view('penjualan.index', compact('penjualans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pelanggans = Pelanggan::all();
        return view('penjualan.create', compact('pelanggans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Faktur' => 'required|integer|unique:penjualans',
            'Nopelanggan' => 'required|integer|exists:pelanggans,Nopelanggan',
            'Tanggalpenjualan' => 'required|date',
        ]);
        
        Penjualan::create($request->all());
        
        return redirect()->route('penjualan.index')
            ->with('success', 'Penjualan berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $penjualan = Penjualan::with('pelanggan')->findOrFail($id);
        return view('penjualan.show', compact('penjualan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $penjualan = Penjualan::findOrFail($id);
        $pelanggans = Pelanggan::all();
        return view('penjualan.edit', compact('penjualan', 'pelanggans'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'Nopelanggan' => 'required|integer|exists:pelanggans,Nopelanggan',
            'Tanggalpenjualan' => 'required|date',
        ]);
        
        $penjualan = Penjualan::findOrFail($id);
        $penjualan->update($request->all());
        
        return redirect()->route('penjualan.index')
            ->with('success', 'Penjualan berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $penjualan = Penjualan::findOrFail($id);
        $penjualan->delete();
        
        return redirect()->route('penjualan.index')
            ->with('success', 'Penjualan berhasil dihapus!');
    }
}
