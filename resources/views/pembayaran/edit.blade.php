<!-- resources/views/pembayaran/edit.blade.php -->
@extends('layouts.app-dashboard')

@section('content')
    <h1>Edit Pembayaran</h1>

    <form action="{{ route('pembayaran.update', $pembayaran->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="pesanan_id">Pesanan ID</label>
            <input type="text" name="pesanan_id" class="form-control" value="{{ $pembayaran->pesanan_id }}" required>
        </div>
        <div class="form-group">
            <label for="metode_pembayaran">Metode Pembayaran</label>
            <input type="text" name="metode_pembayaran" class="form-control" value="{{ $pembayaran->metode_pembayaran }}" required>
        </div>
        <div class="form-group">
            <label for="jumlah_pembayaran">Jumlah Pembayaran</label>
            <input type="text" name="jumlah_pembayaran" class="form-control" value="{{ $pembayaran->jumlah_pembayaran }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection

