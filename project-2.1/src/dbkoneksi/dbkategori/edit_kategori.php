<?php
// include database connection file
include_once("../dbkoneksi.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
    $id = $_POST['id'];
    
    $nama = $_POST['nama'];

    // update user data
    $result = mysqli_query($mysqli, "UPDATE kategori_produk SET nama='$nama' WHERE id=$id") or die(mysqli_error($mysqli));
    
    // Redirect to homepage to display updated user in list
    header("Location: index_kategori.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM kategori_produk WHERE id=$id") or die(mysqli_error($mysqli));
 
while($data_kategori = mysqli_fetch_array($result))
{
    $nama = $data_kategori['nama'];
}
?>
<html>
<head>	
    <title>Edit Category</title>
</head>
    
<body>
    <a href="index_kategori.php">Home</a>
    <br/><br/>
    
    <form name="update_user" method="post" action="index_kategori.php">
        <table border="0">
            <tr>
                <td>Category</td>
                <td><input type="text" name="kategori" value=<?php echo $nama;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="update"></td>
            </tr>
        </table>
    </form>
</body>
</html>