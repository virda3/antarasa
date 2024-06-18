<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/kursus.css">
    <title>Kursus</title>
</head>
<body>
    <nav>
        <div class="logo"><a href="/"><img src="img/assets/logo.png" alt=""></a></div>
        
        <ul class="menu" id="menu">
            <li><a href="/">Beranda</a></li>
            @auth
            <li><a href="/resep">Resep</a></li>
            @else
            <li><a href="/login">Resep</a></li>
            @endauth
            <li><a href="/kursus" style="color: #8a6a51;font-weight:bold;font-size:25px">Kursus</a></li>
            <li><a href="/kontak">Kontak</a></li>
        </ul>
    </nav>
    <hr color="black">
    <div style="padding: 20px 10%;">

              
        <div class="container">
            <img src="img/3.png" alt="" style="margin-right: 90px">
            <div>
                <h1>cooking class online</h1>
                <h2>3 kali dalam seminggu</h2>
                <p>"Ingin mengasah keterampilan Anda tanpa harus meninggalkan
                    kenyamanan rumah? Bergabunglah dengan kursus online kami
                    yang menyajikan pembelajaran berkualitas dari para ahli di
                    bidangnya!</p>
                    <a href="">Read More</a>
            </div>
           
        </div>

        <div class="container">
            <div>
                <h1>kursus masak offline</h1>
                <h2>4 kali seminggu</h2>
            
                <p>Siap untuk petualangan kuliner yang tak terlupakan? Bergabunglah
                    dengan kursus memasak offline kami dan temukan keajaiban
                    dalam mencipta rasa dari bahan-bahan segar!"</p>
                    <a href="">Read More</a>
            </div>
            <img src="img/4.png" alt="" style="margin-left: 90px">
        </div>
  
    </div>
   
</body>
</html>
