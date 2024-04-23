<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<!-- NUWAN -->
<!-- NUWAN -->
    </head>
    <body class="">
        
        @if (Route::has('login'))
            <div class="d-flex justify-content-end">
                @auth
                    <a href="{{ url('/dashboard') }}" class="nav-link m-3 p-2 bg-dark">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" class="nav-link m-3 p-2 bg-dark">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="nav-link m-3 p-2 bg-dark">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <h1 class="text-center text-success">Welcome users(Customers) visit page</h1>
        <div class="row mx-5 mt-5">
            <div class="d-flex justify-content-center">
                @if (session('error'))
                    <div class="alert alert-success">{{ session('error') }}</div>
                @endif
            </div>
            <h3 class="text-center text-danger">Product List</h3>
            <table class="table border">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Category</th>
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Features</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $c = 1;
                    @endphp
                    @foreach ($products as $item)
                    <tr>
                        <td>{{$c}}</td>
                        <td>{{$item->category->name}}</td>
                        <td><img src="{{asset('storage/product_images/'.$item->image)}}" width="100px"></td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->description}}</td>
                        <td>{{$item->features}}</td>
                        <td>{{$item->price}}</td>
                        <td>{{$item->quantity}}</td>
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
