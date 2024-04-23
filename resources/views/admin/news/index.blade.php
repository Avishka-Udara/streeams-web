@extends('admin.news.layout')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>News Index</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('admin.news.create') }}"> Create New News</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Image</th>
                <th>Name</th>
                <th>Details</th>
                <th width="280px">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($news as $news)
            <tr>
                <td>{{ ++$i }}</td>
                <td><img src="/images/{{ $news->image }}" width="100px"></td>
                <td>{{ $news->title }}</td>
                <td>{{ $news->content }}</td>
                <td>
                    <form action="{{ route('admin.news.delete',$news->id) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <a class="btn btn-info" href="{{ route('admin.news.show',$news->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('admin.news.edit',$news->id) }}">Edit</a>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>


@endsection
