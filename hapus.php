<?php
include "koneksi.php";

$id_mahasiswa = $_GET["id"];

$sql_check = "DELETE FROM mahasiswa WHERE id_mahasiswa= '$id_mahasiswa'";

$result_check = $connect->query($sql_check);

header('location:home.php');
