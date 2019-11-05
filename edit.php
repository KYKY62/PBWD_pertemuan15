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
			
                                    <form role="form" method="post" action="update.php">
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input type="hidden" name="id_mahasiswa" value="<?php echo $row['id_mahasiswa'] ; ?>">
                                            <input class="form-control" name="nama" value="<?php echo $row['nama'] ; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Jenis Kelamin</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="jenis_kelamin" value="Laki-laki"  <?php if($row['jenis_kelamin']=='Laki-laki'){ ; ?> checked <?php } ?>>Laki-laki
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="jenis_kelamin" value="Perempuan"  <?php if($row['jenis_kelamin']=='Perempuan'){ ; ?> checked <?php } ?>>Perempuan
                                                </label>
                                            </div> 
                                        </div>
                                        <div class="form-group">
                                            <label>Telepon</label>
                                            <input class="form-control" name="telepon"  value="<?php echo $row['telepon'] ; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea name="alamat" class="form-control" rows="3"><?php echo $row['alamat'] ; ?></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary pull-right">Simpan</button> 
                                        <a href="index.php" class="btn btn-success pull-right" style="margin-right:1%;">Batal</a>
                                    </form>
		</div>
	</div>
	<p>
	<center>Copyright @ 2019 by : <a href="https://www.smkhasankafrawi.web.is" target="_blank">SMK HK Keren</a> All rights reserved.</center>
	</p>
</div>
</body>
</html>