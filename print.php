<?php include("config.php");?>
<!DOCTYPE html>
<html>
	<head>
		<title>Laporan</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"><meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
    <br>
		<header>
    <h1><center>Data pembayaran pembeli</center></h1>
    <p>&nbsp;</p>
		</header>
		<div class='container' style='margin-top:70px'>
			<div class='row' style='min-height:520px'>
				<div class='col-md-12'>
					<div class='panel panel-success'>					
						<div class='panel-heading'>Pembayaran Transaksi</div>
            <table class="table table-hover table-bordered">
							  <thead>
								<tr>
								  <th><center>ID</center></th>
								  <th><center>ID</center></th>
								  <th><center>ID</center></th>
								  <th><center>Jumlah</center></th>
								  <th><center>Harga</center></th>
								  <th><center>Total</center></th>
								  <th><center>Tanggal</center></th>
								</tr>
							  </thead>
							  <tbody> 
                  <?php
                    include 'config.php';
                    $sql = 'SELECT * FROM  transaksi';
                    $query = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_array($query))
                    {
                        ?>
                    <tbody>
                        <tr>
                            <td><center><?php echo $row['id_trs']?></center></td>
                            <td><center><?php echo $row['id_prd']?></center></td>
                            <td><center><?php echo $row['id_pmb']?></center></td>
                            <td><center><?php echo $row['jml_prd']?></center></td>
                            <td><center><?php echo $row['harga_prd']?></center></td>
                            <td><center><?php echo $row['total_hrg']?></center></td>
                            <td><center><?php echo $row['tgl']?></center></td>
                        </tr>
                    </tbody>
                    <script>
                      window.print();
                    </script>
                    <?php 
                    }
                  ?>
                </tbody>
              </table>
                          <div class='pull-right'>
                          <br><br><br>
                            Cikarang Timur, 03 juli 2021 <br>
                            <b><center>Manager</center></b>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                                          <p>&nbsp;</p>
                            <b><center>MIFTAHUL JANNAH</center></b>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>