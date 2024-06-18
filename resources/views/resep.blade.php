<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/resep.css">
    <title>Resep</title>
</head>
<body>
    <table>
        <tr>
            <td id="tabel1">
                <div style="display: flex; align-items: center;" class="head">
                    <img src="https://picsum.photos/50" alt="Profile Picture" style="width: 70px; height: 70px; border-radius: 50%;"><br>
                    <p style="margin-right: 10px;">halo {{ $user->name }}</p>
                </div>
                <hr>
                <div style="text-align: left">
                    <h1 style="font-weight: bold">Resep Masakan</h1>
                </div>
                <hr>
                <div style="text-align: center" class="isi">
                    <p>NASI GORENG KAMPUNG</p>
                    <img src="https://thumb.viva.id/intipseleb/1265x711/2022/02/02/61fa7dce99c5a-nasi-goreng.jpg" alt="">
                    <p style="color: black;font-weight:bold">Bahan-bahan
                        2 Telor Ayam, 2 Buah Sosis Sapi, 1
                        Bungkus Sajiku Nasi Goreng Rasa Ayam,
                        Penyedap, Sedikit Lada</p>
                    <hr>
                    <p>keluar</p>
                </div>
            </td>
            <td id="tabel2">
                <nav>
                    <div class="logo"><a href="/"><img src="/img/logo.png" alt=""></a></div>
                    <ul class="menu" id="menu">
                        <li><a href="/">Beranda</a></li>
                        <li><a href="/resep" style="color: #8a6a51;font-weight:bold;font-size:25px">Resep</a></li>
                        <li><a href="/kursus">Kursus</a></li>
                        <li><a href="/kontak">Kontak</a></li>
                    </ul>
                </nav>
                <hr>
               <div style="text-align: center;font-weight:bold">
                <p><strong>1. </strong>Siapkan nasi yang sudah dikeluarkan dari magic com, biarkan pada suhu ruang agar nasi lebih kering. Lalu potong-potong sosis.</p>
<p><strong>2. </strong>Sekiranya nasi sudah lama di diamkan di suhu ruang, panaskan minyak goreng untuk menumis.</p>
<p><strong>3. </strong>Ceplok telur ayam, tumis hingga tidak terlalu hancur. Masukkan sosis dan tumis sampai matang.</p>
<p><strong>4. </strong>Masukkan nasi, aduk sampai nasi tercampur merata dengan telur dan sosis.</p>
<p><strong>5. </strong>Setelah merata, masukkan bumbu sajiku nasi goreng rasa Ayam.</p>
<p><strong>6. </strong>Aduk sampai bumbu merata, tumis hingga hampir kering. Tambahkan sedikit lada sesuai selera.</p>
<p><strong>7. </strong>Jumlah bumbu yang ditambahkan tergantung pada jumlah nasi. Pastikan untuk mencicipi. Jika terlalu asin, tambahkan kecap; jika terlalu hambar, tambahkan lebih banyak bumbu atau garam.</p>
               </div>
            </td>
        </tr>
    </table>
</body>
</html>
