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
    <h1 class="text-center">Edit Users</h1>

    <div class="d-flex justify-content-center">
        <a href="{{route('admin.admin')}}" class="btn btn-primary mt-5">Back to Admin</a>
    </div>
    
    <div class="row d-flex justify-content-center mt-5 p-5 mx-5 border">
    <form class="p-3 w-50" action="{{ route('admin.adminUpdate', ['id' => $userlist->id]) }}" method="POST">
             @csrf
             @method('PUT')

            <div class="mb-3">
                <label class="form-label">User Name</label><br>
                <input type="text" class="form-control" name="name" value="{{ $userlist->name }}">
            </div>

            <div class="mb-3">
                <label class="form-label">User Email</label><br>
                <input type="email" class="form-control" name="email" value="{{ $userlist->email }}">
            </div>

            <div class="mb-3">
                <label class="form-label">User Type</label><br>
                <input type="number" class="form-control" name="user_type" value="{{ $userlist->user_type }}">
            </div>
            
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Update User</button>
            </div>

        </form>
    </div>
</body>
</html>