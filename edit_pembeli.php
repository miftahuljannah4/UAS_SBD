<?php include("config.php");
 
if(isset($_POST['update']))
{	
	$id = $_POST['id_pmb'];
	
    $id_pmb = $_POST['id_pmb'];
	$nama_pmb=$_POST['nama_pmb'];
	$no_tlf=$_POST['no_tlf'];
	$alamat=$_POST['alamat'];
		
	$result = mysqli_query($conn, 
	"UPDATE pembeli SET id_pmb='$id_pmb',nama_pmb='$nama_pmb',no_tlf='$no_tlf', alamat='$alamat' WHERE id_pmb=$id");
	
	header("Location: pembeli.php");
}
?>
<?php
$id = $_GET['id'];
 
$result = mysqli_query($conn, "SELECT * FROM pembeli WHERE id_pmb=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$id_pmb = $user_data['id_pmb'];
	$nama_pmb = $user_data['nama_pmb'];
	$no_tlf = $user_data['no_tlf'];
    $alamat = $user_data['alamat'];
}
?>

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
            <h1><center>DATA PEMBELI</center></h1>
        </header>
        <ul>
            <nav>
                <a class="btn btn-info" onclick="return confirm('Batal mengubah data?');" href="pembeli.php">KEMBALI</a>
            </nav>
        <br>
			<form name="update_user" method="post" action="edit_pembeli.php">
				<table border="0">
					<tr> 
						<td><b>ID Pembeli</b></td>
						<td></td>
						<td><input type="text" name="id_pmb" value=<?php echo $id_pmb;?>></td>
					</tr>
						<td><b>Nama Pembeli</b></td>
						<td></td>
						<td><input type="text" name="nama_pmb" value=<?php echo $nama_pmb;?>></td>
					</tr>
						<td><b>No Telepon</b></td>
						<td></td>
						<td><input type="text" name="no_tlf" value=<?php echo $no_tlf;?>></td>
					</tr>
						<td><b>Alamat</b></td>
						<td></td>
						<td><input type="text" name="alamat" value=<?php echo $alamat;?>></td>
					</tr>
						<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
						<td><input class="btn btn-info" type="submit" name="update" value="Update"></td>
					</tr>
				</table>
			</form>
</body>
<br><br>
    <ul>
	<footer>
        <p>&copy; 2021 Sistem Basis Data, Teknik Informatika, Universitas Pelita Bangsa</p>
    </footer>
    </ul>
    <br>
</html>