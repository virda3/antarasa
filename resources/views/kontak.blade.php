<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/kontak.css">
    <title>kontak</title>
</head>
<body>
    <nav>
        <div class="logo"><a href="/"><img src="img/logo.png" alt=""></a></div>
        
        <ul class="menu" id="menu">
            <li><a href="/">Beranda</a></li>
            @auth
            <li><a href="/resep">Resep</a></li>
            @else
            <li><a href="/login">Resep</a></li>
            @endauth
            <li><a href="/kursus">Kursus</a></li>
            <li><a href="/kontak"style="color: #8a6a51;font-weight:bold;font-size:25px">Kontak</a></li>
        </ul>
    </nav>
    <hr>
    <div class="container">
        <div class="logo">
            <img src="img/logo.png" alt="">
            <p>CONTACT US</p>
            <div class="contact-links">
                <a href="tel:089627668187"><img src="img/whatsapp.png" alt="WhatsApp Logo">0896-2766-8187</a>
                <a href="https://instagram.com/antarasacooking"><img src="img/instagram.png" alt="Instagram Logo">@ANTARASACOOKING</a>
                <a href="mailto:antarasacooking@gmail.com"><img src="img/gmail.png" alt="Gmail Logo">antarasacooking@gmail.com</a>
            </div>
        </div>
    </div>
</body>
</html>
