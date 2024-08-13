<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/font.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/logo.png') }}">
    <title>Sign In</title>
</head>
<body>
    <div class="login-page">
        <div class="login-form">
            <h1>Selamat Datang 👋</h1>
            <p>Website pengelolaan greenhouse nursery room Agribusiness Tecnology Park (ATP)</p>
            <form method="POST" action="{{ url('/login') }}">
                @csrf <!-- CSRF protection token -->
                <label for="username">Username</label><br>
                <input class="username" type="text" name="username" id="username" required><br>
                <br>
                <label for="password">Password</label><br>
                <input type="password" name="password" id="password" required><br>
                <br>
                <br>
                <button type="submit" class="sign-in">Sign in</button>
            </form>
            @if ($errors->any())
                <div>
                    <strong>Error!</strong> {{ $errors->first() }}
                </div>
            @endif
            <div class="copyright">© 2024 HOLYDAY</div>
        </div>
        <div class="login-image">
            <img src="{{ asset('img/Art.png') }}" alt="">
        </div>
    </div>
</body>
</html>
