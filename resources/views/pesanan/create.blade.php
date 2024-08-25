@extends('layouts.app-dashboard')

@section('content')
    <h1>Tambah Pesanan</h1>
    <form action="{{ route('pesanan.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="pelanggan_id">Pelanggan</label>
            <select name="pelanggan_id" id="pelanggan_id" class="form-control">
                @foreach ($pelanggan as $plg)
                    <option value="{{ $plg->id }}">{{ $plg->nama_pelanggan }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="produk_id">Produk</label>
            <select name="produk_id" id="produk_id" class="form-control">
                @foreach ($produk as $prdk)
                <option value="{{ $prdk->id }}" data-harga="{{ $prdk->harga }}">{{ $prdk->nama_produk }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="tanggal_pemesanan">Tanggal Pemesanan</label>
            <input type="date" name="tanggal_pemesanan" id="tanggal_pemesanan" class="form-control">
        </div>
        <div class="form-group">
            <label for="total_harga">Total Harga</label>
            
             <input type="number" name="total_harga" id="harga" class="form-control" readonly>
        </div>
       
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
   
    <script>
        document.getElementById('produk_id').addEventListener('change', function() {
            var selectedOption = this.options[this.selectedIndex];
            var harga = selectedOption.getAttribute('data-harga');
            document.getElementById('harga').value = harga;
        });
    </script>
@endsection