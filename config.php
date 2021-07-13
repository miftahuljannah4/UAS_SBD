<?php 
    $host = "localhost"; 
    $user = "root"; 
    $pass = ""; 
    $db = "jannah_311910740"; 

    $conn = mysqli_connect($host, $user, $pass, $db); 
    if ($conn == false) 
    {echo "Koneksi ke server gagal."; 
        die(); 
        } else 
?>
