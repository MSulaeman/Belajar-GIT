<?php 
include "koneksi.php";
    
$id     = $_GET['id'];
$nama   = $_GET['nama'];
$idk    = $_GET['id_kategori'];

    
echo 
"
<h1>Id          = $id</h1>
<h1>nama        = $nama</h1>
<h1>Id Kategori = $idk</h1>
";


//memasukan data ke database!!
mysqli_query($conn,"INSERT INTO `product` (`id`,`nama`,`id_kategori`) VALUES ('$id','$nama','$idk')")


?>