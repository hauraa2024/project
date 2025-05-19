@extends('products.layout')

@section('content')
<div class="container">
    <h1>Edit Pengeluaran</h1>
    <form action="{{ route('pengeluaran.update', $pengeluaran->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="description">Deskripsi</label>
            <input type="text" class="form-control" id="description" name="description" value="{{ $pengeluaran->description }}" required>
        </div>
        <div class="form-group">
            <label for="amount">Jumlah</label>
            <input type="number" class="form-control" id="amount" name="amount" value="{{ $pengeluaran->amount }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('pengeluaran.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection