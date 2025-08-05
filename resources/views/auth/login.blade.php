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

<body style="font-family: 'Nunito', sans-serif;" class="bg-white text-dark">
    <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">Home</a>
        </div>
    </nav>
    <div class="container d-flex justify-content-center"" style=" padding-top: 75px;">
        <div class="bg-dark p-5 rounded shadow-lg" style="min-width: 350px; max-width: 400px; width: 100%;">
            <h2 class="text-light text-center mb-4">Login</h2>
            <form method="post" action="{{ route('login.submit') }}">
                @csrf
                <div class="mb-3">
                    <input name="email" id="email" type="email" class="form-control bg-light shadow-sm" placeholder="email" required />
                </div>
                <div class="mb-3">
                    <input name="password" id="password" type="password" class="form-control bg-light shadow-sm" placeholder="password" required />
                </div>
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" />
                        <label class="form-check-label text-light" for="remember">remember me</label>
                    </div>
                    <a href="" class="text-decoration-none text-light-50">forgot password?</a>
                </div>
                <button type="submit" class="btn btn-light w-100 fw-bold mb-3">LOGIN</button>
            </form>
            <a href="{{ route('register') }}"> <button type="submit" class="btn btn-light w-100 fw-bold">SIGN UP</button></a>
            <div class="text-center mt-3">
                <p class="text-light mb-0">email: admin@admin.com</p>
                <p class="text-light">password: admin</p>
            </div>

        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>