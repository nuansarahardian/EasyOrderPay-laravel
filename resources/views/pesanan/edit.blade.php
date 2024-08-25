@extends('layouts.app-dashboard')

@section('content')
    <h1>Edit Pesanan</h1>
    <form action="{{ route('pesanan.update', $pesanan->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="pelanggan_id">Pelanggan</label>
            <select name="pelanggan_id" id="pelanggan_id" class="form-control">
                @foreach ($pelanggan as $plg)
                    <option value="{{ $plg->id }}" {{ $pesanan->pelanggan_id == $plg->id ? 'selected' : '' }}>{{ $plg->nama_pelanggan }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="tanggal_pemesanan">Tanggal Pemesanan</label>
            <input type="date" name="tanggal_pemesanan" id="tanggal_pemesanan" class="form-control" value="{{ $pesanan->tanggal_pemesanan }}">
        </div>
        <div class="form-group">
            <label for="total_harga">Total Harga</label>
            <input type="number" name="total_harga" id="total_harga" class="form-control" value="{{ $pesanan->total_harga }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
    @endsection