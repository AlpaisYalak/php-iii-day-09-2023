<?php
require_once('conn.php');
 



$datas = mysqli_query($koneksi, "SELECT * FROM siswa");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud PHP</title>
</head>
<style>
    table, th, tr, td{
        border : 1px solid black;
        border-collapse : collapse;
    }
</style>
<body>
    <h1>Data Siswa</h1>
    <a href="tambah.php">Tambah Data</a>
    <br><br>
    <table>
        <tr>
        <th>#</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Usia</th>
        <th>Aksi</th>

        </tr>
        <?php foreach($datas as $data) : ?>
        <tr>
            <td>1</td>
            <td> <?=$data['nama_siswa']?></td>
            <td> <?=$data['nama_siswa']?></td>
            <td> <?=$data['usia']?></td>
             
            <td>
                <a href="">Ubah</a>
                <a href="">Detail</a>
                <a href="">Hapus</a>
            </td>
        </tr>
        <?php  endforeach ?> 
    </table>
</body>
</html>