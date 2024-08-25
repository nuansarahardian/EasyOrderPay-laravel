@extends('layouts.app-dashboard')

@section('content')
    <h1>Edit Pelanggan</h1>

    <form action="{{ route('pelanggan.update', $pelanggan) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nama_pelanggan">Nama Pelanggan</label>
            <input type="text" name="nama_pelanggan" id="nama_pelanggan" class="form-control" value="{{ $pelanggan->nama_pelanggan }}">
        </div>

        <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea name="alamat" id="alamat" class="form-control">{{ $pelanggan->alamat }}</textarea>
        </div>

        <div class="form-group">
            <label for="telepon">Telepon</label>
            <input type="text" name="telepon" id="telepon" class="form-control" value="{{ $pelanggan->telepon }}">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
