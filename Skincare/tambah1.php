<?php 
include "koneksi.php";
    
$id = $_GET['id'];
$kategori = $_GET['kategori'];

    
echo 
"
<h1>Id       = $id</h1>
<h1>Kategori = $kategori</h1>
";


//memasukan data ke database!!
mysqli_query($conn,"INSERT INTO `kategori` (`id`,`kategori`) VALUES ('$id','$kategori')");


?>