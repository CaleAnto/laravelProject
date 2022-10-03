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
    <ul class="list-group">
        <li class="list-group-item">Name: {{$shop -> Name}}</li>
        <li class="list-group-item">Price: {{$shop -> Price}}</li>
        <li class="list-group-item">Count: {{$shop -> Count}}</li>
    </ul>
    <a type="button" class="btn btn-success" href="/eShop/{{$shop -> id}}">Edit</a>
    <br><br>
    <ul class="list-group">
        <li class="list-group-item">Composition: {{$product -> Composition}}</li>
        <li class="list-group-item">Manufacturer: {{$product -> Manufacturer}}</li>
        <li class="list-group-item">Purchase Price: {{$product -> PurchasePrice}}</li>
        <li class="list-group-item">Stock ID: {{$product -> Stock}}</li>
    </ul>
    <a type="button" class="btn btn-success" href="/eProduct/{{$product -> IDProduct}}">Edit</a>
</div>



</body>
</html>


