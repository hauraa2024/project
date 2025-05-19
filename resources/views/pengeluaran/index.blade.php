@extends('products.layout')

@section('content')
<div class="container">
    <h1>Daftar Pengeluaran</h1>
    <a href="{{ route('pengeluaran.create') }}" class="btn btn-success">Tambah Pengeluaran</a>
    <table class="table">
        <thead>
            <tr>
                <th>Deskripsi</th>
                <th>Jumlah</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pengeluaran as $item)
            <tr>
                <td>{{ $pengeluaran->description }}</td>
                <td>{{ $pengeluaran->amount }}</td>
                <td>
                    <a href="{{ route('peengeluaran.show', $pengeluaran->id) }}" class="btn btn-info">Lihat</a>
                    <a href="{{ route('pengeluaran.edit', $pengeluaran->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('pemasukan.destroy', $pengeluaran->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection