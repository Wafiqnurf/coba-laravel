<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF TOKEN -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Daftar - Healthcare</title>
    <style>
    body,
    html {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        height: 100%;
        background: linear-gradient(135deg, #71b7e6, #9b59b6);
    }

    .container {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100%;
    }

    .logo {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
    }

    .logo img {
        width: 50px;
        height: 50px;
        margin-right: 10px;
    }

    .logo h1 {
        color: #c62e2e;
        font-size: 28px;
        margin: 0;
    }

    .signup-form {
        background-color: #fff;
        padding: 40px;
        border-radius: 8px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        width: 300px;
    }

    h2 {
        text-align: center;
        color: #333;
        margin-bottom: 20px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        margin-bottom: 5px;
        color: #666;
    }

    .form-group input {
        width: 100%;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 4px;
        font-size: 16px;
    }

    .form-group input:focus {
        outline: none;
        border-color: #71b7e6;
    }

    .btn-signup {
        width: 100%;
        padding: 12px;
        background-color: #4CAF50;
        color: #fff;
        border: none;
        border-radius: 4px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .btn-signup:hover {
        background-color: #45a049;
    }

    .login-link {
        text-align: center;
        margin-top: 15px;
    }

    .login-link a {
        color: #71b7e6;
        text-decoration: none;
    }

    .login-link a:hover {
        text-decoration: underline;
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="logo">
            <img src="{{ asset('assets/images/healthcare.png') }}" alt="Healthcare Logo">
            <h1>Healthcare</h1>
        </div>
        <form class="signup-form" method="POST" action="{{ route('register') }}">
            @csrf
            <h2>Daftar Akun Baru</h2>
            <div class="form-group">
                <label for="name">Nama</label>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                    value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="new-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password-confirm">Confirm Password</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                    autocomplete="new-password">
            </div>
            <button type="submit" class="btn-signup">Daftar</button>
            <div class="login-link">
                <p>Sudah punya akun? <a href="/login">Login di sini</a></p>
            </div>
        </form>
    </div>
</body>

</html>
