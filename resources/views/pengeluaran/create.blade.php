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
            <label for="description">Deskripsi</label>
            <input type="text" class="form-control" id="description" name="description" required>
        </div>

        <div class="form-group">
            <label for="amount">Jumlah</label>
            <input type="number" class="form-control" id="amount" name="amount" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('pengeluaran.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
