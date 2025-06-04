@extends('products.layout')

@section('content')
<div class="container">
    <h1>Tambah Pengeluaran</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('pengeluaran.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
           <input type="text" name="deskripsi" value="{{ old('deskripsi') }}">
        </div>

        <div class="form-group">
            <label for="jumlah">Jumlah</label>
            <input type="number" name="jumlah" value="{{ old('jumlah') }}">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('pengeluaran.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
