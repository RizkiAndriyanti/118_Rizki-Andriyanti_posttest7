<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <h1 class="judul_login">Silahkan Login yaaa!!</h1>
    <div class="form">
        <form action="" method="POST">
                <input type="text" placeholder="Username" name="username">
                <br>
                <input type="password" placeholder="Password" name="pw">
                <br>
                <input type="submit" name="Log-In">
        </form>
    </div>
    <a style="text-decoration:none" href="akun.php"><button class="button1">BUAT AKUN</button></a>
    

</body>
</html>


<?php
    session_start();
    require 'config.php';
    if(isset($_POST['Log-In'])){
        $user = $_POST['username'];
        $pw = $_POST['pw'];

        $pw = md5($pw);

        $query = "SELECT * FROM posttest7 WHERE username = '$username' OR email = '$username' ";
        $result = $db->query($query);
        $row = mysqli_fetch_array($result);
        $user = $row['nama'];

        if($password == $row['pw']){

            $_SESSION['Log-In'] = true;
            echo "
                <script>
                    alert('selamat datang $user');
                    document.location.href ='index.php';
                </script>
            ";
        }else{
            echo "
                <script>
                    alert('username dan pw salah');
                </script>
            ";
        }
        
    }
?>