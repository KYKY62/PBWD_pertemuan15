<?php
include "koneksi.php";

$id = $_POST['cat_id'];
$nama = $_POST['cat_name'];
$telepon = $_POST['cat_text'];

$sql = "UPDATE tb_category SET 
            cat_name = '$nama',
			cat_text = '$telepon'
			WHERE cat_id = '$id'";

$result = $connect->query($sql);

header('location:home.php');
