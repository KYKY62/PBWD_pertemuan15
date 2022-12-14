<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<link rel="stylesheet" href="utils/style.css">
	<link rel="stylesheet" href="utils/responsive.css">
	<title>Aplikasi CRUD Sederhana</title>
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
	<?php
	include "koneksi.php";

	$no = 1;
	$sql = "SELECT * FROM tb_category WHERE cat_id = $_GET[id] ";

	$result_check = $connect->query($sql);
	$row = mysqli_fetch_array($result_check)
	?>
	<div class="container w-50">
		<p>
			<a class="btn btn-success" href="home.php">Kembali</a>
		</p>

		<table class="table table-bordered table-hover table-responsive ">
			<tr>
				<td style="width:10%;">
					Category ID
				</td>
				<td>
					<?php echo $row['cat_id']; ?>
				</td>
			</tr>
			<tr>
				<td>
					Category Name
				</td>
				<td>
					<?php echo $row['cat_name']; ?>
				</td>
			</tr>
			<tr>
				<td>
					Category Text
				</td>
				<td>
					<?php echo $row['cat_text']; ?>
				</td>
			</tr>

		</table>

	</div>
</body>

</html>