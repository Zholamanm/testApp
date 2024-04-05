@extends('layout.main')

@section('content')
    <div class="card-body">
        <h3>Title</h3>
        <div class="form-group">
            <span>{{ $tag->title }}</span>
        </div>
    </div>
    <div class="card-body">
        <a href="{{ route('moderator.tag.edit', $tag->id) }}" class="mx-2"><i class="fa fa-pencil-alt nav-icon"></i></a>
    </div>
@endsection
