<?php

// Jika belum mengisi Form, maka tidak bisa mengakses alamat hasil
if (!isset($_POST['submit'])) {
    header ("Location: index.php");
    exit;
}


// Menyimpan inputan User kedalam variabel
$_nama = $_POST['nama'];
$_matkul = $_POST['matkul'];
$_uts = $_POST['uts'];
$_uas = $_POST['uas'];
$_tugas = $_POST['tugas'];


// Menentukan Nilai Akhir
$_nilai_akhir = ($_uts + $_uas + $_tugas) /3;


// Mengambil dan menjalankan script di library fungsi utk mencetak kelulusan dan grade
require_once ('libfungsi.php');

$_nilai = $_nilai_akhir;
?>


<!-- HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-12 text-center">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">NO</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Mata Kuliah</th>
                        <th scope="col">UTS</th>
                        <th scope="col">UAS</th>
                        <th scope="col">Tugas / Praktikum</th>
                        <th scope="col">Nilai Akhir</th>
                        <th scope="col">Grade</th>
                        <th scope="col">Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td> <?= $_nama  ?> </td>
                            <td> <?= $_matkul  ?> </td>
                            <td> <?=  $_uts ?> </td>
                            <td> <?= $_uas  ?> </td>
                            <td> <?= $_tugas  ?> </td>
                            <td> <?= number_format($_nilai_akhir,2,',','.')  ?> </td>
                            <td> <?= grade ($_nilai)  ?> </td>
                            <td> <?= kelulusan ($_nilai)  ?> </td>
                        </tr>
                    </tbody>
                    </table>
            </div>
        </div>
    </div>
</body>
</html>

