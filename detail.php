 <html>
<title>Aplikasi CRUD Sederhana</title>
<head>
<link rel="stylesheet" href="style/bootstrap.min.css" />
</head>
<body>


<?php
	include"koneksi.php";
	$no = 1;
	$data = mysqli_query ($koneksi, " select 
											id_mahasiswa,
											nama,
											jenis_kelamin,
											telepon,
											alamat
									  from 
									  mahasiswa 
									  where id_mahasiswa = $_GET[id]");
	$row = mysqli_fetch_array ($data);
	
?>
<div class="container" style="margin-top:8%">
	<div class="row">
		<div class="col-md-8 col-md-offset-2"> 
			<p>
				<center>
					<h2>Aplikasi Crud Sederhana</h2>
					Oleh : <a href="https://www.smkhasankafrawi.web.id" target="_blank">SMK HK Keren</a>
				</center>
			</p>
			<br>
			<p>
				<a class="btn btn-success" href="index.php">Kembali</a>
			</p>
			<table class="table table-stripped">
				<tr>
					<td style="width:10%;">
						Nama 
					</td>
					<td>
						: <?php echo $row['nama']; ?>
					</td>
				</tr>
				<tr>					
					<td>
						Telepon
					</td>
					<td>
						: <?php echo $row['telepon']; ?>
					</td>
				</tr>
				<tr>		
					<td>
						Alamat
					</td>
					<td>
						: <?php echo $row['alamat']; ?>
					</td>
				</tr>
			</table>
		</div>
	</div>
	<p>
	<center>Copyright @ 2019 by : <a href="https://www.smkhasankafrawi.web.id" target="_blank">SMK HK Keren</a> All rights reserved.</center>
	</p>
</div>
</body>
</html>