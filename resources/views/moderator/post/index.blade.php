@extends('layout.main')

@section('content')
    <div class="card card-success">
        <div class="card-body">
            <div class="row">
                @if($posts->count() > 0)
                    @foreach($posts as $key=>$post)
                        @if($post->status == 'on')
                            <div class="col-md-12 col-lg-6 col-xl-4">
                                <div class="card mb-2 bg-gradient-dark">
                                    <img class="card-img-top" src="{{ asset('storage/' . $post->preview_image) }}" alt="Post Photo">
                                    <div class="col-4 card-img-overlay d-flex flex-column justify-content-end" style="background: lightgrey; opacity: 0.8; height: 40%;">
                                        <h5 class="card-title text-black" style="color: black"><a href="{{ route('moderator.post.view', $post->id) }}" class="nav-link">{{ $post->title }}</a></h5>
                                        <p class="card-text text-black pb-2 pt-1" style="color: black">{{ $post->description }}</p>
                                        <p class="card-text text-black pb-2 pt-1" style="color: black">{{ $post->created_at }}</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                @else
                    <div>
                        No Post Found
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
