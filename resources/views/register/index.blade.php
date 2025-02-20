<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/signin.css') }}">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="sitemap.html">Liputan Grant</a>

            <!-- Regular Navbar for larger screens -->
            <x-navbar></x-navbar>
        </div>
    </nav>

    <main class="form-signin w-100 m-auto d-flex justify-content-center align-items-center vh-100">
        <form class="w-100" method="POST" action="/register">
            @csrf
            <h1 class="h3 mb-3 fw-normal">Register here</h1>

            <div class="form-floating m-1">
                <input type="text"
                    class="form-control 
                    @error('name') is-invalid               
                    @enderror"
                    name="name" id="name" placeholder="name" required {{ old('name') }}>
                <label for="name">Name</label>
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-floating m-1">
                <input type="text"
                    class="form-control 
                    @error('username') is-invalid               
                    @enderror"
                    name="username" id="username" placeholder="username" required {{ old('username') }}>
                <label for="username">Username</label>
                @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-floating m-1">
                <input type="email"
                    class="form-control
                    @error('email') is-invalid               
                    @enderror"
                    name="email" id="email" placeholder="name@example.com" required {{ old('email') }}>
                <label for="email">Email address</label>
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-floating m-1">
                <input type="password"
                    class="form-control 
                    @error('password') is-invalid               
                    @enderror"
                    name="password" id="password" placeholder="Password" required >
                <label for="password">Password</label>
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
            <small class="d-block text-center mt-2">have registered? <a href="/login">login!</a></small>
        </form>
    </main>

</body>

</html>
