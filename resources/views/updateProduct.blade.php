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
    <a class="navbar-brand" href="#">Company</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="/create">Create Stock</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Create Product</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">View Stock</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled">View Product</a>
            </li>
        </ul>
    </div>
</nav>
<br>
<div class="container-fluid">
    <form action="/uProduct/{{$product -> IDProduct}}" method="POST">
        @csrf
        <div class="modal-header">
            <div class="col-xs-6">
                <h4>Update info Product</h4>
            </div>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <label>Composition</label>
                <input type="text" value="{{$product -> Composition}}" name="composition" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Manufacturer</label>
                <input type="text" value="{{$product -> Manufacturer}}" name="manuf" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Purchase Price</label>
                <input type="text" value="{{$product -> PurchasePrice}}" name="purchase" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Stock ID</label>
                <input type="text" value="{{$product -> Stock}}" name="id" class="form-control" required>
            </div>
        </div>
        <div class="modal-footer">
            <input type="submit" class="btn btn-success" value="Complete">
        </div>
    </form>
</div>



</body>
</html>

