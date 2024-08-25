<!-- resources/views/pembayaran/show.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Detail Pembayaran</h1>

    <table class="table">
        <tbody>
            <tr>
                <th>ID</th>
                <td>{{ $pembayaran->id }}</td>
            </tr>
            <tr>
                <th>Pesanan ID</th>
                <td>{{ $pembayaran->pesanan_id }}</td>
            </tr>
            <tr>
                <th>Metode Pembayaran</th>
                <td>{{ $pembayaran->metode_pembayaran }}</td>
            </tr>
            <tr>
                <th>Jumlah Pembayaran</th>
                <td>{{ $pembayaran->jumlah_pembayaran }}</td>
            </tr>
        </tbody>
    </table>

    <a href="{{ route('pembayaran.edit', $pembayaran->id) }}" class="btn btn-primary">Edit</a>
    <form action="{{ route('pembayaran.destroy', $pembayaran->id) }}" method="POST" class="d-inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus pembayaran ini?')">Hapus</button>
    </form>
@endsection
