<html>
<head>
    <title>Add Product</title>
</head>
 
<body>
    <a href="index_produk.php">Go to Home</a>
    <br/><br/>
 
    <form action="tambah_produk.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>kode</td>
                <td><input type="text" name="kode"></td>
            </tr>
            <tr> 
                <td>nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr> 
                <td>harga_jual</td>
                <td><input type="text" name="harga_jual"></td>
            </tr>
            <tr> 
                <td>harga_beli</td>
                <td><input type="text" name="harga_beli"></td>
            </tr>
            <tr> 
                <td>stok</td>
                <td><input type="number" name="stok"></td>
            </tr>
            <tr> 
                <td>min_stok</td>
                <td><input type="number" name="min_stok"></td>
            </tr>
            <tr> 
                <td>Deskripsi</td>
                <td><input type="textfield" name="deskripsi"></td>
            </tr>
            <tr> 
                <td>kategori_produk_id</td>
                <td><input type="text" name="kategori_produk_id"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
    
    <?php
 
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $kode = $_POST['kode'];
        $nama = $_POST['nama'];
        $harga_jual = $_POST['harga_jual']; 
        $harga_beli = $_POST['harga_beli'];
        $stok = $_POST['stok'];
        $min_stok = $_POST['min_stok'];
        $deskripsi = $_POST['deskripsi'];
        $kategori_produk_id = $_POST['kategori_produk_id'];
        
        
        
        // include database connection file
        include_once("../dbkoneksi.php");
                
        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO produk (kode,nama,harga_jual,harga_beli,stok,min_stok,deskripsi,kategori_produk_id) VALUES('$kode','$nama','$harga_jual','$harga_beli','$stok','$min_stok','$deskripsi','$kategori_produk_id')");
        
        // Show message when user added
        echo "User added successfully. <a href='index_produk.php'>View Users</a>";
    }
    ?>
</body>
</html>