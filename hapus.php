<?php
include "koneksi.php";

$cat_id = $_GET["id"];

$sql_check = "DELETE FROM tb_category WHERE cat_id= '$cat_id'";

$result_check = $connect->query($sql_check);

header('location:home.php');
