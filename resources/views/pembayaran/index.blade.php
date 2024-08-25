<!-- resources/views/pembayaran/index.blade.php -->
@extends('layouts.app-dashboard')

@section('content')
    <h1>Daftar Pembayaran</h1>

    <a href="{{ route('pembayaran.create') }}" class="btn btn-primary mb-3">Tambah Pembayaran</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Pesanan ID</th>
                <th>Metode Pembayaran</th>
                <th>Jumlah Pembayaran</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pembayaran as $pembayaran)
                <tr>
                    <td>{{ $pembayaran->id }}</td>
                    <td>{{ $pembayaran->pesanan_id }}</td>
                    <td>{{ $pembayaran->metode_pembayaran }}</td>
                    <td>{{ $pembayaran->jumlah_pembayaran }}</td>
                    <td>
                        <a href="{{ route('pembayaran.edit', $pembayaran->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('pembayaran.destroy', $pembayaran->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus pembayaran ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
