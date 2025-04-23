@extends('products.layout')

@section('content')

<div class="card mt-5">
  <h2 class="card-header">Create New Task</h2>
  <div class="card-body">

    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-primary btn-sm" href="{{ route('tasks.index') }}"><i class="fa fa-arrow-left"></i> Back</a>
    </div>

    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="inputName" class="form-label"><strong>Task Name:</strong></label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="inputName" placeholder="Task Name">
            @error('name')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="inputDescription" class="form-label"><strong>Description:</strong></label>
            <textarea class="form-control @error('description') is-invalid @enderror" style="height:150px" name="description" id="inputDescription" placeholder="Task Description"></textarea>
            @error('description')
                <div class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Submit</button>
    </form>

  </div>
</div>

@endsection

