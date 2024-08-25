@extends('layouts.app-dashboard')

@section('content')
    <h1>Detail Pesanan</h1>
    <table class="table mt-3">
        <tr>
            <th>ID</th>
            <td>{{ $pesanan->id }}</td>
        </tr>
        <tr>
            <th>Nama Pelanggan</th>
            <td>{{ $pesanan->pelanggan->nama_pelanggan }}</td>
        </tr>
        <tr>
            <th>Tanggal Pemesanan</th>
            <td>{{ $pesanan->tanggal_pemesanan }}</td>
        </tr>
        <tr>
            <th>Total Harga</th>
            <td>{{ $pesanan->total_harga }}</td>
        </tr>
        <tr>
            <th>Status Pembayaran</th>
            <td>
                @if ($pesanan->pembayaran)
                    Sudah Dibayar
                @else
                    Belum Dibayar
                @endif
            </td>
        </tr>
    </table>
    <a href="{{ route('pesanan.edit', $pesanan->id) }}" class="btn btn-sm btn-success">Edit</a>
    <form action="{{ route('pesanan.destroy', $pesanan->id) }}" method="POST" style="display: inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus pesanan ini?')">Hapus</button>
    </form>
@endsection