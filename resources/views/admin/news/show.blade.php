@extends('News.layout')

@section('content')
<div class="container">
  <h2>Show News</h2>
  @if ($message = Session::get('success'))
    <div class="alert alert-success">
      <p>{{ $message }}</p>
    </div>
  @endif
  <div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6">
      <a class="btn btn-primary" href="{{ route('news.index') }}"> Back</a>
    </div>
    <div class="col-xs-12 col-sm-4 col-md-6 text-right">
      @can('news.edit')
        <a class="btn btn-primary" href="{{ route('news.edit', $news->id) }}"> Edit </a>
      @endcan
      @can('news.delete')
        {!! Form::open(['method' => 'DELETE','route' => ['news.destroy', $news->id],'style'=>'display:inline']) !!}
          {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
      @endcan
    </div>
  </div>
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
        <strong>Title:</strong>
        {{ $news->title }}
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
        <strong>Content:</strong>
        {{ $news->content }}
      </div>
    </div>
    @if($news->image)
      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
          <strong>Image:</strong>
          <img src="/images/{{ $news->image }}" width="300px" alt="{{ $news->title }}">
        </div>
      </div>
    @endif
  </div>
</div>
@endsection
