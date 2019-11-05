<html>
<title>Aplikasi CRUD Sederhana</title>
<head>
<link rel="stylesheet" href="style/bootstrap.min.css" />
</head>
<body>

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
				<a class="btn btn-primary" href="tambah.php">Tambah</a>
			</p>
			<table class="table table-bordered">
				<tr>
					<th>
						No 
					</th>
					<th>
						Nama 
					</th>
					<th>
						Jenis Kelamin
					</th>
					<th>
						Telepon
					</th>
					<th>
						Alamat
					</th>
					<th>
						Opsi
					</th>
				</tr>
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
														  order by id_mahasiswa DESC");
						while ($row = mysqli_fetch_array ($data))
						{
					?>
				<tr>
					<td>
						<?php echo $no++; ?>
					</td>
					<td>
						<?php echo $row['nama']; ?>
					</td>
					<td>
						<?php echo $row['jenis_kelamin']; ?>
					</td>
					<td>
						<?php echo $row['telepon']; ?>
					</td>
					<td>
						<?php echo $row['alamat']; ?>
					</td>
					<td>
						<a href="detail.php?id=<?php echo $row['id_mahasiswa']; ?>">Detail</a> |
						<a href="edit.php?id=<?php echo $row['id_mahasiswa']; ?>">Edit</a> |
						<a href="hapus.php?id=<?php echo $row['id_mahasiswa']; ?>">Hapus</a>
					</td>
				</tr>
				<?php
					}
				?>
			</table>
		</div>
	</div>
	<p>
	<center>Copyright @ 2019 by : <a href="https://www.smkhasankafrawi.web.id" target="_blank">SMK HK Keren</a> All rights reserved.</center>
	</p>
</div>
</body>
</html>