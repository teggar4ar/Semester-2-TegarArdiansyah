<?php

    include_once("../dbkoneksi.php");

    $result = mysqli_query($mysqli, "SELECT * FROM produk ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
</head>
<body>
    <a href="tambah_produk.php">Add Product</a><br/><br/>
    <table width='80%' border=1>
        <tr>
            <th>id</th> <th>kode</th> <th>nama</th> <th>harga_jual</th> <th>harga_beli</th> <th>stok</th> <th>min_stok</th> <th>deskripsi</th> <th>kategori_produk_id</th> <th>action</th>
        </tr>

        <?php

            while($data_produk = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" .$data_produk['id']."</td>";
                echo "<td>" .$data_produk['kode']."</td>";
                echo "<td>" .$data_produk['nama']."</td>";
                echo "<td>" .$data_produk['harga_jual']."</td>";
                echo "<td>" .$data_produk['harga_beli']."</td>";
                echo "<td>" .$data_produk['stok']."</td>";
                echo "<td>" .$data_produk['min_stok']."</td>";
                echo "<td>" .$data_produk['deskripsi']."</td>";
                echo "<td>" .$data_produk['kategori_produk_id']."</td>";
                echo "<td><a href='edit_produk.php?id=$data_produk[id]'>Edit</a> | <a href='delete_produk.php?id=$data_produk[id]'>Delete</a></td></tr>";
            }

        ?>
    </table>
</body>
</html>