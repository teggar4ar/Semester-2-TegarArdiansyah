<?php
// include database connection file
include_once("../dbkoneksi.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
    $id = $_POST['id'];
    
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $harga_jual = $_POST['harga_jual'];
    $harga_beli = $_POST['harga_beli'];
    $stok = $_POST['stok'];
    $min_stok = $_POST['min_stok'];
    $deskripsi = $_POST['deskripsi'];
    $kategori = $_POST['kategori_produk_id'];
        
    // update user data
    $result = mysqli_query($mysqli, "UPDATE produk SET kode='$kode', nama='$nama', harga_jual='$harga_jual', harga_beli='$harga_beli', stok='$stok', min_stok='$min_stok', deskripsi='$deskripsi', kategori_produk_id='$kategori'  WHERE id=$id");
    
    // Redirect to homepage to display updated user in list
    header("Location: index_produk.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM produk WHERE id=$id");
 
while($data_produk = mysqli_fetch_array($result))
{
    $kode = $data_produk['kode'];
    $nama = $data_produk['nama'];
    $harga_jual = $data_produk['harga_jual'];
    $harga_beli = $data_produk['harga_beli'];
    $stok = $data_produk['stok'];
    $min_stok = $data_produk['min_stok'];
    $deskripsi = $data_produk['deskripsi'];
    $kategori = $data_produk['kategori_produk_id'];
}
?>
<html>
<head>	
    <title>Edit Product Data</title>
</head>
    
<body>
    <a href="index_produk.php">Home</a>
    <br/><br/>
    
    <form name="update_user" method="post" action="edit_produk.php">
        <table border="0">
            <tr> 
                <td>kode</td>
                <td><input type="text" name="kode" value=<?php echo $kode;?>></td>
            </tr>
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="nama" value=<?php echo $nama;?>></td>
            </tr>
            <tr> 
                <td>Harga Jual</td>
                <td><input type="text" name="harga_jual" value=<?php echo $harga_jual;?>></td>
            </tr>
            <tr> 
                <td>Harga Beli</td>
                <td><input type="text" name="harga_beli" value=<?php echo $harga_beli;?>></td>
            </tr>
            <tr> 
                <td>Stok</td>
                <td><input type="text" name="stok" value=<?php echo $stok;?>></td>
            </tr>
            <tr> 
                <td>Minimal Stok</td>
                <td><input type="text" name="min_stok" value=<?php echo $min_stok;?>></td>
            </tr>
            <tr> 
                <td>Deskripsi</td>
                <td><input type="text" name="deskripsi" value=<?php echo $deskripsi;?>></td>
            </tr>
            <tr> 
                <td>Kategori</td>
                <td><input type="text" name="kategori_produk_id" value=<?php echo $kategori;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>