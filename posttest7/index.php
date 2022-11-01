<?php
    session_start();
    if(!isset($_SESSION['Log-In'])){
        header("Location:login.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POSTTEST 4</title>
    <link rel="stylesheet" href="indeks2.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="headerlogo">
                <img src="gambar/NONTON YUK!!!.png" alt="" width="150">
            </div>
            <div >
                <input type="text" class="headercari" placeholder="Cari" required>
            </div>
        <div class="navbar">
                <div id="navbar-right"> 
                    <a class ="active" href="login.php">LOG-IN</a>
                    <a class="active" href="logout.php">LOG-OUT</a>
                </div>
        <div class="main">
            <div class="container">
                <div class="row">
                    <p id="baru">YANG BARU</p>
                    <div class="column">
                        <img class="demo cursor" src="gambar/1356301783.jpg" style="width: 100%">
                    </div>

                    <div class="column">
                        <img class="demo cursor" src="gambar/mencuri.jpg" style="width: 100%">
                    </div>

                    <div class="column">
                        <img class="demo cursor" src="gambar/miracle.jpg" style="width: 100%">
                    </div>

                    <div class="column">
                        <img class="demo cursor" src="gambar/sayap.jpg" style="width: 100%">
                    </div>
                </div>
            </div>
            
        </div>
        </div>
        <div class="footer">
            <h2 id="glow">GENRE</h2>
            <div class="footer2">
                <a href="aboutme.html"><button  class="button">ABOUT ME</button></a>
                <input type="checkbox" onclick="ubahMode()">
                <script>
                    function ubahMode(){
                        const ubah = document.body;
                        ubah.classList.toggle("dark");
                    }
                </script>
            </div>
            
        </div>
        </div>
        </div>

        <script src="indeks3.js"></script>
        <script src="jquery.js"></script>
</body>
</html>