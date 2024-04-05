
@extends('layout.main')

@section('content')
    <div class="card card-success">
        <div class="card-body">
            <div class="row">
                @if($tags->count() > 0)
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($tags as $key=>$tag)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $tag->title }}</td>
                                    <td class="d-flex justify-content-between">
                                        <a href="{{ route('moderator.tag.edit', $tag->id) }}" class="nav-link"><i class="fa fa-pencil-alt"></i></a>
                                        <a href="{{ route('moderator.tag.view', $tag->id) }}" class="nav-link"><i class="fa fa-eye"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <div>
                        No Tags Found
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
