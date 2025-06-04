@extends('products.layout')

@section('content')

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Pengeluaran</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
   
    <div class="main">
        <h2 class="mb-4">Daftar Pengeluaran</h2>
        <a href="{{ route('pengeluaran.create') }}" class="btn btn-success mb-3">Tambah Pengeluaran</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Deskripsi</th>
                    <th>Jumlah</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($pengeluaran as $item)
                <tr>
                    <td>{{ $item->deskripsi }}</td>
                    <td>Rp {{ number_format($item->jumlah, 0, ',', '.') }}</td>
                    <td>
                        <a href="{{ route('pengeluaran.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('pengeluaran.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="3" class="text-center">Tidak ada data pengeluaran.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>
@endsection