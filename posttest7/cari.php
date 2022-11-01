<?php
require 'config.php';

if(isset($_POST['cari'])){
    $query = mysqli_query($db, "SELECT * FROM posttest7 WHERE nama LIKE '%".
    $_POST['cari']. "%'");

    echo "
        <script>
            alert('Data Ada');
            document.location.href ='akun.php';
        </script>
    ";
}else{
    echo "
        <script>
            alert('Data Tidak Ada');
        </script>
    ";
}

?>