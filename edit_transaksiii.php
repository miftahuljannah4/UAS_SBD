<?php include("config.php");?>
 <?php
if(isset($_POST['update']))
{	
	$id = $_POST['id_trs'];
	
    $id_trs = $_POST['id_trs'];
    $id_prd = $_POST['id_prd'];
    $id_pmb = $_POST['id_pmb'];
	$jml_prd=$_POST['jml_prd'];
	$harga_prd= $_POST['harga_prd'];
	$total_hrg= $_POST['total_hrg'];
	$tgl= $_POST['tgl'];
		
	$result = mysqli_query($conn, 
	"UPDATE transaksii SET id_trs='$id_trs',id_prd='$id_prd',id_pmb='$id_pmb', jml_prd='$jml_prd', harga_prd='$harga_prd', total_hrg='$total_hrg', tgl='$tgl' WHERE id_trs=$id");
	
	header("Location: transaksi.php");
}
?>
<?php
$id = $_GET['id'];
 
$result = mysqli_query($conn, "SELECT * FROM transaksii WHERE id_trs=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$id_trs = $user_data['id_trs'];
    $id_prd = $user_data['id_prd'];
    $id_pmb = $user_data['id_pmb'];
	$jml_prd= $user_data['jml_prd'];
	$harga_prd= $user_data['harga_prd'];
	$total_hrg= $user_data['total_hrg'];
	$tgl= $user_data['tgl'];
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
            <h1><center>Data Transaksi</center></h1>
        </header>
        <ul>
            <nav>
                <a class="btn btn-info" href="transaksii.php">KEMBALI</a>
            </nav>
        <br>
	<form name="update_user" method="post" action="edit_transaksi.php">
		<table border="0">
			<tr> 
				<td><b>ID Transaksi</b></td>
				<td><input type="text" name="id_trs" value=<?php echo $id_trs;?>></td>
			</tr>
            <tr> 
				<td><b>ID Produk</b></td>
				<td><input type="text" name="id_prd" value=<?php echo $id_prd;?>></td>
			</tr>
			<tr> 
				<td><b>ID Pembeli</b></td>
				<td><input type="text" name="id_pmb" value=<?php echo $id_pmb;?>></td>
			</tr>
			<tr> 
				<td><b>Jumlah Produk</b></td>
				<td><input type="text" name="jml_prd" value=<?php echo $jml_prd;?>></td>
			</tr>
			<tr> 
				<td><b>Harga</b></td>
				<td><input type="text" name="harga_prd" value=<?php echo $harga_prd;?>></td>
			</tr>
			<tr> 
				<td><b>Total</b></td>
				<td><input type="text" name="total_hrg" value=<?php echo $total_hrg;?>></td>
			</tr>
			<tr> 
				<td><b>Tanggal Prmbayaran</b></td>
				<td><input type="date" name="tgl" value=<?php echo $tgl;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input class="btn btn-info" type="submit" name="update" value="update"></td>
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