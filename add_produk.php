<?php include('config.php');?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Sistem Penjualan</title>
        <link rel="stylesheet" href="style2.css">
        <title><?= $title; ?></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    </head>
    <br>
    <body>
        <div id="container">
        <header>
            <h1><center>DATA PRODUK</center></h1>
        </header>
        <ul>
            <nav>
                <a class="btn btn-info" href="produk.php">KEMBALI</a>
            </nav>
        <div class="main">
            <form action="add_produk.php" method="post" name="form1">
                <table border = "0" >
                    <tr> 
                        <div class="input">
                            <td><b>Nama Produk</b></td>
                            <td></td>
                            <td><input type="text" name="nama_prd"></td>
                        </div>
                    </tr>
                        <div class="input">
                            <td><b>Harga Produk</b></td>
                            <td></td>
                            <td><input type="text" name="harga_prd"></td>
                        </div>
                    </tr>
                        <div class="input">
                            <td><b>Stok Produk</b></td>
                            <td></td>
                            <td><input type="text" name="stok_prd"></td>
                        </div>
                    </tr>
                    <tr> 
                        <td><input type="submit" class="btn btn-info" name="Submit" value="Tambah Produk"></td>
                    </tr>
                </table>
            </form>
        </div>
        
	<?php
 
        if(isset($_POST['Submit'])) {
            $nama_prd = $_POST['nama_prd'];
            $harga_prd = $_POST['harga_prd'];
            $stok_prd = $_POST['stok_prd'];
            
            include("config.php");
                    
            $result = mysqli_query($conn, "INSERT INTO produk(nama_prd, harga_prd, stok_prd) 
            VALUES('$nama_prd','$harga_prd','$stok_prd')");
            
            echo "User added successfully. <a href='produk.php'>View Users</a>";
        }
	?>
</body>
<br><br>
    <ul>
    <footer>
        <p>&copy; 2021 Sistem Basis Data, Teknik Informatika, Universitas Pelita Bangsa</p>
    </footer>
    </ul>
    <br>
</html>