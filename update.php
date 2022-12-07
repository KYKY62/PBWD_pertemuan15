<?php
include "koneksi.php";

$id = $_POST['id_mahasiswa'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];

$sql = "UPDATE mahasiswa SET 
            nama = '$nama',
			jenis_kelamin = '$jenis_kelamin',
			alamat = '$alamat',
			telepon = '$telepon'
			WHERE id_mahasiswa = '$id'";

$result = $connect->query($sql);

header('location:home.php');
