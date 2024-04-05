@extends('layout.main')

@section('content')
    <div class="card-body">
        <div class="form-group">
            <h3>Title</h3>
            <span>{{ $post->title }}</span>
        </div>
        <div class="form-group">
            <h3>Description</h3>
            <span>{{ $post->description }}</span>
        </div>
        @if($post->preview_image)
            <img src="{{ asset('storage/' . $post->preview_image) }}" class="img-fluid" width="200" height="300" alt="Preview image">
        @endif
        <div class="form-group">
            <h3>Category</h3>
            <span>{{ $post->category->title }}</span>
        </div>
        <div class="form-group" style="display: grid">
            <h3>Tags</h3>
            @foreach($post->tags as $tag)
                <span>{{ $tag->title }}</span>
            @endforeach
        </div>
        <div class="card-body">
            <a href="{{ route('admin.post.edit', $post->id) }}" class="mx-2"><i class="fa fa-pencil-alt nav-icon"></i></a>
            <a href="{{ route('admin.post.delete', $post->id) }}" class="mx-2"><i class="fa fa-trash-alt nav-icon"></i></a>
        </div>
    </div>
@endsection
