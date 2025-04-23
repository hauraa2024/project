@extends('products.layout')

@section('content')

<div class="card mt-5">
  <h2 class="card-header">Show Pemasukan</h2>
  <div class="card-body">

    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-primary btn-sm" href="{{ route('pemasukan.index') }}"><i class="fa fa-arrow-left"></i> Back</a>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Pemasukan:</strong> <br/>
                {{ $pemasukan->pemasukan }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
            <div class="form-group">
                <strong>Deskripsi:</strong> <br/>
                {{ $pemasukan->deskripsi }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
            <div class="form-group">
                <strong>Jumlah:</strong> <br/>
                @if($pemasukan->jumlah->isNotEmpty())
                    <ul>
                        @foreach($pemasukan->jumlah as $jumlah)
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

