<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="d-flex align-items-center justify-content-center vh-100" style="background-color: #fffffe">
    <div class="container">
        <div class="row align-items-center text-white">
            <div class="col-md-6" style="color : #ff8906">
                <h1>SELAMAT DATANG DI</h1>
                <h1>PROGRAM CRUD LARAVEL SI1</h1>
                <h4 class="text-white">Silahkan Login Untuk Melanjutkan</h4>
            </div>
            <div class="col-md-6">
                <div class="card p-4" style="backgound-color : #fffffe">
                    <h1 class="text-center">Login</h1>
                    <form method="POST" action="{{ route('login-proses') }}">
                        @csrf

                        @error('message')
                            {{ $message }}
                        @enderror
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        @error('email')
                            <small>{{ $message }}</small>
                        @enderror
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        @error('password')
                            <small>{{ $message }}</small>
                        @enderror

                        <button type="submit" class="btn text-white" style="background-color : #ff8906">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if ($message = Session::get('failed'))
        <script>
            Swal.fire({{ $message }});
        </script>
    @endif

</body>

</html>
