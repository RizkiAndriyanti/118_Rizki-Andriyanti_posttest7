<?php

#diperlukan jika sumber beberapa syntax berada di file lain
require 'config.php';

#sambungan ke formulir.php
if(isset($_POST['Sign-Up'])){
    $nama = $_POST['nama'];
    $pw = $_POST['pw'];
    $konfirm = $_POST['konfirmasi'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $nohp = $_POST['nohp'];
    $ttl = $_POST['ttl'];

    $gambar = $_FILES['gambar']['name'];
    $x = explode('.', $gambar);
    $ekstensi = strtolower(end($x));

    $newgambar = "$nama.$ekstensi";
    $tmp = $_FILES['gambar']['tmp_name'];

    $user = $db->query("SELECT * FROM posttest7 WHERE username='$username'");
    $num_user = mysqli_num_rows($user);

    if($num_user > 0){
        echo"
            <script>
                alert('username telah digunakan');
            </script>
            ";
    }else{
        if($pw == $konfirm){
            // $pw = password_hash($pw, PASSWORD_DEFAULT);
            $pw = md5($pw);

            if (move_uploaded_file($tmp, 'gambar/'.$newgambar)){
                $query = "INSERT INTO posttest7 (nama,pw,email,nohp,ttl,username,gambar) VALUES ('$nama','$pw','$email','$nohp','$ttl','$username','$newgambar')";
                $result = $db->query($query);
        
                #jika pengiriman berhasil
                if($result){
                    echo "<script> alert('Data Berhasil Dikirim');</script>";
                    header("Location:login.php");
                } else { # jika pengiriman gagal
                    echo "Sending Fail!";
                }
            }else{
                echo "
                        <script>
                            alert('Registrasi Gagal');
                        </script>
                    "; 
            }
        }else{
            echo"
                <script>
                    alert('Konfirmasi Password Salah');
                </script>
                ";
        }
    }

    
}

?>