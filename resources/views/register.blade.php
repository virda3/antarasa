<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    <title>Registration Form</title>
</head>
<body>
    <nav>
        <div class="logo"><a href="/"><img src="/img/logo.png" alt=""></a></div>
        <ul class="menu" id="menu">
            <li><a href="/" style="color: #8a6a51;font-weight:bold;font-size:25px">Beranda</a></li>
            <li><a href="/resep">Resep</a></li>
            <li><a href="/kursus">Kursus</a></li>
            <li><a href="/kontak">Kontak</a></li>
        </ul>
    </nav>
    <hr>
    <div class="register-form">
        <h2 style="font-size: 60px">Create new Account</h2>
        <p>Already Registered? <a href="/login">Log in here</a>.</p>
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="password_confirmation">Confirm Password:</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required>
            </div>
            <div class="form-group">
                <label for="dob">Date of Birth:</label>
                <input type="date" id="dob" name="dob" required>
            </div>
            <div class="form-group">
                <button type="submit">Sign Up</button>
            </div>
        </form>
    </div>
</body>
</html>
