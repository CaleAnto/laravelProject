<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">



    <title></title>
    <link rel="stylesheet" href="css/light-style1.css" id="style">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">Company</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="/create">Create Stock</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/createProduct">Create Product</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/index">View Stock</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/view">View Product</a>
            </li>
        </ul>
    </div>
</nav>
<br>
<div class="container-fluid">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Address</th>
                <th scope="col">Free Counts</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            <tr @foreach($stock as $stocks) >

                <th scope="row">{{$stocks-> IDStock}}</th>
                <td>{{$stocks->Address}}</td>
                <td>{{$stocks->FreeCounts}}</td>
                <td>
                    <a type="button" class="btn btn-success" href="/edit/{{$stocks-> IDStock}}">Edit</a>
                    <a type="button" class="btn btn-danger" href="/delete/{{$stocks-> IDStock}}">Delete</a>
                </td>

            </tr @endforeach>
            </tbody>
        </table>
</div>



</body>
</html>

