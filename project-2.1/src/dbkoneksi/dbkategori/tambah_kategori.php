<html>
<head>
    <title>Add Category</title>
</head>
 
<body>
    <a href="index_kategori">Go to Category list</a>
    <br/><br/>
 
    <form action="tambah_kategori.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>nama</td>
                <td><input type="text" name="nama"></td>
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
        $nama = $_POST['nama'];
        
        
        
        // include database connection file
        include_once("../dbkoneksi.php");
                
        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO kategori_produk (nama) VALUES('$nama')");
        
        // Show message when user added
        echo "User added successfully. <a href='index_kategori.php'>Show Category list</a>";
    }
    ?>
</body>
</html>