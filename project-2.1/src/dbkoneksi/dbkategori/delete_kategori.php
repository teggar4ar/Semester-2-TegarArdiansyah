<?php

include_once("../dbkoneksi.php");

$id = $_GET['id'];

$result = mysqli_query($mysqli, "DELETE FROM kategori_produk WHERE id=$id");

header("Location:index_kategori.php");

?>