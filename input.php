<?php

include "koneksi.php";

$cat_name = $_POST['cat_name'];
$cat_text = $_POST['cat_text'];

$sql_check = "INSERT INTO tb_category SET
			  cat_name = '$cat_name',
			  cat_text = '$cat_text'";

$result_check = $connect->query($sql_check);
header('location:home.php');
