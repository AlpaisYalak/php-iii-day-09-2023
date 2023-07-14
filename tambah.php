<?php
 


if(isset($_POST['submit']))
{

$nama_siswa = $_POST['nama_siswa'];
$usia = $_POST['usia'];
$alamat = $_POST['alamat'];
$jk = $_POST['jk'];
$kelas = $_POST['kelas'];

$query = "INSERT INTO `siswa` (`id_siswa`, `nama_siswa`, `alamat`, `usisa`, `kelas`, `jk`) VALUES (NULL, '$nama_siswa', '$$almat', '$usia','$kelas', '$jk');";

$tambah = mysqli_query($koneksi, $query);

echo "
<script>
    alert('data berhasil ditamabah');
    window.location.href = 'index.php';
</script>
";
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah</title>
</head>
<body>
    <h1>Tambah Data</h1>
    <form action="" method="post">
    <label for="nama">nama Siswa</label>
    <input id="nama" type="text" nama="nama_siswa" 
    Placeholder="masukan nama" required>

    <label for="usia">usia</label>
    <input id="usia" type="number" nama="usia" 
    Placeholder="masukan " required>

    <label for="alamat">alamat</label>
    <input id="alamat" type="text" nama="alamat" 
    Placeholder="masukan alamat" required>

    <label for="Jk">Jenis Kelamin</label>
    <input id="jk" type="text" nama="jk" 
    Placeholder="masukan jenis kelamin" required>

    <label for="kelas">kelas</label>
    <input id="kelas" type="text" nama="jk" 
    Placeholder="masukan kelas" required>


    <br></br>
    <button type="submit">Simpan</button>

    </form>
    
</body>
</html>