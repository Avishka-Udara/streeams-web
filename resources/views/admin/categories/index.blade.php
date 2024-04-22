<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <h1 class="text-center">Category</h1>
    
    <div class="d-flex justify-content-center">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
    </div>
    
    <div class="row">
        <div class="card">
            <div class="card-header d-flex justify-content-end">
                <a href="{{route('admin.categories.create')}}" class="btn btn-primary mx-3">Create Category</a>
                <a href="{{route('admin.product.index')}}" class="btn btn-primary mx-3">Product</a>
                <a href="{{route('admin.admin')}}" class="btn btn-primary mx-3">Back to Admin page</a>
            </div>
        </div>
    </div>

    <div class="row w-75 mx-auto mt-5">
        <h3>Category List</h3>
        <h4 class="text-center text-danger">***When a category is deleted, all associated products are also removed***</h4>
        <table class="table border">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $c = 1;
                @endphp
                @foreach ($categories as $item)
                <tr>
                    <td>{{$c}}</td>
                    <td>{{$item->name}}</td>
                    <td>
                        <a href="{{ route('admin.categories.edit', $item->id) }}" class="btn btn-success">Edit</a>
                        
                        <form action="{{ route('admin.categories.delete', $item->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                        </form>

                    </td>
                </tr>
                @php
                    $c = $c + 1;
                @endphp
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>