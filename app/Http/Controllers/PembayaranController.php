<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\Pesanan;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function index()
    {

        $pembayaran = Pembayaran::all();
        return view('pembayaran.index', compact('pembayaran'));
    }

    public function create()
    {
        $pembayaran = Pembayaran::all();
        $pesanan = Pesanan::all();
        return view('pembayaran.create', compact('pesanan', 'pembayaran'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'pesanan_id' => 'required',
            'metode_pembayaran' => 'required',
            'jumlah_pembayaran' => 'required|numeric',
        ]);

        Pembayaran::create($request->all());

        return redirect()->route('pembayaran.index')->with('success', 'Pembayaran berhasil ditambahkan.');
    }

    public function edit(Pembayaran $pembayaran)
    {
        return view('pembayaran.edit', compact('pembayaran'));
    }

    public function update(Request $request, Pembayaran $pembayaran)
    {
        $request->validate([
            'pesanan_id' => 'required',
            'metode_pembayaran' => 'required',
            'jumlah_pembayaran' => 'required|numeric',
        ]);

        $pembayaran->update($request->all());

        return redirect()->route('pembayaran.index')->with('success', 'Pembayaran berhasil diperbarui.');
    }

    public function destroy(Pembayaran $pembayaran)
    {
        $pembayaran->delete();

        return redirect()->route('pembayaran.index')->with('success', 'Pembayaran berhasil dihapus.');
    }
}
