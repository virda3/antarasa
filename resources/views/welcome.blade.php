<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="css/beranda.css">
</head>
<body>
    <nav>
        <ul class="menu" id="menu">
            <li><a href="/register">Daftar</a></li>
            <li><a href="/"><img src="img/2.png" alt=""></a></li>
            <li>
                @auth
                    <a href="/logout">Logout</a>
                @else
                    <a href="/login">Login</a>
                @endauth
            </li>
        </ul>
    </nav>
    <table style="width: auto;">
        <tr>
            <td style="width: 400px;">
                <div>
                    <h1>Food Recipes</h1>
                    <div style="display: flex; flex-direction: column;" class="list">
                        @auth
                        <a href="/resep" style="background-color: #c26262;">Resep</a>
                        <a href="/kursus" style="background-color: #d1c8c1;">Kursus</a>
                        <a href="/kontak" style="background-color:#f5aa27;">Share</a>
                        @else
                        <a href="/login" style="background-color: #c26262;">Resep</a>
                        <a href="/login" style="background-color: #d1c8c1;">Kursus</a>
                        <a href="/login" style="background-color:#f5aa27;">Share</a>
                        <p style="font-weight: bold">Happy Cooking</p>
                        @endauth
                    </div>
                </div>
            </td>
            <td style="width: 750px;"><img src="img/1.png" alt=""></td>
        </tr>
    </table>
</body>
</html>
