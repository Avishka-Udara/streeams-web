@extends('admin.news.layout')

@section('content')
<div class="container">
  <h2>Create New News</h2>
  @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif
  <form action="{{ route('admin.news.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
      <div class="col-xs-12 col-sm-8 col-md-6">
        <div class="form-group">
          <label for="title">Title:</label>
          <input type="text" class="form-control" name="title" id="title" placeholder="Enter Title" required>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
          <label for="content">Content:</label>
          <textarea class="form-control" style="height:300px" name="content" id="content" placeholder="Enter Content" required></textarea>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-8 col-md-6">
        <div class="form-group">
          <label for="image">Image (Optional):</label>
          <input type="file" name="image" class="form-control" placeholder="image">
        </div>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Create News</button>
  </form>
</div>
@endsection
