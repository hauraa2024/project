@extends('products.layout')

@section('content')

<div class="card mt-5">
    <h2 class="card-header">Edit Task</h2>
    <div class="card-body">

        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="btn btn-primary btn-sm" href="{{ route('tasks.index') }}">
                <i class="fa fa-arrow-left"></i> Back
            </a>
        </div>

        <form action="{{ route('tasks.update', $task->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="taskName" class="form-label"><strong>Name:</strong></label>
                <input
                    type="text"
                    name="name"
                    value="{{ old('name', $task->name) }}"
                    class="form-control @error('name') is-invalid @enderror"
                    id="taskName"
                    placeholder="Task Name">
                @error('name')
                    <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="taskDescription" class="form-label"><strong>Description:</strong></label>
                <textarea
                    class="form-control @error('description') is-invalid @enderror"
                    style="height:150px"
                    name="description"
                    id="taskDescription"
                    placeholder="Task Description">{{ old('description', $task->description) }}</textarea>
                @error('description')
                    <div class="form-text text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i> Update</button>
        </form>

    </div>
</div>

@endsection

