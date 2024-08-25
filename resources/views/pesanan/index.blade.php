@extends('layouts.app-dashboard')
@section('content')
<h1>Daftar Pesanan</h1>
<a href="{{ route('pesanan.create') }}" class="btn btn-primary">Tambah Pesanan</a>
<table class="table mt-3">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Pelanggan</th>
            <th>Nama Produk</th>
            <th>Tanggal Pemesanan</th>
            <th>Total Harga</th>
            <th>Status Pembayaran</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pesanan as $pesanan)
            <tr>
                <td>{{ $pesanan->id }}</td>
                <td>{{ $pesanan->pelanggan->nama_pelanggan }}</td>
                <td>{{ $pesanan->produk->nama_produk }}</td>
                <td>{{ $pesanan->tanggal_pemesanan }}</td>
                <td>{{ $pesanan->total_harga }}</td>
                <td>
                    @if ($pesanan->pembayaran)
                        Sudah Dibayar
                    @else
                        Belum Dibayar
                    @endif
                </td>
                <td>
                    <a href="{{ route('pesanan.show', $pesanan->id)}}" class="btn btn-sm btn-primary">Detail</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection