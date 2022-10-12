<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>Production</title>
    <link rel="stylesheet" href="css/light-style1.css" id="style">
    <style>
        img {
            height: 100px;
            width: 250px;
        }
        .images {
            width: 350px;
        }
        table {
            width: 100%;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">Company</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            @if (Auth::check())
            <li class="nav-item active">
                <a class="nav-link" href="/create">Create Stock</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/createShop">Create Product</a>
            </li>
            @endif
            <li class="nav-item">
                <a class="nav-link" href="/index">View Stock</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/view">View Product</a>
            </li>
            @guest
            @if (Route::has('login'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @endif

            @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
            @endif
            @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
            @endguest
        </ul>
    </div>
</nav>
<br>
<div class="container-fluid">
    <table>
        <thead>
        <tr>
            <th></th>
            <th>Name</th>
            <th>Price</th>
            <th>Counts</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($product as $products)
        <tr>
            <td class="images"><img src="{{asset('/storage/'.$products->image)}}"></td>
            <td>{{$products -> Name}}</td>
            <td>{{$products -> Price}}</td>
            <td>{{$products -> Count}}</td>
            <td>
                <a type="button" class="btn btn-success" href="/one/{{$products-> id}}">View</a>
                <a type="button" class="btn btn-danger" href="/del/{{$products-> id}}">Delete</a>
            </td>

        </tr>
        @endforeach
        </tbody>
    </table>
</div>



</body>
</html>
