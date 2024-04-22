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
    <h1 class="text-center">Edit Product</h1>

    <div class="d-flex justify-content-center">
        <a href="{{route('admin.product.index')}}" class="btn btn-primary mt-5">Back to Product</a>
    </div>
    
    <div class="row d-flex justify-content-center mt-5 p-5 mx-5 border">
    <form class="p-3 w-50" action="{{ route('admin.product.update', ['id' => $product->id]) }}" method="POST" enctype="multipart/form-data">
             @csrf
             @method('PUT')

            <div class="mb-3">
                <label class="form-label">Category Type</label><br>
                <select class="form-select" name="category_id">
                    @foreach ($category as $item)
                        <option class="form-select" value="{{$item->id}}" {{ $item->id == $product->category_id ? 'selected' : ''}}>
                            {{$item->name}}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Product Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$product->name}}">
            </div>
            <div class="mb-3">
                <label class="form-label">Product Price</label>
                <input type="text" class="form-control" id="price" name="price" value="{{$product->price}}">
            </div>
            <div class="mb-3">
                <label class="form-label">Product Image</label>
                <input type="file" class="form-control" id="image" name="image" value="{{$product->image}}">
            </div>
            <div class="mb-3">
                <label class="form-label">Product Description</label>
                <input type="text" class="form-control" id="description" name="description" value="{{$product->description}}">
            </div>
            <div class="mb-3">
                <label class="form-label">Number of Quntity</label>
                <input type="text" class="form-control" id="quntity" name="quantity" value="{{$product->quantity}}">
            </div>
            <div class="mb-3">
                <label class="form-label">Features</label>
                <textarea class="form-control" id="features" name="features" value="{{$product->features}}"></textarea>
            </div>
            
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Update Product</button>
            </div>

        </form>
    </div>
</body>
</html>