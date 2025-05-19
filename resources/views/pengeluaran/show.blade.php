@extends('products.layout')

@section('content')

<div class="card mt-5">
  <h2 class="card-header">Show Pengeluaran</h2>
  <div class="card-body">

    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-primary btn-sm" href="{{ route('pengeluaran.index') }}"><i class="fa fa-arrow-left"></i> Back</a>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Pengeluaran:</strong> <br/>
                {{ $pengeluaran->pengeluaran}}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
            <div class="form-group">
                <strong>Deskripsi:</strong> <br/>
                {{ $pengeluaran->deskripsi }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
            <div class="form-group">
                <strong>Jumlah:</strong> <br/>
                @if($pengeluaran->jumlah->isNotEmpty())
                    <ul>
                        @foreach($pengeluarann->jumlah as $jumlah)
                            <li>{{ $jumlah->name }}</li>
                        @endforeach
                    </ul>
                @else
                    <p>No assigned tasks</p>
                @endif
            </div>
        </div>
    </div>

  </div>
</div>

@endsection

