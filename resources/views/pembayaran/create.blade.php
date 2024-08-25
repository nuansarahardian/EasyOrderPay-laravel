<!-- resources/views/pembayaran/create.blade.php -->
@extends('layouts.app-dashboard')

@section('content')
    <h1>Tambah Pembayaran</h1>

    <form action="{{ route('pembayaran.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="pesanan_id">Pesanan ID</label>
            <select name="pesanan_id" id="pesanan_id" class="form-control">
                
                @foreach ($pesanan as $psn)
                    <option value="{{ $psn->id }}">{{ $psn->id }}</option>
                @endforeach
     
            </select>
        </div>
        <div class="form-group">
            <label for="metode_pembayaran">Metode Pembayaran</label>
            <input type="text" name="metode_pembayaran" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="jumlah_pembayaran">Jumlah Pembayaran</label>
            <input type="text" name="jumlah_pembayaran" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
