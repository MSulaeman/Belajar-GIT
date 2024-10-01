<?php 
include "koneksi.php";
    
$nama = $_GET['nama'];
$nomor = $_GET['nomor'];
$tanggal = $_GET['tanggal'];
    
echo 
"
<h1>Nama = $nama</h1>
<h1>Nomor = $nomor</h1>
<h1>Tanggal = $tanggal</h1>
";


//memasukan data ke database!!
mysqli_query($conn,"INSERT INTO `siswa` (`nama`,`nomor`,`tanggal`) VALUES ('$nama','$nomor','$tanggal')");


?>