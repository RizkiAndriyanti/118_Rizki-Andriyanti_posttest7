<?php 
    require 'config.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $result = mysqli_query($db, "SELECT * FROM posttest7 WHERE id = '$id' ");
        $row = mysqli_fetch_array($result);
    }

    if(isset($_POST['Sign-Up'])){
        $nama = $_POST['nama'];
        $pw = $_POST['pw'];
        $email = $_POST['email'];
        $nohp = $_POST['nohp'];
        $ttl = $_POST['ttl'];

        $update = mysqli_query($db, "UPDATE posttest7 SET nama='$nama', pw='$pw', email='$email', nohp='$nohp', ttl='$ttl' WHERE id='$id'");

        if($update){
            header("Location:akun.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT AKUN</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
<h1 class="judul_buatakun">Silahkan  Buat Akunnyaaa!!</h1>
    <form class="form" action="" method="post">
            <input type="text" placeholder="Name" name="nama">
            <br>
            <input type="password" placeholder="Password" name="pw">
            <br>
            <input type="email" placeholder="Email"  name="email">
            <br>
            <input type="text" placeholder="Nomor Telpon" name="nohp">
            <br>
            <input type="date" placeholder="Tanggal Lahir Kamu" name="ttl">
            <input type="submit" value="Kirim" name="Sign-Up">
    </form>

</body>
</html>