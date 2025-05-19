@extends('products.layout')

@section('content')
<div class="container">
    <h1>Daftar Pemasukan</h1>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-success btn-sm" href="{{ route('pemasukan.create') }}"> <i class="fa fa-plus"></i> Tambah Karyawan</a>
        </div>
    <table class="table">
        <thead>
            <tr>
                <th>Deskripsi</th>
                <th>Jumlah</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($pemasukan as $item)
<tr>
    <td>{{ $item->description }}</td>
    <td>{{ $item->amount }}</td>
    <td>
        <a href="{{ route('pemasukan.show', $item->id) }}" class="btn btn-info">Lihat</a>
        <a href="{{ route('pemasukan.edit', $item->id) }}" class="btn btn-warning">Edit</a>
        <form action="{{ route('pemasukan.destroy', $item->id) }}" method="POST" class="d-inline delete-form">
    @csrf
    @method('DELETE')
    <button type="button" class="btn btn-danger btn-delete" data-id="{{ $item->id }}">Hapus</button>
</form>

    </td>
</tr>
@endforeach

        </tbody>
    </table>
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const deleteButtons = document.querySelectorAll('.btn-delete');

        deleteButtons.forEach(button => {
            button.addEventListener('click', function () {
                const form = this.closest('form');
                const id = this.getAttribute('data-id');

                Swal.fire({
                    title: 'Apakah kamu yakin?',
                    text: "Data akan dihapus permanen!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, hapus!',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        });
    });
</script>

</div>
@endsection
