<?php

include_once("../dbkoneksi.php");

$id = $_GET['id'];

$result = mysqli_query($mysqli, "DELETE FROM produk WHERE id=$id");

header("Location:index_produk.php");

?>