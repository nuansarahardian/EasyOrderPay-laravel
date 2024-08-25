<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Models\Pelanggan;
use App\Models\Produk;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    public function index()
    {
        $produk = Produk::all();

        $pesanan = Pesanan::all();
        return view('pesanan.index', compact('pesanan', 'produk'));
    }

    public function create()
    {
        $produk = Produk::all();
        $pelanggan = Pelanggan::all();
        return view('pesanan.create', compact('pelanggan', 'produk'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'produk_id' => 'required',
            'pelanggan_id' => 'required',
            'tanggal_pemesanan' => 'required',
            'total_harga' => 'required|numeric',
        ]);

        Pesanan::create($request->all());

        return redirect()->route('pesanan.index')->with('success', 'Pesanan berhasil ditambahkan.');
    }

    public function show(Pesanan $pesanan)
    {
        return view('pesanan.show', compact('pesanan'));
    }

    public function edit(Pesanan $pesanan)
    {
        $pelanggan = Pelanggan::all();
        return view('pesanan.edit', compact('pesanan', 'pelanggan'));
    }

    public function update(Request $request, Pesanan $pesanan)
    {
        $request->validate([
            'produk_id' => 'required',
            'pelanggan_id' => 'required',
            'tanggal_pemesanan' => 'required',
            'total_harga' => 'required|numeric',
        ]);

        $pesanan->update($request->all());

        return redirect()->route('pesanan.index')->with('success', 'Pesanan berhasil diperbarui.');
    }

    public function destroy(Pesanan $pesanan)
    {
        $pesanan->delete();

        return redirect()->route('pesanan.index')->with('success', 'Pesanan berhasil dihapus.');
    }
}
