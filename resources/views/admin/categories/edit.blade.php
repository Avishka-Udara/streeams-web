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
    <h1 class="text-center">Edit Category</h1>

    <div class="d-flex justify-content-center">
        <a href="{{route('admin.categories.index')}}" class="btn btn-primary mt-5">Back to Category</a>
    </div>
    
    <div class="row d-flex justify-content-center mt-5 p-5 mx-5 border">
    <form class="p-3 w-50" action="{{ route('admin.categories.update', ['id' => $category->id]) }}" method="POST">
             @csrf
             @method('PUT')

            <div class="mb-3">
                <label class="form-label">Category Name</label><br>
                <input type="text" class="form-control" name="name" value="{{ $category->name }}">
            </div>
            
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Update Category</button>
            </div>

        </form>
    </div>
</body>
</html>