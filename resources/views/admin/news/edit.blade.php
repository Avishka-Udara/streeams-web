@extends('admin.news.layout')

@section('content')
<div class="container">
  <h2>Edit News</h2>
  @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <form action="{{ route('admin.news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT') <div class="row">
      <div class="col-xs-12 col-sm-8 col-md-6">
        <div class="form-group">
          <label for="title">Title:</label>
          <input type="text" class="form-control" name="title" id="title" value="{{ old('title', $news->title) }}" placeholder="Enter Title" required>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
          <label for="content">Content:</label>
          <textarea class="form-control" style="height:300px" name="content" id="content" placeholder="Enter Content" required>{{ old('content', $news->content) }}</textarea>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-8 col-md-6">
        <div class="form-group">
          <label for="image">Image (Optional):</label>
          <input type="file" name="image" id="image" class="form-control">
          @if($news->image)
            <p>Current Image: <img src="/images/{{ $news->image }}" width="100px" alt="{{ $news->title }}"></p>
          @endif
        </div>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Update News</button>
  </form>
</div>
@endsection
