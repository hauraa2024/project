@extends('products.layout')

@section('content')
<div class="container">
    <h1>Daftar Pemasukan</h1>
    <a href="{{ route('pemasukan.create') }}" class="btn btn-success">Tambah Pemasukan</a>
    <table class="table">
        <thead>
            <tr>
                <th>Deskripsi</th>
                <th>Jumlah</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pemasukan as $pemasukans)
            <tr>
                <td>{{ $pemasukan->description }}</td>
                <td>{{ $pemasukan->amount }}</td>
                <td>
                    <a href="{{ route('pemasukan.show', $pemasukan->id) }}" class="btn btn-info">Lihat</a>
                    <a href="{{ route('pemasukan.edit', $pemasukan->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('pemasukan.destroy', $pemasukan->id) }}" method="POST" style="display:inline;">
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