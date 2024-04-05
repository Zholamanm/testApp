@extends('layout.main')

@section('content')
    <form action="{{ route('admin.post.update', $post->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="title" placeholder="Enter title" value="{{ $post->title }}">
            </div>
            <div class="form-group">
                <label>Textarea</label>
                <textarea class="form-control" name="description" rows="3" placeholder="Description">{{ $post->description }}</textarea>
            </div>
            @if($post->preview_image)
                <img src="{{ asset('storage/' . $post->preview_image) }}" class="img-fluid" width="200" height="300" alt="Preview image">
            @endif
            <div class="form-group">
                <label for="exampleInputFile">Image</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="preview_image" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Categories</label>
                <select name="category_id" class="form-control select2bs4" style="width: 100%;">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ $post->category_id == $category->id ? 'selected' : '' }}>{{ $category->title }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Tags</label>
                <select class="select2bs4" name="tags[]" multiple="multiple" data-placeholder="Select a State"
                        style="width: 100%;">
                    @foreach($tags as $tag)
                        <option value="{{ $tag->id }}" {{ $post->tags->contains('id', $tag->id) ? 'selected' : '' }}>{{ $tag->title }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <div class="card-header">
                    <h3 class="card-title">Status</h3>
                </div>
                <div class="card-body">
                    <input type="checkbox" name="status" {{ $post->status == 'on' ? 'checked' : '' }} data-bootstrap-switch>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection
