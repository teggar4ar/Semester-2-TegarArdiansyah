<html>
<head>
    <title>Buat Pesanan</title>
    
</head>
 
<body>
    <a href="../../index.html">Go to Home</a>
    <br/>
    <p>Isilah form dibawah ini dengan benar! <br>
    Pada kolom produk id, isilah dengan angka 11</p>
    <br/>
 
    <form action="tambah_pesanan.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Name</td>
                <td><input type="text" name="nama_pemesan"></td>
            </tr>
            <tr> 
                <td>Date</td>
                <td><input type="date" name="tanggal"></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr> 
                <td>Phone number</td>
                <td><input type="text" name="no_hp" require></td>
            </tr>
            <tr> 
                <td>Address</td>
                <td><input type="text" name="alamat_pemesan"></td>
            </tr>
            <tr> 
                <td>Quantity</td>
                <td><input type="number" name="jumlah_pesanan"></td>
            </tr>
            <tr> 
                <td>Deskripsi</td>
                <td><input type="text" name="deskripsi"></td>
            </tr>
            <tr> 
                <td>Produk Id</td>
                <td><input type="text" name="produk_id"></td>
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
        $nama_pemesan = $_POST['nama_pemesan'];
        $tanggal = $_POST['tanggal'];
        $email = $_POST['email']; 
        $no_hp = $_POST['no_hp'];
        $alamat_pemesan = $_POST['alamat_pemesan'];
        $jumlah_pesanan = $_POST['jumlah_pesanan'];
        $deskripsi = $_POST['deskripsi'];
        $produk_id = $_POST['produk_id'];
        
        
        
        // include database connection file
        include_once("../dbkoneksi.php");
                
        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO pesanan (nama_pemesan,tanggal,email,no_hp,alamat_pemesan,jumlah_pesanan,deskripsi,produk_id) VALUES('$nama_pemesan','$tanggal','$email','$no_hp','$alamat_pemesan','$jumlah_pesanan','$deskripsi','$produk_id')");
        
        // Show message when user added
        echo "Pesanan anda berhasil. <a href='../../index.html'>Home</a>";
    }
    ?>
</body>
</html>