<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laravel-crud</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body style="font-family: 'Nunito', sans-serif;" class="bg-white text-dark">
    <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">Home</a>
        </div>
    </nav>
    <div class="container" style="padding-top: 100px;">
        @if (session('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <div class="text-center">
            <h1 class="fw-bold">Products</h1>
            <h5 class="fw-semibold">products number ({{ $total }})</h5>
            <a href="{{ route('product.create') }}" class="btn btn-outline-dark mb-4">
                <i class="fa fa-plus"></i>new product
            </a>
        </div>
        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead>
                    <tr>
                        <th class="text-center">id</th>
                        <th>name</th>
                        <th>quantity</th>
                        <th>price</th>
                        <th class="text-center">options</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr>
                        <td class="text-center">{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->quantity }}</td>
                        <td>R$ {{ number_format($product->price, 0, ',', '.') }}</td>
                        <td class="text-center">
                            <a href="{{ route('product.edit', $product->id) }}" class="text-decoration-none" title="Edit"><button class="btn btn-primary btn-sm" title="Edit">edit</button></a>
                            <form method="POST" action="{{ route('product.destroy', $product->id) }}" style="display:inline-block;" onsubmit="return confirm('delete product?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete">delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>