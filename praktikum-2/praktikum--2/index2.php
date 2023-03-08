<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        div {
            width: 500px;
            background-color: salmon;
            margin: 20px auto;
        }
    </style>

</head>
<body>
    <div class="container">
    <h4>
    <?php

    $_nama = $_GET['nama'];
    $_matkul = $_GET['matkul'];
    $_uts = $_GET['uts'];
    $_uas = $_GET['uas'];
    $_tugas = $_GET['tugas'];

    
    echo 'Nama Mahasiswa : '. $_nama;
    echo '<br> Mata Kuliah : '. $_matkul;
    echo '<br> Nilai UTS : '. $_uts;
    echo '<br> Nilai UAS : '. $_uas;
    echo '<br> Tugas / Praktikum : '. $_tugas;

    ?>
    </h4>
    </div>
</body>
</html>