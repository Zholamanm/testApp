@extends('layout.main')

@section('content')
    <div class="card-body">
        <h3>Title</h3>
        <div class="form-group">
            <span>{{ $category->title }}</span>
        </div>
    </div>
    <div class="card-body">
        <a href="{{ route('admin.category.edit', $category->id) }}" class="mx-2"><i class="fa fa-pencil-alt nav-icon"></i></a>
        <a href="{{ route('admin.category.delete', $category->id) }}" class="mx-2"><i class="fa fa-trash-alt nav-icon"></i></a>
    </div>
@endsection
