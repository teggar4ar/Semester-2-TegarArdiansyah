<?php

    include_once("../dbkoneksi.php");

    $result = mysqli_query($mysqli, "SELECT * FROM pesanan ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesanan</title>
</head>
<body>
    <a href="tambah_pesanan.php">Add Orders</a><br/><br/>
    <table width='80%' border=1>
        <tr>
            <th>id</th> <th>tanggal</th>
            <th>nama_pemesan</th> <th>alamat_pemesan</th> <th>no_hp</th> <th>email</th> <th>jumlah_pesanan</th> <th>deskripsi</th> <th>produk_id</th> <th>action</th>
        </tr>

        <?php

            while($data_pesanan = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" .$data_pesanan['id']."</td>";
                echo "<td>" .$data_pesanan['tanggal']."</td>";
                echo "<td>" .$data_pesanan['nama_pemesan']."</td>";
                echo "<td>" .$data_pesanan['alamat_pemesan']."</td>";
                echo "<td>" .$data_pesanan['no_hp']."</td>";
                echo "<td>" .$data_pesanan['email']."</td>";
                echo "<td>" .$data_pesanan['jumlah_pesanan']."</td>";
                echo "<td>" .$data_pesanan['deskripsi']."</td>";
                echo "<td>" .$data_pesanan['produk_id']."</td>";
                echo "<td><a href='edit_pesanan.php?id=$data_pesanan[id]'>Edit</a> | <a href='delete_pesanan.php?id=$data_pesanan[id]'>Delete</a></td></tr>";
            }

        ?>
    </table>
</body>
</html>