<?php
// include database connection file
include_once("../dbkoneksi.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
    $id = $_POST['id'];
    
    $tanggal = $_POST['tanggal'];
    $nama_pemesan = $_POST['nama_pemesan'];
    $alamat_pemesan = $_POST['alamat_pemesan'];
    $no_hp = $_POST['no_hp'];
    $email = $_POST['email'];
    $jumlah_pesanan = $_POST['jumlah_pesanan'];
    $deskripsi = $_POST['deskripsi'];
    $produk_id = $_POST['produk_id'];
        
    // update user data
    $result = mysqli_query($mysqli, "UPDATE pesanan SET tanggal='$tanggal', nama_pemesan='$nama_pemesan', alamat_pemesan='$alamat_pemesan', no_hp='$no_hp', email='$email', jumlah_pesanan='$jumlah_pesanan', deskripsi='$deskripsi', produk_id='$produk_id'  WHERE id=$id");
    
    // Redirect to homepage to display updated user in list
    header("Location: index_produk.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM pesanan WHERE id=$id");
 
while($data_pesanan = mysqli_fetch_array($result))
{
    $tanggal = $data_pesanan['tanggal'];
    $nama_pemesan = $data_pesanan['nama_pemesan'];
    $alamat_pemesan = $data_pesanan['alamat_pemesan'];
    $no_hp = $data_pesanan['no_hp'];
    $email = $data_pesanan['email'];
    $jumlah_pesanan = $data_pesanan['jumlah_pesanan'];
    $deskripsi = $data_pesanan['deskripsi'];
    $produk_id = $data_pesanan['produk_id'];
}
?>
<html>
<head>	
    <title>Edit Order Data</title>
</head>
    
<body>
    <a href="index_pesanan.php">Home</a>
    <br/><br/>
    
    <form name="update_user" method="post" action="index_pesanan.php">
        <table border="0">
            <tr> 
                <td>Tanggal</td>
                <td><input type="date" name="tanggal" value=<?php echo $tanggal;?>></td>
            </tr>
            <tr> 
                <td>Nama Pemesan</td>
                <td><input type="text" name="nama_pemesan" value=<?php echo $nama_pemesan;?>></td>
            </tr>
            <tr> 
                <td>Alamat pemesan</td>
                <td><input type="text" name="alamat_pemesan" value=<?php echo $alamat_pemesan;?>></td>
            </tr>
            <tr> 
                <td>No HP</td>
                <td><input type="text" name="no_hp" value=<?php echo $no_hp;?>></td>
            </tr>
            <tr> 
                <td>email</td>
                <td><input type="email" name="email" value=<?php echo $email;?>></td>
            </tr>
            <tr> 
                <td>jumlah Pesanan</td>
                <td><input type="text" name="jumlah_pesanan" value=<?php echo $jumlah_pesanan;?>></td>
            </tr>
            <tr> 
                <td>Deskripsi</td>
                <td><input type="text" name="deskripsi" value=<?php echo $deskripsi;?>></td>
            </tr>
            <tr> 
                <td>Id Produk</td>
                <td><input type="text" name="produk_id" value=<?php echo $produk_id;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>