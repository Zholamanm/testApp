
@extends('layout.main')

@section('content')
    <div class="card card-success">
        <div class="card-body">
            <div class="row">
                @if($categories->count() > 0)
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
                            @foreach($categories as $key=>$category)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $category->title }}</td>
                                    <td class="d-flex justify-content-between">
                                        <a href="{{ route('moderator.category.edit', $category->id) }}" class="nav-link"><i class="fa fa-pencil-alt"></i></a>
                                        <a href="{{ route('moderator.category.view', $category->id) }}" class="nav-link"><i class="fa fa-eye"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <div>
                        No Categories Found
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
