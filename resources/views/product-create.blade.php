<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laravel-crud</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="icon" href="https://laravel.com/img/favicon/favicon.ico" type="image/x-icon">
</head>

<body style="font-family: 'Nunito', sans-serif;">
    <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container">
            <div class="d-flex">
                <a class="navbar-brand" href="{{ url('/') }}" title="home" style="padding-right: 15px;">Home</a>
                <a class=" navbar-brand" href="{{ url('/product') }}" title="Products List">Products List</a>
            </div>
        </div>
    </nav>
    <div style="padding-top: 75px;">
        <div class="container">
            <div class="text-center">
                <h1 class="fw-bold">Products</h1>
                <h5 class="mb-3"><b>new product</b></h5>
            </div>
            <form method="post" action="{{ route('product.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control bg-light border-dark shadow-sm" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="quantity" class="form-label">Quantity</label>
                        <input type="number" name="quantity" id="quantity" class="form-control bg-light border-dark shadow-sm" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" name="price" id="price" class="form-control bg-light border-dark shadow-sm" required>
                    </div>
                    <div class="col-12">
                        <button type="reset" class="btn btn-warning me-2">clear</button>
                        <button type="submit" class="btn btn-success">submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>