<?php

    include_once("../dbkoneksi.php");

    $result = mysqli_query($mysqli, "SELECT * FROM kategori_produk ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <a href="tambah_kategori.php">Add Category</a><br/><br/>
    <table width='80%' border=1 class="table">
        <tr>
            <th>id</th> <th>nama</th> <th>action</th>
        </tr>

        <?php

            while($data_kategori = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" .$data_kategori['id']."</td>";
                echo "<td>" .$data_kategori['nama']."</td>";
                echo "<td><a href='edit_kategori.php?id=$data_kategori[id]'>Edit</a> | <a href='delete_kategori.php?id=$data_kategori[id]'>Delete</a></td></tr>";
            }

        ?>
    </table>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
</body>
</html>