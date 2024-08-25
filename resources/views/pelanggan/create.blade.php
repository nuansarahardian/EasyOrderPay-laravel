@extends('layouts.app-dashboard')

@section('content')
    <h1>Tambah Pelanggan Baru</h1>

    <form action="{{ route('pelanggan.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="nama_pelanggan">Nama Pelanggan</label>
            <input type="text" name="nama_pelanggan" id="nama_pelanggan" class="form-control">
        </div>

        <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea name="alamat" id="alamat" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label for="telepon">Telepon</label>
            <input type="text" name="telepon" id="telepon" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
@endsection
