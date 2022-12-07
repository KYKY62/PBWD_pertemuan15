<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Aplikasi CRUD Sederhana</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="utils/style.css">
	<link rel="stylesheet" href="utils/responsive.css">
</head>

<body>
	<section id="topHeader" class="my-5 ">
		<div>
			<img src="images/logosi4.png" alt="" srcset="" class="logo">
		</div>
		<div class="header">
			<h1>Data Mahasiswa Sistem Informasi 4</h1>
		</div>
		<div class="navigation ">
			<a href="">Home</a>
			<a href="">About</a>
			<a href="">Journey</a>
			<a href="">Member</a>
			<a href="">Galery</a>
			<a href="">Berita</a>
		</div>
	</section>
	<div class="container">
		<div class="row">
			<div class="justify-content-center">

				<div class="navigation-main mb-3">
					<a class="btn btn-success" href="tambah.php">Tambah</a>
					<a class="btn btn-danger" href="index.php">LogOut</a>
				</div>

				<table class="table table-bordered table-hover table-responsive">
					<tr>
						<th>
							ID Mahasiswa
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

					include "koneksi.php";

					$sql_check = "SELECT id_mahasiswa, nama, jenis_kelamin,telepon, alamat FROM  mahasiswa ORDER BY id_mahasiswa ASC";

					$result_check = $connect->query($sql_check);
					while ($row = mysqli_fetch_array($result_check)) {
					?>
						<tr>
							<td>
								<?php echo $row['id_mahasiswa']; ?>
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
								<a class="btn btn-success ms-2 me-2" href="detail.php?id=<?php echo $row['id_mahasiswa']; ?>">Detail</a>
								<a class="btn btn-success  me-2" href="edit.php?id=<?php echo $row['id_mahasiswa']; ?>">Edit</a>
								<a class="btn btn-danger" href="hapus.php?id=<?php echo $row['id_mahasiswa']; ?>">Hapus</a>
							</td>
						</tr>
					<?php
					}
					?>
				</table>
			</div>
		</div>
	</div>
	<!-- Footer -->
	<footer class="footer-section mb-0" id="about">

		<div class="footer-left">
			<img src="images/logosi4.png" alt="">
			<h3>Data Mahasiswa Sistem Informasi 4</h3>

			<p class="footer-company-name">&copy; Copyright <span>Rizky Akbar</span> Si-Four. All Rights
				Reserved.</p>
		</div>

		<div class="footer-right">
			<div>
				<p style="margin: 10px; line-height: 1.5;">Alamat :<span> JL TUNTUNGAN KAMPUS UINSU (20236)</span>
				</p>
			</div>

			<div class="telp">
				<p>
					<span>TELEPON:</span>
					061-80089992
				</p>
			</div>
			<div class="email">
				<p>
					<a href="" class="email">
						<span>Email :</span>
						SiFour@gmail.com
					</a>
				</p>
			</div>
		</div>

		</div>
	</footer>
	<!-- Akhir Footer -->
</body>

</html>