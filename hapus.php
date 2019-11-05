<?php
include"koneksi.php";


$query = "DELETE FROM mahasiswa 
							WHERE id_mahasiswa ='$_GET[id]'
								";

mysqli_query($koneksi, $query)
or die ("Gagal Perintah SQL".mysql_error());
header('location:index.php');

?>

