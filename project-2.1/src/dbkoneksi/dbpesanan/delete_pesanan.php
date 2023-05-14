<?php

include_once("../dbkoneksi.php");

$id = $_GET['id'];

$result = mysqli_query($mysqli, "DELETE FROM pesanan WHERE id=$id");

header("Location:index_pesanan.php");

?>