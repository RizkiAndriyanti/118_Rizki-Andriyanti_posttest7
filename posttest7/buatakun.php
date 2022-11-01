<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BUAT AKUN</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <h1 class="judul_buatakun">Silahkan  Buat Akunnyaaa!!</h1>
    <p class="tgl-login">Anda Login Pada : <?=date("d-m-Y")?></p><br>
    <form class="form" action="tambah.php" method="post" enctype="multipart/form-data">
            <input type="text" placeholder="Name" name="nama">
            <br>
            <input type="password" placeholder="Password" name="pw">
            <br>
            <input type="password" name="konfirmasi" placeholder="Konfirmasi password">
            <br>
            <input type="email" placeholder="Email"  name="email">
            <br>
            <input type="text" name="username" placeholder="Masukkan username">
            <br>
            <input type="text" placeholder="Nomor Telpon" name="nohp">
            <br>
            <input type="date" placeholder="Tanggal Lahir Kamu" name="ttl">
            <br>
            <input type="file" name="gambar">
            <br>
            <input type="submit" value="Kirim" name="Sign-Up">
    </form>

    <p>Sudah Punya Akun?
        <a href="login.php">LOGIN</a>
    </p>

    
</body>
</html>


